<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestPage</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="l-header">
            <div class="l-header_btn">
                <li class="p-gmenu">
                    <button class="l-munu_btn c-menu_btn p-hamburger p-gmenu--bt is-hamburger">
                        <span>Menu</span>
                    </button>
                    <ul class="list">
                        <span>Menu</span>
                        <li>バーガー</li>
                        <ul>
                            <li>ハンバーガー</li>
                            <li>チーズバーガー</li>
                            <li>テリヤキバーガー</li>
                            <li>アボガドバーガー</li>
                            <li>フィッシュバーガー</li>
                            <li>ベーコンバーガー</li>
                            <li>チキンバーガー</li>
                        </ul>
                        <li>サイド</li>
                        <ul>
                            <li>ポテト</li>
                            <li>サラダ</li>
                            <li>ナゲット</li>
                            <li>コーン</li>
                        </ul>
                        <li>ドリンク</li>
                        <ul>
                            <li>コーラ</li>
                            <li>ファンタ</li>
                            <li>オレンジ</li>
                            <li>アップル</li>
                            <li>紅茶(Ice/Hot)</li>
                            <li>コーヒー(Ice/Hot)</li>
                        </ul>
                    </ul>
                </li>
            </div>
            <div class="flex_header">
                <h1>Hamburger</h1>
                <form action="#" class="l-search_form p-search_form">
                    <label for="search" class="screen_reader_text">
                        <input type="text" class="p-search_form_keyword" name="search" id="search">
                        <input type="submit" class="p-search_form_submit" value="検索">
                    </label>
                </form>
            </div>
        </header>
        <article class="contents">
            <section class="archive_main_visual">
                <div class="archive_main_visual_font">
                    <h2>Search:</h2>
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


            <div class="branch_menu">
                <ul class="c-menu_group">
                    <li class="c-munu">
                        <img class="c-munu_image" src="../image/Raisetech-test_archive.jpg" alt="">

                        <div class="c-menu_content">
                            <h3 class="c-menu_title">チーズバーガー</h3>
                            <ul>
                                <li class="c-menu_info">
                                    <dl>
                                        <dt class="c-heading">小見出しが入ります</dt>
                                        <dd class="c-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                            テキストが入ります。テキストが入ります。
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <div class="wrap_detail">
                                <a href="#" class="c-menu_detail">詳しく見る</a>
                            </div>
                        </div>
                    </li>
                    <li class="c-munu">
                        <img class="c-munu_image" src="../image/Raisetech-test_archive.jpg" alt="">

                        <div class="c-menu_content">
                            <h3 class="c-menu_title">チーズバーガー</h3>
                            <ul>
                                <li class="c-menu_info">
                                    <dl>
                                        <dt class="c-heading">小見出しが入ります</dt>
                                        <dd class="c-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                            テキストが入ります。テキストが入ります。
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                            <div class="wrap_detail">
                                <a href="#" class="c-menu_detail">詳しく見る</a>
                            </div>
                        </div>
                    </li>
                    <li class="c-munu">
                        <img class="c-munu_image" src="../image/Raisetech-test_archive.jpg" alt="">

                        <div class="c-menu_content">
                            <h3 class="c-menu_title">チーズバーガー</h3>
                            <ul>
                                <li class="c-menu_info">
                                    <dl>
                                        <dt class="c-heading">小見出しが入ります</dt>
                                        <dd class="c-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                            テキストが入ります。テキストが入ります。
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
                <section class="c-page">
                    <ul>
                        <li class="c-page_prev">＜＜前へ</li>
                        <li class="c-page_next">次へ＞＞</li>
                    </ul>
                </section>
            </div>
        </article>

        <footer class="l-footer">
            <ul class="l-footer_menu">
                <li>ショップ情報 | </li>
                <li>ヒストリー</li>
            </ul>
            <address class="copyright">Copyright: RaiseTech</address>
        </footer>
    </div>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/hamburger.js"></script>
</body>

</html>