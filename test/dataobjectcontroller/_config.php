<?php

if (class_exists('StringField')) {
	Object::add_extension('StringField', 'StringFieldExtension');
}

DataObject::add_extension('DataObject', 'DataObjectExtras');