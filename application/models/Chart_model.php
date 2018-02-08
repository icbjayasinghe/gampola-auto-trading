<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/31/2018
 * Time: 8:57 PM
 */

class Chart_model extends CI_Model{
    public function ava_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $respond = $this->db->get();
        return $respond->num_rows();

    }
    public function sup_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        //$this->db->where('status',"available");
        $respond = $this->db->get();
        return $respond->num_rows();


    }
    public function buy_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"sold");
        $respond = $this->db->get();
        return $respond->num_rows();
    }

    public function moto_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $this->db->where('type',"Motor Cycle");
        $respond = $this->db->get();
        return $respond->num_rows();
    }
    public function three_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $this->db->where('type',"Three Wheel");
        $respond = $this->db->get();
        return $respond->num_rows();
    }
    public function car_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $this->db->where('type',"Car");
        $respond = $this->db->get();
        return $respond->num_rows();
    }
    public function van_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $this->db->where('type',"Van");
        $respond = $this->db->get();
        return $respond->num_rows();
    }
    public function lorry_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $this->db->where('type',"Lorry");
        $respond = $this->db->get();
        return $respond->num_rows();
    }
    public function other_qty(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"available");
        $this->db->where('type',"Other");
        $respond = $this->db->get();
        return $respond->num_rows();
    }






}