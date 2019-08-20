<?php

/**
 * 
 */
class Numeric_List_Posts extends WP_Widget {

    function __construct() {

        add_action('init', array($this, 'widget_textdomain'));
        parent::__construct(
                'numeric-lis-posts', __('Numeric Lists Posts', 'nlp-widget'), array(
            'classename' => 'numeric-lis-posts',
            'description' => __('List you posts archive by number.', 'nlp-widget')
        ));

        // Styles
        Numeric_List_Posts_Settings::admin_style();
        Numeric_List_Posts_Settings::widget_style();
        //JS
        Numeric_List_Posts_Settings::admin_js();
        Numeric_List_Posts_Settings::widget_js();
    }

    function form($instance) {

        $instance = wp_parse_args(
                (array) $instance, ['name' => '']
        );
        
        $NLP_view = new Numeric_List_Posts_Views($this, $instance );
        $NLP_view->widget_admin_view();
    }

    function widget($args, $instance) {
        
    }

    function update($new_instance, $old_instance) {
        $old_instance['name'] = $new_instance['name'];
        
        return $old_instance;
    }

    function widget_textdomain() {
        load_plugin_textdomain('nlp-widget', false, NLP_ROOT . 'languages/');
    }

}
