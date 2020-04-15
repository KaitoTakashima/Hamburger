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
            <section class="main_visual">
                <h2>ダミーサイト</h2>
            </section>

            <div class="branch_menu">
                <ul class="p-munu">
                    <li class="p-takeout">
                        <h2 class="p-title">Take Out</h2>
                        <ul>
                            <li class="p-head">
                                <dl>
                                    <dt class="p-heading">小見出しが入ります</dt>
                                    <dd class="p-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                </dl>
                            </li>
                            <li class="p-foot">
                                <dl>
                                    <dt class="p-heading">小見出しが入ります</dt>
                                    <dd class="p-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                </dl>
                            </li>
                        </ul>
                    </li>
                    <li class="p-eatin">
                        <h2 class="p-title">Eat In</h2>
                        <ul>
                            <li class="p-head">
                                <dl>
                                    <dt class="p-heading">小見出しが入ります</dt>
                                    <dd class="p-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                </dl>
                            </li>
                            <li class="p-foot">
                                <dl>
                                    <dt class="p-heading">小見出しが入ります</dt>
                                    <dd class="p-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
                                </dl>
                            </li>
                        </ul>
                    </li>
                </ul>

                <section class="p-access">
                    <h2 class="p-access_heading">見出しが入ります</h2>
                    <p class="p-access_text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
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