<?php

namespace App\Services;

class Ajax
{
    public function init()
    {
        // Setup Ajax action hook
        add_action('wp_ajax_get_example', array($this, 'getExample'));
        add_action('wp_ajax_nopriv_get_example', array($this, 'getExample'));

        add_action('wp_ajax_load_more_member', array($this, 'loadMoreMem'));
        add_action('wp_ajax_nopriv_load_more_member', array($this, 'loadMoreMem'));

        // add_action('wp_ajax_load_more_posts', array($this, 'loadMorePosts'));
        // add_action('wp_ajax_nopriv_load_more_posts', array($this, 'loadMorePosts'));
    }
    public function getExample()
    {
        $website = (isset($_POST['website'])) ? esc_attr($_POST['website']) : '';
        $content = Helpers::ajaxRender('test-ajax.blade.php', [
            'key1' => 'ok1',
            'key2' => 'ok2',
        ]);
        wp_send_json_success([
            'text' => 'Wellcome ' . $website,
            'value' => $content,
        ]);
    }

    function loadMoreMem()
    {
        ob_start();
        $member = Queries::getMember($_POST['page']);

        if ($member->have_posts()) :

            foreach ($member->posts as $mem) {
                echo '<div class="max-w-[312px]">';
                    echo '<div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">';
                        echo '<img class="object-cover w-full h-[224] md:h-[256px] xl:h-[320px]" src="'. $mem->img['url'] .'" alt="Person" />';
                            echo '<div class="member-info absolute inset-0 flex flex-col justify-center px-10 py-8 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">';
                                echo '<a href="'.$mem->mem_link['url'] .'">'.$mem->mem_link['title'].' </a>';
                                echo $mem->about_me;
                            echo '<div class="flex items-center justify-center space-x-3">';
                                foreach ($mem->mem_social as $social){
                                    echo '<a class="p-6" href="'. $social['link']['url'] .'" rel="noreferrer" target="'. $social['link']['target'] .'"';
                                        echo 'class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">';
                                        echo '<img src="'. $social['icon']['url'] .'" alt="instagram link" class="h-8 iconow" />';
                                    echo '</a>';
                                }                              
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        endif;
        
        wp_reset_query();
        $result = ob_get_clean();
        wp_send_json_success([
            'result' => $result,
        ]);
    }
    
}