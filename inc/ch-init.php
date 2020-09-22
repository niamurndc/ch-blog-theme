<?php

function ch_init(){

  // add theme support
  add_theme_support( 'title-tag');
  add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 1100,
  ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'customize-selective-refresh-widgets' );
  add_theme_support( 'aline-wide' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
  add_editor_style( 'editor-style.css' );


  
  // register menu
  register_nav_menu( 'primary', __( 'Primary Menu', 'chblog' ) );
}