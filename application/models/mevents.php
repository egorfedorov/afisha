<?php

class Mevents extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function events_list($fields = null, $filter = null, $order_cat = null, $order_by = null, $time_now = null)
	{
	    if ($fields)
		{
			$this->db->select(implode(',', $fields));
		}
        $this->db->select('events.*, owner.name, category.category_name,category.alias');
		if ($filter) $this->db->where($filter);
        if ($order_cat) $this->db->order_by($order_cat, $order_by);
        $where = "(every_day ='1' OR (every_day='0' AND date='".date('m-d-Y')."'))";
        $this->db->where($where);
        $this->db->where('time >=',$time_now);
        $this->db->join('owner', 'owner.id = events.id_owner');
        $this->db->join('category', 'category.id = events.category');
		$query = $this->db->get('events');
		$result = $query->result_array();
        //echo  $this->db->last_query();die;
		//print_r($result);die;
        return $result ? $result : false;
	}
    function events_month()
    {
        $this->db->select('events.*, owner.name,category.category_name,category.alias');
        $this->db->where('date != ', '');
        $this->db->where('realtime > ', strtotime('now'));
        $this->db->where('realtime < ', strtotime('+1 month'));
        $this->db->join('owner', 'owner.id = events.id_owner');
        $this->db->join('category', 'category.id = events.category');
        $query = $this->db->get('events');
        $result = $query->result_array();
        //echo  $this->db->last_query();die;
        return $result ? $result : false;
    }
    function events_week()
    {
        $this->db->select('events.*, owner.name, category.category_name,category.alias');
        $this->db->where('date != ', '');
        $this->db->where('realtime > ', strtotime('now'));
        $this->db->where('realtime < ', strtotime('+1 week'));
        $this->db->join('owner', 'owner.id = events.id_owner');
        $this->db->join('category', 'category.id = events.category');
        $query = $this->db->get('events');
        $result = $query->result_array();
       // echo  $this->db->last_query();die;
        return $result ? $result : false;
    }
    function events_list_admin()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('events');
        $result = $query->result_array();
        //echo  $this->db->last_query();die;
        return $result ? $result : false;
    }
    function add_event($data)
    {
        $this->db->insert('events', $data);
    }
    function update_event($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('events', $data);
    }
	function event_info($id)
	{
        $this->db->select('events.*, owner.name, category.category_name,category.alias');
		$this->db->where('events.id', $id);
        $this->db->join('owner', 'owner.id = events.id_owner');
        $this->db->join('category', 'category.id = events.category');
		$query = $this->db->get('events');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	function events_list_by_category($name)
	{
        $this->db->select('events.*, owner.name, category.category_name,category.alias');
        $this->db->where('category.alias', $name);
        $this->db->join('owner', 'owner.id = events.id_owner');
        $this->db->join('category', 'category.id = events.category');
        $query = $this->db->get('events');
        $result = $query->result_array();
        return $result ? $result : false;
	}
    function delete_events($data=array()){
        $this->db->delete('events', $data);
    }
    function event_exists($id)
	{
		$this->db->where('id', $id);
		return $this->db->count_all_results('events') > 0 ? true : false;
	}

}

// End of file