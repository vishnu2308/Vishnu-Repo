<?php
class Excel_import_model extends CI_Model
{
	function select()
	{
		$query = $this->db->get('tbl_customer');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('tbl_customer', $data);
	}
}