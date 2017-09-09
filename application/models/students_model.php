<?php

class students_model extends CI_model{
	
	private $table = "students";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;	
	}
	
	public function read($condition=null){
		$this->db->select('*');
		$this->db->from($this->table);
		
		if (isset($condition)) $this->db->where($condition);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}
	
	public function update(){
	
	}
	
	
	public function delete_students($id) {
        //$this->db->select('*');
        //$this->db->from($this->table);

        $this->db->where($id);
        $this->db->delete($this->table);
      //  $this->db->from($this->table);
        return TRUE;
        //$query=$this->db->get();
        //return $query->result_array();
      }
	
}
?>
