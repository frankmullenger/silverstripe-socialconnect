<?php
class SocialConnect extends DataObjectDecorator {

  //Has many SocialConnections, facebook and twitter as requireDefaultRecords()
  //tick which ones to pick, change the URL and perhaps upload a new image?
  
  function extraStatics() {
		return array(
			'has_many' => array(
			  'SocialConnections' => 'SocialConnection'
			)
		);
	}
	
  function updateCMSFields(FieldSet &$fields) {
    
    $manager = new ComplexTableField(
      $this->owner,
      'SocialConnections',
      'SocialConnection',
      array(
        'SummaryType' => 'Type',
        'LinkURL' => 'Link',
        'Title' => 'Title'
      ),
      'getCMSFields_forPopup'
    );
    $fields->addFieldToTab("Root.SocialConnections", $manager);
	}
  
}