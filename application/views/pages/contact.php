<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('include/head.php'); ?>
  <body>
  <!-- top navigation -->
  <?php include('include/navbar.php') ?>
  <!-- /top navigation -->
  <div class="container-fluid">
  <div class="parallax"></div>
  </div>

<div class="container-fluid" id="contact-head">
  <div class="sub-page-heading">
    <div class="col-md-12">
        <h1 class="sub-page-title" ><span>Contact Us</span></h1>
    </div>
    <!-- <h1 class="sub-page-title"><span>Contact Us </span></h1> -->
  </div>
</div>

<!-- contact container start -->

<div class="container" id="cont-container">

  <div class="alert alert-success text-center" role="alert">
  <h5>Mail sent successfully. We Will contact you soon.</h5>
</div>
<div class="alert alert-danger text-center" role="alert">
<h5>"oops an error occurred" Please try again later.</h5>
</div>


  <div class="row ">
      <div class="col-md-6">
        <div class="address">
              <h4>Works & Office</h4>
              <h5>Unit 1 : </h5>
            <p> Gat No.678 / 679 (Part), Kushire, Tal.Panhala,</p>
              <p>  Dist : Kolhapur Maharashtra - 416229</p>
              <p>  Phone No. : +91 - 02328 271224</p>

              <!-- <h5>Unit 2 : </h5>
            <p>Gat No.704 & 706, Kushire, Tal.Panhala,</p>
              <p>  Dist : Kolhapur Maharashtra - 416229</p> -->
              <!-- <p>  Phone No. : +91 - 02328 271224</p> -->

              <h5>Unit 2 : </h5>
            <p> F-11, Five Star MIDC, Kagal</p>
              <p>  Dist : Kolhapur Maharashtra - 416229</p>
        </div>
        <div class="address">
      <h4 class="reg-office">Register office</h4>
        <p> Plot No.11,Building No.12,</p>
        <p>Y.P.Powar Nagar,Kolhapur - 416008.</p>
        <p>Maharashtra State (India).</p>
        <p>Phone No. : +91 - 0231 2690730</p>
        </div>

      </div>
      <div class="col-md-6" id="send-mail">
        <form action="<?php echo base_url(); ?>Melting_Controller/send_feedback" method="post" id="contact_form">
          <h3>Send Mail</h3>
          <div class="form-group">
            <input type="text" class="form-control"  id="name" name="name" required  placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control mob " id="mobile" name="mobile" required placeholder="Mobile No.">
          </div>
          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control " required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" name="message" placeholder="Write Your Message..." rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact btn-lg btn-block">Submit</button>
          </form>
      </div>
  </div>
</div>







<!-- contact container  ends -->
  <!-- footer content -->
  <?php include('include/footer.php'); ?>
  <?php if($this->session->flashdata("contact_status")){
      $contact_status = $this->session->flashdata("contact_status");
    ?>
    <input type="hidden" id="contact_status" name="contact_status" value="<?php echo $contact_status; ?>">
    <script>
      $('document').ready(function(){
        function myFunction() {
          var contact_status = $('#contact_status').val();
          if(contact_status == 'email_success'){
            $(".alert-success").show().delay(3000).fadeOut();
          }
          else{
              $(".alert-danger").show().delay(3000).fadeOut();
          }
        }
        myFunction();
      });
    </script>
    <?php } ?>
  </body>
  </html>
