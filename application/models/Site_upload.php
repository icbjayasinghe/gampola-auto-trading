<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 2/5/2018
 * Time: 10:37 PM
 */

class Site_upload extends CI_Model{
    public function upload_data(){
        $data=array(
            'id'=>$this->input->post('id'),
            'brand'=>$this->input->post('brand'),
            'price'=>$this->input->post('price'),
            'description'=>$this->input->post('description')

        );


        return $this->db->replace('site',$data);
    }

    public function get_data(){
        $this->db->select('*');
        $this->db->from('site');
        //$this->db->where('status',"sold");
        $respond = $this->db->get();
        return $respond;
    }
}