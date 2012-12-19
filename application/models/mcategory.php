<?php

class Mcategory extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
	}		
	
	function categories_list()
	{
        $query = $this->db->query('SELECT * FROM `category` WHERE id IN (SELECT category FROM events  group by category)');
        $result = $query->result_array();
        return $result ? $result : false;

	}
    function add_category($data)
    {
        $this->db->insert('category', $data);
    }


}

// End of file