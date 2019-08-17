<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('include/head.php'); ?>
  <body>
  <!-- top navigation -->
  <?php include('include/navbar.php') ?>
  <!-- /top navigation -->

<div class="container-fluid">
  <div class="sub-page-heading">
    <h1 class="sub-page-title"><span>Contact Us</span></h1>
  </div>
</div>

<!-- contact container start -->

<div class="container" id="cont-container">
  <div class="row text-center">
      <div class="col-md-6">
        <div class="address">
              <h4>Works & Office:</h4>
            <p> Gat No.678 / 679(Part),Kushire,Tal.Panhala,</p>
              <p>  Dist : Kolhapur - 416229</p>
              <p>  Maharashtra State (India).</p>
              <p>  Phone No. : +91 - 02328 271224</p>
              <p>  Email : meltingcentre@gmail.com,</p>
              <p>  www.newmeltingcentre.com</p>
        </div>
        <div class="address">
      <h4>Register office:</h4>
        <p> Plot No.11,Building No.12,</p>
        <p>Y.P.Powar Nagar,Kolhapur - 416008.</p>
        <p>Maharashtra State (India).</p>
        <p>Phone No. : +91 - 0231 2690730</p>
        </div>

      </div>
      <div class="col-md-6" id="send-mail">
        <form>
          <h3>Send Mail</h3>
          <div class="form-group">
            <input type="text" class="form-control" id="name"  placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control mob " id="mobile"  placeholder="Mobile No.">
          </div>
          <div class="form-group">
            <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write Your Message..." rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact btn-lg btn-block">Submit</button>
          </form>
      </div>
  </div>
</div>







<!-- contact container  ends -->
  <!-- footer content -->
  <?php include('include/footer.php'); ?>

  </body>
  </html>
