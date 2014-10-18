<?php

class ExtendedTableListField extends TableListField {

	/**
	 * @var $itemClass string Class name for each item/row
	 */
	public $itemClass = 'ExtendedTableListField_Item';
	public $actions = array(
		'show' => array(
			'label' => 'Show',
			'icon' => 'cms/images/show.png',
			'icon_disabled' => 'cms/images/show_disabled.png',
			'class' => 'popuplink showlink',
		),
		'edit' => array(
			'label' => 'Edit',
			'icon' => 'cms/images/edit.gif',
			'icon_disabled' => 'cms/images/edit_disabled.gif',
			'class' => 'popuplink editlink',
		),
		'delete' => array(
			'label' => 'Delete',
			'icon' => 'cms/images/delete.gif',
			'icon_disabled' => 'cms/images/delete_disabled.gif',
			'class' => 'popuplink deletelink',
		),
	);

	public function getTemplate() {
		return $this->template;
	}

}

class ExtendedTableListField_Item extends TableListField_Item {

	function ShowLink() {
		return $this->item->Link('view');
	}

	function EditLink() {
		return $this->item->Link('edit');
	}

}
