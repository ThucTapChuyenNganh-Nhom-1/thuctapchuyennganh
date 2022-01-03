<?php

namespace App\Services;

class Queries
{
    public static function getOptionField($fieldName)
    {
        return get_field($fieldName, ACF_OPTION);
    }
    
    public static function testExample()
    {
        $args = [
            'post_type' => 'post'
        ];
        $queryAll = new \WP_Query($args);
        return [
            'posts' => $queryAll->post
        ];
    }

    public static function getMember($page = 1)
    {
        $args = [
            'post_type' =>  'member',
            'posts_per_page' => '4',
            'paged' => $page
        ];

        $member = new \WP_Query($args);

        foreach ($member->posts as $mem) {
            $mem->desc = get_field('description', $mem->ID);
            $mem->img = get_field('personal_image', $mem->ID);
            $mem->mem_link = get_field('mem_link', $mem->ID);
            $mem->mem_social = get_field('mem_social', $mem->ID);
            $mem->name = get_field('name', $mem->ID);
            $mem->sex = get_field('sex', $mem->ID);
            $mem->date = get_field('date', $mem->ID);
            $mem->hobby = get_field('hobby', $mem->ID);
            $mem->ability = get_field('ability', $mem->ID);
            $mem->project = get_field('project', $mem->ID);
            $mem->contact = get_field('contact', $mem->ID);
            $mem->about_me = get_field('about_me', $mem->ID);
        }

        return $member;
    }

    // public static function getPosts($page = 1)
    // {
    //     $args = [
    //         'post_type' =>  'post',
    //         'posts_per_page' => '3',
    //         'paged' => $page
    //     ];
    //     $posts = new \WP_Query($args);
    //     return $posts;
    // }
}