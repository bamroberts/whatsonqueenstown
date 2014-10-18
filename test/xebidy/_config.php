<?php 

// Default timezone set, you can override this in your own _config.php
date_default_timezone_set('Pacific/Auckland');

//DataObject::add_extension('SiteConfig', 'GoogleAnalyticsSiteConfigExtension');
//DataObject::add_extension('SiteTree', 'GoogleAnalyticsSiteTreeExtension');
DataObject::add_extension('SiteTree', 'SiteTreeExtension');

ShortcodeParser::get()->register('Like', array('ShortcodeHandlers', 'LikeHandler'));
ShortcodeParser::get()->register('YouTube', array('ShortcodeHandlers','YouTubeHandler'));
ShortcodeParser::get()->register('IFrame', array('ShortcodeHandlers','IFrameHandler'));

Object::add_extension("ContentController", "ContentControllerExtension");
Object::add_extension("DataObjectSet", "Pagination");
Object::add_extension("StringField", "StringFieldExtension");

HtmlEditorConfig::get('cms')->enablePlugins('media');

i18n::set_locale('en_NZ');