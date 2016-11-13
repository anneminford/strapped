<?php

$section = new CPT(array(
    'post_type_name' => 'section',
    'singular' => __('Section', 'bootstrapwp'),
    'plural' => __('Section', 'bootstrapwp'),
    'slug' => 'section'
),
    array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-portfolio'
));

$section->register_taxonomy(array(
    'taxonomy_name' => 'section_tags',
    'singular' => __('Section Tag', 'bootstrapwp'),
    'plural' => __('Section Tags', 'bootstrapwp'),
    'slug' => 'section-tag'
));

