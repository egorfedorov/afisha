<div class="block_cont_left portfolio-items">

    <div class="container-frame">
        <div id="portfolio-filter" class="group">
            <div class="centered-list">
                <div>
                    <ul class="filters filter group clearfix">
                        <li class="current all"><a href="#" title="all">Все</a></li>
                        <? if($categories): ?>
                        <? foreach($categories as $alias=>$cat):?>
                            <li class="<?=$alias?>"><a href="#" title="<?=$alias?>"><?=$cat?></a></li>
                            <? endforeach;?>
                        <? endif; ?>

                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="clear"></div>

    <ul id="items" class="portfolio two-columns group">
        <? if($events): ?>
        <? foreach($events as $event):?>
            <li data-id="id-2" data-type="<?=$event['alias']?>" class="portfolio-data eight columns2 omega">
                    <div class="cut_image">
                   <img class="image_month" src="<?=$event['main_img']?>" alt="pink light" />
                    </div>
                    <div class="title_filter"><a href=""> <?=$event['title']?></a></div>
                    <p>Adipiscing ut tortor aliquam sit ut,</p>

            </li>
            <? endforeach;?>
        <? endif; ?>
    </ul>
</div>