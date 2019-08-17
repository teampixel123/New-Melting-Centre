<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Melting_Controller extends CI_Controller {
  public function index(){
    $this->load->view('pages/index');
  }
  public function home(){
    $this->load->view('pages/index');
  }

  public function about_us(){
    $this->load->view('pages/about_us');
  }
  public function products(){
    $this->load->view('pages/products');
  }
  public function our_strength(){
    $this->load->view('pages/index');
  }
  public function photo_gallery(){
    $this->load->view('pages/index');
  }
  public function contact_us(){
    $this->load->view('pages/contact');
  }
}
