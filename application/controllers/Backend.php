<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // load Session Library
        $this->load->library('session', 'form_validation');
        $this->load->helper('url', 'form');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('backend/layout/header');
        $this->load->view('backend/layout/navbar');
        $this->load->view('backend/v_dashboard');
        $this->load->view('backend/layout/footer');
    }
}
