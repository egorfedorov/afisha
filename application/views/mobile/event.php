<div class="container">
    <h3 class="left-text">Расписание на сегодня </h3>
    <p class="left-text">Все события</p>
</div>

<div class="decoration"></div>

<div class="container">
    <div id="gallery2" class="gallery2">

            <div>
                <a href="<?=$event['main_img']?>">
                    <img src="<?=$event['main_img']?>" alt="<?=$event['title']?>" class="event_img"/>
                </a>
                <h3 class="gallery-title left-text"><?=$event['title']?></h3>
                <div class="more_in">
                    <a href="#" class="posted-by"><?=$event['category_name']?></a>
					<a href="#" class="posted-on "><?=substr($event['time'], 0, 5);?></a>
					<a href="#" class="posted-more">Подробнее</a>
                </div>
                <p class="gallery-description left-text"><?=$event['description']?></p>

                <div style="clear: both;"></div>
            </div>
            <div class="decoration">
                <div class="deco1"></div>
                <div class="deco2"></div>
            </div>


    </div>
</div>



