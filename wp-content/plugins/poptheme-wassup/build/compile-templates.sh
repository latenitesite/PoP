rm $POP_APP_PATH/wp-content/plugins/poptheme-wassup/js/dist/templates/*.tmpl.js
rm $POP_APP_PATH/wp-content/plugins/poptheme-wassup/php-templates/compiled/*.php
cd $POP_APP_PATH/wp-content/plugins/poptheme-wassup/js/templates/

handlebars layouts/layout-link-access.tmpl -m --extension=tmpl -f ../dist/templates/layout-link-access.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=layouts/layout-link-access.tmpl output=../../php-templates/compiled/layout-link-access.php
handlebars layouts/layout-volunteertag.tmpl -m --extension=tmpl -f ../dist/templates/layout-volunteertag.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=layouts/layout-volunteertag.tmpl output=../../php-templates/compiled/layout-volunteertag.php
handlebars layouts/speechbubble.tmpl -m --extension=tmpl -f ../dist/templates/speechbubble.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=layouts/speechbubble.tmpl output=../../php-templates/compiled/speechbubble.php
handlebars pagesections/pagesection-background.tmpl -m --extension=tmpl -f ../dist/templates/pagesection-background.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=pagesections/pagesection-background.tmpl output=../../php-templates/compiled/pagesection-background.php
handlebars pagesections/pagesection-side.tmpl -m --extension=tmpl -f ../dist/templates/pagesection-side.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=pagesections/pagesection-side.tmpl output=../../php-templates/compiled/pagesection-side.php
handlebars pagesections/pagesection-top.tmpl -m --extension=tmpl -f ../dist/templates/pagesection-top.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=pagesections/pagesection-top.tmpl output=../../php-templates/compiled/pagesection-top.php
handlebars themes/simple/pagesections/pagesection-topsimple.tmpl -m --extension=tmpl -f ../dist/templates/pagesection-topsimple.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=themes/simple/pagesections/pagesection-topsimple.tmpl output=../../php-templates/compiled/pagesection-topsimple.php

##############################
# User Role Editor
##############################
handlebars layouts/ure-layoutuser-profileindividual-details.tmpl -m --extension=tmpl -f ../dist/templates/ure-layoutuser-profileindividual-details.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=layouts/ure-layoutuser-profileindividual-details.tmpl output=../../php-templates/compiled/ure-layoutuser-profileindividual-details.php
handlebars layouts/ure-layoutuser-profileorganization-details.tmpl -m --extension=tmpl -f ../dist/templates/ure-layoutuser-profileorganization-details.tmpl.js
php -f $POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/compile.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-frontendengine/php-templates/cli/helper-functions.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helpers.handlebars.php require[]=$POP_APP_PATH/wp-content/plugins/pop-coreprocessors/php-templates/cli/helper-functions.php input=layouts/ure-layoutuser-profileorganization-details.tmpl output=../../php-templates/compiled/ure-layoutuser-profileorganization-details.php

