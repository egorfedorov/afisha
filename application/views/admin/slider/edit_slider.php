<div id="activity_stats">
    <h3>Публикации - <?=$action_title?></h3>
</div>
<div class="one_wrap">
    <div class="widget">
        <div class="widget_title"><span class="iconsweet">f</span><h5><?=$action_title?></h5></div>
    </div>
    <div class="widget_body">
        <form method="post" action="<?=base_url()?>admin/slider/submit" enctype="multipart/form-data" >
            <ul class="form_fields_container">
                <li>
                    <label class="label notice" for="title_ru">Название Слайда</label>
                    <div class="form_input"><input type="text" value="" class="text medium" name="title" /></div>
                </li>
                <li>
                <label class="label notice">Слайд</label>

                <div id="file_uploader" class="form_input">
                    <input  type="file" name="file_upload" />
                </div>

                </li>
                <li>

                    <input type="submit"  class="button_small"  name="submit" value="Сохранить" />
                </li>


            </ul>
        </form>