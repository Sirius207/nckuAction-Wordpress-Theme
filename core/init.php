<?php

//Redux framework core
if ( ! class_exists( 'ReduxFramework' ) && file_exists( NCKUACTION_THEME_CORE . 'themeOptions/ReduxCore/framework.php' ) ) {
	require_once NCKUACTION_THEME_CORE . 'themeOptions/ReduxCore/framework.php';
}

/*
 * Load custom widgets
 */
if ( file_exists( NCKUACTION_THEME_CORE . 'widgets/widgets.php' ) ) {
	require NCKUACTION_THEME_CORE . 'widgets/widgets.php';
}

if ( function_exists('register_sidebar') ){
register_sidebar(array(
'name' => '側邊欄',
'id' => 'sidebar',
'description' => '顯示於網頁右方。',
'before_widget' => '<section id="%1$s" class="sidebar-right">',
'after_widget' => '</section>',
'before_title' => '<h1 class="sidebar-title">',
'after_title' => '</h1>'
));
}