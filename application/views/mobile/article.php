

<div class="decoration"></div>

<div class="container">
    <div id="gallery2" class="gallery2">

        <div>
            <a href="<?=base_url().$article_images[0]['path']?>">
                <img src="<?=base_url().$article_images[0]['path']?>" alt="<?=$article['title_ru']?>" class="event_img"/>
            </a>
            <h3 class="gallery-title left-text"><?=$article['title_ru']?></h3>
            <div class="more_in">
                <a href="#" class="posted-by">Админ</a>
                <a href="#" class="posted-on "><?php russian_date(strtotime($article['pub_date']));?>></a>

            </div>
            <p class="gallery-description left-text"><?=$article['text_ru']?></p>

            <div style="clear: both;"></div>
        </div>
        <div class="decoration">
            <div class="deco1"></div>
            <div class="deco2"></div>
        </div>


    </div>
</div>

