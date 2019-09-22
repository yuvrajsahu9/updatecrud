<?php
Class Model_admin extends CI_Model{

public function ins($data)
{
	return $this->db->insert('student',$data);
}
public function readdata(){
    $query=$this->db->select('id,name,email,mobile,city')
                          ->get('student');
                return $query->result();
}

public function udata($data,$idata){
	  
     $this->db->where('id',$idata);
       
       $result= $this->db->update('student',$data);
       return $result;
       
    
}
public function delete($data)
 	{   $this->db->where('id',$data);
 		$this->db->delete('student');
 		return true;
 	}

 	function get_user($id)
 	{
 		$query = $this->db->get_where('student', ['id'=>$id]);
 		return $query->row();
 	}
}