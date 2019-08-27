<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('include/head.php'); ?>
  <body>

  <!-- top navigation -->
  <?php include('include/navbar.php') ?>
  <!-- /top navigation -->

  <!-- slider start -->
  <div class="container-fluid banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 banner-img" src="<?php echo base_url('assets/images/slider/banner3.png'); ?>" alt="Second slide">
          <div class="animated animated-2s bounceInLeft delay-1s banner-title d-none d-md-block">
            <h1 class="title text-white banner-title1">Welcome to NMCPL</h1>
            <!-- <h1 class="title title2 text-white banner-title1 top-scale-1">We will provide the best service</h1> -->
            <p class="banner-para1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
            <div class="banner-btn1">
              <a href="<?php echo base_url(); ?>About-Us" class=" nmc-btn btn-hvr about-btn">More About Us</a>
            </div></div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/banner1.png'); ?>" alt="Second slide">
          <div class="animated animated-2s bounceInLeft delay-1s banner-title d-none d-md-block">
            <h1 class="title text-white banner-title1">Welcome to NMCPL</h1>
            <!-- <h1 class="title text-white banner-title1 top-scale-1">We will provide the best service</h1> -->
            <p class="banner-para1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
            <div class="banner-btn1">
              <a href="<?php echo base_url(); ?>About-Us" class=" nmc-btn btn-hvr about-btn">More About Us</a>
            </div>   </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/banner2.png'); ?>" alt="Third slide">
          <div class="animated animated-2s bounceInLeft delay-1s banner-title d-none d-md-block">
            <h1 class="title text-white banner-title1">Welcome to NMCPL</h1>
            <!-- <h1 class="title text-white banner-title1 top-scale-1">We will provide the best service</h1> -->
            <p class="banner-para1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
            <div class="banner-btn1">
              <a href="<?php echo base_url(); ?>About-Us" class=" nmc-btn btn-hvr about-btn">More About Us</a>
            </div>  </div>
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
              <img src="<?php echo base_url() ?>assets/images/infrastructure/img_intro1.jpg" alt="">
            </div>
            <div class="service-content">
              <h3>STATE OF ART FOUNDRY</h3>
              <p>Well Equipped Foundry. World class manufacturer of high quality cast products.</p>
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
              <img src="<?php echo base_url() ?>assets/images/infrastructure/machine_shop_robotic.jpg" alt="">
            </div>
            <div class="service-content">
              <h3>MODERN MACHINE SHOP</h3>
              <p>High Tech Machine Shop. Efficiently and effectively manufactured machined components to meet customer requirements.</p>
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
              <img src="<?php echo base_url() ?>assets/images/infrastructure/intro_img03.jpg" alt="">
            </div>
            <div class="service-content">
              <h3>PATTERN SHOP</h3>
              <p>Leading manufacturer of patterns, dies and core boxes with latest technology, we are capable to maintain high quality standards.</p>
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
          <h2 class="title bottom-sm-hr ">Welcome to NMCPL</h2>
          <p class="padding-m-10">
            New Melting Centre Pvt. Ltd. established in 2006. We always believe in synchronizing and utilizing Time, Equipments and Business. In 2011 we have commissioned High Pressure Molding Line of Tokyu Japan Having capacity 100 Mould / Hour; this is the first plant of this company in India. In 2012 we have crossed production of 1350 M.T. / Month. In future we have planned for commissioning Hi-tech equipments in new extensions of Foundry and Machine Shop. We assure that we will make it with the support of our staff & well-wishers. Location : Kolhapur, Maharashtra - India
          </p>
          <!-- <div class="row">
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
          </div> -->
          <a href="<?php echo base_url(); ?>About-Us" class="nmc-btn btn-hvr about-btn">More About Us</a>
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
    <div class="products" id="customers">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title bottom-sm-hr ">Our Clients</h2>
          <div class="owl-slider">
            <div id="carousel" class="owl-carousel">
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/01.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/02.jpg" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/03.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/04.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/05.jpg" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/06.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/08.jpg" alt="">
            	</div>
              <div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/09.jpg" alt="">
            	</div>
              <div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/10.jpg" alt="">
            	</div>
              <div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/11.jpg" alt="">
            	</div>
              <div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/12.jpg" alt="">
            	</div>
              <div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/14.jpg" alt="">
            	</div>
              <div class="item">
            		<img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/15.jpg" alt="">
            	</div>
              <!-- <div class="item">
            		 <img class="owl-lazy" data-src="<?php echo base_url() ?>assets/images/customers/16.jpg" alt=""> -
            	</div> -->
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-5 text-center">
          <a href="<?php echo base_url(); ?>Clients" class="nmc-btn btn-hvr clients-btn">See More Clients</a>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <div id="nmc_info" class="nmc-info">
      <div class="row">
        <div class="col-md-6">
          <h2 class="title bottom-sm-hr">Why Choose Us</h2>
          <!-- <h2 class="title">Why Choose Us</h2> -->
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;WE ARE PASSIONATE</h4>
          <p>
            We have a proven record of accomplishment and are a reputable company in the India. We ensure that all projects are done with utmost professionalism using quality materials while offering clients the support and accessibility.
          </p>
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;HONEST AND DEPENDABLE</h4>
          <p>
            For us, honesty is the only policy and we strive to complete all projects with integrity, not just with our clients, but also our suppliers and contractors. With thousands of successful projects under our belt, we are one of the most	trusted companies in India.
          </p>
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;WE ARE ALWAYS IMPROVING</h4>
          <p>
            We commit ourselves to complete all projects within the timeline set with our clients. We use the best of technology and tools to ensure that all jobs are done quickly but also giving attention to details and ensuring everything is done correctly.
          </p>
        </div>
        <div class="col-md-6 nmc-info-div2">
          <h2 class="title bottom-sm-hr">Who We Are</h2>
          <!-- <h2 class="title b-border">Who We Are</h2> -->
          <div class="row">
            <img  class="who-img"src="<?php echo base_url() ?>assets/images/whowe.jpg" alt="">
            <p class="mx-auto">
              It is a great pleasure to introduce our company. In our business journey we have followed holy footprints of our father late Mr. Gouslazam Shaikh alice Shaikhchacha, He is the person who made the history in the industrial of our region. In 1962 he started Udyam Engineering works in Shivaji Udyamnagar Kolhapur in rented premises, where mainly activity of oil engine repairing was carried out, after that in 1970, India Iron Works was founded for producing C.I Casting and for machining facility M.G.Industries and D.G.Industries established. </p>
            <!-- <div class="col-md-6 mt-2rem">
              <img class="pb-3" width="100%" src="<?php echo base_url() ?>assets/images/nmc_info1.jpg" alt="">
              <img width="100%" src="<?php echo base_url() ?>assets/images/nmc_info2.jpg" alt="">
            </div>
            <div class="col-md-6 mt-2rem">
              <p>
                Late Gauslazam Shaikh, father of our Managing Director was the famous Industrialist for Manufacturing Gun Metal Products, Cast Iron Components and having their Workshop for Repairing Diesel Engines. After completion of Diesel Mechanical Course, our Managing Director has started to look after family business since 1980 along with his brother Mr. Dilawar Shaikh.
              </p>
            </div> -->
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
      <div class="row text-center">
        <div class="col-md-4 text-center">
          <div class="feature-box text-center">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">

                <div class="svg" id="svg-frist">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 96 100" enable-background="new 0 0 96 96" xml:space="preserve"><path d="M77.036,30.66l7.922-7.921L73.25,11.054l-7.92,7.918c-2.843-1.714-5.887-2.978-9.076-3.767V4.01H39.728v11.2  c-3.236,0.81-6.281,2.071-9.08,3.761l-7.917-7.918L11.043,22.74l7.919,7.917c-1.691,2.802-2.953,5.846-3.762,9.08H4v16.526h11.2  c0.806,3.214,2.067,6.258,3.764,9.078l-7.921,7.919L22.73,84.947l7.92-7.921c2.828,1.697,5.872,2.959,9.077,3.764v11.2h16.526V80.79  c3.187-0.802,6.229-2.064,9.072-3.766l7.924,7.922l11.708-11.685l-7.924-7.923c1.702-2.849,2.965-5.892,3.765-9.075H92V39.737  H80.799C79.996,36.534,78.733,33.49,77.036,30.66z M89,53.263H78.394l-0.253,1.188c-0.777,3.648-2.214,7.111-4.269,10.292  l-0.658,1.018l7.5,7.498l-7.462,7.446l-7.504-7.502l-1.018,0.659c-3.174,2.053-6.636,3.489-10.289,4.269l-1.188,0.253V88.99H42.728  V78.384l-1.188-0.253c-3.681-0.784-7.143-2.22-10.288-4.267l-1.02-0.663l-7.502,7.503l-7.445-7.444l7.506-7.503l-0.666-1.02  c-2.043-3.133-3.479-6.594-4.266-10.287l-0.253-1.188H7V42.737h10.606l0.253-1.188c0.793-3.721,2.228-7.181,4.264-10.283l0.67-1.021  l-7.508-7.505l7.445-7.444l7.506,7.507l1.021-0.67c3.099-2.035,6.559-3.469,10.283-4.263l1.188-0.253V7.01h10.526v10.612  l1.194,0.249c3.652,0.761,7.109,2.196,10.276,4.264l1.02,0.666l7.508-7.506l7.462,7.446l-7.502,7.5l0.662,1.019  c2.048,3.15,3.483,6.612,4.267,10.289l0.253,1.188H89V53.263z"/><path d="M48,20.442c-15.196,0-27.559,12.362-27.559,27.558S32.804,75.558,48,75.558S75.559,63.196,75.559,48  S63.196,20.442,48,20.442z M48,72.558c-13.038,0-23.73-10.213-24.509-23.058h19.93h7.728h21.36  C71.73,62.345,61.038,72.558,48,72.558z M48.132,46.5l5.383-11.529l0.991-0.405l0.298,1.026L49.301,46.5H48.132z M52.662,46.5  l5.353-10.611l-1.56-5.362l-5.163,2.112L44.821,46.5h-21.33C24.27,33.655,34.962,23.442,48,23.442S71.73,33.655,72.509,46.5H52.662z  "/><path d="M29.129,56.686v0.424c0,1.762,1.433,3.195,3.194,3.195h31.354c1.762,0,3.194-1.433,3.194-3.195v-0.424  c0-1.761-1.433-3.194-3.194-3.194H32.323C30.562,53.492,29.129,54.924,29.129,56.686z M63.871,56.686v0.424  c0,0.104-0.091,0.195-0.194,0.195H32.323c-0.104,0-0.194-0.091-0.194-0.195v-0.424c0-0.103,0.091-0.194,0.194-0.194h31.354  C63.78,56.492,63.871,56.583,63.871,56.686z"/><path d="M41.222,63.024c-1.412,0-2.561,1.148-2.561,2.559c0,1.412,1.148,2.56,2.561,2.56c1.41,0,2.558-1.148,2.558-2.56  C43.779,64.172,42.632,63.024,41.222,63.024z M41.222,66.024c-0.244,0-0.442-0.198-0.442-0.441c0-0.243,0.198-0.44,0.442-0.44  c0.242,0,0.439,0.197,0.439,0.44C41.661,65.826,41.464,66.024,41.222,66.024z"/><path d="M48,63.024c-1.411,0-2.56,1.148-2.56,2.559c0,1.412,1.148,2.56,2.56,2.56s2.56-1.148,2.56-2.56  C50.56,64.172,49.411,63.024,48,63.024z M48,66.024c-0.243,0-0.44-0.198-0.44-0.441c0-0.243,0.197-0.44,0.44-0.44  s0.44,0.197,0.44,0.44C48.44,65.826,48.243,66.024,48,66.024z"/><path d="M54.778,63.024c-1.41,0-2.558,1.148-2.558,2.559c0,1.412,1.147,2.56,2.558,2.56c1.412,0,2.561-1.148,2.561-2.56  C57.339,64.172,56.19,63.024,54.778,63.024z M54.778,66.024c-0.242,0-0.439-0.198-0.439-0.441c0-0.243,0.197-0.44,0.439-0.44  c0.244,0,0.442,0.197,0.442,0.44C55.221,65.826,55.022,66.024,54.778,66.024z"/></svg>
                  </div>
                  <h3>Count On Us</h3>
                <p>98.8% On-Time Delivery</p>
            </div><!-- /.text-box -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">

                <div class="svg" id="svg-middle">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 66" x="0px" y="0px"><title>Quality </title><g data-name="Layer 2"><path d="M32,41.26A16.54,16.54,0,1,1,48.54,24.72,16.56,16.56,0,0,1,32,41.26Zm0-31.08A14.54,14.54,0,1,0,46.54,24.72,14.55,14.55,0,0,0,32,10.18Z"/><path d="M32,46.43A21.72,21.72,0,1,1,53.72,24.72,21.74,21.74,0,0,1,32,46.43ZM32,5A19.72,19.72,0,1,0,51.72,24.72,19.75,19.75,0,0,0,32,5Z"/><path d="M38.4,35.06a1,1,0,0,1-.46-.11L32,31.83,26.06,35a1,1,0,0,1-1.45-1.06l1.14-6.61L20.94,22.6a1,1,0,0,1,.56-1.7l6.63-1,3-6a1,1,0,0,1,1.8,0l3,6,6.63,1a1,1,0,0,1,.56,1.7l-4.81,4.68,1.14,6.61a1,1,0,0,1-.4,1A1,1,0,0,1,38.4,35.06ZM32,29.7a1,1,0,0,1,.47.11l4.6,2.42-.88-5.13a1,1,0,0,1,.29-.88l3.73-3.64-5.15-.75a1,1,0,0,1-.76-.54L32,16.62l-2.3,4.67a1,1,0,0,1-.76.54l-5.15.75,3.73,3.64a1,1,0,0,1,.29.88l-.88,5.13,4.6-2.42A1,1,0,0,1,32,29.7Z"/><path d="M43.4,61a1,1,0,0,1-.87-.5L34.14,46a1,1,0,1,1,1.74-1l7.43,12.88L46.54,51a1,1,0,0,1,1-.57l7.52.61L47.6,38.2a1,1,0,1,1,1.73-1l8.39,14.53a1,1,0,0,1-.95,1.5l-8.72-.71L44.3,60.43a1,1,0,0,1-.86.57Z"/><path d="M20.6,61h0a1,1,0,0,1-.86-.57L16,52.52l-8.72.71a1,1,0,0,1-1-1.5L14.67,37.2a1,1,0,1,1,1.73,1L9,51.08l7.52-.61a1,1,0,0,1,1,.57l3.23,6.81L28.12,45a1,1,0,1,1,1.74,1L21.47,60.5A1,1,0,0,1,20.6,61Z"/></g><text x="0" y="79" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text><text x="0" y="84" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text></svg>
                  </div>
                    <h3>Reliable Quality</h3>
                <p>Less than 1% Customer Return</p>
            </div><!-- /.text-box -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">

                <div class="svg" id="svg-last">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 103" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M43.824,30.146c-1.952,0-3.531,1.579-3.531,3.529v13.332c-2.102,1.221-3.527,3.475-3.527,6.081  c0,3.895,3.157,7.059,7.059,7.059c0.628,0,1.226-0.11,1.806-0.263l10.671,10.671c1.379,1.379,3.612,1.379,4.991,0h0.002  c1.379-1.378,1.379-3.612,0-4.991L50.621,54.892c0.15-0.586,0.262-1.178,0.262-1.805c0-2.606-1.427-4.86-3.53-6.081V33.675  C47.353,31.724,45.773,30.146,43.824,30.146z"/><path d="M75.589,8.97c-10.723,0-19.413,8.692-19.413,19.411c0,10.72,8.69,19.412,19.413,19.412C86.311,47.792,95,39.101,95,28.38  C95,17.662,86.311,8.97,75.589,8.97z M81.74,35.695c-0.73,2.005-2.397,3.467-4.388,4.032v1.007c0,0.979-0.79,1.765-1.764,1.765  c-0.976,0-1.765-0.786-1.765-1.765v-1c-1.108-0.303-2.134-0.861-2.971-1.703c-0.601-0.6-1.076-1.295-1.413-2.082  c-0.387-0.896,0.022-1.937,0.919-2.323c0.89-0.393,1.932,0.027,2.32,0.924c0.161,0.372,0.385,0.703,0.669,0.985  c0.598,0.601,1.395,0.931,2.24,0.931c0.003,0,0.007,0,0.01,0c1.262,0,2.395-0.792,2.827-1.978c0.564-1.558-0.239-3.281-1.797-3.854  l-3.287-1.192c-3.39-1.234-5.139-4.991-3.906-8.376c0.73-2.006,2.4-3.467,4.389-4.025v-1.013c0-0.973,0.789-1.765,1.765-1.765  c0.974,0,1.764,0.792,1.764,1.765v1.061c1.114,0.304,2.138,0.807,2.975,1.648c0.614,0.606,1.09,1.316,1.418,2.095  c0.377,0.903-0.046,1.937-0.946,2.309c-0.903,0.373-1.934-0.041-2.31-0.944c-0.147-0.351-0.37-0.682-0.662-0.972  c-0.598-0.6-1.392-0.931-2.238-0.931c-0.004,0-0.007,0-0.011,0c-1.263,0-2.396,0.8-2.825,1.986c-0.566,1.55,0.236,3.282,1.794,3.847  l3.287,1.192C81.224,28.56,82.976,32.317,81.74,35.695z"/><path d="M43.824,91.91c20.218,0,36.876-15.538,38.664-35.293c0.176-1.944-1.419-3.529-3.371-3.529c-1.951,0-3.508,1.585-3.722,3.522  C73.633,72.47,60.147,84.851,43.824,84.851c-17.517,0-31.766-14.248-31.766-31.764c0-16.324,12.377-29.779,28.234-31.544v4.191  c0,0.668,0.381,1.282,0.977,1.579c0.252,0.124,0.521,0.187,0.789,0.187c0.373,0,0.748-0.117,1.058-0.352l10.59-7.941  c0.443-0.331,0.705-0.855,0.705-1.414c0-0.552-0.262-1.075-0.705-1.413l-10.59-7.941c-0.534-0.393-1.246-0.462-1.847-0.165  c-0.596,0.303-0.977,0.91-0.977,1.578v4.619C20.541,16.27,5,32.869,5,53.087C5,74.49,22.416,91.91,43.824,91.91z"/><text x="0" y="115" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text><text x="0" y="120" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text></svg>
                </div>
                <h3>Short Lead Time</h3>
                <p>3.4 Week Average Lead Time</p>
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
          <h2 class="title bottom-sm-hr mb-4">Our Core Values</h2>
          <p>
            The New Melting Centre Pvt. Ltd., since its inception, has been always value-driven Organization. We do business on following Five Core Values:
          </p>
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;Integrity :
          <span>
            We do business with at most Honesty, Transparency and in the interest of our Clients.
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;Excellence :
          <span>
            We strive for highest possible standards in our working and in the quality of the products we supply.
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;Responsibility :
          <span>
            We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).
          </span>
          </h4>
          <!-- <h4 class="sub-title"><i class="fa fa-check"></i> Responsibility :
          <span>
            We always work towards Safety, Security and Comfort for our Customers under Environment  Management System (EMS).
          </span>
          </h4> -->
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;Promptness :
          <span>
            We make it sure to supply our products in lead time to avoid any hardship to our Customers.
          </span>
          </h4>
          <h4 class="sub-title"><i class="fa fa-check"></i> &nbsp;Cost Effectiveness :
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
                <a href="#" class="nmc-btn btn-hvr-border">Get a Quote</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="container">
    <div class="products" id="products">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title bottom-sm-hr pb-3">Our Products</h2>
          <div class="owl-slider mt-5">
            <div id="carousel2" class="owl-carousel">
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/streering.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/krish_wheel_hub.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/motor_cover.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/final_drive.jpg" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/wheel_hub.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/engine_front_cover.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/drive_shaft.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/front_wheel_hub.jpg" alt="">
            	</div>
              	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/rear_wheel_brake.jpg" alt="">
            	</div>
            	<div class="item">
            		<img class="owl-lazy border-light" data-src="<?php echo base_url(); ?>assets/images/products/flywheel5566.jpg" alt="">
            	</div>

            </div>
          </div>
          <div class="mt-5 text-center">
            <a href="<?php echo base_url(); ?>Products" class="nmc-btn btn-hvr">See More Products</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container-fluid" id="supply-div">

      <div class="container">
        <div class="best-supply-div">
          <h3 class="awa-info title">Best Supplier Award</h1>
          <p class="white-text">Best Supplier Award for speed response to new products<br> by  Kirloskar Oil Engines Limited.</p>
        </div>
    </div>
      <img class="svg-award d-none d-sm-block" src="<?php echo base_url(); ?>assets/images/gear.svg" alt="">
      <img class="svg-award d-block d-sm-none" src="<?php echo base_url(); ?>assets/images/gear_mob.svg" alt="">
    <!-- <img src="<?php echo base_url(); ?>assets/images/best_supply.png" width="100%" alt=""> -->
    <!-- <div class="container nmc_awards" id="nmc_awards">
      <div class="">
        <div class="row">
          <div class="col-md-6 awards-info align-self-center">
            <h3 class="awa-info title">Best Supplier Award</h1>
            <p class="white-text">Best Supplier Award for speed response to new products by Kirloskar Oil Engines Limited.</p>
          </div>
          <div class="col-md-6 awards-img">
            <img src="<?php echo base_url() ?>assets/images/award1.jpg" alt="">
          </div>
        </div>
      </div>
    </div> -->
  </div>
    <!-- footer content -->
    <?php include('include/footer.php'); ?>
    <script type="text/javascript">

    </script>
  </body>
</html>
