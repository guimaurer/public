<?php

add_theme_support('post-thumbnails');


function incluir_blocks() {
    foreach (glob(get_stylesheet_directory() . '/template-parts/blocks/*.php') as $block) {
       include_once($block);
    }
 }
 add_action('init', 'incluir_blocks');
?>