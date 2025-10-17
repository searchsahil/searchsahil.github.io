<?php
/**
 * Theme functions & definitations
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xiomi
 */

/**
 * Define Theme Folder Path & URL Constant
 * @package xiomi
 * @since 1.0.0
 */

define('XIOMI_THEME_ROOT', get_template_directory());
define('XIOMI_THEME_ROOT_URL', get_template_directory_uri());
define('XIOMI_INC', XIOMI_THEME_ROOT . '/inc');
define('XIOMI_THEME_SETTINGS', XIOMI_INC . '/theme-settings');
define('XIOMI_THEME_SETTINGS_IMAGES', XIOMI_THEME_ROOT_URL . '/inc/theme-settings/images');
define('XIOMI_TGMA', XIOMI_INC . '/plugins/tgma');
define('XIOMI_DYNAMIC_STYLESHEETS', XIOMI_INC . '/theme-stylesheets');
define('XIOMI_CSS', XIOMI_THEME_ROOT_URL . '/assets/css');
define('XIOMI_JS', XIOMI_THEME_ROOT_URL . '/assets/js');
define('XIOMI_ASSETS', XIOMI_THEME_ROOT_URL . '/assets');
define('XIOMI_DEV', true);


/**
 * Theme Initial File
 * @package xiomi
 * @since 1.0.0
 */
if (file_exists(XIOMI_INC . '/theme-init.php')) {
    require_once XIOMI_INC . '/theme-init.php';
}


/**
 * Codester Framework Functions
 * @package xiomi
 * @since 1.0.0
 */
if (file_exists(XIOMI_INC . '/theme-cs-function.php')) {
    require_once XIOMI_INC . '/theme-cs-function.php';
}


/**
 * Theme Helpers Functions
 * @package xiomi
 * @since 1.0.0
 */
if (file_exists(XIOMI_INC . '/theme-helper-functions.php')) {

    require_once XIOMI_INC . '/theme-helper-functions.php';
    if (!function_exists('xiomi')) {
        function xiomi()
        {
            return class_exists('Xiomi_Helper_Functions') ? new Xiomi_Helper_Functions() : false;
        }
    }
}

/**
 * Nav menu fallback function
 * @since 1.0.0
 */
if (is_user_logged_in()) {
    function xiomi_theme_fallback_menu()
    {
        get_template_part('template-parts/default', 'menu');
    }
}