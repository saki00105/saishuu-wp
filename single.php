<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="l-container"> 
        <header class="l-header">
            <p class="p-header__title">Hamburger</p>

            <form class="p-header c-fw-700" action="search.html" method="get">
                <input type="search" name="search" placeholder="" class="p-header__search c-border--form">
                <input type="submit" name="submit" value="検索" class="p-header__submit c-button--form c-border--form">
            </form>

            <p class="l-sideber__box c-fw-700">
                <a href="/">Memu</a>
            </p>
        </header>

        <div class="l-sideber__layer"></div>

        <div class="l-sideber">
            <aside class="p-sideber">
                <p class="p-sideber__menu c-fw-700">
                    <a href="/">Memu</a>
                </p>
                
                <a class="p-sideber__box" href="/"></a>

                <nav class="l-sideber__body">
                    <ul>
                        <li class="p-sideber__sub">
                            <a class="c-fw-700" href="/archive.html">バーガー</a>
                            <ul class="p-sideber__items">
                                <li class="p-sideber__item">
                                    <a href="/">ハンバーガー</a>
                                </li>
                                <li  class="p-sideber__item">
                                    <a href="/single.html">チーズバーガー</a>
                                </li>
                                <li  class="p-sideber__item">
                                    <a href="/">テリヤキバーガー</a>
                                </li>
                                <li  class="p-sideber__item">
                                    <a href="/">アボカドバーガー</a>
                                </li>
                                <li  class="p-sideber__item">
                                    <a href="/">フィッシュバーガー</a>
                                </li>
                                <li  class="p-sideber__item">
                                    <a href="/">ベーコンバーガー</a>
                                </li>
                                <li  class="p-sideber__item">
                                    <a href="/">チキンバーガー</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <li class="p-sideber__sub">
                            <a class="c-fw-700" href="/">サイド</a>
                            <ul class="p-sideber__items">
                                <li class="p-sideber__item">
                                    <a href="/">ポテト</a>
                                </li>
                                <li class="p-sideber__item">
                                    <a href="/">サラダ</a>
                                </li>
                                <li class="p-sideber__item">
                                    <a href="/">ナゲット</a>
                                </li>
                                <li class="p-sideber__item">
                                    <a href="/">コーン</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <li class="p-sideber__sub">
                            <a class="c-fw-700" href="/">ドリンク</a>
                            <ul class="p-sideber__items">
                                <li class="p-sideber__item">
                                    <a href="/">コーラ</a>
                                </li>
                                <li class="p-sideber__item">
                                    <a href="/">ファンタ</a>
                                </li>
                                <li class="p-sideber__item">
                                    <a href="/">オレンジ</a>
                                </li>
                                <li class="p-sideber__item">
                                    <a href="/">アップル</a>
                                </li>
                                <li class="p-sideber__item c-ff-M">
                                    <a href="/">紅茶（Ice/Hot）</a>
                                </li>
                                <li class="p-sideber__item c-ff-M">
                                    <a href="/">コーヒー（Ice/Hot）</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>

        <main class="l-main">
            <div class="p-visual--single">
                <h1 class="p-visual--single_page-title c-text--h1 c-color--white c-fw-700">h1 チーズバーガー</h1>
            </div>

            <div class="l-inner--single_page">
                <section>
                    <h2 class="c-text--h2">見出しh2</h2>
                    <p class="p-single__text c-text--p">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                </section>
                <h3 class="p-single__text c-text--h3">見出しh3</h3>
                <h4 class="p-single__text c-text--h4">見出しh4</h4>
                <h5 class="p-single__text c-text--h5">見出しh5</h5>
                <h6 class="p-single__text c-text--h6">見出しh6</h6>

                <blockquote cite="/" class="c-color_bg--blockquote c-text--p">
                    <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                    <p class="c-color_bg--blockquote-source">出典元：<cite><a href="/" class="">○○○○○○○○○○○○</a></cite></p>
                </blockquote>
                
                <article>
                    <img src="/img/cooked-foods-750073.png" class="p-single__full-image" alt="チーズバーガーの写真">

                    <div class="p-single__content">
                            <img src="/img/cooked-foods-small.png" class="p-single__half-image" alt="チーズバーガーの写真">
                            <p class="c-text--p"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </div>
                    <div class="p-single__content">
                        <img src="/img/cooked-foods-small.png" class="p-single__half-image" alt="チーズバーガーの写真">
                        <p class="c-text--p"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </div>
                    
                    <img src="/img/cooked-foods-small.png" class="p-single__half-image--center" alt="チーズバーガーの写真">

                    <div class="p-single__flex-wraps c-flex">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                        <img src="/img/cooked-foods-small.png" class="p-single__flex-wrap" alt="チーズバーガーの写真">
                    </div>
                </article>

                <div class="p-list__contents p-list__contents--decimal c-text--p">
                    <ol class="p-list__content">
                        <li class="c-link--decimal c-ff-M">リストリストリスト</li>
                        <li class="c-link--decimal c-ff-M">リストリストリスト
                            <ol>
                                <li class="c-link--decimal c-ff-M">リスト2リスト2リスト2</li>
                                <li class="c-link--decimal c-ff-M"> リスト2リスト2リスト2</li>
                            </ol>
                        </li>
                    </ol>
                    <ol class="p-list__content">
                        <li class="c-link--decimal c-ff-M">リストリストリスト</li>
                        <li class="c-link--decimal c-ff-M">リストリストリスト</li>
                    </ol>
                </div>
                <div class="p-list__contents c-text--p">
                    <ol class="p-list__content">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ol>
                                <li class="c-ff-M">リスト2リスト2リスト2</li>
                                <li class="c-ff-M"> リスト2リスト2リスト2</li>
                            </ol>
                        </li>
                    </ol>
                    <ol class="p-list__content">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                </div>
                
                <div class="p-code c-text--p c-color_bg--blockquote c-ff-M">
                    <p><span><</span>html<span>></span><br></p>
                        <p class="p-code__child">
                            <span><</span>head<span>></span><br>
                            <span><</span>/head<span>></span><br>
                            <span><</span>body<span>></span><br>
                            <span><</span>/body<span>></span>
                        </p>
                    <p><span><</span>/html<span>></span></p>
                </div>

                <table class="p-table c-text--p" border="1">
                    <tbody>
                        <tr>
                            <td class="p-table__small">テーブル</td>
                            <td class="p-table__wide">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table__small">テーブル</td>
                            <td class="p-table__wide">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table__small">テーブル</td>
                            <td class="p-table__wide">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table__small">テーブル</td>
                            <td class="p-table__wide">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table__small">テーブル</td>
                            <td class="p-table__wide">テーブル</td>
                        </tr>
                    </tbody>
                </table>


                <a href="/" class="p-single__button c-button--form c-fw-700 c-text--p">
                    <button class="">ボタン</button>
                </a>

                <div class="p-single__bold">
                    <p class="c-ff-M c-fw-700 c-text--p">boldboldboldboldboldboldbold</p>
                </div>
            
            </div>

        </main>


        <footer class="l-footer p-footer c-color--white">
            <nav  class="p-footer__link">
                <ul class="c-flex">
                    <li class="p-footer__link--shop">
                        <a class="c-color--white" href="/page.html">ショップ情報</a>
                    </li>
                    <li class="p-footer__link--history">
                        <a class="c-color--white" href="/">ヒストリー</a>
                    </li>
                </ul>
            </nav>
        
            <p class="c-ff-M"><small>Copyright: RaiseTech</small></p>

            <div class="p-footer__layer"></div>
        </footer>
    </div>
    <script src ="./js/main.js"></script>
</body>
</html>

