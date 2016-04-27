<?php

/**
 * WooCommerce product data tab definition
 *
 * @return array
 */

add_action('wc_cpdf_init', 'prefix_custom_product_data_tab_init', 10, 0);
if(!function_exists('prefix_custom_product_data_tab_init')) :

   function prefix_custom_product_data_tab_init(){


     return array(
         'custom_data_2' => array(
             'tab_name' => __('Custom Data 2', 'wc_cpdf'),
             'items' => array(
                 array(
                     'id' => '_mytot_2',
                     'type' => 'text',
                     'label' => __('Text ABCD', 'wc_cpdf'),
                     'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
                     'class' => 'large',
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                     'value' => 1111,
                 )
             ),
         ),
         'custom_data_1' => array(
             'tab_name' => __('Custom Data', 'wc_cpdf'),
             'items' => array(
                 array(
                     'id' => '_mytext',
                     'type' => 'text',
                     'label' => __('Text', 'wc_cpdf'),
                     'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
                     'class' => 'large',
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_mynumber',
                     'type' => 'number',
                     'label' => __('Number', 'wc_cpdf'),
                     'placeholder' => __('Number.', 'wc_cpdf'),
                     'class' => 'short',
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_mytextarea',
                     'type' => 'textarea',
                     'label' => __('Textarea', 'wc_cpdf'),
                     'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
                     'style' => 'width:70%;height:140px;',
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_mycheckbox',
                     'type' => 'checkbox',
                     'label' => __('Checkbox', 'wc_cpdf'),
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_myselect',
                     'type' => 'select',
                     'label' => __('Select', 'wc_cpdf'),
                     'options' => array(
                         'option_1' => 'Option 1',
                         'option_2' => 'Option 2',
                         'option_3' => 'Option 3'
                     ),
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_myradio',
                     'type' => 'radio',
                     'label' => __('Radio', 'wc_cpdf'),
                     'options' => array(
                         'radio_1' => 'Radio 1',
                         'radio_2' => 'Radio 2',
                         'radio_3' => 'Radio 3'
                     ),
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_myhidden',
                     'type' => 'hidden',
                     'value' => 'Hidden Value',
                 ),

                 array(
                     'id' => '_mymultiselect',
                     'type' => 'multiselect',
                     'label' => __('Multiselect', 'wc_cpdf'),
                     'placeholder' => __('Multiselect maan!', 'wc_cpdf'),
                     'options' => array(
                         'option_1' => 'Option 1',
                         'option_2' => 'Option 2',
                         'option_3' => 'Option 3',
                         'option_4' => 'Option 4',
                         'option_5' => 'Option 5'
                     ),
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                     'class' => 'medium'
                 ),

                 array(
                     'id' => '_myimage',
                     'type' => 'image',
                     'label' => __('Image 1', 'wc_cpdf'),
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_mygallery',
                     'type' => 'gallery',
                     'label' => __('Gallery', 'wc_cpdf'),
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_mycolor',
                     'type' => 'color',
                     'label' => __('Select color', 'wc_cpdf'),
                     'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
                     'class' => 'large',
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'id' => '_mydatepicker',
                     'type' => 'datepicker',
                     'label' => __('Select date', 'wc_cpdf'),
                     'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
                     'class' => 'large',
                     'description' => __('Field description.', 'wc_cpdf'),
                     'desc_tip' => true,
                 ),

                 array(
                     'type' => 'divider'
                 )
             )
         ),

     );

   }

endif;
