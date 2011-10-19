<?php
class SocialConnectionController extends Extension {
  
  public function SocialConnections() {

    //$siteConfig = SiteConfig::current_site_config();
    //$socialConnections = $siteConfig->SocialConnections();
    //return $siteConfig->SocialConnections();
    
    return DataObject::get('SocialConnection');
  }
}