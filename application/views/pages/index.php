<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('include/head.php'); ?>
  <body>
  <!-- top navigation -->
  <?php include('include/navbar.php') ?>
  <!-- /top navigation -->

  <!-- slider start -->
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
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/s2.jpg'); ?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/s3.jpg'); ?>" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
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

  <!-- Service Box -->
  <div class="container">
    <div class="service-box" id="service_box">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="">
            </div>
            <div class="service-content">
              <h3>Integrity</h3>
              <p>We do business with at most Honesty, Transparency and in the interest of our Clients.</p>
            </div>
          </div>
          <!-- <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="Avatar" class="image" style="width:100%">
          <div class="middle">
            <h3>Integrity</h3>
            <p>We do business with at most Honesty, Transparency and in the interest of our Clients.</p>
          </div> -->
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="">
            </div>
            <div class="service-content">
              <h3>Excellence</h3>
              <p>We strive for highest possible standards in our working and in the quality of the products we supply.</p>
            </div>
          </div>
          <!-- <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="Avatar" class="image" style="width:100%">
          <div class="middle">
            <h3>Excellence</h3>
            <p>We strive for highest possible standards in our working and in the quality of the products we supply.</p>
          </div> -->
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="">
            </div>
            <div class="service-content">
              <h3>Responsibility</h3>
              <p>We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).</p>
            </div>
          </div>
          <!-- <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="Avatar" class="image" style="width:100%">
          <div class="middle">
            <h3>Responsibility</h3>
            <p>We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).</p>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="about_nmc">
    <div style="" class="about-nmc">
      <div class="row">
        <div class="col-md-6">
          <h2 class="title pb-4">Welcome to <span>Industrio Company</span></h2>
          <p>
            New Melting Centre Pvt. Ltd. established in 2006. We always believe in synchronizing and utilizing Time, Equipments and Business. In 2011 we have commissioned High Pressure Molding Line of Tokyu Japan Having capacity 100 Mould / Hour; this is the first plant of this company in India. In 2012 we have crossed production of 1350 M.T. / Month. In future we have planned for commissioning Hi-tech equipments in new extensions of Foundry and Machine Shop. We assure that we will make it with the support of our staff & well-wishers. Location : Kolhapur, Maharashtra - India
          </p>
          <div class="row">
            <div class="col-md-6">
              <ul class="list-items">
                <li><i class="fa fa-arrow-right"></i>  Our Work Growth</li>
                <li><i class="fa fa-arrow-right"></i>  1500 Employed</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-items">
                <li><i class="fa fa-arrow-right"></i>  Our Work Growth</li>
                <li><i class="fa fa-arrow-right"></i>  1500 Employed</li>
              </ul>
            </div>
          </div>
          <a href="#" class="about-btn btn-hvr">Learn about the services</a>
          <!-- hvr-sweep-to-right -->
        </div>
        <div class="col-md-6 text-center about-nmc-img">
          <img width="70%" src="<?php echo base_url() ?>assets/images/about.png" alt="">
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <div class="mb-5 products" id="customers">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title pb-3">Our <span>Customers</span></h2>
          <div class="owl-slider">
            <div id="carousel" class="owl-carousel">
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/iljin.png" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/woosu.png" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/danfoss.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/lotus.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/john_deere.png" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/hodek.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/marvelous.jpg" alt="">
            	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="nmc_info" class="nmc-info">
      <div class="row">
        <div class="col-md-6">
          <h2 class="title b-border">Why Choose Us</h2>
          <h4 class="sub-title"><i class="fa fa-check"></i> WE ARE PASSIONATE</h4>
          <p>
            We have a proven record of accomplishment and are a reputable company in the India. We ensure that all projects are done with utmost professionalism using quality materials while offering clients the support and accessibility.
          </p>
          <h4 class="sub-title"><i class="fa fa-check"></i> HONEST AND DEPENDABLE</h4>
          <p>
            For us, honesty is the only policy and we strive to complete all projects with integrity, not just with our clients, but also our suppliers and contractors. With thousands of successful projects under our belt, we are one of the most	trusted companies in India.
          </p>
          <h4 class="sub-title"><i class="fa fa-check"></i> WE ARE ALWAYS IMPROVING</h4>
          <p>
            We commit ourselves to complete all projects within the timeline set with our clients. We use the best of technology and tools to ensure that all jobs are done quickly but also giving attention to details and ensuring everything is done correctly.
          </p>
        </div>
        <div class="col-md-6 nmc-info-div2">
          <h2 class="title b-border">Who We Are</h2>
          <div class="row">
            <div class="col-md-6 mt-2rem">
              <img class="pb-3" width="100%" src="<?php echo base_url() ?>assets/images/nmc_info1.jpg" alt="">
              <img width="100%" src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="">
            </div>
            <div class="col-md-6 mt-2rem">
              <p>
                Late Gauslazam Shaikh, father of our Managing Director was the famous Industrialist for Manufacturing Gun Metal Products, Cast Iron Components and having their Workshop for Repairing Diesel Engines. After completion of Diesel Mechanical Course, our Managing Director has started to look after family business since 1980 along with his brother Mr. Dilawar Shaikh.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="" id="about_com">
      <div class="row company-info">
        <div class="col-md-12 align-self-center">

          <h3 class="com-info"><i class="fas fa-quote-left"></i> We shall strive to become a <span class="nmc-text-color">world class foundry</span> <br>to provide fully finished components <br>to achieve customer's delight<i class="fas fa-quote-right"></i></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="features" id="features">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-box bg-gray">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">
                <h3>Count On Us</h3>
                <img width="100%" src="<?php echo base_url() ?>assets/images/count_on_us.jpg" alt="">
                <p>98.8% on-time delivery</p>
            </div><!-- /.text-box -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box bg-gray">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div> -->
            <div class="icon-box">
                <h3>Reliable Quality</h3>
                <img width="100%" src="<?php echo base_url() ?>assets/images/reliable_quality.jpg" alt="">
                <p class="">less than 1% customer return</p>
            </div><!-- /.text-box -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box bg-gray">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div> -->
            <div class="icon-box">
                <h3>Short Lead Time</h3>
                <img width="100%" src="<?php echo base_url() ?>assets/images/short_lead_time.jpg" alt="">
                <p class="">3.4 week average lead time</p>
            </div><!-- /.text-box -->
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <div class="quote">
      <div class="row">
        <div class="col-md-7">
          <h2 class="title">Our Core <span>Values</span></h2>
          <p>
            The New Melting Centre Pvt. Ltd., since its inception, has been always value-driven Organization. We do business on following Five Core Values:
          </p>
          <h4 class="sub-title"><i class="fa fa-check"></i> Integrity :
          <span>
            We do business with at most Honesty, Transparency and in the interest of our Clients.
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> Excellence :
          <span>
            We strive for highest possible standards in our working and in the quality of the products we supply.
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> Responsibility :
          <span>
            We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> Responsibility :
          <span>
            We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> Promptness :
          <span>
            We make it sure to supply our products in lead time to avoid any hardship to our Customers.
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> Cost Effectiveness :
          <span>
            We provide our Excellent Precision Products at Reasonable price.
          </span>
          </h4>
          </div>
        <div class="col-md-5">
          <div class="requery-quote">
            <h2 class="title pb-3 white-text">Request a <span>Quote</span></h2>
            <p class="white-text">Fill all information details to consult with us to get services from us</p>
            <form>
              <div class="form-group white-text">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
              </div>
              <div class="form-group white-text">
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
              <div class="form-group white-text">
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone">
              </div>
              <div class="form-group white-text">
                <textarea name="messege" class="form-control" rows="4" cols="80" placeholder="Write some text"></textarea>
              </div>
              <div class="text-center">
                <a href="#" class="about-btn btn-hvr">Get a quote</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <div class="mb-5 products" id="products">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title pb-3">Our <span>Products</span></h2>
          <div class="owl-slider">
            <div id="carousel2" class="owl-carousel">
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/streering.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/krish_wheel_hub.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/motor_cover.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/final_drive.jpg" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/wheel_hub.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/engine_front_cover.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/drive_shaft.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/front_wheel_hub.jpg" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/rear_wheel_brake.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url(); ?>assets/images/products/flywheel5566.jpg" alt="">
            	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid nmc_awards" id="nmc_awards">
    <div class="container">
      <div class="">
        <div class="row awards-info">
          <div class="col-md-6 align-self-center">
            <h3 class="awa-info title">Best Supplier<span class="nmc-text-color"> Award</span></h1>
            <p class="white-text">Best Supplier Award for speed response to new products by Kirloskar Oil Engines Limited.</p>
          </div>
          <div class="col-md-6 awards-img">
            <img width="80%" height="350px" src="<?php echo base_url() ?>assets/images/award1.jpg" alt="">
          </div>
          <!-- <div class="col-md-3 awards-img text-center align-self-center">
            <img width="80%" height="150px" src="<?php echo base_url() ?>assets/images/certificate1.jpg" alt="">
          </div> -->
        </div>
      </div>
    </div>
  </div>
    <!-- footer content -->
    <?php include('include/footer.php'); ?>
  </body>
</html>
