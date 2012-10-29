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
                <!--div class="cut_image">
                <a href="<?=base_url().'events/event/'.$event['id']?>">
                    <img class="image_month" src="<?=$event['main_img']?>" alt="pink light" />
                </a>
            </div-->
                <div class="latest_img see_big2">
                    <div>
                        <a href="<?=$event['main_img']?>" rel="prettyPhoto[gallery1]"><img src="<?=$event['main_img']?>" title="111" alt="222" />
                            <span class="icon"></span></a>
                    </div>
                </div>
                <div class="title_filter"><a href="<?=base_url().'events/event/'.$event['id']?>"> <?=$event['title']?></a></div>


            </li>
            <? endforeach;?>
        <? endif; ?>
    </ul>
</div>