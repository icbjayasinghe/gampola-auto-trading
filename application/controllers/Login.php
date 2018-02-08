<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/22/2018
 * Time: 12:02 AM
 */

class Login extends CI_Controller{
    public function LoginUser(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        //echo"awa";
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login/login_form');
        }
        else
        {
            $this->load->model('User_model');
            $result=$this->User_model->emplogin();
            $this->load->model('Buyer_model');
            $r=$this->Buyer_model->notified();
            $result4=$r->num_rows();
            if($result!=FALSE){
                $employee_data=Array(
                    '$emp_id'=>$result->emp_id,
                    '$fname'=>$result->fname,
                    '$lname'=>$result->lname,
                    '$email'=>$result->email,
                    '$tel'=>$result->tel,
                    '$emp_type'=>$result->emp_type,
                    '$result4'=>$result4,
                    '$img'=>$result->img,
                    'logedin'=>TRUE

                );

                $this->session->set_userdata($employee_data);
                redirect('Home/admin');

            }
            else{
                $this->session->set_flashdata('errmsg','Wrong Email and Password..');
                redirect('Home/login');

            }



        }
    }

    public function logout(){
        $this->session->unset_userdata('$emp_id');
        $this->session->unset_userdata('$fname');
        $this->session->unset_userdata('$email');
        $this->session->unset_userdata('$tel');
        $this->session->unset_userdata('$emp_type');
        $this->session->unset_userdata('$result4');
        $this->session->unset_userdata('logedin');
        redirect('Home/login');

    }

    public function change_password(){
        $emp_id=$this->input->post('emp_id');
        $password=$this->input->post('password');
        $this->load->model('User_model');
        $this->User_model->password_change($emp_id,$password);
    }

}