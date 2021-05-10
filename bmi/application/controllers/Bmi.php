<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    public function index()
	{
		$this->load->model('bmi_model','bmi1');
        $this->bmi1->tgl_periksa='05-10-2021';
        $this->bmi1->kode='0001';
        $this->bmi1->nama='Faiz';
        $this->bmi1->gender='L';
        $this->bmi1->berat=55;
        $this->bmi1->tinggi=174;
        $this->bmi1->bmi='';
        $this->bmi1->status='';

        $this->load->model('bmi_model','bmi2');
        $this->bmi2->tgl_periksa='05-10-2021';
        $this->bmi2->kode='0002';
        $this->bmi2->nama='Fikri';
        $this->bmi2->gender='L';
        $this->bmi2->berat=70;
        $this->bmi2->tinggi=120;
        $this->bmi2->bmi='';
        $this->bmi2->status='';

        $this->load->model('bmi_model','bmi3');
        $this->bmi3->tgl_periksa='05-10-2021';
        $this->bmi3->kode='0003';
        $this->bmi3->nama='Putri';
        $this->bmi3->gender='L';
        $this->bmi3->berat=60;
        $this->bmi3->tinggi=170;
        $this->bmi3->bmi='';
        $this->bmi3->status='';

        $list_bmi =[$this->bmi1, $this->bmi2 , $this->bmi3];
        $data['list_bmi'] = $list_bmi;

        $this->load->view('header');
        $this->load->view('bmi/index',$data);
        $this->load->view('footer');
	}
}