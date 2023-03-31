	<?php 
 
class M_dashboard extends CI_Model{	
		
	public function get_data($table)
	{

		return $this->db->get($table);
	
				
	}
	function get_data_kavling(){	

	$r = "available";
	$where = array(
				'status' => $r,
				
		);
		
		$this->db->where($where);
		return $this->db->get_where('tb_kavling',$where);
		}



}

	