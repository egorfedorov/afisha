<?php

class Mowner extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
	}		
	
	function categories_list()
	{
	    $query = $this->db->get('owner');
		$result = $query->result_array();
		return $result ? $result : false;
	}
    function add_owner($data)
    {
        $this->db->insert('owner', $data);
    }


}

// End of file