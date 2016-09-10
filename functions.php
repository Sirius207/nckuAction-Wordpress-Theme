<?php
$theme = wp_get_theme();
define( 'NCKUACTION_THEME_NAME', $theme->name );
define( 'NCKUACTION_THEME_DIR', get_template_directory() );
define( 'NCKUACTION_THEME_URI', get_template_directory_uri() );
define( 'NCKUACTION_THEME_CSS_URI', 	NCKUACTION_THEME_URI . '/assets/css/' );
define( 'NCKUACTION_THEME_JS_URI', 		NCKUACTION_THEME_URI . '/assets/js/' );
define( 'NCKUACTION_THEME_IMAGES_DIR', 	NCKUACTION_THEME_URI . '/assets/images/' );
define( 'NCKUACTION_THEME_CORE', 		NCKUACTION_THEME_DIR . '/core/' );
define( 'NCKUACTION_THEME_CORE_URI', 	NCKUACTION_THEME_URI . '/core/' );
require_once NCKUACTION_THEME_CORE . 'init.php';
