
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>public/mobile/images/splash/splash-icon.png">
    <link rel="apple-touch-startup-image" href="<?=base_url()?>public/mobile/images/splash/splash-screen.png" media="screen and (max-device-width: 320px)" />
    <link rel="apple-touch-startup-image" href="<?=base_url()?>public/mobile/images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <title>Drohp | Mobile Template</title>
    <link href="<?=base_url()?>public/mobile/style/style.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>public/mobile/style/slider.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>public/mobile/style/buttons.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>public/mobile/style/photoswipe.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>public/mobile/style/retina.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" rel="stylesheet" />

    <script src="<?=base_url()?>public/mobile/scripts/jquery.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/easing.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/contact.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/swipe.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/klass.min.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/photoswipe.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/retina.js"></script>
    <script src="<?=base_url()?>public/mobile/scripts/custom.js"></script>

</head>

<body>

<div class="header">
    <div class="navigation">

        <p class="center-text">YOU ARE ON THE PORTFOLIO PAGE</p>

        <div class="nav-decoration"></div>
        <a href="index.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/home@2x.png" width="50" alt="img"><br/>
            Главная
        </a>
        <a href="features.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/cog2@2x.png" width="50" alt="img"><br/>
            На сегодня
        </a>
        <a href="portfolio.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/img@2x.png" width="50" alt="img"><br/>
            На неделю
        </a>
        <a href="gallery.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/img2@2x.png" width="50" alt="img"><br/>
            На месяц
        </a>

        <a href="blog.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/documents@2x.png" width="50" alt="img"><br/>
            Блог
        </a>
        <a href="video.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/highdef2@2x.png" width="50" alt="img"><br/>
            О проекте
        </a>
        <a href="tel:+123 456 789" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/phone@2x.png" width="50" alt="img"><br/>
            Контакты
        </a>
        <a href="contact.html" class="nav-item">
            <img src="<?=base_url()?>public/mobile/images/icons/mail@2x.png" width="50" alt="img"><br/>
            Mail Us!
        </a>

        <div class="nav-decoration"></div>

    </div>
    <div class="logo-elements">
        <div class="logo">
            <a href="index.html"><img src="<?=base_url()?>public/mobile/images/logo.png" class="replace-2x" width="56" alt="img"></a>
        </div>
        <a href="#" class="deploy-nav">	<img src="<?=base_url()?>public/mobile/images/nav-open.png" class="replace-2x" width="17" alt="img"></a>
        <a href="#" class="hide-nav">	<img src="<?=base_url()?>public/mobile/images/nav-close.png" class="replace-2x" width="17" alt="img"></a>
    </div>
</div>

<div style="height:20px;"></div>

<div class="content">

    <?=$this->load->view($content)?>

</div>

<div class="footer">
    <p>COPYRIGHT 2012.</p>
    <div class="socials">
        <a href="#" class=""><img src="<?=base_url()?>public/mobile/images/icons/twitter.png" class="replace-2x" width="32" alt="img"></a>
        <a href="#" class=""><img src="<?=base_url()?>public/mobile/images/icons/facebook.png" class="replace-2x" width="32" alt="img"></a>
    </div>
</div>

</div>

</body>
</html>
