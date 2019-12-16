<?php  

function mytheme_setup(){
    //cssの有効化
    add_theme_support('wp-block-styles');

    // レスポンシブ対応
    add_theme_support("responsive-embeds");

    //エディタ用css
    add_theme_support("editor-styles");
    add_editor_style("editor-style.css");

    //title出力
    add_theme_support("title-tag");

    //link,style,scriptのHTML５適用
    add_theme_support("html5",array(
        "style",
        "script"
    ));
    // アイキャッチ画像を有効化
    add_theme_support("post-thumbnails");
}

add_action( 'after_setup_theme', 'mytheme_setup');
function mytheme_enqueue(){
    // google font読み込み
    wp_enqueue_style(
        "myfonts",
        "https://fonts.googleapis.com/css?family=Inria+Serif:300,700&display=swap",
        array(),
        null
    );
    
    // dashiconsの読み込み
    wp_enqueue_style(
        "dashicons"
    );

    //テーマCSS
    wp_enqueue_style(
        "mytheme-style",
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path("style.css"))
    );
}
add_action("wp_enqueue_scripts","mytheme_enqueue");