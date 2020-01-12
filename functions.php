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
    // 全幅・幅広有効化
    add_theme_support("align-wide");
    // メニューの表示
    register_nav_menus( array(
        "primary"=>"ナビゲーション"
    ) );
    // 2段組みレイアウト有効化
    add_theme_support( "mycols" );
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
    wp_enqueue_script( 
        "jQuery",
        'http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'
    );
    wp_enqueue_script( 
        "mytheme-script",
        get_stylesheet_directory_uri()."/script.js",
    );
}
add_action("wp_enqueue_scripts","mytheme_enqueue");

function mytheme_widgets(){
    // ウィジットエリアの登録
    register_sidebar(array(
        "id" => "sidebar-1",
        "name" => "フッターメニュー",
        "before_widget" => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => "</section>"
    ));
}
add_action("widgets_init", "mytheme_widgets");