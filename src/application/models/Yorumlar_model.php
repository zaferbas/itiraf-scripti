<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlar_model extends CI_Model {
    
    public function yorum_ekle($data){
        $insert = $this->db->insert("brkdndr_itiraf_yorumlar", $data);
        return $insert;
    }
    
    public function get_all(){
        $result = $this->db->get("brkdndr_itiraf_yorumlar")->result();
        return $result;
    }
    public function get($where){
        
		$result = $this->db->where($where)->get("brkdndr_itiraf_yorumlar")->row();
        
        return $result;
	}
    public function update($where, $data){
		
        $update = $this->db->where($where)->update("brkdndr_itiraf_yorumlar", $data);
        return $update;
	}
    
    public function delete($where){
		
        $delete = $this->db->where($where)->delete("brkdndr_itiraf_yorumlar");
        return $delete;
	}
}
