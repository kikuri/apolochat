<?php 
ini_set("display_errors", On);
error_reporting(E_ALL);
?>
    <?php
require_once('./db.php');
$db = new DB();
if(isset($_POST['insert'])){
    $sql = "INSERT INTO Email VALUES(?)";
    $array = array($_POST['Email']);
    $db->executeSQL($sql,$array);
} 
?>
        <!DOCTYPE html>
        <html lang="ja">

        <head>

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <!-- ※デフォルトのスタイル（style.css） -->
                <!-- ※スマートフォン用のスタイル（smart.css） -->
                <link href="./css/smart_5.css" rel="stylesheet" type="text/css" media="screen and (max-width: 320px)">
                <link href="./css/smart.css" rel="stylesheet" type="text/css" media="screen and (min-width:321px) and (max-width: 380px)">
                <link href="./css/smart_6s.css" rel="stylesheet" type="text/css" media="screen and (min-width:381px) and (max-width: 414px)">
                <link href="./css/index_3.css" rel="stylesheet" type="text/css" media="screen and (min-width:415px)  and (max-width: 768px)">
                <link href="./css/index_2.css" rel="stylesheet" type="text/css" media="screen and  (min-width:769px) and (max-width: 992px)">
                <link href="./css/index.css" rel="stylesheet" type="text/css" media="screen and (min-width: 993px)">
                <link rel="stylesheet" type="text/css" href="./css/sweetalert.css">
                <script src="http://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script src="./js/slide.js" type="text/javascript"></script>
                <!--<script src="./js/index.js" type="text/javascript"></script>-->
                <script type="text/javascript" src="./js/dist/sweetalert.min.js"></script>
                <link href="https://fonts.googleapis.com/css?family=Exo:900|Fredoka+One|Lato|Patua+One" rel="stylesheet">
                <title>APOLO-大好きな音楽で繋がろう-</title>
                <meta name="description" content="音楽を会話をしながら楽しんで聞けるAPOLOのページです。APOLOでは400万曲が聴き放題！さらにポアルンとなんでも話せちゃう！
                                          会話を通じて音楽をもっと好きになろう！">
                <meta name='keywords' content='音楽,チャットボット,人工知能,聞きたい音楽,会話'>
                <meta property="og:type" content="website">
                <meta property="og:title" content="APOLO-大好きな音楽で繋がろう-">
                <meta property="og:description" content="音楽を会話をしながら楽しんで聞けるAPOLOのページです。APOLOでは400万曲が聴き放題！さらにポアルンとなんでも話せちゃう！会話を通じて音楽をもっと好きになろう！">
                <meta property="og:image" content="http://kikuchiiiii.sakura.ne.jp/APOLO_LP_1204/image/APOLO_LP.png">
                <meta property="og:url" content="http://kikuchiiiii.sakura.ne.jp/APOLO_LP_1204/"> </head>
            <style>
                /* スマホ横画面用 */
                
                @media screen and (max-width: 480px) {
                    .container {
                        padding: 0
                    }
                    div[class^="col-"] {
                        padding: 0
                    }
                    .row {
                        margin: 0;
                    }
                }
                /* スマホ縦画面用 */
                
                @media screen and (max-width: 320px) {
                    .container {
                        padding: 0
                    }
                    div[class^="col-"] {
                        padding: 0
                    }
                    .row {
                        margin: 0;
                    }
                }
            </style>
        </head>

        <body>
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-11">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi"> <span class="sr-only">メニュー</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    <a href="#" class="navbar-brand">
                                        <p class="title">APOLO</p>
                                    </a>
                                </div>
                                <div id="gnavi" class="collapse navbar-collapse">
                                    <ul class="navi nav navbar-nav navbar-right">
                                        <li id="concept_li"><a href="#Concept">Concept</a></li>
                                        <li><a href="#Features">Features</a></li>
                                        <li><a href="#Character">Character</a></li>
                                        <li><a href="#Listening">Listening</a></li>
                                        <li><a href="#Community">Community</a></li>
                                        <li><a href="#share_section">Share</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                                    <p class="title">APOLO</p>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    <div id="gnavi" class="collapse navbar-collapse">
                                        <ul class="navi nav navbar-nav">
                                            <li><a href="#Concept">Concept</a></li>
                                            <li><a href="#Features">Features</a></li>
                                            <li><a href="#Character">Character</a></li>
                                            <li><a href="#Listening">Listening</a></li>
                                            <li><a href="#Community">Community</a></li>
                                            <li><a href="#share_section">Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>--></div>
                    </div>
                </div>
            </header>
            <section class="eyecatch" class="img-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:center;">
                                    <p id="sns_p">音楽SNS</p>
                                    <p id="logo">APOLO</p>
                                    <p id="catch_copy">大好きな音楽で繋がろう</p>
                                    <figure class="relative_first" id="relative_6s"> <img id="iOS_download" src="image/iOS_download.png">
                                        <figcaption class="absolute_first">
                                            <p>COMING SOON</p>
                                        </figcaption>
                                    </figure>
                                    <p id="release">2月1日iOS版リリース予定！<span class="br_5">事前登録をして手に入れよう</span></p>
                                    <div class="line">
                                        <a href="https://line.me/R/ti/p/%40urm8576z"> <img id="line" height="36" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"> </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 hidden-sm col-xs-12 ">
                                    <figure class="relative_first"> <img id="smartphone_white" src="image/smartphone_white.png">
                                        <figcaption class="absolute_third ">
                                            <div id="slideshow" class="slideshow"> <img src="image/main_catch_vvv1.png" alt=""> <img src="image/main_catch_vvv2.png" alt=""> <img src="image/main_catch_vvv3.png " alt=" "><img src="image/main_catch_vvv4.png" alt=""><img src="image/main_catch_vvv5.png" alt=""></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Concept">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="sub_title " id="concept_title">
                                <p>Concept</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <HR>
                                    <p id="concept_main_p">さぁ一緒に音楽業界に革命を起こそう。</p>
                                    <div class="row">
                                        <div class="col-xs-push-12">
                                            <article id="concept_sub_p">近年各音楽会社は定額音楽配信などより個人で音楽を楽しむ傾向へと進んできました。しかし僕たちはそれは間違いだと信じています。 音楽は１人で楽しむものではなく仲間と楽しむ ものなのだと。 そして、僕たちはこの<span id="pink_p">APOLO</span>を作りました。音楽の楽しみ方を変えていくために。 </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <figure class="relative_second">
                                        <div class="concept_image" class="img-responsive"></div>
                                        <figcaption class="absolute_second">
                                            <p><span id="pink_p">Have</span> a chat ,
                                                <br> <span id="pink_p">Enjoy</span> Everything</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="sub_title">
                                <p>Features</p>
                            </div>
                            <p id="concept_main_title">音楽は１人で楽しむものだと思ってないですか？</p>
                            <div class="row" style="text-align: center;">
                                <div class="col-md-4 col-sm-4 col-xs-12"> <img id="sub_image" src="image/powarun_2.png" alt="sub_image1">
                                    <p style="text-align: center;">マスコットキャラクター　ポアルン</p>
                                    <p id="sub_image_titie_talk">話す</p>
                                    <p id="sub_image_p_talk">APOLOは会話を楽しみがら 音楽を聴くことができる！ 今日の出来事、楽しかった ことなどを<span id="pink_p">ポアルン</span>に伝えて <span id="pink_p"><span class="br_6"> ポアルンと友情を育もう！</span></span>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12"> <img id="sub_image" src="image/sub_image2.jpeg" alt="sub_image2">
                                    <p id="sub_image_titie">聴く</p>
                                    <p id="sub_image_p">オールジャンルの音楽が<span id="pink_p"> 4000万曲以上 </span>聴き放題！あなたのはまる音楽 が絶対ここにある！自分で音楽を発 見したり友達からおすすめした音楽 を聴いたり、<span class="br_6">楽しみ方</span>はさまざま！</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12"> <img id="sub_image" src="image/sub_image3.jpeg " alt="sub_image3">
                                    <p id="sub_image_titie">繋がる</p>
                                    <p id="sub_image_p"><span id="pink_p">APOLOでは音楽の趣味が合う人が絶対見つかる！</span>好きな音楽について 熱く語ったり新しくできた友達と アーティストのライブに行ったり、 <span id="pink_p"><span class="br_6"><span class="br_5s">大人数で音楽を楽しもう！</span></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Character">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="sub_title chara_title">
                                <p>Character</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div id="character"></div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p id="character_main_p">ポアルンがあなたを未知なる音楽の世界へお連れ致します。</p>
                                    <article id="character_sub_p">普段の何気ない会話や、探してる音楽、 音楽の趣味が合う人や、好きなアーティスト のSNS、ライブ情報まで様々なことを アポロは教えてくれます。 これからのあなたの音楽に関する <span id="pink_p">一番のパートナー</span>となってくれるでしょう。</article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Listening">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="sub_title">
                                <p>Listening</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="Listening_side" class="img-responsive">
                                        <table>
                                            <tr>
                                                <th> <img id="Apple_Music" src="image/Apple_Music.png"> </th>
                                            </tr>
                                            <tr>
                                                <th> <img id="Spotify" src="image/Spotify.png"> </th>
                                            </tr>
                                            <tr>
                                                <th> <img id="SoundCloud" src="image/SoundCloud.png"> </th>
                                            </tr>
                                            <tr>
                                                <th> <img id="Youtube" src="image/Youtube.png"> </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p id="listening_main_p">世界中の音楽にアクセスしよう</p>
                                    <article id="listening_sub_p">邦楽、洋楽、年代を問わず聴き放題。 あなたのお気に入りのアーティストを 見つけて下さい。<span class="br_6">  音楽は</span><span id="pink_p">iTunes、AppleMusic、Spotify、SoundCloud、YouTube</span>から選べて楽しめます。 お気に入りを聴いて、新しい曲を発見して、 自分だけの最高の音楽を見つけましょう。</article>
                                    <p id="warning_p">※AppleMusic,Spotifyでの視聴は有料会員登録が必要です</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="sub_title" id="Community" style="margin: 80px 0px -70px 0px;">
                <p>Community</p>
            </div>
            <section class="community_back" class="img-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <figure class="relative_first" id="relative_black"> <img id="black_iphone" src="image/smartphone_black.png">
                                        <figcaption class="absolute_third">
                                            <div id="slideshow_2" class="slideshow_2"> <img src="image/main_catch_vvv2.png" alt=""> <img src="image/main_catch_vvv3.png" alt=""> <img src="image/main_catch_vvv4.png" alt=""><img src="image/main_catch_vvv5.png" alt=""></div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <p id="community_main_p">音楽で繋がろう</p>
                                    <article id="community_sub_p"> 今まで音楽は１人で楽しむものだと 思ってませんでしたか？ <span id="pink_p">APOLO</span>では音楽の趣味が合う人と 話せたり一緒にライブに行ったり音楽 の楽しみ方がもっと広がります。 <span class="br_5"><span class="br_5s">音楽で繋がる体験を<span class="br_6">ぜひ一緒に味わってみませんか。</span></span>
                                        </span>
                                    </article>
                                    <p id="release2">2月1日リリース予定！事前登録をして手に入れよう</p>
                                    <div class="line2">
                                        <a href="https://line.me/R/ti/p/%40urm8576z"><img height="36" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="share_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="sub_title" id="share_title">
                                <p>Share</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="http://b.hatena.ne.jp/entry/mubot.info" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="MUBOT"> <img id="share_hatena" src="image/hatena_icon.png" alt="はてなブックマークに追加" />
                                        <p id="hatena_p">Bookmark us on Hatebu</p>
                                    </a>
                                    <script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="https://twitter.com/APOLO_JP" class="twitter btn　twitter-follow-button" target="_blank" data-show-count="false" 　style="margin-top: -0.6em;"><img id="share_twi" src="image/twitter_icon.png">
                                        <p id="twitter_p">Follow us<span class="br"> on </span>Twitter</p>
                                    </a>
                                    <script>
                                        ! function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0]
                                                , p = /^http:/.test(d.location) ? 'http' : 'https';
                                            if (!d.getElementById(id)) {
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = p + '://platform.twitter.com/widgets.js';
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }
                                        }(document, 'script', 'twitter-wjs');
                                    </script>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="http://www.facebook.com/share.php?u=https://www.facebook.com/mubot00/" onclick="window.open(encodeURI(decodeURI(this.href)), 'FBwindow', 'width=554, height=470, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow"> <img id="share_face" src="image/facebook_icon.png">
                                        <p id="facebook_p">Follow us on Facebook</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <p id="fotter_title">APOLO</p>
                            <div class="row">
                                <div class="col-md-12 col-xs-12"> <a href="question.html" id="fotter_sub_title">お問い合わせ</a> </div>
                            </div>
                            <p id="fotter_copyright">COPYRIGHT © APOLO ALL RIGHTS RESERVED</p>
                            <div id="page-top" class="page-top">
                                <p><a href="#header" id="move-page-top" class="move-page-top">▲</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <script>
                $('#alert').click(function () {
                    swal({
                        title: "ご登録いただきありがとうございます！"
                        , text: "リリース前にメールにて告知させていただきます。"
                        , timer: 6000
                        , showConfirmButton: false
                    });
                });
            </script>
        </body>

        </html>