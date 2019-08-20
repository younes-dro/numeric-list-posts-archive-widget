<?php

/**
 * Class Generate : localization , styles  and js
 */
class Numeric_List_Posts_Settings {
    
    
    static function admin_style (){
        
        add_action('admin_enqueue_scripts', function($hook){
            if($hook == 'widgets.php')
            wp_enqueue_style('nlp-admin', plugins_url('numeric-list-posts-widget/css/admin.css'));
        });
    }
    static function widget_style(){
        add_action('wp_enqueue_scripts', function(){
            wp_enqueue_style('nlp-widget', plugins_url('numeric-list-posts-widget/css/widget.css'));
        });
    }    
    static function admin_js(){
        add_action('admin_enqueue_scripts', function($hook){
            if($hook == 'widgets.php')
            wp_enqueue_script('nlp-admin', plugins_url('numeric-list-posts-widget/js/admin.js'));

        });
    }    
    static function widget_js(){
        add_action('wp_enqueue_scripts', function(){
            wp_enqueue_script('nlp-widget', plugins_url('numeric-list-posts-widget/js/widget.js'));
        });
    }


}

