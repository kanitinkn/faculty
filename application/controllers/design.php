<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class design extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design');
        $this->load->view('_include/footer');
    }

    function paccon() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Paccon';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/paccon');
        $this->load->view('_include/footer');
    }

    function sci_journal() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Sci Journal';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/sci_journal');
        $this->load->view('_include/footer');
    }

    function sci_eoffice() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Sci Eoffice';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/sci_eoffice');
        $this->load->view('_include/footer');
    }

    function nucleus() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Nucleus';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/nucleus');
        $this->load->view('_include/footer');
    }

    function e_document() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : E-document';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/e_document');
        $this->load->view('_include/footer');
    }

    function reserve() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Reserve';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/reserve');
        $this->load->view('_include/footer');
    }

    function atrc() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : ATRC';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/atrc');
        $this->load->view('_include/footer');
    }

    function ethics() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : E-thics';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/ethics');
        $this->load->view('_include/footer');
    }

    function ins() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : INS';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/ins');
        $this->load->view('_include/footer');
    }

    function micro() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Micro';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/micro');
        $this->load->view('_include/footer');
    }

    function manageroom() {
        $page['page'] = 'index';
        $title['title'] = 'Test-Design : Manageroom';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('design/manageroom');
        $this->load->view('_include/footer');
    }

}

/* End of file design.php */
/* Location: ./application/controllers/design.php */