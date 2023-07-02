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

            <form class="p-header c-fw-700" action="/search.html" method="get">
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
            <div class="p-visual--archive c-color_bg--black-top">
                <h1 class="p-visual--archive-title c-text--h1 c-color--white c-fw-700">Menu:</h1>
            </div>

            <div class="l-inner--archive">
                <h2 class="c-text--h2">小見出しが入ります</h2>
                <p class="p-archive__text c-text--p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                <ul class="p-card__archive">
                    <li>
                        <figure class="p-card__archive-wrap c-flex">
                            <div class="p-card__archive-img c-flex">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="チーズバーガーの写真">
                            </div>
                            <figcaption class="p-card__archive-content">
                                <h2 class="c-text--h2 c-color--white">チーズバーガー</h2>
                                <h3 class="p-card__archive-sub c-color--white">小見出しが入ります</h3>
                                <p class="p-card__archive-text c-text--p c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> 
                                <a  class="p-card__archive-button c-button--archive c-fw-700" href="/">詳しく見る</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="p-card__archive-wrap c-flex">
                            <div class="p-card__archive-img c-flex">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="ダブルチーズバーガーの写真">
                            </div>
                            <figcaption class="p-card__archive-content">
                                <h2 class="c-text--h2 c-color--white">ダブルチーズバーガー</h2>
                                <h3 class="p-card__archive-sub c-color--white">小見出しが入ります</h3>
                                <p class="p-card__archive-text c-text--p c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a  class="p-card__archive-button c-button--archive c-fw-700" href="/">詳しく見る</a>
                            </figcaption>  
                        </figure>         
                    </li>
                    <li>
                        <figure class="p-card__archive-wrap c-flex">
                            <div class="p-card__archive-img c-flex">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.jpg" alt="スペシャルチーズバーガーの写真">
                            </div>
                            <figcaption class="p-card__archive-content">
                                <h2 class="c-text--h2 c-color--white">スペシャルチーズバーガー</h2>
                                <h3 class="p-card__archive-sub c-color--white">小見出しが入ります</h3>
                                <p class="p-card__archive-text c-text--p c-color--white">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a  class="p-card__archive-button c-button--archive c-fw-700" href="/">詳しく見る</a>
                            </figcaption>
                        </figure> 
                    </li>
                </ul>
           
                <ul class="p-pagination c-flex c-center">
                    <li class="p-pagination__text">
                        <a href="/">page 1/10</a>
                    </li>
                    <li>
                        <a class="p-pagination__icon--previous" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" class="p-pagination__icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                            </svg>
                        </a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">1</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">2</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">3</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">4</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="">5</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">6</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">7</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">8</a>
                    </li>
                    <li class="p-pagination__link c-flex c-link--pagination c-border--pagination">
                        <a href="/">9</a>
                    </li>
                    <li>
                        <a class="p-pagination__icon--next" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" class="p-pagination__icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />                            </svg>
                        </a>
                    </li>
                </ul>
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

