<div class="container">
    <h3 class="left-text">Только интересные новости</h3>
    <p class="left-text"></p>
</div>

<div class="decoration"></div>

<div class="container">
    <div class="gallery2">
        <?php if ($articles) : ?>
        <?php foreach ($articles as $article) : ?>
        <div class="mob_event_div">

                <img src="<?=$articles_images[$article['id']]['path']?>" alt="<?=$article['title_ru']?>" class="event_img"/>

            <h3 class="gallery-title left-text"><?=$article['title_ru']?></h3>
            <div class="more_in">
            <a href="#" class="posted-by">Админ</a>
            <a href="#" class="posted-on "></a>
         
            <a href="#" class="posted-more">Подробнее</a>
            </div>
            <p class="gallery-description left-text"><?=$article['anons_ru']?></p>
            <a href="<?=base_url()?>mobile/get_article/<?=$article['id']?>" class="button grey"> Подробнее</a>
            <div style="clear: both;"></div>
        </div>
        <div class="decoration">
            <div class="deco1"></div>
            <div class="deco2"></div>
        </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</div>



