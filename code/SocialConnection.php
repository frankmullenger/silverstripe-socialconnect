<?php
class SocialConnection extends DataObject {
  
  public static $db = array(
    'Title' => 'Varchar',
    'LinkURL' => 'Varchar',
    'Type' => "Enum('facebook, twitter, rss', 'facebook')"
	);
	
	static $has_one = array (
    'SiteConfig' => 'SiteConfig'
  );
  
  public $types = array(
    'facebook' => 'Facebook',
    'twitter' => 'Twitter',
    'rss' => 'RSS'
  );
  
  public function getCMSFields_forPopup() {

    $fields = new FieldSet();
    
    $typeField = new DropdownField('Type', 'Type', $this->types);
    $typeField->setEmptyString('None');
    $fields->push($typeField);

    $fields->push(new TextField('LinkURL'));
    $fields->push(new TextField('Title'));

    //$siteConfig = SiteConfig::current_site_config();
    //$fields->push(new TextField('SiteConfigID', 'SiteConfigID', $siteConfig->ID));

    return $fields;
  }
  
  function SummaryType() {
    return $this->types[$this->Type];
  }
}