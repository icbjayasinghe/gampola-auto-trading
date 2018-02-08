<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/25/2018
 * Time: 11:13 PM
 */

class Supplier extends CI_Controller{
    public function add(){
        $this->form_validation->set_rules('sup_name', 'Name', 'required');
        $this->form_validation->set_rules('tel', 'Phone number', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('ch_number', 'Ch. number', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('supplier_add');
        }
        else
        {
            $this->load->model('Supply_model');
            $response=$this->Supply_model->add_sup();

            if($response){
                $this->session->set_flashdata('successmsg','Successfully registered supplier and vehicle');
                redirect('Home/supplier_add');


            }
        }


    }

    public function vehicle_details(){
        $ch_number=$this->input->post('ch_number');
        $this->load->model('Supply_model');
        $details=$this->Supply_model->view_vehicle($ch_number);
        echo json_encode($details);

    }

}