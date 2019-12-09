<?php

define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance

function portfolio_attachments($attachments ){
    $fields = array(
        array(
            "name"=>    'title',
            "type"=>    'text',
            "label"=>   __('Title', 'portfolio')
        ),
        array(
            "name"=>"caption",
            "type"=> "textarea",
            "label"=>__("caption", "portfolio"),
        ),
    );

    $args = array(

            'label' => 'Featured Slider',
            'post_type'=> array('post'),
            'filetype'=>array('image'),
            'note'=>    'Add Slider Image',
            'button_text'=> __('Attach Files', 'portfolio'),
            'fields'=> $fields
    );

    $attachments -> register('slider', $args);
}


add_action( 'attachments_register', 'portfolio_attachments' );


function portfolio_testimonial_attachments($attachments ){
    $fields = array(
        array(
            "name"=>    'name',
            "type"=>    'text', 
            "label"=>   __('name', 'portfolio')
        ),
        array(
            "name"=>"position",
            "type"=> "text",
            "label"=>__("Position", "portfolio"),
        ),
        array(
            "name"=>"company",
            "type"=> "text",
            "label"=>__("Company", "portfolio"),
        ),
        array(
            "name"=>"testimonials",
            "type"=> "textarea",
            "label"=>__("Testimonials", "portfolio"),
        ),
    );

    $args = array(

            'label' => 'Testimonials',
            'post_type'=> array('page'),
            'filetype'=>array('image'),
            'note'=>    'Add Testimonials',
            'button_text'=> __('Attach Files', 'portfolio'),
            'fields'=> $fields
    );

    $attachments -> register('testimonials', $args);
}
add_action( 'attachments_register', 'portfolio_testimonial_attachments' );

function portfolio_team_attachments($attachments ){
    $fields = array(
        array(
            "name"=>    'name',
            "type"=>    'text', 
            "label"=>   __('name', 'portfolio')
        ),
        array(
            "name"=>"position",
            "type"=> "text",
            "label"=>__("Position", "portfolio"),
        ),
        array(
            "name"=>"company",
            "type"=> "text",
            "label"=>__("Company", "portfolio"),
        ),
        array(
            "name"=>"bio",
            "type"=> "textarea",
            "label"=>__("Bio", "portfolio"),
        ),
        array(
            "name"=>"email",
            "type"=> "text",
            "label"=>__("Email", "portfolio"),
        ),
    );

    $args = array(

            'label' => 'Team',
            'post_type'=> array('page'),
            'filetype'=>array('image'),
            'note'=>    'Add team section',
            'button_text'=> __('Attach Files', 'portfolio'),
            'fields'=> $fields
    );

    $attachments -> register('team', $args);
}
add_action( 'attachments_register', 'portfolio_team_attachments' );

