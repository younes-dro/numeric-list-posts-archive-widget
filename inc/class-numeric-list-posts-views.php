<?php

/**
 * 
 */
class Numeric_List_Posts_Views {

    /**
     *
     * @var Object The instance of the Widget.
     */
    public $widget;

    /**
     *
     * @var Array The instance of the form. 
     */
    public $instance;

    /**
     *
     * @var String The widget html output.
     */
    private $html;

    /**
     * 
     * @param Object $WIDGET The instance of the Widget
     * @param Array $instance The form instance.
     */
    function __construct($WIDGET, $instance) {
        $this->widget = $WIDGET;
        $this->instance = $instance;
    }

    /**
     * Display the widget.
     * 
     */
    function widget_admin_view() {
        echo $this->_widget_admin_view();
    }

    /**
     * Build the widget html output.
     * 
     * @return String The widget html output
     */
    private function _widget_admin_view() {

        $this->html = '<div class="nlp-widget">';
        $this->html .= '<label>' . esc_html__('Name', 'nlp-widget') . '</label>';
        $this->html .= '<input type="text" '
                . 'class="widefat"'
                . 'id="' . $this->widget->get_field_id("name") . '"'
                . ' name="' . $this->widget->get_field_name("name") . '" value="' . $this->instance["name"] . '" />';
        $this->html .= '</div>';

        return $this->html;
    }

}
