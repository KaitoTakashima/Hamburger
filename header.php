<!DOCTYPE html>
<html lang="<?php language_attributes();?>"> <!--言語設定を自動的に主力する-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="WordPress theme development static data for beginners">
    <meta name="keywords" content="WordPress, Theme, development">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
    <?php wp_head(); ?> <!--WordPressのテーマに含める関数。admin_barや必要となるソースの出力などを行う-->
</head>

 <body <?php body_class(); ?>>　<!--ページごとに自動的にタグが追加される -->
    <div class="wrapper">
        <header class="l-header">
            <div class="l-header_btn">
               <?php get_sidebar(); ?>
            </div>

            <div class="flex_header">
                <h1 class="header_ttl">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>   <!--管理画面の設定 > 一般 にある「サイトのタイトル」を取得して表示 -->
                    </a>
                </h1>
                <!-- <p class="header_descrition">
                    <?php bloginfo('description'); ?> <!--管理画面の設定 > 一般 にある「キャッチフレーズ」を取得して表示 -->
                <!-- </p>  --> 

                <?php get_search_form(); ?>
             
            </div>
        </header>
