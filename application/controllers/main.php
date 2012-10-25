<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('mconfig', 'mpages', 'mslider', 'marticles', 'mcategory'));
        $this->data['cat_left'] = $this->mcategory->categories_list();
        $this->data['menu_id'] = 0;
        $this->data['menu_id'] = 'main';
    }

	public function index()
	{
        $this->data['last_news'] =  $this->marticles->articles_list_last(4);
       // print_r($this->data['last_news']);die;
        $this->data['images'] = $this->mslider->slider_list();
        $this->data['content'] = 'front/main';
        $this->load->view('front/main', $this->data);
	}

    function test_main()
	{
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/main';
        $this->load->view('front/layout', $this->data);
	}
}

