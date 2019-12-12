<?php  

function mytheme_setup(){
    //cssの有効化
    add_theme_support('wp-block-styles');

    // レスポンシブ対応
    add_theme_support("responsive-embeds");

    //エディタ用css
    add_theme_support("editor-styles");
    add_editor_style("editor-style.css");
}
add_action( 'after_setup_theme', 'mytheme_setup');
function mytheme_enqueue(){
    //テーマCSS
    wp_enqueue_style(
        "mytheme-style",
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path("style.css"))
    );
}
add_action("wp_enqueue_scripts","mytheme_enqueue");