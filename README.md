SilverStripe Social Connections Module
======================================

Maintainer Contacts
-------------------
*  Frank Mullenger 
   [My Blog](http://deadlytechnology.com)

Requirements
------------
* SilverStripe 2.4

Documentation
-------------
To create social media links from the site config easily and include them in templates with default icons.

Installation Instructions
-------------------------
1. Place this directory in the root of your SilverStripe installation, rename the folder 'socialconnect'.
2. Visit yoursite.com/dev/build?flush=1 to rebuild the database.

Usage Overview
--------------

1. Go to site config settings in the CMS and click on the 'Social Connections' tab.
2. Add a social connection for a certain type
3. Include the SocialConnect.ss template file in the template with <% include SocialConnect %>.

Todo
----
1. Adding more types with default icons
2. Allowing users to upload new icons to override packaged icons

Known Issues
------------
1. Site config ID not saved correctly for each SocialConnection, so probably does not work with multiple site configs
