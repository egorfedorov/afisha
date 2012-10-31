<div class="container">
    <h3 class="left-text">Расписание на неделю </h3>
</div>

<div class="decoration"></div>

<div class="container">
    <div class="gallery2">
        <?php if ($events) : ?>
        <?php foreach ($events as $event) : ?>
            <div class="mob_event_div">

                <img src="<?=$event['main_img']?>" alt="<?=$event['title']?>" class="event_img"/>

                <h3 class="gallery-title left-text"><?=$event['title']?></h3>
                <div class="more_in">
                    <a href="#" class="posted-by"><?=$event['category_name']?></a>
                    <a href="#" class="posted-on "><?=$event['date']?>  <?=substr($event['time'], 0, 5);?></a>

                    <a href="#" class="posted-more">Подробнее</a>
                </div>
                <p class="gallery-description left-text"><? $words=explode(" ",$event['description']); echo implode(" ",array_splice($words,0,50))?></p>
                <a href="<?=base_url()?>mobile/event/<?=$event['id']?>" class="button grey"> Подробнее</a>
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



