<?php

/**
 * three different ways to set currentRecord
 */
class DataObjectController extends Page_Controller {

	static $url_handlers = array(
		'' => 'index',
		'$Action//$ID' => 'handleActionOrID'
	);

	static $allowed_actions = array('search', 'add', 'AddForm', 'ModelSearchForm', 'ResultsForm', 'handleActionOrID', 'edit', 'view', 'delete', 'EditForm', 'ViewForm', 'DeleteForm');

	static $page_size = 10;
	
	static $casting = array(
		'Action' => 'Varchar'
	);   
	
	public $errors=array();
	
	public $searchTitle = "Search Results";   
	
	/**
	 * Class name of the form field used for the results list.  Overloading this in subclasses
	 * can let you customise the results table field.
	 */
	protected $resultsTableClassName = 'ExtendedTableListField';

	/**
	 * Return {@link $this->resultsTableClassName}
	 */
	public function resultsTableClassName() {
		return $this->resultsTableClassName;
	}


	function __construct($dataRecord = null, $currentRecord = null) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "__construct");

		if ($currentRecord) {
			$this->currentRecord = $currentRecord;
		}
		parent::__construct($dataRecord);
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "__construct");
	}

	/**
	 * Delegate to different control flow, depending on whether the
	 * URL parameter is a number (record id) or string (action).
	 *
	 * @param unknown_type $request
	 * @return unknown
	 */	
	function handleActionOrID($request) {	
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "handleActionOrID");

		$action = $request->param('Action');
		
		if (!is_numeric($action) && $this->checkAccessAction($action)) {
			return parent::handleAction($request);
		}
	
		if ($this->initCurrentRecord($request)) {
			$request->shiftAllParams();
			$request->shift();
		}
		
		$action = $request->param('Action');
		
		if ($this->currentRecord && !$action) {
			$this->Action = 'view';
			return $this->view($request);
		}

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "__construct");
		
		
		return parent::handleAction($request);

	}

	public function allowedActions() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "allowedActions");

		$actions = parent::allowedActions();
		if ($this->dataRecord) $actions[] = $this->dataRecord->URLSegment;
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "allowedActions");
		return $actions;


	}

	function initCurrentRecord($request) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "initCurrentRecord");
		
		if (!$this->currentRecord && $action = $request->param('Action')) {
			if (is_numeric($action)) {
				$this->currentRecord = DataObject::get_by_id($this->modelClass, $action);
			} elseif (singleton($this->modelClass)->hasMethod('get_by_link')) {
				$this->currentRecord = singleton($this->modelClass)->get_by_link($action);
			}
			if ($this->currentRecord) {
				$this->modelClass = get_class($this->currentRecord);
				if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "initCurrentRecord");
				return true;
			}
		}
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "initCurrentRecord");
		return false;

	}

	/**
	 * Return the class name of the model being managed.
	 *
	 * @return unknown
	 */
	function getModelClass() {
		return $this->modelClass;
	}

	function Link($action = null, $noRecord = false) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "Link");
		
		if (!is_object($this->currentRecord) || $noRecord) {
			$link = parent::Link($action);
		} elseif ($this->currentRecord->hasMethod('Link')) {
			$link = $this->currentRecord->Link($action,$this);
		} else {
			$link = Controller::join_links($this->parentController->Link(), $this->currentRecord->ID, $action);
		}
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "Link");
		return $link;
		
	}

	/**
	 * @return string
	 */
	public function ModelNameSingular() {
		return singleton($this->modelClass)->i18n_singular_name();
	}

	/**
	 * @return string
	 */
	public function ModelNamePlural() {
		return singleton($this->modelClass)->i18n_plural_name();
	}

	/**
	 * Use this to control permissions or completely disable
	 * links to detail records.
	 * @return boolean (Default: true)
	 */
	public function canCurrentUserView() {
		if ($this->currentRecord)
			return $this->currentRecord->canView(Member::currentUser());
		return false;
	}

	public function canCurrentUserEdit() {
		if ($this->currentRecord)
			return $this->currentRecord->canEdit(Member::currentUser());
		return false;
	}

	public function canCurrentUserCreate() {
		if(singleton($this->modelClass)->canCreate(Member::currentUser())) {
			return true;
		}
	}

	public function canCurrentUserDelete() {
		if ($this->currentRecord)
			return $this->currentRecord->canDelete(Member::currentUser());
		return false;
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////

	function index($request) {
		$this->Action = 'index';
		return $this->render();
	}

	/**
	 * @param array $searchCriteria
	 */
	function ModelSearchResults($searchCriteria = array()) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "ModelSearchResults");
		
		//The results of this doesn't seem to get used even 
		//though it gets set up and queried in the DB -BR
		return;
		// This needs working on
		if ($this->request)
			$request = $this->request;
		else
			return;
		if(!$searchCriteria && !isset($searchCriteria['SecurityID']) && singleton($this->modelClass)->hasMethod('DefaultSearchCriteria'))
			$searchCriteria = singleton($this->modelClass)->DefaultSearchCriteria($request);
		if(!$searchCriteria)
			$searchCriteria = $request->requestVars();

		$start = ($request->getVar('start')) ? (int)$request->getVar('start') : 0;
		$limit = $this->stat('page_size');

		$context = singleton($this->modelClass)->getDefaultSearchContext();
		
		$query = $context->getQuery($searchCriteria, null, array('start'=>$start,'limit'=>$limit));
				
		$records = $context->getResults($searchCriteria, null, array('start'=>$start,'limit'=>$limit));
			
		if($records) {
			$records->setPageLimits($start, $limit, $query->unlimitedRowCount());
		}

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "ModelSearchResults");
		return $records;
		
	}

	/**
	 * Get a search form for a single {@link DataObject} subclass.
	 *
	 * @return Form
	 */
	public function ModelSearchForm() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "ModelSearchForm");
		SecurityToken::disable();
		$fields = $this->ModelSearchFields();
		
		//If there are no fields to search on don't show the form.
		if(!$fields->dataFields()) return false;
		
		$action = new FormAction('search', 'Search');
		$action->addExtraClass('btn-search');

		$form = new Form($this, "ModelSearchForm",
			$fields,
			new FieldSet(
				$action
			)
		);
		$form->setFormMethod('get');
		$form->setFormAction($this->Link('ModelSearchForm',$this));
		
		
		//-- PATCH for the AdvancedHeaderSearch
		if($this->request->requestVar('AdvancedHeaderSearch')){
			//-- Cast the search 
			$type_search 	= split('#',$this->request->requestVar('type_search'));
			$attribut 		= $type_search[1];
			$form->loadDataFrom(array($attribut => $this->request->requestVar('search')));
		}elseif ($this->request->requestVar('action_search')){
			// If we are runing a custom search populate form with send options
		// Else set the default filters (if set)
			$form->loadDataFrom($this->request->requestVars());
		} else {
			$model = singleton($this->modelClass);
			if ( method_exists($model, 'DefaultSearchCriteria') && is_Array($defaults = $model->DefaultSearchCriteria())) {
				$form->loadDataFrom($defaults); 
			}
		}
				
		$this->extend('updateModelSearchForm', $form);
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "ModelSearchForm");
      
      SecurityToken::enable();
		return $form;
		
	}
	
	public function ModelSearchFields() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "ModelSearchFields");
		
		$context = singleton($this->modelClass)->getDefaultSearchContext();
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "ModelSearchFields");
		return $context->getSearchFields();

		
	}

	/**
	 * Action to render a data object collection, using the model context to provide filters
	 * and paging.
	 *
	 * @return string
	 */
	function search($data, $form, $request) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "search");
		
		//-- Special case : AdvancedHeaderSearch
		if($this->request->requestVar('AdvancedHeaderSearch')){
			//-- Cast the search 
			$type_search 	= split('#',$this->request->requestVar('type_search'));
			$search 			= array($type_search[1] => trim($this->request->requestVar('search')));
			
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "search");
			return $this->ResultsForm($search, true);
		}else{
			
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "search");
			return $this->render(array(
					//'Results' => $this->ModelSearchResults($form->getData()),
					'ResultsForm' => $this->ResultsForm($form->getData()),
					'SearchForm' => $form
			));
		}
		
	}
	
	/**
	 * Return the columns available in the column selection field.
	 * Overload this to make other columns available
	 */
	public function columnsAvailable() {
		return singleton($this->modelClass)->summaryFields();
	}

	/**
	 * Gets the search query generated on the SearchContext from
	 * {@link DataObject::getDefaultSearchContext()},
	 * and the current GET parameters on the request.
	 *
	 * @return SQLQuery
	 */
	function getSearchQuery($searchCriteria) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "Link");
		
		$model = singleton($this->modelClass);
		$context = $model->getDefaultSearchContext();
				
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getSearchQuery");
		return $context->getQuery($searchCriteria);
		
	}
	
	/**
	 * Returns all columns used for tabular search results display.
	 * Defaults to all fields specified in {@link DataObject->summaryFields()}.
	 * 
	 * @param array $searchCriteria Limit fields by populating the 'ResultsAssembly' key
	 * @param boolean $selectedOnly Limit by 'ResultsAssempty
	 */
	function getResultColumns($searchCriteria, $selectedOnly = true) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "getResultColumns");
		
		$model = singleton($this->modelClass);

		$summaryFields = $this->columnsAvailable();
		
		if($selectedOnly && isset($searchCriteria['ResultAssembly'])) {
			$resultAssembly = $searchCriteria['ResultAssembly'];
			if(!is_array($resultAssembly)) {
				$explodedAssembly = split(' *, *', $resultAssembly);
				$resultAssembly = array();
				foreach($explodedAssembly as $item) $resultAssembly[$item] = true;
			}
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getResultColumns");
			return array_intersect_key($summaryFields, $resultAssembly);
		} else {
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getResultColumns");
			return $summaryFields;
		}
		
	}
	
	
	/**
	 * Creates and returns the result table field for resultsForm.
	 * Uses {@link resultsTableClassName()} to initialise the formfield. 
	 * Method is called from {@link ResultsForm}.
	 *
	 * Index listing
	 *
	 * @param array $searchCriteria passed through from ResultsForm 
	 *
	 * @return TableListField 
	 */
	function getResultsTable($searchCriteria, $headerSearch = false) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "getResultsTable");
		

                if (is_array($searchCriteria) && isset($searchCriteria['ctf']) && count($searchCriteria) <=3) { $searchCriteria = array(); }
                
		$summaryFields = $this->getResultColumns($searchCriteria);
		
		$className = $this->resultsTableClassName();
		$tf = new $className(
			$this->modelClass,
			$this->modelClass,
			$summaryFields
		);
//     // $current_theme = J6Member::current_theme();
//		if($current_theme == 'Theme2014') {
//			$tf->setTemplate('Theme2014_'.$tf->getTemplate());
//         $msg_text = 'This list has been automaticaly filtered for you. Please use the search controls in the slide out panel on the right to adjust these options.';
//		} else {
//         $msg_text = 'This list has been automaticaly filtered for you. Please use the search controls to the left to adjust these options.';
		//}
		// If not a specific ssearch, try to find defaults
		$model = singleton($this->modelClass);
		if(!count($searchCriteria) && $model->hasMethod('DefaultSearchCriteria')) {
			$searchCriteria = $model->DefaultSearchCriteria();			
			//Do we want to inform the user that the results have been automatically filtered?
			
		}
		//--- Patch for AdvancedHeaderSearch
		if($headerSearch){
			$result = $this->getSearchQuery($searchCriteria)->execute();
			if($result->numRecords() == 1){
				$rawObject = $result->next();
				$element = DataObject::get_by_id($rawObject['ClassName'], $rawObject['ID']);
				Director::redirect('/'.$element->Link());
			}
		}
		//--- End patch
		$tf->setCustomQuery($this->getSearchQuery($searchCriteria));
				
		$tf->setPageSize($this->stat('page_size'));
		
		$tf->setShowPagination(true);
		// @todo Remove records that can't be viewed by the current user
		$actions=array();
		$actions[] = 'View';
		$actions[] = 'Create';
		$actions[] = 'Add';
		if (true || $this->checkPermission('Editor')) {
			$actions[] = 'Edit';
		}
		
		
		////$tf->ItemClass = 'ExtendedComplexTableField_Item';

		
		//debug::show(TableListField::permissions_for_object($this->modelClass));
		//$tf->setPermissions(array_merge(TableListField::permissions_for_object($this->modelClass)));
		$tf->setPermissions(array_merge($actions, TableListField::permissions_for_object($this->modelClass)));
		
		$format = array();
		$linkLookup = $this->LinkLookup(); 
		if($linkLookup) {
	        foreach($summaryFields as $key=>$field) {
		        $format[$key] = '<a href=\"{' . $this->LinkLookup() . '}\">$value</a>';
	        }
	 
	    }
        
        if(is_array($model->stat('summary_formatting'))) {
        	$format = array_merge($format, $model->stat('summary_formatting'));
        }
        
		$format['AddToCart'] = '$value'; 
		$format['ActionsList'] = '$value'; 
		$format['MyFave'] = '<span>$value</span>';
        $tf->setFieldFormatting($format);
        
        $cast = $model->stat('summary_casting');
        if($cast && is_array($cast) && count($cast)) {
	        $tf->setFieldCasting($cast);
        }
        
        $this->ResultsTableModifier($tf);
	
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getResultsTable");
		/* 06/12/2013
			It means no sense displaying pagination for items less than specified pagination value
		*/
		if ($tf->TotalCount() < $this->stat('page_size')){
			$tf->setShowPagination(false);
		}
		return $tf;

		
	}
	
	function ResultsTableModifier(&$tf) {
		return $tf;
	}
	
	function LinkLookup() {
		return $linkLookup = '$Link()'; 
	}
	
	
	
	function exportSetup($tableField, $exportFields) {
		// csv export settings (select all columns regardless of user checkbox settings in 'ResultsAssembly')
		$tableField->setFieldListCsv($exportFields);
	}
	
	function customActions() {
		return false;
	}
	
	function getResultsTableFormat() {
		return array();
	}
	
	/**
	 * Shows results from the "search" action in a TableListField. 
	 *
	 * @uses getResultsTable()
	 *
	 * @return Form
	 */
	function ResultsForm($searchCriteria = array(), $headerSearch = false) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "ResultsForm");
		
		if($searchCriteria instanceof SS_HTTPRequest) $searchCriteria = $searchCriteria->getVars();
						
		$tf = $this->getResultsTable($searchCriteria,$headerSearch);
		
		//echo '<pre>';var_dump($tf);echo '</pre>';
		
		// implemented as a form to enable further actions on the resultset
		// (serverside sorting, export as CSV, etc) 
		$form = new Form(
			$this,
			'ResultsForm',
			$set = new FieldSet(
				new HeaderField('SearchResultsHeader', _t('ModelAdmin.SEARCHRESULTS',"$this->searchTitle"), 2),
				new hiddenfield('rootpath','',$this->Link()),
				new LiteralField('Message',$this->getMessage()),
				$tf
			),
			new FieldSet()
		);
		
		
		// Include the search criteria on the results form URL, but not dodgy variables like those below
		$filteredCriteria = $searchCriteria;
		unset($filteredCriteria['ctf']);
		unset($filteredCriteria['url']);
		unset($filteredCriteria['action_search']);
      
      

		$form->setFormAction($this->Link() . '/ResultsForm?' . http_build_query($filteredCriteria));
		
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "ResultsForm");
		return $form;//->formHtmlContent();
	}

	/**
	 * Create a new model record.
	 *
	 * @param unknown_type $request
	 * @return unknown
	 */
	function add() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "add");
		
		if(!singleton($this->modelClass)->canCreate(Member::currentUser())) {
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "add");
			return $this->httpError(403);
		}

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "add");
		return $this->render(array(
			'Form' => $this->AddForm()
		));
		
	}

	/**
	 * Returns a form for editing the attached model
	 */
	public function AddForm() {
	    if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "AddForm");
		
		$newRecord = new $this->modelClass();
		if($newRecord->hasMethod('getAddFormFields')) {
			$fields = $newRecord->getAddFormFields();
		} else {
			$fields = $newRecord->getFrontendFields();
		}
		
		foreach ($this->errors as $field=>$error){
		  $fields->FieldByName($field)->setError($error,'alert-error');
		}

		$validator = ($newRecord->hasMethod('getValidator')) ? $newRecord->getValidator() : null;
		


		$actions = new FieldSet(new FormAction("doAdd", "Add", null, null, 'btn-primary'));

		$form = new Form($this, "AddForm", $fields, $actions, $validator);
		
		//If data is loaded i.e. A form that failed validation, add this data.
		if ($this->currentRecord) {
		  $form->loadDataFrom($this->currentRecord);
		}

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "AddForm");
		return $form;
		
	}
	
	public function AddFormExtraFields($fields){ return $fields; }
	

	function doAdd($data, $form, $request) {
      	if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "doAdd");
		
		if(!singleton($this->modelClass)->canCreate(Member::currentUser())) {
			return $this->httpError(403);
		}
    
		$className = $this->modelClass;
		$model = new $className();
		// We write before saveInto, since this will let us save has-many and many-many relationships :-)
		// do we really? validation fails...
		$form->saveInto($model);
		$this->currentRecord=$model;
		$data = $this->beforeDoAdd($data);
		
		$model->write();
		
		$this->afterDoAdd($data);

		/*
		$form->sessionMessage(
			_t('RecordController.SAVESUCCESS','Saved record'),
			'success'
		);
		*/
		if($redirect = $this->_redirect) {
			Director::redirect($redirect);
			$this->_redirect = false;
		} else {
			Director::redirect($model->Link('view',$this), 'edit');
		}
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "doAdd");
		
	}
	
	public function beforeDoAdd($data){}
	public function afterDoAdd($data){}

	/**
	 * Edit action - shows a form for editing this record
	 */
	function edit($request) {
		if(!$this->canCurrentUserEdit()) {
			return $this->httpError(403);
		}

		return $this->render(array(
			'Form' => $this->EditForm(),
			'ExtraForm' => $this->DeleteForm()
		));
	}

	/**
	 * Returns a form for editing the attached model
	 */
	
	public function EditForm() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "Editform");
		
		$fields = $this->currentRecord->getCMSFields();
		
		$fields->push(new HiddenField("ID"));
		
		$actions = new fieldSet();
		$actions->push(new FormAction("doEdit", 'Save Changes', null, null, 'btn-primary'));
		
		if (isset($_REQUEST['BackURL']) && $backURL = $_REQUEST['BackURL']) {
			$fields->push(new HiddenField('BackURL', 'BackURL', $backURL));
			$actions->push($thisaction = new FormAction('goBack', 'Go Back'));
			$thisaction->addExtraClass('btn-default');
		}
		
		$validator = ($this->currentRecord->hasMethod('getValidator')) ? $this->currentRecord->getValidator() : new RequiredFields();

		$form = new Form($this, "EditForm", $fields, $actions, $validator);
		$form->loadDataFrom($this->currentRecord);

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "EditForm");
		return $form;
		
	}
	public function EditFormExtraFields($fields){ return $fields; } 

	/**
	 * Postback action to save a record
	 */
	function doEdit($data, $form, $request) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "doEdit");
		
		if(!$this->currentRecord->canEdit(Member::currentUser())) {
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "doEdit");
			return $this->httpError(403);
		}
		
		$form->saveInto($this->currentRecord);
		$this->beforeDoEdit($data);
		$this->currentRecord->write();
				
		$this->afterDoEdit($data);
				
      if (($backURL = $this->getRequest()->RequestVar('BackURL')) || ($backURL = $this->_backURL)) {
			Director::redirect($backURL);
		} else {
			$form->sessionMessage(
				_t('RecordController.SAVESUCCESS','Saved record'),
				'success'
			);
			if($redirect = $this->_redirect) {
				Director::redirect($redirect);
				$this->_redirect = false;
			} else {
				Director::redirectBack();
			}
		}
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "doEdit");
		
	}
	
	public function beforeDoEdit($data){}
	public function afterDoEdit($data){}
	
	function goBack($data, $form, $request) {
		if (isset($_REQUEST['BackURL']) && $backURL = $_REQUEST['BackURL']) {
			Director::redirect($backURL);
		}
	}

	/**
	 * Create a new model record.
	 *
	 * @param unknown_type $request
	 * @return unknown
	 */
	function delete($request) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "delete");
		
		if(!$this->currentRecord) {
			return $this->httpError(404);
		}
		if(!$this->currentRecord->canDelete(Member::currentUser())) {
			return $this->httpError(403);
		}
    
		$this->currentRecord->delete();
		
		if($backURL = $this->request->requestVar('BackURL')) {
			Director::redirect($backURL);
		} else {
			//redirect to object controller index
			Director::redirect(parent::Link());
		}
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "delete");
		
	}

	public function DeleteForm() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "DeleteForm");
		
		if(!$this->currentRecord->canDelete(Member::currentUser())) {
			return false;
		}

		$form = new Form($this,
			"DeleteForm",
			new FieldSet(),
			// Where has ConfirmedFormAction gone?
			new FieldSet(new FormAction('doDelete', _t('RecordController.DELETE', 'Delete')))
		);

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "DeleteForm");
		return $form;
		
	}

	/**
	 * Delete the current record
	 */
	public function doDelete($data, $form, $request) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "doDelete");
		
		if(!$this->currentRecord->canDelete(Member::currentUser())) {
			return $this->httpError(403);
		}

		$this->currentRecord->delete();
		$form->sessionMessage(
			_t('RecordController.DELETESUCCESS','Successfully deleted record'),
			'success'
		);

		Director::redirectBack();
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "doDelete");
		
	}

	/**
	 * Renders the record view template.
	 */
	function view($request) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "view");
		
		if(!$this->currentRecord) {
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "view");
			return $this->httpError(404);
		}
		if(!$this->currentRecord->canView(Member::currentUser())) {
			if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "view");
			return $this->httpError(403);
		}

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "view");
		return $this->render(array(
			'Form' => $this->ViewForm()
		));
		
	}

	/**
	 * Returns a form for viewing the attached model
	 *
	 * @return Form
	 */
	public function ViewForm() {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "ViewForm");
		
    	$param = array('restrictFields'=>$this->_viewFields);
    	$fields = $this->currentRecord->getFrontendFields($param);
    	//$fields = new FieldSet();
		$form = new Form($this, "EditForm", $fields, new FieldSet());
		$form->loadDataFrom($this->currentRecord);
		$form->makeReadonly();
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "ViewForm");
		return $form;
	}
	
	/**
	* Extended to exclude cart for non ecommerce customers
	* Returns a fixed navigation menu of the given level.
	* @return DataObjectSet
	*/
	public function getMenu($level = 1) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "getMenu");
		
		$visible=parent::getMenu($level);
		foreach ($visible as $page){
			if (get_class($page) == 'CartPage' && !Permission::check('ACCESS_ECOMMERCE')) {
			  $visible->remove($page);
			}	
		}
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getMenu");
		return $visible;
	}

	/**
	 * Render the current controller with the templates determined
	 * by {@link getViewer()}.
	 *
	 * @param array $params Key-value array for custom template variables (Optional)
	 * @return string Parsed template content
	 */
	function render($params = null) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "render");
		
		$template = $this->getViewer($this->getAction());

		// if the object is already customised (e.g. through Controller->run()), use it
		$obj = ($this->customisedObj) ? $this->customisedObj : $this;

		if (!$params) $params = array();

		if ($this->currentRecord) $params['Record'] = $this->currentRecord;

		$obj = $this->customise($params);
		
		// echo "template: ";
		// print_r($template);
		// echo "<br />";

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "render");
		return $template->process($obj);
		
	}

	function getViewer($action) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "getViewer");
		
		if(!$action) {
			if ($this->currentRecord) {
				$action = 'view';
			} elseif ($this->dataRecord) {
				$action = $this->dataRecord->URLSegment;
			} else {
				$action = 'index';
			}
		}
		$viewer = parent::getViewer($action);
		
		$layoutTemplate = $this->getModelTemplate($this->modelClass, $action);

		// fallback to controller classname, e.g. dataobjectcontroller/templates/Layout/ThisController.ss
		if (!isset($layoutTemplate)) {
			$layoutThisControllerTemplate = SSViewer::getTemplateFileByType($this->class, 'Layout');
			if ($layoutThisControllerTemplate) $layoutTemplate = $layoutThisControllerTemplate;
		}

		if (!isset($layoutTemplate)) {
			$layoutTemplate = SSViewer::getTemplateFileByType('DataObjectController', 'Layout');
		}

		$viewer->setTemplateFile('Layout', $layoutTemplate);

		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getViewer");
		return $viewer;
		
	}
	
	function getModelTemplate($modelClass, $action) {
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "getModelTemplate");
		
		$modelClassAncestry = array_reverse(ClassInfo::ancestry($modelClass));
		
		foreach ($modelClassAncestry as $modelClass) {
			// action-specific template with template identifier, e.g. themes/mytheme/templates/Layout/MyModel_view.ss
			$layoutActionTemplate = SSViewer::getTemplateFileByType($modelClass . '_' . $action, 'Layout');
			if ($layoutActionTemplate) return $layoutActionTemplate;
	
			// generic template with template identifier, e.g. themes/mytheme/templates/Layout/MyModel.ss
			$layoutGenericTemplate = SSViewer::getTemplateFileByType($modelClass, 'Layout');
			if ($layoutGenericTemplate) return $layoutGenericTemplate;
		}
		
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "getModelTemplate");
		return null;
		
	}

	public function httpError($code) {
		switch ($code) {
			case 403:
				return Security::permissionFailure(null);
			case 404:
				// Have to redirect self-service user here because we don't want them to see a 404 page with J6 header, menu etc
				
				return parent::httpError($code);
				
		}
	}

	public function MetaTitle() {
		if ($this->currentRecord) {
			if ($this->currentRecord->MetaTitle)
			{
				return $this->currentRecord->MetaTitle;
		
			}	
			return $this->currentRecord->Title;
		}
		return $this->dataRecord->MetaTitle;
	}

	/**
	 * Generic Form creator to work with Model::getFormFields;
	 *
	 * @param (string) $mode - Type of form required (view, add, edit, etc) 
	 * @param (mixed)  $actions - True for "do" action matching $mode, false for not controls, or pass in an ActionField or FieldSet
	 * @param (array)  $params - Pass standard params for scaffoldFormField (i.e. tabbed, includeRelations, restrictFields Etc.)
	 * @return (Form)  Form Object
	 */
	 public function DataForm($mode, $actions = true, $param = array()){
      	if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "DataForm");
		
        $this->newRecord = ($mode=='Add' || !$this->currentRecord) ? new $this->modelClass() : $this->currentRecord;
        
        $fields = new Fieldset;
        //Performance: Only render edit form when we are editing, as now we use view templates 
        //instead of Read-only edit forms.
        //This is only really here because its needed for the User record
       
        //Lets us extend the DataForm from both extened classes and extensions
        //Performance: Only render this stuff when editing again as this saves us time when
        //showing the order display page, and other pages.
        if ($this->hasMethod("{$mode}FormExtra")){
        	$fields = $this->{"{$mode}FormExtra"}($fields);
        }
        
        //And from from the model
        $model = ($this->currentRecord) ? $this->currentRecord : new $this->modelClass();
        if ($model->hasMethod("{$mode}FormExtra")){
          $fields = $model->{"{$mode}FormExtra"}($fields);
        }
        
        //Set default client
       
		$validator = ($this->newRecord->hasMethod('getValidator')) ? $this->newRecord->getValidator() : null;
		
		//Will create an action automatically, or from and fieldset or action object
		if ($actions === true) {
            $actions = new FieldSet(new FormAction("do{$mode}", "$mode", null, null, 'btn-primary'));
        } elseif (is_string($actions)) {
            $actions = new FieldSet(new FormAction("do{$mode}", "$actions", null, null, 'btn-primary'));
        } elseif (is_object($actions) && get_class($actions) == 'FormAction' ) {
            $actions = new FieldSet($actions);
        }elseif (is_object($actions) && get_class($actions) == 'FieldSet' ){
        	//-- Do nothing because already in good format
        } else {
            $actions = new FieldSet();
        }
        
      
        // Make sure desired action is fired when Enter is pressed
        if(count($fields->items)) {
        	foreach($actions->items as $key=>$action) {
	        	if($action instanceof FormAction) {// && $action->hasClass('btn-primary') //Unfortunatly can't access this property
	        		// clone item
	        		$defaultAction = clone $action;
	        		// create hiden action
	        		$defaultAction->setName('DefaultAction');
	        		$defaultAction->addExtraClass('hide');
	        		
	        		$fields->removeByName('DefaultAction');		     
	        		// place at begining of form	        		
	        		if(!($target = $fields->items[0]) instanceof TabSet) {
	        			$target = $fields;
	        		}
	        		$target->insertBefore($defaultAction, $fields->items[0]->Name); 
	        		break;
	        	}
        	}
        }
        
        // Add back button
        if (($backURL = Controller::Curr()->request->RequestVar('BackURL')) || ($backURL = $this->_backURL)) {
			$fields->push(new HiddenField('BackURL', 'BackURL', $backURL));
			if(isset($actions->items[0])) {
				$actions->insertBefore(new LiteralField('Back','<a class="btn btn-default" href="' . $backURL . ' ">Go Back</a>'),$actions->items[0]->Name);
			} else {
				$actions->push(new LiteralField('Back','<a class="btn btn-default" href="' . $backURL . ' ">Go Back</a>'));
			}
		}
		$form = new Form($this, "{$mode}Form", $fields, $actions, $validator);
		
		//If data is loaded i.e. we are editing a record
		if ($this->currentRecord) {
		   $form->loadDataFrom($this->currentRecord);
		   //Overrite with data from form errors i.e. A form that failed validation, add this data.
		   $form->setupFormErrors();
		} else {			
			$form->loadDataFrom($this->newRecord); //push in defaults
			$form->loadDataFrom($this->request->requestVars());
			$form->setupFormErrors();
		}
		
		//$form = new Form($this, "AddForm", new FieldSet(), new FieldSet());
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "DataForm");
		if (Director::is_ajax()) {
			$form->disableSecurityToken();
		}
		return $form;
		
    }
    
    public function DataAction($mode,$data,$form){
        if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::mark("DataObjectController", "DataAction");
		
        $model = ($this->currentRecord) ? $this->currentRecord : new $this->modelClass();
        
        switch ($mode){
            case 'Add':
                $allowed = 'canCreate';
                break;
            case 'Edit':
                $allowed = 'canEdit';
                break;
            case 'Delete': 
                $allowed = 'canDelete';
                break;   
        }
        
        if(!singleton($this->modelClass)->$allowed(Member::currentUser())) {
            return $this->httpError(403);
        } 
        
        if (method_exists($this,"beforeDo{$mode}")){
            $data = $this->{"beforeDo{$mode}"}($data);
        }
        
        $form->saveInto($model);
        $model->write();
        $this->currentRecord=$model;
        
        if (method_exists($this,"afterDo{$mode}")){
            $this->{"afterDo{$mode}"}();
        }
        
        if (method_exists($this,"doComplete")){
            $this->{"doComplete"}();
        }
        
		if(isset($_GET['debug_profile']) && $_GET['debug_profile'] == 3) Profiler::unmark("DataObjectController", "DataAction");
        return $this;		
		
  }
 
}
