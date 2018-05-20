<?php 
class Model_article extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function store($data){
		$this->db->insert('article',$data);
	}
	public function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('article',$data);
	}
	public function get_article($id){
		return $this->db->get_where('article',array('id'=>$id));
	}

	public function get(){
		return $this->db->get('article');
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('article');
	}

}