<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/22/2018
 * Time: 12:45 PM
 */

class User_model extends CI_Model{
    public function emplogin(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $respond = $this->db->get('employee');


        if($respond->num_rows()==1){
//            $this->db->where('email', $email);
//            $this->db->update('user');
            return $respond->row(0);

        }
        else{
            return FALSE;
        }


    }

    public function password_change($id,$psw){
        $this->db->set('password',$psw);
        $this->db->where('emp_id', $id);
        $this->db->update('employee');
    }

}