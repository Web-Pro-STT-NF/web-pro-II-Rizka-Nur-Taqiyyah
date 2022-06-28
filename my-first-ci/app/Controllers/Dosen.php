<?php

namespace app\Controllers;

class Dosen extends CI_Controller {
    public function index()
    {
        $this->load->model('dosen_model','dsn1');
        $this->mhs1->id=1;
        $this->mhs1->nim='010001';
        $this->mhs1->nama='Faiz Fikri';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;
        
        $this->load->model('pasien_model','dsn2');
        $this->mhs2->id=2;
        $this->mhs2->kode='020001';
        $this->mhs2->nama='Pandan Wangi';
        $this->mhs2->gender='P';
        $this->mhs1->ipk=3.35;

        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs']=$list_mhs;

        $this->load->view('header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('footer');
    }
}

?>