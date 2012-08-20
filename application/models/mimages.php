<?php

class Mimages extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function events_list_img()
	{

        $this->db->group_by("item_id");
        $query = $this->db->get('images');
		$result = $query->result_array();
		return $result ? $result : false;
	}
    function event_img($id)
    {

        $this->db->where("item_id", $id);
        $query = $this->db->get('images');
        $result = $query->result_array();
        return $result ? $result : false;
    }
    function set_img($data)
    {
        $this->db->insert('images', $data);
    }
    function update_img($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('images', $data);
    }

}

// End of file