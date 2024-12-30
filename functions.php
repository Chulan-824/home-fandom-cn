<?php
/**
 * 子主题功能和定义
 */

// 禁用管理员工具栏
add_filter('show_admin_bar', '__return_false');

// 加载父主题样式
function fountain_blog_child_enqueue_styles() {
    // 加载父主题样式
    wp_enqueue_style('fountain-blog-style', 
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
    
    // 加载子主题样式
    wp_enqueue_style('fountain-blog-child-style',
        get_stylesheet_uri(),
        array('fountain-blog-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'fountain_blog_child_enqueue_styles'); 