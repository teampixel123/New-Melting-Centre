

  <body >
        <?php include('include/head.php'); ?>
          <!-- top navigation -->
        <?php include('include/navbar.php') ?>
        <!-- /top navigation -->

<!--slider start -->
 <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/s1.jpg'); ?>" alt="First slide">

                <div class="carousel-caption d-none d-md-block">
                  <h5>Banner Heading</h5>
                  <p>...</p>
                </div>

          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/s2.jpg'); ?>" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Banner Heading</h5>
              <p>...</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/s3.jpg'); ?>" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Banner Heading</h5>
              <p>...</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<!--slider end -->

<!--jambotron start -->
        <div class="jumbotron text-center">
            <h1 class="display-4">New Melting Centre </h1>
              <p class="lead">Looking for Automobile & other engineering Cast Components...</p>
            <hr class="my-4">
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Check Our Products</a>
            </p>
        </div>
<!--jambotron ends -->

<div class="container-fluid cont-speciality">
  <div class="row">
    <div class="col-md-12">
        <h1 class="text-center display-4 text-speciality">Our Speciality</h1>
    </div>

  </div>
  <div class="row bg-grey">
    <div class="col-md-3 ">
      <img src="<?php echo base_url('assets/images/content_1.jpg'); ?>" alt="" width=100%>
    </div>
    <div class="col-md-3 ">
      <h5 class="text-heading-small">STATE OF ART FOUNDRY </h5>
            <p>Well Equipped Foundry.
            World class manufacturer of high quality cast products.</p>
    </div>
    <div class="col-md-3">
      <img src="<?php echo base_url('assets/images/content_2.jpg'); ?>" alt="" width=100%>
    </div>
    <div class="col-md-3">
      <h5  class="text-heading-small" >MODERN MACHINE SHOP </h5>
            <p>High Tech Machine Shop.
Efficiently and effectively manufactured machined components to meet customer requirements.</p>
    </div>

  </div>

  <div class="row bg-grey">
    <div class="col-md-3 ">
      <h5 class="text-heading-small text-center">PATTERN SHOP </h5>
            <p class="text-center">Leading manufacturer of patterns,dies and core boxes with latest technology,
               we are capable to maintain high quality standards.</p>

    </div>
    <div class="col-md-3">
        <img src="<?php echo base_url('assets/images/pattern_shop.png'); ?>" alt="" width=100%>
    </div>
    <div class="col-md-3">
      <h5  class="text-heading-small text-center" >HIGH TECH MEASURING EQUIPMENT'S </h5>
            <p class="text-center">Well equipped inspection facilites with latest technology
               and measuring instruments to meet quality standards.</p>

    </div>
    <div class="col-md-3">
        <img src="<?php echo base_url('assets/images/measuring_eqp.png'); ?>" alt="" width=100%>
    </div>
  </div>
</div>



<div class="container-fluid">
<div class="paralex">
<h3>We shall strive to become a world class foundry to provide fully finished components to achieve customer’s delight.</h3>
</div>
</div>


        <!-- footer content -->
              <?php include('include/footer.php'); ?>

</body>
</html>
