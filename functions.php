<?php
function followandrew_register_styles()
{
    // 创建指向style.css中Version的变量
    $version = wp_get_theme()->get("Version");
    // wp导入样式，第三个array参数用于指定前置引用(以此处为例子，自定义样式基于bootstrap，所以需要在前边引用bootstrap)
    wp_enqueue_style('followandrew-style', get_template_directory_uri() . '/style.css', array('followandrew-bootstrap'), $version, 'all');
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('followandrew-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
// 指定 wp 加载脚本时，把我们定义的followandrew_register_styles函数也跟着执行
add_action('wp_enqueue_scripts', 'followandrew_register_styles')
    ?>