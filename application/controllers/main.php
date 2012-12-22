<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
            redirect('mobile');
        }
        $this->load->model(array('mconfig', 'mpages', 'mslider', 'marticles', 'mcategory', 'mtweet', 'mevents'));
        $this->data['cat_left'] = $this->mcategory->categories_list();
        $this->data['menu_id'] = 0;
        $this->data['menu_id'] = 'main';

    }

	public function index()
	{

        $this->data['last_news'] =  $this->marticles->articles_list_last(4);
        $this->data['images'] = $this->mslider->slider_list();
        $this->data['content'] = 'front/main';

        $start_time = time();
        $end_time = time() + 86400*10;
        $events = $this->mevents->events_list_homepage($start_time, $end_time);
        $new_event = array();
        foreach($events as $event){
                $new_event[$event['realtime']][] = $event;
        }
        $this->data['events'] = $new_event;
        //print_r($this->data['events']);die;
       $this->load->view('front/main', $this->data);
        //echo 'asdf';die;
	}

}

