<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_manajemen_konten_syarat_dan_ketentuan extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("manajemen_konten/manajemen_konten_syarat_dan_ketentuan");
    }
    public function index() {
        if(!empty($this->session->userdata("user"))) {
            $act = $this->input->post("act");
            $form = $this->input->post("form");
            $this->req  = $this->input->post("req");
            $this->form = $this->input->post("form");
            print_r($this->$act());
        }
    }

    private function getdatabyid() {
        $Request = $this->manajemen_konten_syarat_dan_ketentuan->GetManajemenKontenSyaratDanKetentuan();
        return json_encode($Request);
    }

    private function updatedata() {
        $Request = $this->manajemen_konten_syarat_dan_ketentuan->UpdateManajemenKontenSyaratDanKetentuan($this->form);
        return $Request;
    }
}
