<?php

class Content extends ControllerBase 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('mcontent', 'mmenu', 'mcategory'));
        $this->data['cat_left'] = $this->mcategory->categories_list();
        $this->data['menu_id'] = 'blog';
        $this->data['rand_img'] = $this->mimages->random_img();
	}		
	
	function index()
	{

		$this->data['contents'] = $this->mcontent->content_list(null, array('status' => '1'), true);		
		
        $this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/content_list';				
        $this->load->view('front/layout', $this->data);
	}
	
	function get_content($id)
	{
		$this->data['content'] = $this->mcontent->content_info($id, true);
		if (!$this->data['content']) show_404();
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);				
		$this->data['content'] = 'front/content';				
        $this->load->view('front/layout', $this->data);
	}			    
}

// End of file