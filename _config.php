<?php

//Extend the config
Object::add_extension('SiteConfig', 'SocialConnect');

//Extend the controller
DataObject::add_extension('Page_Controller', 'SocialConnectionController');