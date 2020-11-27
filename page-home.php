<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>山森勝也のポートフォリオサイト</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css" >
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="js/vegas/vegas.min.css">
    <script src="js/vegas/vegas.js"></script>

</head>
<body>
    <div id="home" class="big-bg">
    <header class="page-header wrapper">
        <h1><a href="index.html"><img src="images/logo.png" alt="山森勝也のポートフォリオサイト"></a></h1>
        <nav>
            <ul class="main-nav">
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="home-content wrapper">
        <h2 class="page-title">Katuya Yamamori<br>
            portfolio site</h2>
            <p>このWebサイトは山森勝也のポートフォリオサイトです。<br>
            これまで制作した作品を掲載しています。どうぞ、ごゆっくりご覧ください。</p>
            <a class = "button" href="portfolio.html">portfolio</a>

    </div><!--/.home-content-->
    </div><!--/#home-->
    <script>
        $(".big-bg").vegas({
            
    slides: [
        { src: "images/main-bg.jpg" },
        { src: "images/main-bg2.jpg" },
        { src: "images/main-bg3.jpg" },
        { src: "images/main-bg4.jpg" }
    ],
    animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
});

    </script>
</body>
</html>