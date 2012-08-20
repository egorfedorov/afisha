<div id="activity_stats">
    <h3>Публикации - <?=$action_title?></h3>
</div>
<div class="one_wrap">
    <div class="widget">
        <div class="widget_title"><span class="iconsweet">f</span><h5><?=$action_title?></h5></div>
    </div>
    <div class="widget_body">
        <form method="post" action="<?=base_url()?>admin/articles/submit" enctype="multipart/form-data" >
            <ul class="form_fields_container">
                <li>
                    <label class="label notice" for="title_ru">Название Слайд 1 </label>
                    <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
                </li>
                <li>
                <label class="label notice">Слайд 1</label>

                <div id="file_uploader" class="form_input">
                    <input id="file_upload_1" type="file" name="file_upload_1" />
                    <input  type="hidden" name="file_upload_1_id" value="<? if(isset($images[0])) echo $images[0]['id'] ?>" />
                </div>
                <? if(isset($images[0])):?>
                <img src="<?=base_url()?><?=$images[0]['path']?>" alt="" style="width:250px; margin:0 auto;"/>
                <span class="data_actions iconsweet" >
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это изображение?')) {window.location.href='http://elfresco/admin/articles/delete_img/<?=$page[id]?>/<?=$page[image]?>';}" href="#" original-title="Delete">X</a>
						</span>
                <? endif;?>
                </li>
                <li>
                    <label class="label notice" for="title_ru">Название Слайд 1 </label>
                    <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
                </li>
                <li>
                    <label class="label notice">Слайд 1</label>

                    <div id="file_uploader" class="form_input">
                        <input id="file_upload_1" type="file" name="file_upload_1" />
                        <input  type="hidden" name="file_upload_1_id" value="<? if(isset($images[0])) echo $images[0]['id'] ?>" />
                    </div>
                    <? if(isset($images[0])):?>
                    <img src="<?=base_url()?><?=$images[0]['path']?>" alt="" style="width:250px; margin:0 auto;"/>
                    <span class="data_actions iconsweet" >
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это изображение?')) {window.location.href='http://elfresco/admin/articles/delete_img/<?=$page[id]?>/<?=$page[image]?>';}" href="#" original-title="Delete">X</a>
						</span>
                    <? endif;?>
                </li>
                <li>
                    <label class="label notice" for="title_ru">Название Слайд 1 </label>
                    <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
                </li>
                <li>
                    <label class="label notice">Слайд 1</label>

                    <div id="file_uploader" class="form_input">
                        <input id="file_upload_1" type="file" name="file_upload_1" />
                        <input  type="hidden" name="file_upload_1_id" value="<? if(isset($images[0])) echo $images[0]['id'] ?>" />
                    </div>
                    <? if(isset($images[0])):?>
                    <img src="<?=base_url()?><?=$images[0]['path']?>" alt="" style="width:250px; margin:0 auto;"/>
                    <span class="data_actions iconsweet" >
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это изображение?')) {window.location.href='http://elfresco/admin/articles/delete_img/<?=$page[id]?>/<?=$page[image]?>';}" href="#" original-title="Delete">X</a>
						</span>
                    <? endif;?>
                </li>
                <li>
                    <label class="label notice" for="title_ru">Название Слайд 1 </label>
                    <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
                </li>
                <li>
                    <label class="label notice">Слайд 1</label>

                    <div id="file_uploader" class="form_input">
                        <input id="file_upload_1" type="file" name="file_upload_1" />
                        <input  type="hidden" name="file_upload_1_id" value="<? if(isset($images[0])) echo $images[0]['id'] ?>" />
                    </div>
                    <? if(isset($images[0])):?>
                    <img src="<?=base_url()?><?=$images[0]['path']?>" alt="" style="width:250px; margin:0 auto;"/>
                    <span class="data_actions iconsweet" >
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это изображение?')) {window.location.href='http://elfresco/admin/articles/delete_img/<?=$page[id]?>/<?=$page[image]?>';}" href="#" original-title="Delete">X</a>
						</span>
                    <? endif;?>
                </li>
                <li>
                    <label class="label notice" for="title_ru">Название Слайд 1 </label>
                    <div class="form_input"><input type="text" value="<?=htmlspecialchars($page['title_ru'])?>" class="text medium" id="title_ru" name="title_ru" /></div>
                </li>
                <li>
                    <label class="label notice">Слайд 1</label>

                    <div id="file_uploader" class="form_input">
                        <input id="file_upload_1" type="file" name="file_upload_1" />
                        <input  type="hidden" name="file_upload_1_id" value="<? if(isset($images[0])) echo $images[0]['id'] ?>" />
                    </div>
                    <? if(isset($images[0])):?>
                    <img src="<?=base_url()?><?=$images[0]['path']?>" alt="" style="width:250px; margin:0 auto;"/>
                    <span class="data_actions iconsweet" >
							<a class="tip_north" onclick="if (confirm('Вы действительно хотите удалить это изображение?')) {window.location.href='http://elfresco/admin/articles/delete_img/<?=$page[id]?>/<?=$page[image]?>';}" href="#" original-title="Delete">X</a>
						</span>
                    <? endif;?>
                </li>
                <li>
                    <input type="hidden" name="id" value="<?=$page['id']?>" />
                    <input type="submit"  class="button_small"  name="submit" value="Сохранить" />
                </li>
            </ul>
        </form>