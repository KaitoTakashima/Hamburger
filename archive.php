<?php get_header(); ?>  <!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->

        <article class="contents">
            <section class="archive_main_visual">
                <div class="archive_main_visual_font">
                    <h2>Menu:</h2>
                    <p>チーズバーガー</p>
                </div>
            </section>

            <section class="archive_subheading">
                <h2 class="subheading">小見出しが入ります</h2>
                <p class="subheading_text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section>

                <?php
                if( have_posts()) :
                        while( have_posts()) :
                                the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="branch_menu">
                             <ul class="c-menu_group">
                                <li class="c-munu">
                                     <img class="c-munu_image"  <?php the_post_thumbnail();?>>
                                     <div class="c-menu_content">
                                        <h3 class="c-menu_title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title();?>
                                            </a>
                                        </h3>
                                        <ul>
                                            <li class="c-menu_info">
                                                <dl>
                                                    <dt class="c-heading">小見出しが入ります</dt>
                                                    <dd class="c-text">
                                                        <?php the_content( '' ); ?>
                                                    </dd>
                                                </dl>
                                            </li>
                                        </ul>
                                        <div class="wrap_detail">
                                                <a href="#" class="c-menu_detail">詳しく見る</a>
                                        </div>
                                     </div>
                                </li>
                             </ul>
                        </div>
                    </div>

                <?php endwhile; else : ?>
                    <p>表示する記事がありません</p>
                    <?php endif; ?>

                    <?php if($wp_query->max_num_pages>1):?>
                    <ul class="p-pagenation">
                        <li class="prevpostslink"><?php next_posts_link('Prev');?></li>
                        <li class="nextpostslink"><?php previous_posts_link('Next');?></li>
                    </ul>
                    <?php endif;?>
        </article>

        <?php get_footer(); ?>  <!--footer.phpを読み込むテンプレートタグ（インクルードタグ） -->