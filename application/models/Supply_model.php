<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/26/2018
 * Time: 12:09 AM
 */

class Supply_model extends CI_Model{
    public function add_sup(){
        $data=array(
          'sup_name'=>$this->input->post('sup_name',TRUE),
            'nic'=>$this->input->post('nic',TRUE),
            'tel'=>$this->input->post('tel',TRUE),
            'address'=>$this->input->post('address',TRUE),
            'cond'=>$this->input->post('cond',TRUE),
            'type'=>$this->input->post('type',TRUE),
            'brand'=>$this->input->post('brand',TRUE),
            'model'=>$this->input->post('model',TRUE),
            'number'=>$this->input->post('number',TRUE),
            'ch_number'=>$this->input->post('ch_number',TRUE),
            'price'=>$this->input->post('price',TRUE),
            'description'=>$this->input->post('description',TRUE),
            'status'=>"available"
        );
        return $this->db->insert('supply',$data);

    }

    public function view(){
        $this->db->select('*');
        $this->db->from('supply');
        //$this->db->where('status',"sold");
        $respond = $this->db->get();
        return $respond;
    }

    public function view_vehicle($element){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('ch_number',$element);
        $result = $this->db->get();
        return $result->row();

    }

}