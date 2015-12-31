<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model{

   public function save($comm_name, $email, $website, $subject){
       $data = array(
           'comm_name' => $comm_name,
           'email'=> $email,
           'website'=>$website,
           'subject'=>$subject,
       );
        $this->db->insert('t_comment', $data);
   }
    public function get_all(){
        $this->db->order_by('comm_id','desc');
        return $this -> db -> get('t_comment') -> result();
    }
    public function delete($comm_id){
        $this->db->delete('t_comment',array('comm_id'=> $comm_id));
    }



}