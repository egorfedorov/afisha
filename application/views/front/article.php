  <div class="block_cont_left">
            	<div class="block_blog post_type2">
                    <!--div class="ad-gallery">
                        <div class="ad-image-wrapper">
                            <div id="ad-image-description"></div>
                        </div>
                        <div class="ad-nav">
                            <div class="ad-thumbs">
                                <ul class="ad-thumb-list">
                                    <? foreach($article_images as $img):?>
                                    <li>
                                        <a href="<?=$img['path']?>"><img src="<?=$img['thumb']?>" alt="established fact that a reader will be distracted by the readable content of a page when looking." /></a>
                                    </li>
                                    <? endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div-->
                    <div class="art_img">
                        <img src="<?=base_url().$article_images[0]['path']?>" alt="" />
                    </div>
                	<div class="title">
                    	<h3><?=$article['title_ru']?></h3>
                    </div>
                    <!--div class="post_pic shadow_img">
                    	<div>
                        	<a href="#">
                                <? foreach($article_images as $img):?>
                                    <img src="<?=$img['path']?>" alt="" title="" />
                                <? endforeach;?>
                            </a>
                        </div>
                    </div>
                    <div class="blog_info">
                    	<div class="blog_post_prev_imgs">
                            <? $flag = true?>
                            <? foreach($article_images as $img):?>
                            <div class="img shadow_img <? if($flag) echo 'active';?> ">
                                <div>
                                    <a href="<?=$img['path']?>"><img src="<?=$img['path']?>" alt="" title="" /></a>
                                </div>
                            </div>
                            <? $flag = false ?>
                            <? endforeach;?>

                        </div-->

                    	<div class="line"></div>
                    <div class="blog_info">
                    <ul>
                        	<li>Дата: <a href="#"> <?php russian_date(strtotime($article['pub_date'])); ?> </a></li>
                            <li>Автор: <a href="#">Админ</a></li>
                            <!--li>in <a href="#">Web Design</a></li>
                            <li><a href="#comments">5</a> comments</li-->
                        </ul>
                        </div>
                        <div class="line"></div>

                    <div class="blog_content">
                    	<p><?=$article['text_ru']?></p>
                         <div class="share_block_art">
            <div class="share_btn">
                <a href="https://www.facebook.com/sharer.php?u=<?=$meta['url']?>" target="_blank">
                    <img src="<?=base_url()?>public/img/fb.png" />
                </a>
            </div>
            <div class="share_btn">
                <a href="http://vkontakte.ru/share.php?url=<?=$meta['url']?>" target="_blank">
                    <img src="<?=base_url()?>public/img/vk.png" />
                </a>
            </div>
            <div class="share_btn">
                <a href="http://twitter.com/home?status=<?=$meta['url']?>"  title="Click to share this post on Twitter" target="_blank">
                    <img src="<?=base_url()?>public/img/tw.png" />
                </a>
            </div>
            </div>
                    </div>

               <!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?60"></script>

<script type="text/javascript">
  VK.init({apiId: 3197076, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 15, width: "670", attach: "*"});
</script>

            </div> </div>
  