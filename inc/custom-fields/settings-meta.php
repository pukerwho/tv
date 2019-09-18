<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Common'), array(
        Field::make( 'image', 'crb_logo', 'Logo' )->set_value_type( 'url'),
    ) )
    
    ->add_tab( __('Блок О НАС'), array(
        Field::make( 'rich_text', 'crb_aboutus_text', 'Текст О НАС' ),
    ) );
}

?>