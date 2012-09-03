<script type="text/javascript" src="<?=base_url()?>public/js/datetime_picker/datetimepicker_css.js"></script>
<div id="activity_stats">
  	<h3>Публикации - <?=$action_title?></h3>
</div>
<div class="one_wrap">
    <div class="widget">
            <div class="widget_title"><span class="iconsweet">f</span><h5><?=$action_title?></h5></div>
    </div>
    <div class="widget_body">
        <form method="post" action="<?=base_url()?>admin/owner/submit" enctype="multipart/form-data" >
            <ul class="form_fields_container">

                <li>
                    <label class="label notice" for="title_ru">Название </label>
	                <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['name'])?>" class="text medium" id="title_ru" name="name" /></div>
                </li>


                <li>
                    <input type="hidden" name="id" value="<?=$page['id']?>" />
                    <input type="submit"  class="button_small"  name="submit" value="Сохранить" />                    
                </li>
	        </ul>
</form>