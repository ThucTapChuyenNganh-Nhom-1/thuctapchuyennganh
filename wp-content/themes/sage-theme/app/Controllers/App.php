<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo.svg';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    public static function getMemberInfo($post)
    {
        // $dataMem = $post;
        // foreach ($post as $test) {
        //     $cus = get_field('mota',$test->ID);
        //   }


        // foreach ($post as $item) {
        //     $item->post_mota = get_field('mota', $item->ID);
        // // var_dump($item);

        // }
        $post->des = get_field('description', $post->ID);
        $post->name = get_field('name', $post->ID);
        $post->sex = get_field('sex', $post->ID);
        $post->dateOB = get_field('date', $post->ID);
        $post->hobby = get_field('hobby', $post->ID);
        $post->avt = get_field('personal_image', $post->ID);
        $post->ability = get_field('ability', $post->ID);
        $post->project = get_field('project', $post->ID);
        $post->contact = get_field('contact', $post->ID);
        $post->mxh = get_field('mxh', $post->ID);
        return $post;
        
    }

    public static function getResourceInfo($post)
    {
        $post->project = get_field('project', $post->ID);
        return $post;       
    }

}
