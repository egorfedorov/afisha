
<?php

// Начало Google шпиону
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot")){
    $to      = 'tepalenko@webkate.com';
    $subject = 'Google on your site';

    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/';

    $html = 'Google goes to your Afisha
		';
    mail($to, $subject, $html, $headers);
}
// Конец Google шпиону
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Куда пойти в Черкассах</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta property="og:title" content="Куда пойти в Черкассах"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="freetime "/>
    <meta property="og:description"
          content="Список мест куда можно пойти в Черкассах. Кинотеатры, музеи, выставки"/>



    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/prettyPhoto.css" />
    <script type="text/javascript" src="<?=base_url()?>public/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jquery.inputstext.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jquery.ad-gallery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/slider3.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/comm_input_bg.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/post_type2_slider.js"></script>


    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/jquery.ad-gallery.css" />



</head>
<body>
<div id="wrapper">
<div id="header">
    <div class="inner">
        <div class="block_top_navigation">
            <div class="col_1">
                <!--p>Call us now: (489) 450-7821</p-->
            </div>
            <div class="col_2">
                <div class="block_social_top">
                    <p>Follow us:</p>
                    <a href="#" class="facebook">Facebook</a>
                    <a href="#" class="twitter">Twitter</a>
                    <a href="#" class="rss">Rss</a>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="block_mid">
            <div id="logo">
                <a href="<?=base_url()?>"><img src="<?base_url()?>public/img/logo.jpg" alt="ElephantWeb" title="ElephantWeb" /></a>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="<?=base_url()?>">Головна<span>на сегодня</span></a>
                        <!--ul>
                            <li><a href="index.html">Basic slider</a></li>
                            <li><a href="index2.html">Nivo slider</a></li>
                            <li><a href="index3.html">Thumbnail slider</a></li>

                        </ul-->
                    </li>
                    <li><a href="<?=base_url()?>page/o-kompanii">О проекте<span>о нас</span></a></li>
                    <!--li><a href="columns.html">Features<span>about this theme</span></a>
                        <ul>
                            <li><a href="columns.html">Columns</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="additional_elements.html">Additional elements</a></li>
                            <li><a href="pricing_table.html">Pricing table</a></li>
                            <li><a href="404.html">404 page</a></li>
                            <li><a href="archives.html">archives</a></li></ul>
                    </li>
                    <li><a href="portfolio_c2.html">Portfolio<span>videos &amp; images</span></a>
                        <ul>
                            <li><a href="portfolio_c2.html">Portfolio 2 columns 1</a></li>
                            <li><a href="portfolio_c2_t2.html">Portfolio 2 columns 2</a></li>
                            <li><a href="portfolio_c3.html">Portfolio 3 columns 1</a></li>
                            <li><a href="portfolio_c3_t2.html">Portfolio 3 columns 2</a></li>
                            <li><a href="portfolio_c4.html">Portfolio 4 columns 1</a></li>
                            <li><a href="portfolio_c4_t2.html">Portfolio 4 columns 2</a></li>
                            <li><a href="portfolio_c2_wl.html">Portfolio with link</a>
                                <ul>
                                    <li><a href="portfolio_c2_wl.html">Portfolio 2 columns</a></li>
                                    <li><a href="portfolio_c3_wl.html">Portfolio 3 columns</a></li>
                                    <li><a href="portfolio_c4_wl.html">Portfolio 4 columns</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio_items.html">Gallery</a>
                                <ul>
                                    <li><a href="portfolio_items.html">show gallery</a></li>
                                    <li><a href="portfolio_c4_ws.html">gallery with sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio_item.html">Portfolio item page</a></li>
                        </ul>
                    </li-->
                    <li><a href="<?=base_url()?>/blog" class="active">Блог<span>статьи</span></a>
                        <!--ul>
                            <li><a href="blog1.html" class="active">blog style 1</a></li>
                            <li><a href="blog2.html">blog style 2</a></li>
                            <li><a href="blog3.html">blog style 3</a></li>
                            <li><a href="blog4.html">blog style 4</a></li>
                            <li><a href="blog5.html">blog style 5</a></li>
                            <li><a href="blog_c3.html">Blog  With Dual Sidebar</a></li>
                            <li><a href="blog_f_w.html">Blog full width</a></li>
                            <li><a href="blog_post1.html">blog post pages</a>
                                <ul>
                                    <li><a href="blog_post1.html">Blog post page1</a></li>
                                    <li><a href="blog_post2.html">Blog post page2</a></li>
                                    <li><a href="blog_post3.html">Blog post page3</a></li>
                                </ul>
                            </li>
                        </ul-->
                    </li>
                    <li><a href="<?=base_url()?>contact">Контакт<span>ваши отзывы</span></a></li>
                </ul>
            </div>
        </div>
        <div class="line"></div>
    </div>
</div>
<div id="content">
    <div class="inner">
        <div class="ad-gallery">
            <div class="ad-image-wrapper">
                <div id="ad-image-description"></div>
            </div>
            <div class="ad-nav">
                <div class="ad-thumbs">
                    <ul class="ad-thumb-list">
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img1.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs1.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img2.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs2.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img3.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs3.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img4.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs4.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img5.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs5.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img6.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs6.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                        <li>
                            <a href="<?base_url()?>public/img/thumbs/slider_img7.jpg"><img src="<?base_url()?>public/img/thumbs/slider_img_thumbs7.jpg" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="block_slogan">
            <p>ElephantWeb! is a clean Premium HTML Theme suitable for <span>portfolio, company</span> and any kind of websites.</p>
            <p>This theme <span>provides all</span> the main functionality you will need to present your product.</p>
        </div>
        <div id="latest-blogs">

            <div class="link_block">
                <div class="overlay">
                    <figure>
                        <a href="portfolio-single.html" class="overlay-mask">
                            <a class="icon-view" href="img/content/home/blog/1.jpg" rel="prettyPhoto"></a>
                            <a class="icon-link" href="#" title="view portfolio"></a>
                        </a>
                        <div class="img-border">
                            <a href="#"><img class="round_image" src="<?base_url()?>public/img/1.jpg" alt="pink light" /></a>
                        </div>
                    </figure></div>
            </div>
            <div class="link_block">
                <div class="overlay">
                    <figure>
                        <a href="portfolio-single.html" class="overlay-mask">
                            <a class="icon-view" href="img/content/home/blog/1.jpg" rel="prettyPhoto"></a>
                            <a class="icon-link" href="#" title="view portfolio"></a>
                        </a>
                        <div class="img-border">
                            <a href="#"><img class="round_image" src="<?base_url()?>public/img/1.jpg" alt="pink light" /></a>
                        </div>
                    </figure></div>
            </div>
            <div class="link_block">
                <div class="overlay">
                    <figure>
                        <a href="portfolio-single.html" class="overlay-mask">
                            <a class="icon-view" href="img/content/home/blog/1.jpg" rel="prettyPhoto"></a>
                            <a class="icon-link" href="#" title="view portfolio"></a>
                        </a>
                        <div class="img-border">
                            <a href="#"><img class="round_image" src="<?base_url()?>public/img/1.jpg" alt="pink light" /></a>
                        </div>
                    </figure></div>
            </div>




    </div>
</div>
<div id="footer">
    <div class="inner">
        <div class="line"></div>
        <div class="block_footer">
            <div id="logo_footer">
                <a href="index.html"><img src="<?base_url()?>public/img/logo_f.jpg" alt="ElephantWeb" title="ElephantWeb" /></a>
            </div>
            <div class="block_copyrights">
                <p>The ElephantWeb, Los Angeles</p>
                <p>tel: (489) 450-7821 email: info@elephant.com</p>
            </div>
            <div class="block_social_footer">
                <p>Follow us:</p>
                <a href="#" class="facebook">Facebook</a>
                <a href="#" class="twitter">Twitter</a>
                <a href="#" class="rss">Rss</a>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>
