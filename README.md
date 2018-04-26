# codeigniter-richfilemanager
Codeigniter RichFileManager Integration
**codeigniter-richfilemanager**

Simple integration of the RichFileManager Package
(<https://github.com/servocoder/RichFilemanager>) into CodeIngiter.

**Installation**

-   Step 1:

    -   We will use the composer for integration so that it will be easy to
        install and upgrades.

-   Step 2:

    -   Tell the CodeIgniter to auto load the composer installed packages in
        application/vendor by set composer_autoland to TRUE
        \`\`\`\$config['composer_autoload'] = TRUE;\`\`\` in
        application/config/config.php

-   Step 3:

    -   Add composer.json to codeigniter root folder if does not exit and add
        the following code

        1.  // composer will create a vendor folder under codeigniter
            application folder

        2.  "config": {

        3.  "vendor-dir": "application/vendor"

        4.  },

        5.  "require": {

        6.  "servocoder/richfilemanager-php": "\^1.2"

        7.  },

-   Step 4:

    -   Composer will install richfilemanager-php and keep the files under
        application/vendor folder. CodeIgniter will autoload richfildemanager
        package to our project.

-   Step 5:

    -   Set the router (optional)

        1.  Add the following \$route['richfilemanager/(:any)'] =
            'richfilemanager/\$1'; entry to application/config/routes.php

    -   Copy the following files into your project.

        1.  Server component Setup:

            -   application/config/richfilemanagerlib.php

            -   application/controllers/RichFilemanager.php

            -   application/libraries/RichFilemanagerLib.php

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

    -   Eg: http://codeigniter.richfilemanager/richfilemanager
