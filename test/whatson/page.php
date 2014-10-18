<?php

class Page extends SiteTree {

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Content.Main', new TextField('WhiteLabelTitle', 'White Label Title'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextField('NavIcon', 'Nav Icon'), 'Content');
		return $fields;
	}

	// This is called in User > Groups, return false to fix
	public function getTranslation($locale) {
		return false;
	}

	public function Link($action = null) {
		// return a relative link (rather than SiteTree's absolute) so that table list field sorts work
		return $this->RelativeLink($action);
	}

	function canView() {
		if($this->RecordClassName == "RedirectorPage" && $page = DataObject::get_by_id('SiteTree', $this->LinkToID)) {
			return $page->canView();
//			if($this->ID != $page->ParentID){
//				return $page->canView();
//			}
		}


		return parent::canView();
	}

	function inCMS() {
		return Controller::curr() instanceof LeftAndMain;
	}

	/**
	 * Return "section" or "link" depending if the link is a rediretor and redirects to the parent page
	 * in the current submenu.  This is to allow us to create submenu links to the default page of the submenu
	 * when the parent is the main controller.
	 *
	 * @return string
	 */
	public function IsLinkToParent() {
		return ($this->RecordClassName == "RedirectorPage" && Director::get_current_page()->ID == $this->LinkToID) ? 'section' : 'link';
	}

	public function ShowDropdownNav() {
		return $this->Children()->Count() && $this->LinkOrSection() != 'section';
	}

	function getMenuTitle() {
		if($value = $this->getField("MenuTitle")) {
			return $value;
		} else {
			return $this->getField("Title");
		}
	}

}

class Page_Controller extends ContentController {
	public function getMessage() {
		return '';
		return Message::get();
	}

}

class Other_controller extends ContentController {

	public static $siteprefix = false;

//	public function init() {
//
//
//
//		parent::init();
//
//		CurrencyType::get(); //included to initiate multicurrency
//
//		$currentDomain = (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']) ? Director::protocolAndHost() : false;
//		if($currentDomain)  {
//
//			//To let us test whitelable on dev and beta boxes
//			if(Director::isDev()) {
//
//				$possibleDomains = array($currentDomain);
//				//Matches 'xxx.beta.junction6travel.com', 'xxx.bam.junction6travel.com.' type domains
//				if(stristr($currentDomain, $match = sprintf(".%s.",Page_Controller::$siteprefix))) {
//					$possibleDomains[] = str_replace($match, '.', $currentDomain);
//				}
//
//				//Matches 'xxx.junction6travel.dev' type domains
//				if(substr($currentDomain, -4) == '.dev') {
//					$possibleDomains[] = substr_replace($currentDomain, '.com', -4);
//				}
//
//				if($this->request && $domain = $this->request->requestVar('SpoofDomain')) {
//					$possibleDomains[] = (substr($domain, 7) == 'http://') ? $domain : 'http://' . $domain;
//				}
//
//				$currentDomain = join("','", $possibleDomains);
//			}
//
//			$allowedDomain = DataObject::get_one('WebInterface', "Domain IN ('$currentDomain')");
//		}
//
//		if (!$member) {
//
//			if($currentDomain && $allowedDomain){
//				//Debug::show($allowedDomain); exit;
//				if(!empty($allowedDomain->UserID)){
//					$member = $allowedDomain->User();
//					$member->logIn(false);
//					WebInterface::setWebService(true, 'webinterface');
//					Client::set_current_id($allowedDomain->ClientID);
//				}
//				else{
//					WebInterface::setWebService(true, 'selfservice');
//					Client::set_current_id($allowedDomain->ClientID);
//				}
//			}
//		}
//
//		$req_params = array();
//		if ($this->request) {
//			$req_params = $this->request->allParams();
//		}
//
//		if ($member && $member->inGroup('self-service')) {
//			SelfServiceInterface::setSelfService(true);
//			$lk = SelfCheckinController::Link();
//			if ($this->modelClass != 'SelfCheckin' && (($this instanceof J6Controller) || ($this instanceof ErrorPage_Controller && !empty($req_params)))) {
//				Director::redirect('SelfCheckinController/start_registration');
//				return;
//			}
//		}
//
//		//set theme if not one
//		if (!SSViewer::current_theme() && $client = Client::get_current()) {
//			//singleton('Security')->set_stat('template_main', 'WebInterface_Page');
//			If($currentDomain && $allowedDomain && $theme = $allowedDomain->Theme) {
//				SSViewer::set_theme($theme);
//			}
//			elseif ($theme = $client->Theme) {
//				SSViewer::set_theme($theme);
//
//			}
//		}
//		//die(SSViewer::current_theme());
//		//enforce web interface when on dynamic page
//		if(WebInterface::isWebservice()){
//			singleton('Security')->set_stat('template_main', 'WebInterface_Page');
//			//check if need to set return URL for white label back to client site
//			if(isset($_SERVER['HTTP_REFERER'])){
//				$refererBaseURL =  parse_url($_SERVER['HTTP_REFERER']);
//				$url = $refererBaseURL['scheme'].'://'.$refererBaseURL['host'].'/';
//				if($url != Director::absoluteBaseURL()){
//					WebInterface::setContinueShopping($_SERVER['HTTP_REFERER']);
//				}
//			}
//		}
//
//
//      if (J6Member::current_theme() == 'Theme2014') {
//         $extra_js = "if(typeof Main != 'undefined') { Main.init(); }
//                     //FormElements.init();
//
//                     //remove loading animation from the tabs on page load.
//                     $('.tabstrip li.blurry').removeClass('blurry');
//                     $('.ajax-loader-tab').css('display', 'none');";
//      } else {
//         $extra_js = '';
//      }
//
//      $script = "jQuery(document).ready(function($) {
//                  $('#Form_AdvancedHeaderSearch_search').focusin(function() {
//                     $(this).val('');
//                  });
//                  $('#Form_AdvancedHeaderSearch_search').focusout(function() {
//                     if ($(this).val() == '') {
//                        $(this).val('Quick Search');
//                     }
//                  });
//                  $extra_js
//               });";
//
//		Requirements::customScript($script);
//
//		apache_note('ClientName', $client ? $client->ID . ' ' . $client->Name : 'No Client');
//		apache_note('UserName', $member ? $member->ID . ' ' . $member->Username . ' ' . $member->FirstName . ' ' . $member->Surname : "No User");
//
//		if(extension_loaded ('newrelic')) {
//			if($controller = Controller::Curr()) {
//				$page  = $controller->URLSegment ? $controller->URLSegment : $controller->class;
//				$action = $controller->request && $controller->request->param('Action')  ? '/'.$controller->request->param('Action') : '';
//				newrelic_name_transaction ($page . $action);
//			} else {
//				//leave this for now and see what others come up
//				//newrelic_name_transaction ('Unknown');
//			}
//		}
//
//	}
//	public function SelectPaymentLocation(){
//		$this->setMessage('Please select a payment location', 'info');
//		return $this->renderWith(
//				'SelectSystem',
//				array(
//						'SwitchSystemForm' => $this->SwitchPaymentLocationForm(),
//						'not_ajax'	=> true
//				));
//	}
//
	/**
	 * Get a search form for a single {@link DataObject} subclass.
	 *
	 * @return Form
	 */
//	public function SearchForm($class = false) {
//		if (!$class) return;
//		$model = singleton($class);
//		$context = $model->getDefaultSearchContext();
//		$fields = $context->getSearchFields();
//		$form = new Form($model, "ModelSearchForm",
//			$fields,
//			new FieldSet(
//				new FormAction('search', 'Search')
//			)
//		);
//		$form->setFormMethod('get');
//		$form->setFormAction(str_ireplace('index/','',$model->Link('ModelSearchForm')));
//		$form->addExtraClass('form-vertical');
//		// If we are runing a custom search populate form with send options
//		// Else set the default filters (if set)
//		if ($this->request->requestVar('action_search')){
//			$form->loadDataFrom($this->request->requestVars());
//		} else {
//			if ( method_exists($model, 'DefaultSearchCriteria') && is_Array($defaults = $model->DefaultSearchCriteria())) {
//				$form->loadDataFrom($defaults);
//			}
//		}
//		$this->extend('updateModelSearchForm', $form);
//		return $form;
//	}
//
//	public function SwitchSystemForm() {
//		$member = Member::currentUser();
//
//		if ($member && $member->multipleClients()) {
//			$form = new Form($this, 'SwitchSystemForm', new FieldSet(
//				new DropdownField('ClientID', 'Client', $member->Clients()->Map(), Client::get_current() ? Client::get_current()->ID : null)
//			), new FieldSet(
//				new FormAction('changeSystem', 'Go')
//			));
//			$form->addExtraClass('form-inline');
//			$form->setFormAction('home/SwitchSystemForm');
//			return $form;
//		}
//		return;
//	}
//
	public function changeSystem($data, $form) {
		if(isset($data['ClientID']) && $client = DataObject::get_by_id('Client', (int) $data['ClientID'])) {
			if($client->canView()) {
				// we need to reset payment location when we change the system
				Session::clear('PaymentLocationID');
				Client::set_current_id($client->ID);
				CurrencyType::set(0);
				Director::redirect($this->Link('index'));
				//return $this->render();
			} else {
				return Security::PermissionFailure();
			}
		} else {
			return $this->httpError(404);
		}
	}

	public function selectSystem() {
		return $this->renderWith('SelectSystem');
	}

	public function SwitchCurrencyForm() {
		if(!CurrencyType::multipleAvailable())
			return;
		//not logged into client
		if(!$client = Client::get_current())
			return;
		//no additonal currencies;
		$currencies = $client->AdditionalCurrencies('"Status" != ' . "'Setup Only'");

		$list = array(0 => $client->Currency()->Title . ' (Default)') + $currencies->map();

		$current = CurrencyType::get();
		$selected = $current->isDefault ? 0 : $current->ID;

		//create list of
		$form = new Form($this, 'SwitchCurrencyForm', new FieldSet(
				new DropdownField('CurrencyID', 'Currency', $list, $selected)// Currency::get_current() ? Client::get_current()->currency() : 0)
				), new FieldSet(
				new FormAction('changeCurrency', 'Go')
		));
		$form->addExtraClass('form-inline');
		$form->setFormAction('home/SwitchCurrencyForm');
		return $form;
	}

	public function changeCurrency($data, $form) {
		if(isset($data['CurrencyID'])) {
			CurrencyType::Set($data['CurrencyID']);
			Director::RedirectBack();
			//user_error('setting currency');
		} else {
			return $this->httpError(404);
		}
	}

	/**
	 * Determines if the current user can view drop down payment location filed.
	 *
	 * @return Boolean True if can view the drop down field | false otherwise.
	 */
	public function canViewPaymentLocation() {
		if(Client::get_current()) {
			// if we have rights i.e. Consultant, Admin, Super Admin
			if(Member::currentUser() && Member::currentUser()->inGroup('consultant') || Member::currentUser() && Member::currentUser()->isAdmin() || Member::currentUser() && Member::currentUser()->isSuperAdmin()) {
				// and if payment location feature is turn on
				if(Client::get_current()->EnablePaymentLocation)
					return true;
			}
		}
		return false;
	}

	/**
	 * Get the DropDown Field for change the payment locations.
	 *
	 * @return Form
	 */
//	public function SwitchPaymentLocationForm() {
//		if (Client::get_current()) {
//			// we allow to edit payment location without logging out for super admins only.
//			if (Member::currentUser()->isSuperAdmin() ){
//				$field = Client::get_current()->getPaymentLocationField(true,'Payment Location');
//			} else {
//				$field = Client::get_current()->getPaymentLocationField(false,'Payment Location');
//			}
//			$form = new Form($this, 'SwitchPaymentLocationForm',
//					new FieldSet($field), new FieldSet(
//	 				new FormAction('changePaymentLocation', 'Go')
//			));
//			$form->addExtraClass('form-inline');
//			$form->setFormAction('home/SwitchPaymentLocationForm');
//			return $form;
//		}
//	}
//
//	public function changePaymentLocation($data, $form) {
//		if (isset($data['PaymentLocationID'])) {
//			$this->setPaymentLocationSession($data['PaymentLocationID']);
//			Director::Redirect('');
//		} else {
//			return $this->httpError(404);
//		}
//	}

	/**
	 * Set payment location in the session.
	 *
	 * @param String $paymentLocation Payment Location to set.
	 */
//	public function setPaymentLocationSession($paymentLocation) {
//		Session::set('PaymentLocationID', $paymentLocation);
//	}

	/**
	 * Get the DropdownField for change the current agent
	 * @return void|Form
	 */
//	public function SwitchAgencyForm(){
//		//-- Check not Log as Agent
//		if(!J6Member::isConsultant() || !$client = Client::get_current()) return '';
//
//		//-- Retrieve all the agency from the Agency Class
//		$agencies = Agency::getAllAgenciesAndBranches();
//
//		$options = array(0 => Client::get_current()->Name);
//		foreach($agencies as $row) {
//			if ($row['ClassName'] == "Agency") {
//				$options[$row['ID']] = "{$row['Name']}".(($row['OrganisationCode']) ? ' [ '.$row['OrganisationCode'].' ]' : '');
//			}
//			else if ($row['ClassName'] == "Branch") {
//				$options[$row['ID']] = "{$row['LinkedCode']} - {$row['LinkedName']} - {$row['Name']}".(($row['OrganisationCode']) ? ' [ '.$row['OrganisationCode'].' ]' : '');
//			}
//		}
//
//		//-- Check if select already
//		$current_agency = (Session::get('current_agency')) ? Session::get('current_agency') : 0;
//		//$current_agency = ShoppingCart::current_order()->AgencyID;
//		//-- Create the dropfield
//		$dropdown  = new DropdownField('AgentID', 'Agency', $options, $current_agency);
//		//-- Create the form
//		$form = new Form($this, 'SwitchAgentForm', new FieldSet($dropdown),
//																									new FieldSet(new FormAction('changeAgent', 'Go')));
//		//-- Customization form
//		$form->addExtraClass('form-inline');
//		$form->setFormAction('home/SwitchAgencyForm');
//
//		//-- Return Form
//		return $form;
//	}
//
	/**
	 * Function to apply change on the current agent and currency type
	 * @param $data
	 * @param $form
	 */
//	public function ChangeAgent($data, $form) {
//		if (isset($data['AgentID'])) {
//			// we need to reset payment location when we change the agent
//			Session::clear('PaymentLocationID');
//
//			//-- Change current_agency
//			Session::set('current_agency', $data['AgentID']);
//
//			TabController::UpdateAgency($data, $form);
//			$order = ShoppingCart::current_order();
//			$order->AgencyID = Session::get('current_agency');
//			$order->Write();
//
//			Director::RedirectBack();
//		} else {
//			return $this->httpError(404);
//		}
//	}
//
	/**
	 * Get the DropdownField for change the current agent
	 * @return void|Form
	 */
//	public function SwitchTimezoneForm(){
//		if(!J6Member::currentUser() || !J6Member::currentUser()->isSuperAdmin()) return '';
//
//		if(!$client = Client::get_current()) {
//			return false;
//		}
//
//		$base = array('' => 'SYSTEM TIME (NZ)');
//
//		$timezones = $client->getListTimeZones();
//
//		if($clientTimezone = $client->getField('TimeZone')) {
//			$base[$clientTimezone]  = "CLIENT TIME ($clientTimezone)";
//			unset($timezones[$clientTimezone]);
//		}
//
//		$timezones = array_merge($base, $timezones);
//
//		//-- Check if select already
//		$session = Session::get_all();
//		$current_timezone = (isset($session['current_timezone'])) ? $session['current_timezone'] : $clientTimezone;
//		//debug::show($current_timezone);
//		//-- Create the dropfield
//		$dropdown  = new DropdownField('SystemTimezone', 'Timezone', $timezones, $current_timezone);
//		//-- Create the form
//		$form = new Form($this, 'SwitchTimezoneForm', new FieldSet($dropdown),
//				new FieldSet(new FormAction('changeTimezone', 'Go')));
//		//-- Customization form
//		$form->addExtraClass('form-inline');
//		$form->setFormAction('home/SwitchTimezoneForm');
//
//		//-- Return Form
//		return $form;
//	}
//
	/**
	 * Function to apply change on the current agent and currency type
	 * @param $data
	 * @param $form
	 */
//	public function changeTimezone($data, $form) {
//		if (isset($data['SystemTimezone'])) {
//
//			Session::set('current_timezone', $data['SystemTimezone']);
//
//			//-- Redirection
//			Director::RedirectBack();
//		} else {
//			return $this->httpError(404);
//		}
//	}
//
	/**
	 * Get the DropdownField for changing the current J6Theme
	 * @return void|Form
	 */
//   public function SwitchJ6ThemeForm() {
//		$member = Member::currentUser();
//
//      if ($member && !$member->isSuperAdmin()) {  // Change to !isCustomer() to allow members to switch themes
//         return false;
//      }
//
//		$form = new Form($this, 'SwitchJ6ThemeForm', new FieldSet(
//			new DropdownField('J6Theme', 'Theme', singleton('J6Member')->dbObject('J6Theme')->enumValues(), J6Member::get_current() ? J6Member::get_current()->J6Theme : null)
//		), new FieldSet(
//			new FormAction('changeJ6Theme', 'Go')
//		));
//		$form->addExtraClass('form-inline');
//		$form->setFormAction('home/SwitchJ6ThemeForm');
//		return $form;
//	}
//
	/**
	 * Function to apply change of J6Theme for the current user
	 * @param $data
	 * @param $form
	 */
//	public function changeJ6Theme($data, $form) {
//		if (isset($data['J6Theme']) && $member = J6Member::get_current()) {
//         $client = Client::get_current();
//			if ($client->canView($member)) {
//				$member->J6Theme = $data['J6Theme'];
//				$member->write();
//				Director::redirect($_SERVER['HTTP_REFERER']);
//			} else {
//				return Security::PermissionFailure();
//			}
//		} else {
//			return $this->httpError(404);
//		}
//	}
//
	/**
	 * Function to apply change of J6Theme to the current client
	 * @param $data
	 * @param $form
	 */
	public function changeJ6ThemeForClient($data, $form) {
		if(isset($data['J6Theme']) && $client = Client::get_current()) {
			if($client->canView()) {
				$client->J6Theme = $data['J6Theme'];
				$client->write();
				Director::redirect($_SERVER['HTTP_REFERER']);
			} else {
				return Security::PermissionFailure();
			}
		} else {
			return $this->httpError(404);
		}
	}

	

	

	function getSitePrefix() {
		return self::$siteprefix;
	}

	//Set global and local messages
	public function setMessage($message, $type = false, $forThisController = false, $key = false) {
		Message::set($message, $type, $forThisController, $key);
	}

	public function getMessage() {
		return Message::get();
	}

	public function MessageExists($key = false) {
		return Message::key_exists($key);
	}

	//check which template files to use
	public function NotWebInterface() {
		return !Client::isWebservice();
	}

	public function is_ajax() {
		if(!$this->owner->request)
			return Director::is_ajax();
		return $this->owner->request->getVar('ajax') || Director::is_ajax();
	}

	public function not_ajax() {
		if(!$this->owner->request)
			return !Director::is_ajax();
		return !$this->owner->request->getVar('ajax') && !Director::is_ajax();
	}

	public function isAgent() {
		return J6Member::isAgent();
	}

	/**
	 * New version of SSViewer to add themeable includes.
	 * Having this in the page_controller allows other modules such as ecommerce
	 * to use the new functionality
	 *
	 * Return an SSViewer object to process the data
	 * @return SSViewer The viewer identified being the default handler for this Controller/Action combination
	 */
	function getViewer($action) {
		// Hard-coded templates
		if($this->templates[$action]) {
			$templates = $this->templates[$action];
		} else if($this->templates['index']) {
			$templates = $this->templates['index'];
		} else if($this->template) {
			$templates = $this->template;
		} else {
			// Add action-specific templates for inheritance chain
			$parentClass = $this->class;
			if($action && $action != 'index') {
				$parentClass = $this->class;
				while($parentClass != "Controller") {
					$templates[] = strtok($parentClass, '_') . '_' . $action;
					$parentClass = get_parent_class($parentClass);
				}
			}
			// Add controller templates for inheritance chain
			$parentClass = $this->class;
			while($parentClass != "Controller") {
				$templates[] = strtok($parentClass, '_');
				$parentClass = get_parent_class($parentClass);
			}

			// remove duplicates
			$templates = array_unique($templates);
		}
//		if(Client::isWebservice()) {
//
//
//            $webinterface = array();
//            foreach($templates as $template) {
//                $webinterface[] = 'WebInterface_' . $template;
//                $webinterface[] = $template;
//            }
//            $templates = $webinterface;
//        }
//        $current_theme = J6Member::current_theme();
//        if ($current_theme != 'Original') {
//
//            $newversion = array();
//            foreach($templates as $template) {
//                $newversion[] = $current_theme. '_' . $template;
//                $newversion[] = $template;
//            }
//            $templates = $newversion;
//        }
		return new J6SSViewer($templates);
	}

	/* show menu in web interface or not */

	public function ShowWebInterfaceMenu() {
		return (isset($_REQUEST['WebMenu'])) ? true : false;
	}

	/**
	 * Form which look like to amazon.
	 */
	public function AdvancedHeaderSearch() {
		$quickSearchField = new TextField('search', null, 'Quick Search');
		$quickSearchField->addExtraClass('adjustCommonSizeField');
		$fields = new FieldSet(
				new GroupedDropdownField('type_search', null, array(
			'Order' => array('Order#ID' => 'Order | Number',
				'Order#Surname' => 'Order | Surname',
				'Order#FirstName' => 'Order | Firstname',
				'Order#Payment__AgentReference' => 'Order | Agent Ref'),
			'Customer' => array('Customer#ID' => 'Customer | Number'),
			'Product' => array('J6Product#Title' => 'Product | Name',
				'J6Product#InternalItemID' => 'Product | Code'),
			'Invoice' => array('Invoice#Title' => 'Invoice | Number')
				)), $quickSearchField, new HiddenField('AdvancedHeaderSearch', null, 1)
		);

		$actions = new FieldSet($but = new FormAction('doAddSearch', 'Go'));
		$but->addExtraClass('btn-xs');
		$form = new Form(singleton('Page_Controller'), 'AdvancedHeaderSearch', $fields, $actions);
		new Form(singleton('Page_Controller'), 'AdvancedHeaderSearch', $fields, $actions);

		//-- Pre selection
		if(Session::get('AdvancedHeaderSearch'))
			$form->loadDataFrom(array('type_search' => Session::get('AdvancedHeaderSearch')));

		// TODO : Try to do better
		//-- Fill form if possible
		if($this->request && $this->request->requestVar('AdvancedHeaderSearch')) {
			Session::set('AdvancedHeaderSearch_data', $this->request->requestVar('search'));
		} else {
			$form->loadDataFrom(array('search' => Session::get('AdvancedHeaderSearch_data')));
			Session::clear('AdvancedHeaderSearch_data');
		}
		$form->disableSecurityToken();
		$form->setFormMethod('GET');
		return $form;
	}

	/**
	 * Action search
	 */
	public function doAddSearch($data, $form, $request) {
		//-- Keep in session type of search.
		Session::set('AdvancedHeaderSearch', $request->getVar('type_search'));
		//-- string recuperation
		$type_search = split('#', $request->getVar('type_search'));
		$model = $type_search[0];
		if(in_array($model, array('Invoice', 'J6Product', 'Order', 'Customer'))) {
			$object = singleton($model);
			$controller = $model . 'Controller';
			$controller = new $controller(null, $object);
			$controller->handleRequest($request);
			$resultForm = $controller->search($data, $form, $request);
			$current_theme = J6Member::current_theme();
			if($current_theme == 'Original') {
				return $this->renderWith(array('Product', 'Page'), array('ResultsForm' => $resultForm,
							'ModelSearchForm' => $controller->ModelSearchForm(),
							'Title' => $type_search[0] . ' | ' . $type_search[1] . ' > ' . $request->getVar('search')));
			} else {
				return $this->renderWith(array($current_theme . '_Product', $current_theme . '_Page'), array(
							'ResultsForm' => $resultForm,
							'ModelSearchForm' => $controller->ModelSearchForm(),
							'Title' => $type_search[0] . ' | ' . $type_search[1] . ' > ' . $request->getVar('search')));
			}
		} else {
			Controller::curr()->setMessage('The type of your search is incorrect.', 'error');
			Director::redirectBack();
		}
	}

	public function AdvancedProductSearch() {
		$model = singleton("J6Product");
		$context = $model->getDefaultSearchContext();
		$fields = $context->getSearchFields();
		$fields->removeByName("SupplierID");
		$fields->removeByName("InternalItemID");
		$fields->removeByName("Tags__Title");
		$fields->removeByName("AllowPurchase");
		$titleField = $fields->fieldByName("Title");
		$titleField->Title = "&nbsp;";
		$titleField->Value = "Product Search";
		$form = new Form($model, "ModelSearchForm", $fields, new FieldSet(
				new FormAction('search', 'Go')
				)
		);
		$form->setFormMethod('get');
		$form->setFormAction(str_ireplace('index/', '', $model->Link('ModelSearchForm')));
		return $form;
	}

	

	public function NavigationIcon() {
		return $this->NavIcon; //"Hello";
	}

	public function Breadcrumbs($maxDepth = 20, $unlinked = false, $stopAtPageType = false, $showHidden = false) {
		$page = $this;
		$parts = array();
		$i = 0;
		while(
		$page && (!$maxDepth || sizeof($parts) < $maxDepth) && (!$stopAtPageType || $page->ClassName != $stopAtPageType)
		) {
			if($showHidden || $page->ShowInMenus || ($page->ID == $this->ID)) {
				if($page->URLSegment == 'home') {
					$hasHome = true;
				}
				if(($page->ID == $this->ID) || $unlinked) {
					$parts[] = ("<a class=\"no-decorations\" href=\"" . $page->Link() . "\">" . Convert::raw2xml($page->Title) . "</a>");
				} else {
					$parts[] = ("<a href=\"" . $page->Link() . "\">" . Convert::raw2xml($page->Title) . "</a>");
				}
			}
			$page = $page->Parent;
		}

		return implode(" / ", array_reverse($parts));
	}

	/**
	 * Theme2014 to set nav size in session, called from Ajax
	 */
	public function rememberNavSize() {
		if($this->request->requestVar('nav') == "small") {
			Session::set('navsize', 'small');
			return "small";
		} else if($this->request->requestVar('nav') == "large") {
			Session::set('navsize', 'large');
			return "large";
		}
	}

	/**
	 * Theme2014 to get nav size
	 */
	public function getNavSize() {
		if(Session::get('navsize') == "small") {
			return 'navigation-small';
		}
		return '';
	}

	public function AdvancedCustomerSearch() {
		$model = singleton("Order");
		$context = $model->getDefaultSearchContext();
		$fields = $context->getSearchFields();
		$smallSearch = new FieldSet();
		$titleField = $fields->fieldByName("Surname");
		$titleField->Title = "&nbsp;";
		$titleField->Value = "Order by Surname Search";
		$smallSearch->push($titleField);
		$form = new Form($model, "ModelSearchForm", $smallSearch, new FieldSet(
				new FormAction('search', 'Go')
				)
		);
		$form->setFormMethod('get');
		$form->setFormAction(str_ireplace('index/', '', $model->Link('ModelSearchForm')));
		return $form;
	}

	//Make MultiOrder accessable from any existing controller
	function MultiOrder() {
		return $this->deferredController('TabController');
	}

	function _deferredController($target, $currentRecord = null) {
		//If we are already the right target don't wrap me
		if($this instanceof $target) {
			return $this;
		}

		//Try to resolve against a controller in SiteTree, else Controller Singleton
		if($page = DataObject::get_one('ControllerPage', '"ControllerPage"."Controller" = \'' . $target . '\' AND ("ControllerPage"."Method" IS NULL OR "ControllerPage"."Method" = \'index\')')) {
			$class = $page->Controller;
			$controller = new $class($page);
		} else {
			$controller = singleton($target);
		}

		//Pass in original request
		$controller->request = $this->request;
		//And optional record
		if($currentRecord) {
			$controller->currentRecord = $currentRecord;
		}
		//Check access
		if(!$controller->canView()) {
			return false;
		}
		return $controller;
	}

	/**
	 * 	Method to retrieve a request variable that may be nested in a request array.
	 * 		Will check if request->prefix has been set to determine if the variable is nested.
	 * 		eg Get the variable 'Quantity' from ExtraInfo[1324][Quantity] -  in this case the request->prefix has been set to ExtraInfo[1324]
	 * @param string $field_name - name of request variable to retrieve, eg 'Quantity'
	 * @param string $method - get, post or request, defaults to 'request'
	 * @param string $prefix - override and set a specific prefix map
	 * @return mixed - the request parameter
	 */
	function prefixedVar($field_name, $method = 'request', $prefix = null) {
		//Allow passed in prefix or from request
		if(!$prefix) {
			$prefix = $this->request->prefix;
		}

		//Try to return the field from within the prefixed array
		if(($data = $this->prefixedVars($method, $prefix)) && isset($data[$field_name])) {
			return $data[$field_name];
		} elseif($value = $this->request->{$method . 'Var'}($prefix . $field_name)) {
			//If no data set wrapped in the prefix try to return as a prefixed stiring
			return $value;
		} else {
			//Return from reqular array
			return $this->request->{$method . 'Var'}($field_name);
		}
		//Nothing found
		return false;
	}

	/**
	 * 	Method to retrieve a request variable set that may be nested in a request array.
	 * 		Will check if request->prefix has been set to determine if the variable is nested.
	 * 		eg Get all the variables in from ExtraInfo[1324] as if it was the root $_REQUEST array -  in this case the request->prefix has been set to ExtraInfo[1324]
	 * @param string $method - get, post or request, defaults to 'request'
	 * @param string $prefix - override and set a specific prefix map
	 * @return mixed - the request parameter
	 */
	function prefixedVars($method = 'request', $prefix = null) {
		//Allow passed in prefix or from request
		if(!$prefix) {
			$prefix = isset($this->request->prefix) ? $this->request->prefix : null;
		}
		//Raw data
		$original = $data = $this->request->{$method . 'Vars'}();
		if($prefix) {
			//Step through the array
			$parts = explode('[', $prefix);
			foreach($parts as $part) {
				$key = rtrim($part, ']');
				if(isset($data[$key]) && is_array($data[$key])) {
					//Subset found
					$data = $data[$key];
				} else {
					//Subset not found. Unset $data to make sure it matches the full path not just part.
					$data = array();
					break;
				}
			}
		}
		return $data;
	}

}
