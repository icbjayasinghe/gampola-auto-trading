<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/27/2018
 * Time: 10:35 AM
 */

class Buyer extends CI_Controller{
    public function searchNumber(){
        $number=$this->input->post('number');
        $this->load->model('Buyer_model');
        $result=$this->Buyer_model->vehicle_search($number);
        echo json_encode($result);
    }

    public function searchChNumber(){
        $ch_number=$this->input->post('ch_number');
        $this->load->model('Buyer_model');
        $result2=$this->Buyer_model->vehicle_ch_number_search($ch_number);
        echo json_encode($result2);

    }

    public function add(){
//        $this->form_validation->set_rules('ch_number', 'Ch. Number', 'required');
        $this->form_validation->set_rules('selling_price', 'Selling Price', 'required');
        $this->form_validation->set_rules('buy_name', 'Buyer Name', 'required');
        $this->form_validation->set_rules('buy_nic', 'Buyer NIC', 'required');
        $this->form_validation->set_rules('buy_tel', 'Buyer Tel.', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('buy_address', 'Buyer Address', 'required');
        $this->form_validation->set_rules('leasing_name', 'Leasing Company Name', 'required');
        $this->form_validation->set_rules('no_of_installments', 'No of installments', 'required');
        $this->form_validation->set_rules('installment_amount', 'Installment amount', 'required');
        $this->form_validation->set_rules('insurance_name', 'Insurance Company Name', 'required');
        //$this->form_validation->set_rules('buy_description', 'Insurance Company Name', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('buyer_add');
        }
        else
        {
            $this->load->model('Buyer_model');
            $response=$this->Buyer_model->add_buyer();

            if($response) {
                $this->session->set_flashdata('successmsg', 'Successfully registered buyer');
                redirect('Home/buyer_add');
            }
            else{
                $this->session->set_flashdata('errmsg', 'Registration unsuccessful');
                redirect('Home/buyer_add');
            }


        }
    }









}