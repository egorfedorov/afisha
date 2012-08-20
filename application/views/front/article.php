  <div class="block_cont_left">
            	<div class="block_blog post_type2">
                    <div class="ad-gallery">
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
                        	<li>On <a href="#">22 Novemver, 2011</a></li>
                            <li>posted by <a href="#">Admin</a></li>
                            <li>in <a href="#">Web Design</a></li>
                            <li><a href="#comments">5</a> comments</li>
                        </ul>
                        </div>
                        <div class="line"></div>

                    <div class="blog_content">
                    	<p><?=$article['text_ru']?></p>
                    </div>

          

            </div> </div>