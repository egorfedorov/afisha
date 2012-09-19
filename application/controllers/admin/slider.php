<?php

class Slider extends CI_Controller
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('mconfig');		
		$this->load->model('mslider');
		$this->data['msg'] = false;
		$this->data['menu_section'] = 'main_page';	
	}
    function index()
    {
        $this->data['action_title'] = 'Список слайдов';
        $this->data['sliders'] = $this->mslider->slider_list();
        $this->data['body'] = 'admin/slider/slider_list';
        $this->load->view('admin/layout', $this->data);

    }
    function add()
    {
        // Prepare view
        $this->data['action_title'] = 'Добавление новой статьи';
        $this->data['page'] = array('title_ru' => '', 'title_ua' => '', 'anons_ru' => '', 'anons_ua' => '', 'pub_date' => date('d-m-Y H:i'), 'text_ru' => '', 'text_ua' => '', 'video' => '','id' => '');
        $this->data['body'] = 'admin/slider/edit_slider';
        $this->load->view('admin/layout', $this->data);
    }

    function delete($id)
    {
        if ($this->mslider->slide_exists($id))
        {
            // Deletting
            $this->mslider->delete_slide($id);
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
        $this->index();
    }
	function submit()
	{

		// POST data
		$title = $this->input->post('title');
		// Save banners
        $config['upload_path'] = './uploads/slider/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

                if ( !$this->upload->do_upload('file_upload'))
		        {
		        	$error = array('error' => $this->upload->display_errors());
			        $this->data['msg']['type'] = 'error';
			        $this->data['msg']['text'] = $error;
                    print_r($this->data['msg']);die;
		        }
		        else
		        {
			        $data = array('upload_data' => $this->upload->data());
                    $config_res['image_library'] = 'gd2';
                    $config_res['source_image']	= $data['upload_data']['full_path'];
                    $config_res['new_image'] = $data['upload_data']['file_path'].'thumbs/'.$data['upload_data']['file_name'];
                    $config_res['maintain_ratio'] = TRUE;
                    $config_res['width']	 = 130;
                    $config_res['height']	= 74;

                    $this->load->library('image_lib', $config_res);
                    if ( ! $this->image_lib->resize())
                    {
                        echo $this->image_lib->display_errors();die;
                    }


                    $data = array(
                        'path'=>'uploads/slider/'.$data['upload_data']['file_name'],
                        'thumb' => '/uploads/slider/thumbs/'.$data['upload_data']['file_name'],
                        'name' => $title
                    );
                    $this->mslider->add_slide($data);
		        }

		
		// Redirect
		$this->index();
	}
}

// End of file