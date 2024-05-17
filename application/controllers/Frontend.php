<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load Session Library
        $this->load->library('session', 'form_validation');
        $this->load->helper('url', 'form');
        $this->load->database();
    }

    public function template($view, $data_view = null, $data_head = null, $data_navbar = null, $is_html = FALSE)
    {
        $head = $this->load->view('frontend/layout/header', $data_head, $is_html);
        $nav = $this->load->view('frontend/layout/navbar', $data_navbar, $is_html);
        $v = $this->load->view('frontend/' . $view, $data_view, $is_html);
        $foot = $this->load->view('frontend/layout/footer', null, $is_html);
        $data = array(
            'header' => $head,
            'navbar' => $nav,
            'view' => $v,
            'footer' => $foot,
        );
        return $data;
    }
    
    public function index()
    {
        $this->template('v_home');
        // $this->output->set_content_type('application/json')->set_output(json_encode($a));
    }

}
