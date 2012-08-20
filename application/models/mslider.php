<?php

class Mslider extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function slider_list()
	{
		$query = $this->db->get('slider');
		$result = $query->result_array();  
		return $result ? $result : false;
	}
    function add_slide($data)
    {
        $this->db->insert('slider', $data);
        return $this->db->insert_id();
    }

    function delete_slide($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slider');
    }

    function slide_exists($id)
    {
        $this->db->where('id', $id);
        return $this->db->count_all_results('slider') > 0 ? true : false;
    }




	function article_info($id)
	{
		
		$this->db->where('id', $id);
		$query = $this->db->get('articles');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	
	function update_article($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('articles', $data);
	}
	function update_view($id)
	{
		$this->db->where('id', $id);
          $this->db->set('view', 'view + 1', false);
		$this->db->update('articles');
	}

	
	function delete_article($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('articles');
	}
	
	function article_exists($id)
	{
		$this->db->where('id', $id);
		return $this->db->count_all_results('articles') > 0 ? true : false;
	}
	
	function change_status($id)
	{
		$article = $this->article_info($id);
		$new_status = $article['status'] == '0' ? '1' : '0';		
		$this->db->where('id', $id);
		$this->db->set('status', $new_status);
		$this->db->update('articles');
	}
}

// End of file