<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function index()
	{
		$this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->kode='0001';
        $this->pasien1->gender='L';
        $this->pasien1->tmp_lahir='Bekasi';
        $this->pasien1->tgl_lahir='14-01-2002';
        $this->pasien1->email='faiz@gmail.com';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->nama='Fikri';
        $this->pasien2->kode='0002';
        $this->pasien2->gender='L';
        $this->pasien2->tmp_lahir='Jakarta';
        $this->pasien2->tgl_lahir='15-02-2002';
        $this->pasien2->email='fikri@gmail.com';

        $list_pasien =[$this->pasien1, $this->pasien2];
        $data['list_pasien'] = $list_pasien;

        $this->load->view('header');
        $this->load->view('pasien/index',$data);
        $this->load->view('footer');
	}
}
