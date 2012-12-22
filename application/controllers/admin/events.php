<?php

class Events extends CI_Controller
{
	private $data;

	function __construct()
	{
		parent::__construct();
		//$this->load->helper('http_auth');
		$this->load->model(array('mevents', 'mowners', 'mcategory'));
		//$this->load->model('mcomment');
		$this->data['menu_section'] = 'events';
		$this->data['msg'] = false;	
	}
	
	function index()
	{		
		$this->events_list();
	}
	
	function events_list()
	{
		// Get page
		$this->data['events'] = $this->mevents->events_list_admin();
		//print_r($this->data['events']);die;
		// Prepare view
		$this->data['body'] = 'admin/events/events_list';
		$this->load->view('admin/layout', $this->data);
	}
	
	function add()
	{
		// Prepare view
		$this->data['action_title'] = 'Добавление нового события';
		$this->data['event'] = array('title' => '', 'link' => '', 'description' => '', 'time' => '', 'main_img' => '', 'date' => date('m-d-Y'), 'text_ru' => '', 'text_ua' => '', 'video' => '','id' => '');
        $this->data['owners'] = $this->mowners->owners_list();
        $this->data['categories'] = $this->mcategory->categories_list();
        $this->data['body'] = 'admin/events/edit_event';
		$this->load->view('admin/layout', $this->data);
	}
	
	function edit($id)
	{
		// Get page
		$this->data['event'] = $this->mevents->event_info($id);
        $this->data['categories'] = $this->mcategory->categories_list();
        $this->data['owners'] = $this->mowners->owners_list();
		// Prepare view
		$this->data['action_title'] = 'Редактирование coбытия';
		$this->data['body'] = 'admin/events/edit_event';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
		// POST data
		$id = $this->input->post('id');		
		$article['title'] = $this->input->post('title');
		$article['description'] = $this->input->post('description');
        $article['link'] = $this->input->post('link');
		$article['category'] = $this->input->post('category');
        $article['every_day'] = $this->input->post('every_day');
        $article['id_owner'] = $this->input->post('owner_id');
        $article['date'] = substr($this->input->post('date'),0,10);
        $article['time'] = $this->input->post('time');
        $realtime = explode("-", $article['date']);
		$article['realtime'] = strtotime($realtime[2].'-'.$realtime[0].'-'.$realtime[1]);

		//$article['pub_date'] = date('Y-m-d H:i:s', strtotime($this->input->post('pub_date')));

		// Validation
		// ...
       /// print_r($_FILES);die;
		if($_FILES['file_upload']['size'] != 0){
        $config['upload_path'] = './uploads/images_events/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
        
		if ( !$this->upload->do_upload('file_upload'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = $error;
            print_r($error);die;

		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
            $article['main_img'] = base_url().'uploads/images_events/'.$data['upload_data']['file_name'];

            $image_name = $data['upload_data']['file_name'];
            $config_res['image_library'] = 'gd2';
            $config_res['source_image']	= $data['upload_data']['full_path'];
            $config_res['new_image'] = $article['thumb_small'] = $data['upload_data']['file_path'].'thumbs/thumb_small_'.$image_name;
            $config_res['maintain_ratio'] = TRUE;
            $config_res['create_thumb'] = TRUE;
            $config_res['width']	 = 100;
            $config_res['height']	= 150;
          //  print_r($config_res);die;
            $this->image_lib->initialize($config_res);

            if ( ! $this->image_lib->resize())
            {
                echo $this->image_lib->display_errors();die;
            }
            $image_name = $data['upload_data']['file_name'];
            $config_res['image_library'] = 'gd2';
            $config_res['source_image']	= $data['upload_data']['full_path'];
            $config_res['new_image'] = $article['thumb_medium'] = $data['upload_data']['file_path'].'thumbs/thumb_medium_'.$image_name;
            $config_res['maintain_ratio'] = TRUE;
            $config_res['create_thumb'] = TRUE;
            $config_res['width']	 = 204;
            $config_res['height']	= 300;
            //  print_r($config_res);die;
            $this->image_lib->initialize($config_res);
            if ( ! $this->image_lib->resize())
            {
                echo $this->image_lib->display_errors();die;
            }

		}

        }
		// Inserting/Updating
		if ($id)
		{
			$this->mevents->update_event($id, $article);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'События "'.$article['title'].'" сохранена.';
		}
		else
		{
            //print_r($article);die;
			$this->mevents->add_event($article);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'События "'.$article['title'].'" добавлена.';
		}
		
		// Redirecting
		$this->events_list();
	}
	
	function delete($id)
	{
		if ($this->mevents->event_exists($id))
		{
			// Deletting
			$this->mevents->delete_events(array('id'=>$id));
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья успешно удалена.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Статья не найдена.';	
		}						
		
		// Redirecting
		$this->events_list();
	}
	
	function delete_video($id)
	{
		if ($this->marticles->article_exists($id))
		{
				// Deletting
				$this->marticles->delete_article_video($id);
				$this->data['msg']['type'] = 'succeed';
				$this->data['msg']['text'] = 'Видео успешно удалено.';
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Медиа файл не найден.';	
		}						
		
		// Redirecting
		$this->edit($id);
	}
	
	function delete_img($id, $filename)
	{
		
		
		if ($this->marticles->article_exists($id))
		{
			// Deletting
				
			//current dirrectory
			$directory=$_SERVER['DOCUMENT_ROOT'].'\uploads';
			
			$dir = opendir($directory);
  			while(($file = readdir($dir)))
			{
          		if((is_file("$directory/$file")) && ("$directory/$file" == "$directory/$filename"))
  				{
    			unlink("$directory/$file");
                if(!file_exists($directory."/".$filename));
  				}
			}
			closedir($dir);  
				
				
				$this->marticles->delete_article_img($id);
				$this->data['msg']['type'] = 'succeed';
				$this->data['msg']['text'] = 'Видео успешно удалено.';
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Медиа файл не найден.';	
		}						
		
		// Redirecting
		$this->edit($id);
	}
	function change_status($id)
	{
		if ($this->marticles->article_exists($id))
		{
			// Deletting
			$this->marticles->change_status($id);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статус успешно изменен.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Элемент не найден.';	
		}						
		
		// Redirecting
		$this->articles_list();
	}
		
}

// End of file