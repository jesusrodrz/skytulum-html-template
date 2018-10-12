<?php
$post_types['models'] = array(
    'name'=>'models',
    'post_id' =>'models',
    'custom-fields' => array(
      $custom_fields['image'],
      $custom_fields['list'],
      $custom_fields['area'],
      $custom_fields['sell'],
    ) ,
    'args' =>  array(
      'labels' => array(
        'name' => __( 'Modelos', 'sky-tulum' ),
        'singular_name' => __( 'Modelo', 'sky-tulum' ),
        'add_new_item' => __( 'Agregar nuevo modelo', 'sky-tulum' ),
        'edit_item' => __( 'Editar modelo', 'sky-tulum' ),
        'new_item' => __( 'Nuevo modelo', 'sky-tulum' ),
        'view_item' => __( 'Ver', 'sky-tulum' ),
        'search_items' => __( 'Buscar modelo', 'sky-tulum' ),
        'not_found' => __( 'no encontrado', 'sky-tulum' ),
        'not_found_in_trash' => __( 'no encontrado en la papelera', 'sky-tulum' ),
      ),
      'supports' => array(
        'title',
        'thumbnail'
      ),
      'supports_reg_tax' => array(
        'category' => '',
        'post_tag' => '',
      ),
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'description' => 'View new signals',
      'menu_position' => 5,
      'public' => true,
      'hierarchical' => false,
      'has_archive' => false,
      'rewrite' => array(
        'with_front' => true,
        'feeds' => false,
        'pages' => true,
        'ep_mask' => 0,
        'slug'=>__( 'modelos', 'sky-tulum' )
      ),
      'query_var' => true,
      'can_export' => true,
      'show_in_rest' => true,
      'rest_base' => 'models',
      'capabilities' => array(
        'create_posts'
      ),
      'menu_icon' => 'dashicons-admin-multisite',
    )
  );
  $post_types['specs'] = array(
    'name'=>'specs',
    'post_id' =>'specs',
    'custom-fields' => array(
      $custom_fields['image'],
      $custom_fields['unit'],
      $custom_fields['type'],
      $custom_fields['total'],
    ) ,
    'args' =>  array(
      'labels' => array(
        'name' => __( 'Pisos', 'sky-tulum' ),
        'singular_name' => __( 'Piso', 'sky-tulum' ),
        'add_new_item' => __( 'Agregar nuevo piso', 'sky-tulum' ),
        'edit_item' => __( 'Editar piso', 'sky-tulum' ),
        'new_item' => __( 'Nuevo piso', 'sky-tulum' ),
        'view_item' => __( 'Ver', 'sky-tulum' ),
        'search_items' => __( 'Buscar piso', 'sky-tulum' ),
        'not_found' => __( 'no encontrado', 'sky-tulum' ),
        'not_found_in_trash' => __( 'no encontrado en la papelera', 'sky-tulum' ),
      ),
      'supports' => array(
        'title',
        'thumbnail'
      ),
      'supports_reg_tax' => array(
        'category' => '',
        'post_tag' => '',
      ),
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'description' => 'View new signals',
      'menu_position' => 5,
      'public' => true,
      'hierarchical' => false,
      'has_archive' => false,
      'rewrite' => array(
        'with_front' => true,
        'feeds' => false,
        'pages' => true,
        'ep_mask' => 0,
        'slug'=>__( 'pisos', 'sky-tulum' )
      ),
      'query_var' => true,
      'can_export' => true,
      'show_in_rest' => true,
      'rest_base' => 'specs',
      'capabilities' => array(
        'create_posts'
      ),
      'menu_icon' => 'dashicons-admin-multisite',
    )
  );