    <div id="activity_stats">
        	<h3>Публикации - Список публикаций</h3>
    </div>
    <!--Quick Actions-->
    <div id="quick_actions">
        	<a class="button_big" href="<?=base_url()?>admin/slider/add"><span class="iconsweet">+</span>Добавить слайд</a>
    </div>
    <div class="one_wrap">
        <div class="widget">
            <div class="widget_title"><span class="iconsweet">f</span><h5>Список публикаций</h5></div>
        </div>
         <div class="widget_body">
            <!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="8%">ID</th>
                        <th width="15%">Название</th>
                        <th width="20%">Действия</th>
                        
                    </tr>
                    <?php if ($sliders) : ?>
	<?php $row = 0; $n = 1; ?>
	<?php foreach ($sliders as $slider) : ?>
	<tr <?php if ($row % 2 == 0) echo 'class=""'; ?>>
	    <td class="td-1"><?=$n++?></td>
	    <td class="td-3"><?=$slider['name']?></td>
		<td class="td-3">
            <span class="data_actions iconsweet">
                <a class="tip_north" original-title="Edit" href="<?=base_url()?>admin/articles/edit/<?=$slider['id']?>">C</a>
                <a class="tip_north" original-title="Delete" href="#" onclick="if (confirm('Вы действительно хотите удалить эту статью?')) {window.location.href='<?=base_url()?>admin/articles/delete/<?=$article['id']?>';}">X</a>
			</span>
	    </td>
	</tr>
	<?php $row = 1 - $row; ?>
	<?php endforeach; ?>
<?php endif; ?>	      
                </table>
         </div>
    </div>

