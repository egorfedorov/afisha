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
                    <a href="#" class="posted-by">Admin</a>
                    <a href="#" class="posted-on">22 Dec 2012</a>
                    <a href="#" class="posted-cat">Tutorials</a>
                    <a href="#" class="posted-tag">0 Comments</a>
                    <a href="#" class="posted-more">More</a>
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



