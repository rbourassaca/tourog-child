<?php

if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
        'key' => 'group_5f74ccd72efee',
        'title' => 'Paramètre d\'administration',
        'fields' => array(
            array(
                'key' => 'field_5f74ccf7ec054',
                'label' => 'Affichage de la barre d\'administration.',
                'name' => 'affichage_de_la_barre_dadministration',
                'type' => 'true_false',
                'instructions' => 'Voulez vous voir la barre d\'administration sur front-end du site web?',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-parametre-dadministration',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
endif;