<?php

class Mobile extends ControllerBase
{
	function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Europe/Kiev');
		$this->load->model(array('mevents', 'mmenu', 'mimages', 'marticles', 'mcategory', 'mtweet'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
        $this->data['cat_left'] = $this->mcategory->categories_list();
        $this->data['tweets'] = $this->mtweet->tweets_list();
       $this->data['menu_id'] = 'events';

	}

	function index()
	{
        $this->data['events'] = $this->mevents->events_list(null, null,'time', 'ASC',date("H:i:s"));
        $this->data['content'] = 'mobile/events_list';
        $this->load->view('mobile/layout', $this->data);
	}
    function today()
    {
        $this->data['events'] = $this->mevents->events_list(null, null,'time', 'ASC',date("H:i:s"));
        $this->data['content'] = 'mobile/events_list';
        $this->load->view('mobile/layout', $this->data);
    }
    function week()
    {
        $this->data['events'] = $this->mevents->events_week();
        $cat = array();
        if($this->data['events']){
        foreach($this->data['events'] as $event){
            if(!isset($cat[$event['alias']]))$cat[$event['alias']] = $event['category_name'];
        }
        }
        $this->data['categories'] = $cat;
        $this->data['content'] = 'mobile/events_week';
        $this->load->view('mobile/layout', $this->data);
    }
    function month()
    {
        $this->data['events'] = $this->mevents->events_month();

        $cat = array();
        if($this->data['events']){
        foreach($this->data['events'] as $event){

            if(!isset($cat[$event['alias']]))$cat[$event['alias']] = $event['category_name'];
        }
        }
        $this->data['categories'] = $cat;
        $this->data['content'] = 'mobile/events_month';
        $this->load->view('mobile/layout', $this->data);
    }
    function blog()
    {
        $this->data['articles'] = $this->marticles->articles_list();
        $images =  $this->mimages->events_list_img();
        $this->data['articles_images'] = array();
        foreach($images as $img){
            $this->data['articles_images'][$img['item_id']] = $img;
        }



        $this->data['content'] = 'mobile/blog_list';
        $this->load->view('mobile/layout', $this->data);
    }
    function event($id)
    {
        $this->data['event'] = $this->mevents->event_info($id);
        //print_r($this->data['event']);die;
        if (!$this->data['event']) show_404();
        //$data = array('view' => 'view+1');
        //$this->marticles->update_view($id);
        $this->data['meta']['description'] = '';
        $this->data['meta']['link'] = base_url().'events/event'.$id;
        //$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
        $this->data['content'] = 'mobile/event';
        $this->load->view('mobile/layout', $this->data);
    }
    function category($name = 'cinema')
    {
        $this->data['events'] = $this->mevents->events_list_by_category($name);
        //print_r($this->data['events']);die;
        if (!$this->data['events']) show_404();

        $this->data['content'] = 'front/events_list';
        $this->load->view('front/layout', $this->data);
    }
    function add_event()
    {
        //$this->data['events'] = $this->mevents->events_list_by_category($name);
        //print_r($this->data['events']);die;
        //if (!$this->data['events']) show_404();

        $this->data['content'] = 'front/add_event';
        $this->load->view('front/layout', $this->data);
    }
	function popular_article()
	{
       // echo 'asdf';die;
		$this->data['articles'] = $this->marticles->articles_list(null, array('status' => '1'), true, 'view','desc');
       // print_r($this->data['articles']);die;
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/articles_list';
        $this->load->view('front/layout', $this->data);
	}
	function get_article($id)
	{
		$this->data['article'] = $this->marticles->article_info($id, true);
		if (!$this->data['article']) show_404();
        //$data = array('view' => 'view+1');
        $this->marticles->update_view($id);
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);				
		$this->data['content'] = 'front/article';				
        $this->load->view('front/layout', $this->data);
	}

}




// End of file