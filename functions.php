<?php
// 添加动态<title>标签
function followandre_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_theme_setup', 'followandre_theme_support');

//动态引入样式
function followandrew_register_styles()
{
    // 创建指向style.css中Version的变量
    $version = wp_get_theme()->get("Version");
    // wp导入样式，第三个array参数用于指定前置引用(以此处为例子，自定义样式基于bootstrap，所以需要在前边引用bootstrap)
    wp_enqueue_style('followandrew-style', get_template_directory_uri() . '/style.css', array('followandrew-bootstrap'), $version, 'all');
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('followandrew-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
// 指定 wp 加载脚本时，把我们定义的followandrew_register_styles函数也跟着执行。 此处对应front-page.php中的 wp_header()
add_action('wp_enqueue_scripts', 'followandrew_register_styles');

//动态引入脚本
function followandrew_register_scripts()
{
    wp_enqueue_script('followandre_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('followandre_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '3.4.1', true);
    wp_enqueue_script('followandre_boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('followandre_main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}
// 指定 wp 加载脚本时，把我们定义的followandrew_register_scripts函数也跟着执行。 此处对应front-page.php中的 wp_footer()
add_action('wp_enqueue_scripts', 'followandrew_register_scripts')
    ?>