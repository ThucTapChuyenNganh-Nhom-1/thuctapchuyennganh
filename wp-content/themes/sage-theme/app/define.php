<?php

/**
 * Define constant
 */

define('TEMPLATE_URL', get_template_directory_uri());
define('RESOURCES_PATH', get_stylesheet_directory());
define('NAME_THEME_URL', str_replace('/resources', '', get_template_directory_uri()));
if (defined('IS_WP_PROD') && IS_WP_PROD) {
    define('TEMPLATE_ASSETS_URL', get_template_directory_uri() . '/assets/dist');
} else {
    define('TEMPLATE_ASSETS_URL', get_template_directory_uri() . '/assets');
}
define('IMG_BASE64', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC');
define('S3_FONT', 'https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap');
define('ACF_OPTION', 'option');
define('img_avt', 'https://secure.gravatar.com/avatar/b7a4e46ee7a42ccf07f7697b1d803be5?s=1024&d=mm&r=g');
define('img_project', 'https://icon-library.com/images/ios-folder-icon/ios-folder-icon-20.jpg');
define('SCREEN', 'screen');


// define in RegisterPostType.php
define('ICON_ID', 'icon_id');
define('FEATURE_IMG_NAME', 'feature_img_name');
define('REWRITE_SLUG', 'rewrite_slug');
define('TAXONOMY_NAME', 'taxonomy_name');
define('TAXONOMY_SLUG', 'taxonomy_slug');

// define in Helpers.php
define('PREG_MATCH_YOUTUBE', "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/");
define('PREG_MATCH_VIMEO', '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im');
