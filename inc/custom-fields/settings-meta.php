<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Common'), array(
        Field::make( 'image', 'crb_logo', 'Logo' )->set_value_type( 'url'),
    ) )
    
    ->add_tab( __('Contacts'), array(
        Field::make( 'text', 'crb_email_sales', 'Email (Sales)' ),
        Field::make( 'text', 'crb_email_logistic', 'Email (Logistic)' ),
        Field::make( 'text', 'crb_email_resseler', 'Email (Resseler)' ),
        Field::make( 'text', 'crb_email_support', 'Email (Support)' ),
    ) )
    ->add_tab( __('Links'), array(
        Field::make( 'text', 'crb_links_resseler_agent', 'Reseller/Agent' ),
        Field::make( 'text', 'crb_links_customer', 'Customer' ),
        Field::make( 'text', 'crb_links_subscribe', 'Subscribe' ),
        Field::make( 'text', 'crb_links_buy_now', 'Buy Now' ),
    ) );
}

?>