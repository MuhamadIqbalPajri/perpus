<?php

class M_squrity Extends CI_ModeL{

    public function getSqurity()
    {
        $username = $this->session->userdata('username');
        if(empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}