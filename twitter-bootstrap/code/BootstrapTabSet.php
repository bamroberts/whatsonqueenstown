<?php
/**
 * Defines a set of tabs in a form.
 * The tabs are build with our standard tabstrip javascript library.  
 * By default, the HTML is generated using FieldHolder.
 * 
 * <b>Usage</b>
 * 
 * <code>
 * new TabSet(
 * 	$name = "TheTabSetName",
 * 	new Tab(
 * 		$title='Tab one',
 * 		new HeaderField("A header"),
 * 		new LiteralField("Lipsum","Lorem ipsum dolor sit amet enim.")
 * 	),
 * 	new Tab(
 * 		$title='Tab two',
 * 		new HeaderField("A second header"),
 * 		new LiteralField("Lipsum","Ipsum dolor sit amet enim.")
 * 	)
 * )
 * </code>
 * 
 * @package forms
 * @subpackage fields-structural
 */
class BootstrapTabSet extends TabSet {
	
	/**
	 * @param string $name Identifier
	 * @param string $title (Optional) Natural language title of the tabset
	 * @param Tab|TabSet $unknown All further parameters are inserted as children into the TabSet
	 */
	public function __construct($name) {
        
      $args = func_get_args();
      
      if (func_num_args() > 1) {       
         call_user_func_array(array('parent', '__construct'), $args);
      } else {
         $name = array_shift($args);
         parent::__construct($name);
      }
	}
   	
	public function id() {
		if($this->tabSet) return $this->tabSet->id() . '_' . $this->id . '_set';
		else return $this->id;
	}
	
	/**
	 * Returns a tab-strip and the associated tabs.
	 * The HTML is a standardised format, containing a &lt;ul;
	 */
	public function FieldHolder() {
		Requirements::javascript(SAPPHIRE_DIR . '/javascript/loader.js');
		Requirements::javascript(SAPPHIRE_DIR . "/thirdparty/prototype/prototype.js");
		Requirements::javascript(SAPPHIRE_DIR . "/thirdparty/behaviour/behaviour.js");
		Requirements::javascript(SAPPHIRE_DIR . "/javascript/prototype_improvements.js");
		Requirements::javascript(THIRDPARTY_DIR . "/jquery/jquery.js");
		Requirements::javascript(SAPPHIRE_DIR . "/javascript/jquery_improvements.js");
		Requirements::javascript(THIRDPARTY_DIR . "/tabstrip/tabstrip.js");

      $prefix = '';
      if (J6Member::current_theme() == 'Theme2014') {
         $prefix = 'Theme2014_';
      } else {
         Requirements::css(THIRDPARTY_DIR . "/tabstrip/tabstrip.css");
      }

      return $this->renderWith($prefix.'TabSetFieldHolder');
	}
	
	/**
	 * Return a dataobject set of all this classes tabs
	 */
	public function Tabs() {
		return $this->children;
	}
	public function setTabs($children){
		$this->children = $children;
	}

	public function setTabSet($val) {
		$this->tabSet = $val;
	}
	public function getTabSet() {
		if(isset($this->tabSet)) return $this->tabSet;
	}
	
	/**
	 * Returns the named tab
	 */
	public function fieldByName($name) {
		if(strpos($name,'.') !== false)	list($name, $remainder) = explode('.',$name,2);
		else $remainder = null;
		
		foreach($this->children as $child) {
			if(trim($name) == trim($child->Name) || $name == $child->id) {
				if($remainder) {
					if($child->isComposite()) {
						return $child->fieldByName($remainder);
					} else {
						user_error("Trying to get field '$remainder' from non-composite field $child->class.$name", E_USER_WARNING);
						return null;
					}
				} else {
					return $child;
				}
			}
		}
	}

	/**
	 * Add a new child field to the end of the set.
	 */
	public function push($field) {
		parent::push($field);
		$field->setTabSet($this);
	}
	
	/**
	 * Inserts a field before a particular field in a FieldSet.
	 *
	 * @param FormField $item The form field to insert
	 * @param string $name Name of the field to insert before
	 */
	public function insertBefore($field, $insertBefore) {
		parent::insertBefore($field, $insertBefore);
		if($field instanceof Tab) $field->setTabSet($this);
		$this->sequentialSet = null;
	}
	
	public function insertAfter($field, $insertAfter) {
		parent::insertAfter($field, $insertAfter);
		if($field instanceof Tab) $field->setTabSet($this);
		$this->sequentialSet = null;
	}
	
	public function removeByName( $tabName, $dataFieldOnly = false ) {
		parent::removeByName( $tabName, $dataFieldOnly );
	}
   
   /**
    * Takes a FieldSet Object and transforms its TabSet into a Bootstrap Tabset.
    * 
    * @param FieldSet $fieldset Fieldset that contains the TabSet to transform - by reference
    * @param string $tabset_name Name of the TabSet to transform
    * @param boolean $all_tabs Indicates if all tabs in the TabSet should be carried through - defaults to true
    * @param array $tab_names Array of strings indicating which tabs to transform should $all_tabs be set to false
    */
   public static function transformTabSetForFieldSet(&$fieldset,$tabset_name,$all_tabs = true, $tab_names = array()) {

      if (is_string($tabset_name) && $fieldset instanceof FieldSet) {
         
         $original_tabset = $fieldset->fieldByName($tabset_name);
         $bootstrap_tabset = new BootstrapTabSet($tabset_name);

         if ($all_tabs === true) {
            $tab_names = array();
            foreach ($original_tabset->Tabs() as $tab_info) {
               if ($tab_info instanceof Tab) {
                  $tab_names[] = $tab_info->getField('id');
               }
            }
         }

         if (is_array($tab_names) && !empty($tab_names)) {
            foreach ($tab_names as $tab_name) {
               $bootstrap_tabset->push($original_tabset->Tabs()->fieldByName($tab_name));
               //$bootstrap_tabset->fieldByName($tab_name)->setTabSet($bootstrap_tabset);  // happens during push
            }
         }

         $fieldset = new FieldSet($bootstrap_tabset);
      } else {
         
         user_error('BootstrapTabSet::transformTabSetForFieldSet(): fieldset not a FieldSet Object or tabset_name not a string', E_USER_ERROR);
      }
   }
}