<?php

class Pengarang Extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'pengerang/v_pengarang';
        $isi['judul'] = 'Daftar Data Pengarang';
        $this->load->view('v_dashboard', $isi);
    }
}