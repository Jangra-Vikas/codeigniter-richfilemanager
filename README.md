# codeigniter-richfilemanager
Simple integration of the RichFileManager Package
(<https://github.com/servocoder/RichFilemanager>) into CodeIngiter.

**Installation**

-   Step 1: We will use the composer for integration so that it will be easy to install and upgrades.

-   Step 2: Tell the CodeIgniter to auto load the composer installed packages in application/vendor by set composer_autoland to TRUE
        `$config['composer_autoload'] = TRUE;` in application/config/config.php

-   Step 3: Add composer.json to codeigniter root folder if does not exit and add the following code
```javascript
  "require": {		
      "servocoder/richfilemanager-php": "^1.2"
    },
    "config": {
          "vendor-dir": "application/vendor"        
      }	
```        
	
-   Step 4:
    -   Run `compser install` in project root folder. 
    -   Composer will install richfilemanager-php and keep the files under
        application/vendor folder. CodeIgniter will autoload richfildemanager
        package to our project.

-   Step 5:
    -   Set the router (optional)
        1.  Add the following `$route['richfilemanager/(:any)'] =
            'richfilemanager/\$1`; an entry to application/config/routes.php
    -   Copy the following files into your project.
        1.  Server component Setup:
            -   application/config/richfilemanagerlib.php
            -   application/controllers/RichFilemanager.php                   
            -   application/libraries/RichFilemanagerLib.php
	          -   application/logs/richfilemanager-log.php  

        2.  Client component Setup:
            -   application/views/richfilemanager.html
            -   config
            -   images
            -   languages
            -   libs
            -   src
            -   themes
            -   userfiles

-   Step 6:
    -   http://<project.com>/richfilemanager
    -   Eg: http://codeigniter.richfilemanager/richfilemanager

Versions:

1.  Codeigniter - v3.1.8 ( <https://codeigniter.com/> )
2.  RichFileManager –
    [v2.7.5](https://github.com/servocoder/RichFilemanager/tree/v2.7.5)
    (<https://github.com/servocoder/RichFilemanager>)
3.  RichFileManager-PHP - v1.2.4
    (<https://github.com/servocoder/RichFilemanager-PHP>)



