<?php
//テーマサポート
add_theme_support('menus'); //テーマにメニュー機能をサポートすることを許可
add_theme_support('title-tag'); //タイトルタグのサポートを許可
add_theme_support('post-thumbnails'); //アイキャッチ画像を扱えるようにする

// タイトル出力
// is_front_page() 投稿・固定ページにかかわらず、サイトのフロントページが表示されているかを判定する
// is_home() メインブログページが表示されているかを判定する
// is_singular() 個別投稿のページかを判定する。is_single()、is_page()、is_attachment()のいずれかに該当する場合に真を返す
function wpbeg_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'wpbeg_title');



function wpbeg_script() {
    wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
    wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0' );
    wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '1.0.0' );
    wp_enqueue_script( 'js/hamburger', get_template_directory_uri() . '/js/hamburger.js', array(), '1.0.0' );
    //get_template_directory_uri() テーマディレクトリのURIを取得
}
add_action('wp_enqueue_scripts','wpbeg_script');