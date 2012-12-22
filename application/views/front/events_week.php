<div class="page_title">
    <h1>События на следующую неделю</h1>
    <p class="page_description">Это события в ближайшие 7 дней</p>
    <div class="page_navigation">
        <ul>
            <li><a href="index.html">Главная</a></li>
            <li class="nav_line">/</li>
            <li>На неделю</li>
        </ul>
    </div>
</div>
<div class="line"></div>
<div class="block_filter">
    <p>Фильтр:</p>
    <ul>
        <li class="first"><a href="#" class="active" title="all">Все</a></li>
        <? if($categories): ?>
        <? foreach($categories as $alias=>$cat):?>
            <li><a href="#" title="<?=$alias?>"><?=$cat?></a></li>
            <? endforeach;?>
        <? endif; ?>

    </ul>
</div>
<div class="block_portfolio_c4_t2 filter_conteiner">
    <? if($events): ?>
    <? foreach($events as $event):?>
        <div class="img_block filter_box" title="<?=$event['alias']?>">
            <div class="img_box">
                <div>
                    <a href="<?=base_url()?>events/event/<?=$event['id']?>" ><img src="<?=$event['main_img']?>" alt="" title="" />
                        <!--span class="icon"></span-->
                    </a>
                </div>
            </div>
            <div class="description">
                <a href="<?=base_url()?>events/event/<?=$event['id']?>"><?=mb_substr($event['title'], 0, 50)?></a>
                <span class="filt_date"><?php russian_datem($event['realtime']);?></span><span class="filt_time"><?=substr($event['time'], 0, 5);?></span>
            </div>
        </div>


        <? endforeach;?>
    <? endif; ?>

    <div class="clear"></div>
</div>
