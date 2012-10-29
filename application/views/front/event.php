<div class="block_cont_left">
    <div class="block_blog post_type1">
        <div class="post_pic shadow_img">
            <div>
                <a href="<?=$event['main_img']?>" rel="prettyPhoto[gallery2]"><img src="<?=$event['main_img']?>" alt="" title="" /></a>
            </div>
        </div>
        <div class="title">
            <div class="date">
                <p><b><?=substr($event['time'], 0, 5);?></b></p>
            </div>
            <div class="blog_info">
                <h3><?=$event['title']?></h3>
                <ul>
                    <li><i>место проведения </i> <a href="#"><?=$event['name']?></a></li>
                    <li><i>категория</i> <a href="<?=base_url().'events/category/'.$event['alias']?>"><?=$event['category_name']?></a></li>
                    <!--li><a href="#">7</a> comments</li-->
                </ul>
            </div>
        </div>
        <div class="blog_content">
            <p><?=$event['description']?></p>
            <div class="share_block">
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
    </div>
</div>