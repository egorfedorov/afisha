<?php

class Articles extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model(array('marticles', 'mimages'));

		$this->data['menu_section'] = 'articles';
		$this->data['msg'] = false;	
	}
	
	function index()
	{		
		$this->articles_list();
	}
	
	function articles_list()
	{
		// Get page
		$this->data['articles'] = $this->marticles->articles_list();
		
		// Prepare view
		$this->data['body'] = 'admin/articles/articles_list';
		$this->load->view('admin/layout', $this->data);
	}
	
	function add()
	{
		// Prepare view
		$this->data['action_title'] = 'Добавление новой статьи';
		$this->data['page'] = array('title_ru' => '', 'title_ua' => '', 'anons_ru' => '', 'anons_ua' => '', 'pub_date' => date('d-m-Y H:i'), 'text_ru' => '', 'text_ua' => '', 'video' => '','id' => '');
		$this->data['body'] = 'admin/articles/edit_article';
		$this->load->view('admin/layout', $this->data);
	}
	
	function edit($id)
	{
		// Get page
		$this->data['page'] = $this->marticles->article_info($id);
		$this->data['page']['pub_date'] = date('d-m-Y H:i', strtotime($this->data['page']['pub_date']));
        $this->data['article_images'] = $this->mimages->event_img($this->data['page']['id']);
       //print_r($this->data['article_images']);die;
		// Prepare view
		$this->data['action_title'] = 'Редактирование статьи';
		$this->data['body'] = 'admin/articles/edit_article';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
		// POST data
        //print_r($_POST);
        //print_r($_FILES);
        //die;
		$id = $this->input->post('id');		
		$article['title_ru'] = $this->input->post('title_ru');

		$article['anons_ru'] = $this->input->post('anons_ru');

		$article['text_ru'] = $this->input->post('text_ru');
		

		$article['pub_date'] = date('Y-m-d H:i:s', strtotime($this->input->post('pub_date')));		

		// Validation
		// ...
		// Inserting/Updating
		if ($id)
		{
			$this->marticles->update_article($id, $article);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья "'.$article['title_ru'].'" сохранена.';
            $article_id = $id;
		}
		else
		{
			$article_id = $this->marticles->add_article($article);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья "'.$article['title_ru'].'" добавлена.';
		}

        /// print_r($_FILES);die;
        foreach($_FILES as $name => $file){
            if($_FILES[$name]['size'] != 0){


                $config['upload_path'] = './uploads/images_events/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload($name))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->data['msg']['type'] = 'error';
                    $this->data['msg']['text'] = $error;
                    print_r($error);die;

                }else
                {
                    $data = array('upload_data' => $this->upload->data());
                    //print_r($data);die;
                    $image_name = $data['upload_data']['file_name'];
                    $image_data = array(
                        'path' => '/uploads/images_events/'.$image_name,
                        'item_id' =>$article_id,
                        'thumb' => '/uploads/images_events/thoumbs/'.$image_name
                    );

                    $config_res['image_library'] = 'gd2';
                    $config_res['source_image']	= $data['upload_data']['full_path'];
                    $config_res['new_image'] = $data['upload_data']['file_path'].'thumbs/'.$image_name;
                    $config_res['maintain_ratio'] = TRUE;
                    $config_res['width']	 = 130;
                    $config_res['height']	= 74;

                    $this->load->library('image_lib', $config_res);
                    if ( ! $this->image_lib->resize())
                    {
                        echo $this->image_lib->display_errors();die;
                    }


                    if($_POST[$name.'_id'] == ''){
                        $this->mimages->set_img($image_data);
                    }else{
                        $this->mimages->update_img($_POST[$name.'_id'], $image_data);
                    }
                    //
		        }
            }
        }
		// Redirecting
		$this->articles_list();
	}
	
	function delete($id)
	{
		if ($this->marticles->article_exists($id))
		{
			// Deletting
			$this->marticles->delete_article($id);
			//  $this->mcomment->delete_all_coments($id);
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
		$this->articles_list();
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