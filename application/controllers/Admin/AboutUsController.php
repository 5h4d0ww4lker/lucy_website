<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutUsController extends CI_Controller {
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin/AdminModel');
  }

  public function create()
  {
    if ($this->previlage->add_about_us != 't') {
            show_404();
        }
        $this->load->view('Admin/AboutUs/create');
  }

  public function insert()
  {
    if ($this->previlage->add_about_us != 't') {
            show_404();
        }
        $this->load->view('Admin/AboutUs/create');
  }

  public function edit()
  {
    if ($this->previlage->update_about_us != 't') {
            show_404();
        }
        $this->load->view('Admin/AboutUs/edit');
  }

  public function update()
  {
    if ($this->previlage->update_about_us != 't') {
            show_404();
        }
        $this->load->view('Admin/AboutUs/delete');
  }


  public function delete()
  {
    if ($this->previlage->delete_about_us != 't') {
            show_404();
        }
        $this->load->view('Admin/AboutUs/delete');
  }
    









}

