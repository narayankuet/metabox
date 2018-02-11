<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();



// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'work_custom_post_options',
  'title'     => 'Work Options',
  'post_type' => 'Porfolio',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'Sub Title',
          'desc' => 'Type work category',
        ),
        array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'Link Text',
          'default' => 'Visit Website',
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
        ),
        
        array(
          'id'              => 'group_information',
          'type'            => 'group',
          'title'           => 'Work Informations',
          'button_title'    => 'Add New Work Information',
          'accordion_title' => 'New Work Informations',
          'fields'          => array(
            array(
              'id'    => 'information',
              'type'  => 'text',
              'title' => 'Work meta title',
            ),
            array(
              'id'    => 'value',
              'type'  => 'text',
              'title' => 'Work meta value',
            ),
          ),
        ),

          


      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
