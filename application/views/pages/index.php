<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('include/head.php'); ?>
  <body>
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
<div class="container">
  <div class="service-box" id="service_box">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <h3>Integrity</h3>
          <p>We do business with at most Honesty, Transparency and in the interest of our Clients.</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <h3>Excellence</h3>
          <p>We strive for highest possible standards in our working and in the quality of the products we supply.</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <h3>Responsibility</h3>
          <p>We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).</p>
        </div>
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
          Late Gauslazam Shaikh, father of our Managing Director was the famous Industrialist for Manufacturing Gun Metal Products, Cast Iron Components and having their Workshop for Repairing Diesel Engines. After completion of Diesel Mechanical Course, our Managing Director has started to look after family business since 1980 along with his brother Mr. Dilawar Shaikh.
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
        <a href="#" class="about-btn">Learn about the services</a>
        <!-- hvr-sweep-to-right -->
      </div>
      <div class="col-md-6 text-center about-nmc-img">
        <img width="70%" src="<?php echo base_url() ?>assets/images/about.png" alt="">
      </div>
    </div>
  </div>
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
              	<!-- <div class="item">
              		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/emerson.jpg" alt="">
              	</div> -->
              	<!-- <div class="item">
              		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/kirloskar.png" alt="">
              	</div> -->
              	<div class="item">
              		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/woosu.png" alt="">
              	</div>
                	<div class="item">
              		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/danfoss.jpg" alt="">
              	</div>
              	<!-- <div class="item">
              		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/caspro.jpg" alt="">
              	</div> -->
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
      <div class="mb-5 pt-5" id="nmc_info" class="nmc-info">
        <div class="row">
          <div class="col-md-6">
            <h2 class="title b-border">Why Choose Us</h2>
            <h4 class="sub-title"><i class="fa fa-check"></i> WE ARE PASSIONATE</h4>
            <p>
              Late Gauslazam Shaikh, father of our Managing Director was the famous Industrialist for Manufacturing Gun Metal Products, Cast Iron Components and having their Workshop for Repairing Diesel Engines.
            </p>
            <h4 class="sub-title"><i class="fa fa-check"></i> WE ARE PASSIONATE</h4>
            <p>
              Late Gauslazam Shaikh, father of our Managing Director was the famous Industrialist for Manufacturing Gun Metal Products, Cast Iron Components and having their Workshop for Repairing Diesel Engines.
            </p>
            <h4 class="sub-title"><i class="fa fa-check"></i> WE ARE PASSIONATE</h4>
            <p>
              Late Gauslazam Shaikh, father of our Managing Director was the famous Industrialist for Manufacturing Gun Metal Products, Cast Iron Components and having their Workshop for Repairing Diesel Engines.
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
            <h3 class="com-info">We shall strive to become a <span class="nmc-text-color">world class foundry</span> <br>to provide fully finished components <br>to achieve customer's delight.</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="mb-5 features" id="features">
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
            <div class="feature-box nmc-bg-color white-text">
              <!-- <div class="icon-box">
                  <i class="fa fa-edit feature-icon"></i>
              </div> -->
              <div class="icon-box">
                  <h3>Reliable Quality</h3>
                  <img width="100%" src="<?php echo base_url() ?>assets/images/reliable_quality.jpg" alt="">
                  <p class="white-text">less than 1% customer return</p>
              </div><!-- /.text-box -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box bg-black white-text">
              <!-- <div class="icon-box">
                  <i class="fa fa-edit feature-icon"></i>
              </div> -->
              <div class="icon-box">
                  <h3>Short Lead Time</h3>
                  <img width="100%" src="<?php echo base_url() ?>assets/images/short_lead_time.jpg" alt="">
                  <p class="white-text">3.4 week average lead time</p>
              </div><!-- /.text-box -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="mb-5 quote">
        <div class="row">
          <div class="col-md-7">
            <h2 class="title">Learn more from <span>our FAQ</span></h2>
            <p>You will find yourself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
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
                <a href="#" class="about-btn hvr-sweep-to-right">Get a quote</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="mb-5 products" id="products">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title pb-3">Our <span>Products</span></h2>
            <div class="owl-slider">
              <div id="carousel2" class="owl-carousel">
              	<div class="item">
              		<img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
              	</div>
                	<div class="item">
              		<img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
              	</div>
                	<div class="item">
              		<img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
              	</div>
              	<div class="item">
              		<img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
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
              <h3 class="awa-info">Winning <span class="nmc-text-color"> Awards</span></h1>
              <p class="white-text">You will find yourself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>
            </div>
            <div class="col-md-3 awards-img border-r">
              <img width="80%" height="150px" src="<?php echo base_url() ?>assets/images/certificate1.jpg" alt="">
            </div>
            <div class="col-md-3 awards-img text-center align-self-center">
              <img width="80%" height="150px" src="<?php echo base_url() ?>assets/images/certificate1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- footer content -->
    <?php include('include/footer.php'); ?>
  </body>
</html>
