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
	    $query = $this->db->get('category');
		$result = $query->result_array();
		return $result ? $result : false;
	}
    function add_category($data)
    {
        $this->db->insert('category', $data);
    }


}

// End of file