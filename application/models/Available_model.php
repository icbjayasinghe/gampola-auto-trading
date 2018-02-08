<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/31/2018
 * Time: 1:17 PM
 */

class Available_model extends CI_Model{
    public function available(){

        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $respond = $this->db->get();
        return $respond;
    }

    public function view($element){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('ch_number',$element);
        $result = $this->db->get();
        return $result->row();

    }
    public function delete($element){
        $this->db->where('ch_number', $element);
        $this->db->delete('supply');
    }

    public function sold(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"sold");
        $respond = $this->db->get();
        return $respond;
    }
    public function buyer_view($element){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('ch_number',$element);
        $result = $this->db->get();
        return $result->row();

    }

}