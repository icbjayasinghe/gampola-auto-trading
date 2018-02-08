<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/27/2018
 * Time: 12:52 PM
 */

class Buyer_model extends CI_Model{
    public function vehicle_search($eliment){
        //echo ($eliment);
        $this->db->where('number',$eliment);
        $this->db->where('status',"available");
        $respond=$this->db->get('supply');
        if($respond->num_rows()==1){
            return $respond->row();

        }
        else{
            return FALSE;
        }


    }

    public function vehicle_ch_number_search($eliment2){
        //echo ($eliment);
        $this->db->where('ch_number',$eliment2);
        $this->db->where('status',"available");
        $this->db->where('cond',"Unregistered");
        $respond2=$this->db->get('supply');
        if($respond2->num_rows()==1){
            return $respond2->row();

        }
        else{
            return FALSE;
        }


    }

    public function add_buyer(){
        $ch_no=$this->input->post('ch_number',TRUE);
        $no=$this->input->post('number',TRUE);
        $installment=$this->input->post('no_of_installments')-1;
        $end_date=date("Y-m-d",strtotime("$installment month",strtotime(date("Y-m-01",strtotime("now") ) )));
        $data=array(
            'selling_price'=>$this->input->post('selling_price'),
            'buy_nic'=>$this->input->post('buy_nic'),
            'buy_name'=>$this->input->post('buy_name'),
            'buy_tel'=>$this->input->post('buy_tel'),
            'buy_address'=>$this->input->post('buy_address'),
            'leasing'=>$this->input->post('leasing_name'),
            'installment'=>$this->input->post('no_of_installments'),
            'amount'=>$this->input->post('installment_amount'),
            'insurance'=>$this->input->post('insurance_name'),
            'buy_discription'=>$this->input->post('buy_description'),
            'status'=>"sold",
            'buy_date'=>date("Y-m-d"),
            'end_date'=>$end_date
        );
        //$where=('number'==$no or 'ch_number'==$ch_no);
        if ($no!=null){
            $this->db->where('number',$no);
            return $this->db->update('supply',$data);

        }
        else if($ch_no!=null){
            $this->db->where('ch_number',$ch_no);
            return $this->db->update('supply',$data);
        }





    }

    public function view(){
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"sold");
        $respond = $this->db->get();
        return $respond;
    }

    public function notified(){
        $limit_date=date("Ymd",strtotime("+1 month",strtotime(date("Ym01",strtotime("now") ) )));
        $start_date=date("Ymd");
        $this->db->select('*');
        $this->db->from('supply');
        $this->db->where('status',"sold");
        $this->db->where("end_date BETWEEN $start_date AND $limit_date");
        $respond = $this->db->get();
        return $respond;


    }




}

