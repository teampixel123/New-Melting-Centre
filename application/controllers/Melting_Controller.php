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
  public function infrastructure(){
    $this->load->view('pages/infrastructure');
  }
  public function policy(){
    $this->load->view('pages/policy');
  }
  public function certificate(){
    $this->load->view('pages/certification');
  }
  public function clients(){
    $this->load->view('pages/clients');
  }
  public function clients1(){
    $this->load->view('pages/clients1');
  }
  public function awards(){
    $this->load->view('pages/awards');
  }
  public function contact_us(){
    $this->load->view('pages/contact');
  }
  public function send_feedback(){
  $name = $this->input->post('name');
  $email = $this->input->post('email');
  $mobile = $this->input->post('mobile');
  $message1 = $this->input->post('message');
     $message = '
       <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
       Massege: <br>'.$message1.'
       </p>
       <hr>
       <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
       Sender Information:
       </p>
       <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
       Name: '.$name.'
       </p>
       <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
       Mobile No: '.$mobile.'
       </p>
       <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
       Email: <a href="mailto:'.$email.'">'.$email.'</a>
       </p>
     ';

     $recipient = "ho@newmeltingcentre.com";
     $subject = "Mail From New Melting Centre Contact";

     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: '.$email."\r\n".
                 'Reply-To: '.$email."\r\n" .
                 'X-Mailer: PHP/' . phpversion();

     if(mail($recipient, $subject, $message, $headers)){
      $this->session->set_flashdata("contact_status","email_success");
     }
     else{
      $this->session->set_flashdata("contact_status","email_error");
     }
     header('location:'.base_url().'Contact-Us');
 }
}
