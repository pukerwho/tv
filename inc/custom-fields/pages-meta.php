<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'Other' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
    	Field::make( 'complex', 'crb_main_slider', 'Main Slider' )
                ->add_fields( array(
            Field::make( 'image', 'crb_main_slider_bg', 'Background' )->set_value_type( 'url'),
            Field::make( 'image', 'crb_main_slider_img', 'Image' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_main_slider_title', 'Title' ),
            ) 
        ),
    ) );
}

?>