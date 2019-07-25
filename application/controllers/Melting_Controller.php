<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Melting_Controller extends CI_Controller {
  public function index(){
    $this->load->view('pages/index');
  }
  public function home(){
    $this->load->view('pages/index');
  }
}
