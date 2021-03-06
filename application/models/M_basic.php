<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_basic extends CI_Model {

	public function getData($t, $w = null)
	{
		if ($w != null) {
			$this->db->where($w);
		}
		return $this->db->get($t);
	}

	public function lastId($t, $w = null)
	{
		if ($w != null) {
			$this->db->where($w);
			$this->db->order_by('id_claim', 'desc');		
		}else{
			$this->db->order_by('id', 'desc');
		}	
		return $this->db->get($t, 1);		
	}

	public function ins($t, $data)
	{
		$this->db->insert($t, $data);
	}

	public function upd($t, $data, $w)
	{
		$this->db->update($t, $data, $w);
	}

	public function del($t, $w)
	{
		$this->db->where($w);
		$this->db->delete($t);
	}

	public function hitungK()
	{
		$this->db->group_by('claim');
		
		
		
	}

}

/* End of file M_basic.php */
