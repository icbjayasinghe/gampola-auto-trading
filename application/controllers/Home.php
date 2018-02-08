<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
	    $this->load->model('Site_upload');
	    $result['request']=$this->Site_upload->get_data();
	    $this->load->view('header');
		$this->load->view('home',$result);
	}

	public function login(){
	    $this->load->view('login/login_form');

    }
    public function contact(){
        $this->load->view('header');
	    $this->load->view('contact');
    }

    public function site_availables(){
        $this->load->model('Available_model');
        $result['request']=$this->Available_model->available();
        //print_r($result);
        $this->load->view('site_availables/availables_form',$result);

    }

    public function about(){
	    $this->load->view('site_about/about');
    }

    public function admin(){
	    $this->load->model('Chart_model');
        $result1=$this->Chart_model->ava_qty();
        //$this->load->model('Chart_model');
        $result2=$this->Chart_model->sup_qty();
        $result3=$this->Chart_model->buy_qty();

        $moto=$this->Chart_model->moto_qty();
        $three=$this->Chart_model->three_qty();
        $car=$this->Chart_model->car_qty();
        $van=$this->Chart_model->van_qty();
        $lorry=$this->Chart_model->lorry_qty();
        $other=$this->Chart_model->other_qty();

        $this->load->model('Buyer_model');
        $r=$this->Buyer_model->notified();
        $result4=$r->num_rows();
        $result=array(
            'result1'=>$result1,
            'result2'=>$result2,
            'result3'=>$result3,
            'result4'=>$result4,
            'moto'=>$moto,
            'three'=>$three,
            'car'=>$car,
            'van'=>$van,
            'lorry'=>$lorry,
            'other'=>$other
        );



	    $this->load->view('dashboard',$result);

    }

    public function supplier_add(){
	    $this->load->view('supplier_add');
    }

    public function buyer_add(){
	    $this->load->view('buyer_add');
    }

    public function available(){
	    $this->load->model('Available_model');
        $result['request']=$this->Available_model->available();
        //print_r($result);
	    $this->load->view('available_vehicles',$result);
    }

    public function ava_details(){
	    $ch_number=$this->input->post('ch_number');
	    $this->load->model('Available_model');
        $details=$this->Available_model->view($ch_number);
        echo json_encode($details);
    }
    public function delete_vehicle(){
        $ch_number=$this->input->post('ch_number');
        $this->load->model('Available_model');
        $this->Available_model->delete($ch_number);
	}

	public function sold(){
        $this->load->model('Available_model');
        $result['request']=$this->Available_model->sold();
	    $this->load->view('sold_vehicles',$result);
    }
    public function sold_details(){
        $ch_number=$this->input->post('ch_number');
        $this->load->model('Available_model');
        $details=$this->Available_model->buyer_view($ch_number);
        echo json_encode($details);

    }

    public function view_supplier(){
        $this->load->model('Supply_model');
        $result['request']=$this->Supply_model->view();
        $this->load->view('view_supplier',$result);
    }

    public function view_buyer(){
        $this->load->model('Buyer_model');
        $result['request']=$this->Buyer_model->view();
        $this->load->view('view_buyer',$result);
    }

    public function notified_buyer(){
        $this->load->model('Buyer_model');
        $result['request']=$this->Buyer_model->notified();
        $this->load->view('notified',$result);
    }

    public function dashboard_header(){

        $this->load->model('Buyer_model');
        $r=$this->Buyer_model->notified();
        $result4=$r->num_rows();
        echo $result4;

    }


}
