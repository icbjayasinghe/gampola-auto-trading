<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 2/4/2018
 * Time: 2:04 PM
 */

class Upload extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('directory');
        $this->load->library('upload');
    }
    public function index(){
        $data['title'] = "";

        $data['uploaded_files'] = directory_map('./uploads/');

        if($this->input->post('submit') && count($_FILES['multipleFiles']['name']) > 0){
            $number_of_files=count($_FILES['multipleFiles']['name']);

            $files=$_FILES;
            if (!is_dir('uploads')){
                mkdir('./uploads',0777,true);

            }

            for ($i=0; $i<$number_of_files; $i++){
                $_FILES['multipleFiles']['name']=$files['multipleFiles']['name'][$i];
                $_FILES['multipleFiles']['type']=$files['multipleFiles']['type'][$i];
                $_FILES['multipleFiles']['tmp_name']=$files['multipleFiles']['tmp_name'][$i];
                $_FILES['multipleFiles']['error']=$files['multipleFiles']['error'][$i];
                $_FILES['multipleFiles']['size']=$files['multipleFiles']['size'][$i];

                $config['upload_path']= './uploads/';
                $config['allowed_types']='jpg|jpeg|png|gif';
                $config['max_size']='0';
                $config['max_width']='0';
                $config['max_height']='0';
                $config['overwrite']=TRUE;
                $config['remove_spaces']=TRUE;

                $this->upload->initialize($config);

                if (! $this->upload->do_upload('multipleFiles')){
                    $error=array('error' =>$this->upload->display_errors() );
                }
                else{
                    $data=array('upload_data'=>$this->upload->data());

                }


            }
        if (!$error){
                redirect('upload');
        }

        }
        else{
            $this->load->view('upload',$data);
        }

    }

    public function submit(){
        $this->load->model('Site_upload');
        $response=$this->Site_upload->upload_data();

        if($response){
            $this->session->set_flashdata('successmsg','Successfully site details updated');
            redirect('Upload');


        }
    }



}
