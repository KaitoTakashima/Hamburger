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

function wpbeg_widgets_init(){
    register_sidebar(
        array(
            'name'       => 'カテゴリーウィジェット',
            'id'         => 'category_widget',
            'description'=> 'カテゴリー用ウィジェットです',
            'after_widget' =>'</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action('widgets_init','wpbeg_widgets_init');

function add_post_type() {
    //カスタム投稿タイプ「キャンペーン」

    register_post_type(' campaign ',
    array(
        'labels' => array(
        'name'   => 'キャンペーン',
        'singular_name' => 'キャンペーン',
        'all_items'     => 'キャンペーン一覧'
        ),
        'public' => true, //一般に公開する
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',  //アイコン画像
        'supports'  => array('title','editor','thumbnail','custom-fields','excerpt','trackbacks','comments','revisions','page-attributes'),
        'has_archive' => true,//アーカイブを表示
        'show_in_rest' => true,
    )
    );
}
add_action('init','add_post_type');

function add_taxonomies(){
    //キャンペーンカテゴリー
    register_taxonomy('campaign_cat',
        array('campaign'),  //作成したカスタム投稿の名前に
        array(
            'label' => 'キャンペーンカテゴリー',    //表示名
            'public' => true,
            'show_in_menu' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'hierarchical' => true, //trueはカテゴリー、falseはタグ
            'rewrite' => array('slug' => 'campaign_cat', 'with_front' => true,), //パーマリンクの設定
            'show_in_rest' => true,
            'rest_base' => "",
        )
    );

    //キャンペーンタグ
    register_taxonomy('campaign_tag',
        array('campaign'),
        array(
            'label' => 'キャンペーンタグ',    //表示名
            'public' => true,
            'show_in_menu' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'hierarchical' => true, //trueはカテゴリー、falseはタグ
            'rewrite' => array('slug' => 'campaign_tag', 'with_front' => true,), //パーマリンクの設定
            'show_in_rest' => true,
            'rest_base' => "",
        )
    );
}
add_action('init','add_taxonomies',0);