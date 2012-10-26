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
    <script type="text/javascript" src="<?=base_url()?>public/js/comm_input_bg.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/post_type2_slider.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/custom.quicksand.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/slider3.js"></script>
    <script type="text/javascript" src="<?=base_url()?>public/js/jquery.ad-gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/jquery.ad-gallery.css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35860032-1']);
  _gaq.push(['_setDomainName', 'freetime.ck.ua']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
                    <p>Присоединяйся:</p>
                    <a href="#" class="facebook">Facebook</a>
                    <a href="#" class="twitter">Twitter</a>
                    <a href="#" class="rss">Rss</a>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="block_mid">
            <div id="logo">
                <a href="<?=base_url()?>"><img src="<?=base_url()?>public/img/logo.jpg" alt="ElephantWeb" title="ElephantWeb" /></a>
            </div>
            <div id="menu">
               <ul>
                  <li><a href="<?=base_url()?>" <? if($menu_id == 'main')echo 'class="active"';?>>Главная<span>на сегодня</span></a>

                    </li>
                    <li><a href="<?base_url()?>events/today" <? if($menu_id == 'events')echo 'class="active"';?>>События<span>куда пойти</span></a>
                        <ul>
                            <li><a href="<?base_url()?>events/today">Сегодня</a></li>
                            <li><a href="<?base_url()?>events/week">На этой неделе</a></li>
                            <li><a href="<?base_url()?>events/month">В этом месяце</a></li>

                        </ul>
                    </li>
                    <li><a href="<?=base_url()?>page/o-kompanii" <? if($menu_id == 'about')echo 'class="project"';?>>О проекте<span>о нас</span></a></li>
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
                    <li><a href="<?=base_url()?>/blog" <? if($menu_id == 'blog')echo 'class="active"';?> >Блог<span>статьи</span></a>
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
                    <li><a href="<?=base_url()?>contact" <? if($menu_id == 'contact')echo 'class="active"';?>>Контакт<span>ваши отзывы</span></a></li>
                </ul>
            </div>
        </div>
        <div class="line"></div>
    </div>
</div>
<div id="content">
<div class="inner">
<!--div class="page_title">
    <h1>Blog 1</h1>
    <p class="page_description">This is a custom subpage description</p>
    <div class="page_navigation">
        <ul>
            <li><a href="index.html">Elephant Home</a></li>
            <li class="nav_line">/</li>
            <li>Blog 1</li>
        </ul>
    </div>
</div-->
<div class="line"></div>

    <?=$this->load->view($content)?>
<div class="block_cont_right">
    <!--div class="search_block">
        <form action="#">
            <div class="search_inp">
                <input type="text" name="" class="s_inp_text" title="Search" />
            </div>
            <div class="search_submit">
                <input type="submit" value="" />
            </div>
        </form>
    </div-->
    <div class="line"></div>

    <div class="line"></div>
    <div class="block_blog_category">
        <h4>категории</h4>
        <ul class="list2">
            <? foreach($cat_left as $item):?>
            <li><a href="<?=base_url()?>events/category/<?=$item['alias']?>"><?=$item['category_name']?></a> </li>
            <? endforeach;?>

            <!--li><a href="#">Photography</a> (2)</li>
            <li><a href="#">Illustration</a> (4)</li>
            <li><a href="#">Branding Design</a> (3)</li-->
        </ul>
    </div>
    <div class="block_recent_posts">
        <h4>Последние новости</h4>
        <? foreach($last_news as $news):?>
        <div class="post">
            <div class="img"><a href="<?=base_url()?>blog/get_article/<?=$news['id']?>"><img style="width: 40px;" src="<?=base_url()?><?=$news['path']?>" alt="" title="" /></a></div>
            <div class="text">
                <p><a href="<?=base_url()?>blog/get_article/<?=$news['id']?>"><?=$news['title_ru']?></a></p>
                <p class="date"><? russian_date(strtotime($news['pub_date']));?> </p>
            </div>
        </div>
        <? endforeach;?>

    </div>
    <div class="line"></div>
    <div class="block_last_work">
        <h4>Случайное фото</h4>
        <p>Фото с мероприятия в Черкассах</p>
        <div class="latest_img see_big2">
            <div>
                <a href="<?=base_url()?>public/img/big_img9.jpg" rel="prettyPhoto[gallery1]"><img src="<?=base_url()?>public/img/img_latest.jpg" title="" alt="" />
                    <span class="icon"></span></a>
            </div>
        </div>
        <!--div class="description">
            <h5 class="title">There are many variations</h5>
            <p class="alt">Photo of old Venice</p>
        </div-->
    </div>
    <div class="line"></div>
    <!--div class="block_archives">
        <h4>ARCHIVES</h4>
        <ul class="list2">
            <li><a href="#">August 2011</a></li>
            <li><a href="#">September 2011</a></li>
            <li><a href="#">October 2011</a></li>
            <li><a href="#">November 2011</a></li>
        </ul>
    </div-->
</div>
<div class="clear"></div>
<div class="block_other">
    <div class="block_blog">
        <h4>Последние статьи</h4>
        <? $i=0; //print_r($last_news);die;?>
        <? foreach($last_news as $news):?>
        <? if($i<2):?>
        <div class="post">
            <div class="img"><a href="<?=base_url()?>blog/get_article/<?=$news['id']?>"><img style="width: 40px;" src="<?=base_url()?><?=$news['path']?>" alt="" title="" /></a></div>
            <div class="text">
                <p><a href="<?=base_url()?>blog/get_article/<?=$news['id']?>"><?=$news['title_ru']?></a></p>
                <p class="date"><?php russian_date(strtotime($news['pub_date']));?> </p>
            </div>
        </div>
            <div class="line2"></div>
            <? endif;?>
        <? $i++;?>
        <? endforeach;?>

    </div>
    <div class="block_twitter">
        <h4>Twitter Widget</h4>
        <? if(isset($tweets)):?>
            <? foreach($tweets as $tweet):?>
            <div class="text">
                <p><?=$tweet['name']?>: <?=$tweet['text']?></p>
                <p class="date"><?php russian_date(strtotime($tweet['time']));?></p>
            </div>
            <div class="line2"></div>

           <? endforeach;?>
        <? endif;?>

    </div>
    <div class="block_portfolio">
        <h4>Категории</h4>
        <? foreach($cat_left as $item):?>
            <a href="<?=base_url()?>/events/category/<?=$item['alias']?>"><?=$item['category_name']?></a>
            <div class="line2"></div>

        <? endforeach;?>
        
    </div>

</div>
</div>
</div>
<div id="footer">
    <div class="inner">
        <div class="line"></div>
        <div class="block_footer">
            <div id="logo_footer">
                <a href="index.html"><img src="<?=base_url()?>public/img/logo_f.jpg" alt="ElephantWeb" title="ElephantWeb" /></a>
            </div>
            <div class="block_copyrights">
                <p>Freetime.ck.ua, Все события Черкасс</p>
                <p>email: freetimeck@gmail.com</p>
            </div>
            <div class="block_social_footer">
                <p>Присоединяйся:</p>
                <a href="#" class="facebook">Facebook</a>
                <a href="#" class="twitter">Twitter</a>
                <a href="#" class="rss">Rss</a>
            </div>
        </div>
    </div>
</div>
</div>
   <?
    function russian_date($time){
$date=explode(".", date("d.m.Y", $time));
switch ($date[1]){
case 1: $m='января'; break;
case 2: $m='февраля'; break;
case 3: $m='марта'; break;
case 4: $m='апреля'; break;
case 5: $m='мая'; break;
case 6: $m='июня'; break;
case 7: $m='июля'; break;
case 8: $m='августа'; break;
case 9: $m='сентября'; break;
case 10: $m='октября'; break;
case 11: $m='ноября'; break;
case 12: $m='декабря'; break;
}
echo $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2];
}
    ?>
</body>

</html>
