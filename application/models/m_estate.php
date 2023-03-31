<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_estate extends CI_Model {

	public function get_data($table)
	{

		return $this->db->get($table);
	
				
	}
function get_id($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
		}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
