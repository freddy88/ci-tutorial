<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_kereta extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	function get_kereta(){

		$query = $this->db->get("kereta");
		return $query->result();
	}

	public function save_kereta($data='')
	{
		if($data != ''){

			$this->db->insert('kereta', $data);

			return $this->db->insert_id();
		}
		else {
			return 0;
		}
	}

	public function get_kereta_by_id($id = null)
	{
		if($id != ''){

			$query = $this->db->get_where("kereta", ['id_kereta' => $id]);
			return $query->row();
		}
		else {
			return 0;
		}
	}

	public function save_edit_kereta($data,$id)
	{
		$this->db->where('id_kereta', $id);
		return $this->db->update('kereta', $data);
	}

	public function delete_kereta($id)
	{
		$this->db->where('id_kereta', $id);
		return $this->db->delete('kereta');
	}
}

?>