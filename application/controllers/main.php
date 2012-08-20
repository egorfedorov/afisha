<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('mconfig', 'mpages', 'mslider', 'marticles'));
        $this->data['menu_id'] = 0;
    }

	public function index()
	{

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

