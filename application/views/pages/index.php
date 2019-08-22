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
          <img class="d-block w-100 banner-img" src="<?php echo base_url('assets/images/slider/banner3.jpg'); ?>" alt="Second slide">
          <div class="animated animated-2s bounceInLeft delay-1s banner-title d-none d-md-block">
            <h1 class="title text-white banner-title1">Welcome to NMCPL</h1>
            <!-- <h1 class="title title2 text-white banner-title1 top-scale-1">We will provide the best service</h1> -->
            <p class="banner-para1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
            <div class="banner-btn1">
              <a href="<?php echo base_url(); ?>About-Us" class=" nmc-btn btn-hvr about-btn">More About Us</a>
            </div></div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/banner1.jpg'); ?>" alt="Second slide">
          <div class="animated animated-2s bounceInLeft delay-1s banner-title d-none d-md-block">
            <h1 class="title text-white banner-title1">Welcome to NMCPL</h1>
            <!-- <h1 class="title text-white banner-title1 top-scale-1">We will provide the best service</h1> -->
            <p class="banner-para1 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
            <div class="banner-btn1">
              <a href="<?php echo base_url(); ?>About-Us" class=" nmc-btn btn-hvr about-btn">More About Us</a>
            </div>   </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/images/slider/banner2.jpg'); ?>" alt="Third slide">
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
              <img src="<?php echo base_url() ?>assets/images/infrastructure/induction_furnace_1.jpg" alt="">
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
              <img src="<?php echo base_url() ?>assets/images/infrastructure/testing_Microscope_Image_Analyzer.jpg" alt="">
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
          <h2 class="title pb-4 bottom-sm-hr subtitle-padding">Welcome to NMCPL</h2>
          <p class="">
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
          <h2 class="title bottom-sm-hr subtitle-padding">Our Clients</h2>
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
          <a href="<?php echo base_url(); ?>Clients" class="nmc-btn btn-hvr">See More Clients</a>
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
      <div class="row text-center">
        <div class="col-md-4 text-center">
          <div class="feature-box text-center">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">

                <div class="svg">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 96 100" enable-background="new 0 0 96 96" xml:space="preserve"><path d="M77.036,30.66l7.922-7.921L73.25,11.054l-7.92,7.918c-2.843-1.714-5.887-2.978-9.076-3.767V4.01H39.728v11.2  c-3.236,0.81-6.281,2.071-9.08,3.761l-7.917-7.918L11.043,22.74l7.919,7.917c-1.691,2.802-2.953,5.846-3.762,9.08H4v16.526h11.2  c0.806,3.214,2.067,6.258,3.764,9.078l-7.921,7.919L22.73,84.947l7.92-7.921c2.828,1.697,5.872,2.959,9.077,3.764v11.2h16.526V80.79  c3.187-0.802,6.229-2.064,9.072-3.766l7.924,7.922l11.708-11.685l-7.924-7.923c1.702-2.849,2.965-5.892,3.765-9.075H92V39.737  H80.799C79.996,36.534,78.733,33.49,77.036,30.66z M89,53.263H78.394l-0.253,1.188c-0.777,3.648-2.214,7.111-4.269,10.292  l-0.658,1.018l7.5,7.498l-7.462,7.446l-7.504-7.502l-1.018,0.659c-3.174,2.053-6.636,3.489-10.289,4.269l-1.188,0.253V88.99H42.728  V78.384l-1.188-0.253c-3.681-0.784-7.143-2.22-10.288-4.267l-1.02-0.663l-7.502,7.503l-7.445-7.444l7.506-7.503l-0.666-1.02  c-2.043-3.133-3.479-6.594-4.266-10.287l-0.253-1.188H7V42.737h10.606l0.253-1.188c0.793-3.721,2.228-7.181,4.264-10.283l0.67-1.021  l-7.508-7.505l7.445-7.444l7.506,7.507l1.021-0.67c3.099-2.035,6.559-3.469,10.283-4.263l1.188-0.253V7.01h10.526v10.612  l1.194,0.249c3.652,0.761,7.109,2.196,10.276,4.264l1.02,0.666l7.508-7.506l7.462,7.446l-7.502,7.5l0.662,1.019  c2.048,3.15,3.483,6.612,4.267,10.289l0.253,1.188H89V53.263z"/><path d="M48,20.442c-15.196,0-27.559,12.362-27.559,27.558S32.804,75.558,48,75.558S75.559,63.196,75.559,48  S63.196,20.442,48,20.442z M48,72.558c-13.038,0-23.73-10.213-24.509-23.058h19.93h7.728h21.36  C71.73,62.345,61.038,72.558,48,72.558z M48.132,46.5l5.383-11.529l0.991-0.405l0.298,1.026L49.301,46.5H48.132z M52.662,46.5  l5.353-10.611l-1.56-5.362l-5.163,2.112L44.821,46.5h-21.33C24.27,33.655,34.962,23.442,48,23.442S71.73,33.655,72.509,46.5H52.662z  "/><path d="M29.129,56.686v0.424c0,1.762,1.433,3.195,3.194,3.195h31.354c1.762,0,3.194-1.433,3.194-3.195v-0.424  c0-1.761-1.433-3.194-3.194-3.194H32.323C30.562,53.492,29.129,54.924,29.129,56.686z M63.871,56.686v0.424  c0,0.104-0.091,0.195-0.194,0.195H32.323c-0.104,0-0.194-0.091-0.194-0.195v-0.424c0-0.103,0.091-0.194,0.194-0.194h31.354  C63.78,56.492,63.871,56.583,63.871,56.686z"/><path d="M41.222,63.024c-1.412,0-2.561,1.148-2.561,2.559c0,1.412,1.148,2.56,2.561,2.56c1.41,0,2.558-1.148,2.558-2.56  C43.779,64.172,42.632,63.024,41.222,63.024z M41.222,66.024c-0.244,0-0.442-0.198-0.442-0.441c0-0.243,0.198-0.44,0.442-0.44  c0.242,0,0.439,0.197,0.439,0.44C41.661,65.826,41.464,66.024,41.222,66.024z"/><path d="M48,63.024c-1.411,0-2.56,1.148-2.56,2.559c0,1.412,1.148,2.56,2.56,2.56s2.56-1.148,2.56-2.56  C50.56,64.172,49.411,63.024,48,63.024z M48,66.024c-0.243,0-0.44-0.198-0.44-0.441c0-0.243,0.197-0.44,0.44-0.44  s0.44,0.197,0.44,0.44C48.44,65.826,48.243,66.024,48,66.024z"/><path d="M54.778,63.024c-1.41,0-2.558,1.148-2.558,2.559c0,1.412,1.147,2.56,2.558,2.56c1.412,0,2.561-1.148,2.561-2.56  C57.339,64.172,56.19,63.024,54.778,63.024z M54.778,66.024c-0.242,0-0.439-0.198-0.439-0.441c0-0.243,0.197-0.44,0.439-0.44  c0.244,0,0.442,0.197,0.442,0.44C55.221,65.826,55.022,66.024,54.778,66.024z"/></svg>
                  </div>
                  <h3>Count On Us</h3>
                <p>98.8% on-time delivery</p>
            </div><!-- /.text-box -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">

                <div class="svg">
                  <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 64 67" x="0px" y="0px"><title>quality-value-suggest-standard-good</title><path d="M37.0112,53.4375l3.1065-2.3779a.99951.99951,0,0,0-.4722-1.7842l-4.2803-.5879L33.6016,45.499a.99971.99971,0,0,0-.8418-.5146.98429.98429,0,0,0-.8741.458l-2.0293,3.1523-4.3437.4492a1.00048,1.00048,0,0,0-.5449,1.7569l2.8921,2.459-.8272,3.3379a1,1,0,0,0,1.3516,1.165l3.9629-1.6328,3.8252,1.7539a1.00007,1.00007,0,0,0,1.4028-1.0742Zm-1.6933-1.2227a.99934.99934,0,0,0-.3784.959l.352,2.1065-2.5063-1.1494a.99706.99706,0,0,0-.4165-.0909,1.00892,1.00892,0,0,0-.3809.0752l-2.5386,1.0459.501-2.0215a.99943.99943,0,0,0-.3228-1.0019L28.0459,50.793l2.4941-.2578a1.00005,1.00005,0,0,0,.7378-.4541l1.3838-2.1495,1.1963,2.1631a1.00271,1.00271,0,0,0,.7393.5069l2.3989.3291Z"/><path d="M21.5029,15.8105H10.3335a.99979.99979,0,0,0-1,1V39a.99979.99979,0,0,0,1,1H21.5029a.98728.98728,0,0,0,.9707-.8555L32.6699,40H51.3301a.9984.9984,0,0,0,.688-.2744c.2475-.2344,2.4091-2.3574,2.0498-4.6055a3.19917,3.19917,0,0,0-1.0122-1.8447,4.10235,4.10235,0,0,0,1.4965-2.9102,3.564,3.564,0,0,0-1.435-2.7129,4.02951,4.02951,0,0,0,1.7329-2.9677,3.6248,3.6248,0,0,0-1.8511-2.9112,3.75218,3.75218,0,0,0,1.0991-2.7187,3.50527,3.50527,0,0,0-2.3388-2.7481c-2.6348-1.2529-7.2554-.3652-10.4531.5137a15.1997,15.1997,0,0,0,1.4946-9.3857c-.6299-4.6133-2.7207-5.3828-3.9112-5.4317-2.207-.039-4.4848,2.2617-5.1665,5.3535-.8056,3.6846-4.5283,7.4981-5.5351,8.4747l-5.9409.3271A.98739.98739,0,0,0,21.5029,15.8105ZM20.5029,38H11.3335V17.8105h9.1694Zm8.1617-20.1924a.99653.99653,0,0,0,.6181-.2578c.2168-.1973,5.3281-4.8906,6.3941-9.7646.5034-2.2842,2.0854-3.8526,3.1318-3.7832.9477.038,1.6992,1.4228,2.0107,3.7041.8545,6.2216-2.0966,9.5761-2.6743,10.165a1.0008,1.0008,0,0,0-.3598,1.0137,1.01831,1.01831,0,0,0,1.3676.6943c3.9527-1.373,9.4004-2.5811,11.7481-1.4658.4306.2041,1.1601.6211,1.2046,1.1133.0537.5996-.7779,1.4941-1.3545,1.9082a1.00045,1.00045,0,0,0,.1313,1.7099c1.2495.625,1.9663,1.2959,1.9678,1.8389.0015.7187-1.1743,1.6504-1.9678,2.0518a1,1,0,0,0-.0459,1.7636c1.1045.628,1.7139,1.2901,1.7158,1.8653.0035.8916-1.2724,1.83-1.7172,2.0869a1.00061,1.00061,0,0,0,.0678,1.7734c1.0757.5078,1.1617,1.0352,1.1895,1.209A3.871,3.871,0,0,1,50.9038,38l-18.1499.0039-10.251-.8633V18.1465Z"/><path d="M56.3901,52.9502l4.6939-6.3564A.99994.99994,0,0,0,60.2798,45H39.9941a11.58,11.58,0,0,0-7.7255-2.999L32.1528,42a11.51,11.51,0,0,0-7.8217,3H4.0298a.99969.99969,0,0,0-.8037,1.5947l4.7026,6.3555L3.2451,58.3447A.99978.99978,0,0,0,4,60H25.5762a11.76575,11.76575,0,0,0,6.4814,1.999l.1157.001a11.62883,11.62883,0,0,0,6.5542-2H60.3101a1.00042,1.00042,0,0,0,.7558-1.6553Zm-5.7949.7471L51.7617,55H42.6538a8.95278,8.95278,0,0,0,.2774-5h9.1611l-1.5947,2.4912A.99951.99951,0,0,0,50.5952,53.6973ZM13.9834,52.4922,12.3936,50h8.996a9.037,9.037,0,0,0-.226,1.8965A9.17961,9.17961,0,0,0,21.6812,55H12.7183l1.1665-1.3027A1.00023,1.00023,0,0,0,13.9834,52.4922ZM9.9648,53.6553a.99874.99874,0,0,0,.0489-1.25L6.0137,47H22.6543a9.61393,9.61393,0,0,0-.5664,1H10.5698a1.00034,1.00034,0,0,0-.8432,1.5381l2.1626,3.3906L9.7354,55.333A.99958.99958,0,0,0,10.48,57H22.646a9.878,9.878,0,0,0,.7241,1H6.1929ZM32.0762,59.999a9.52277,9.52277,0,0,1-6.6978-2.749,7.49189,7.49189,0,0,1-2.2148-5.332c.0468-4.3653,4.0791-7.917,9.0854-7.917h.001a9.52366,9.52366,0,0,1,6.6978,2.749,7.49189,7.49189,0,0,1,2.2148,5.332C41.1157,56.4482,37.083,60,32.1733,60ZM40.936,58a10.19569,10.19569,0,0,0,.7364-1H54a.99958.99958,0,0,0,.7446-1.667l-2.1528-2.4033,2.1704-3.3906A.99964.99964,0,0,0,53.9199,48H42.2324a9.61586,9.61586,0,0,0-.5522-1H58.2979l-3.9922,5.4063a1,1,0,0,0,.0483,1.249L58.1201,58Z"/><text x="0" y="79" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text><text x="0" y="84" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text></svg>
                  </div>
                    <h3>Reliable Quality</h3>
                <p>less than 1% customer return</p>
            </div><!-- /.text-box -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <!-- <div class="icon-box">
                <i class="fa fa-edit feature-icon"></i>
            </div -->
            <div class="icon-box">

                <div class="svg">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 103" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M43.824,30.146c-1.952,0-3.531,1.579-3.531,3.529v13.332c-2.102,1.221-3.527,3.475-3.527,6.081  c0,3.895,3.157,7.059,7.059,7.059c0.628,0,1.226-0.11,1.806-0.263l10.671,10.671c1.379,1.379,3.612,1.379,4.991,0h0.002  c1.379-1.378,1.379-3.612,0-4.991L50.621,54.892c0.15-0.586,0.262-1.178,0.262-1.805c0-2.606-1.427-4.86-3.53-6.081V33.675  C47.353,31.724,45.773,30.146,43.824,30.146z"/><path d="M75.589,8.97c-10.723,0-19.413,8.692-19.413,19.411c0,10.72,8.69,19.412,19.413,19.412C86.311,47.792,95,39.101,95,28.38  C95,17.662,86.311,8.97,75.589,8.97z M81.74,35.695c-0.73,2.005-2.397,3.467-4.388,4.032v1.007c0,0.979-0.79,1.765-1.764,1.765  c-0.976,0-1.765-0.786-1.765-1.765v-1c-1.108-0.303-2.134-0.861-2.971-1.703c-0.601-0.6-1.076-1.295-1.413-2.082  c-0.387-0.896,0.022-1.937,0.919-2.323c0.89-0.393,1.932,0.027,2.32,0.924c0.161,0.372,0.385,0.703,0.669,0.985  c0.598,0.601,1.395,0.931,2.24,0.931c0.003,0,0.007,0,0.01,0c1.262,0,2.395-0.792,2.827-1.978c0.564-1.558-0.239-3.281-1.797-3.854  l-3.287-1.192c-3.39-1.234-5.139-4.991-3.906-8.376c0.73-2.006,2.4-3.467,4.389-4.025v-1.013c0-0.973,0.789-1.765,1.765-1.765  c0.974,0,1.764,0.792,1.764,1.765v1.061c1.114,0.304,2.138,0.807,2.975,1.648c0.614,0.606,1.09,1.316,1.418,2.095  c0.377,0.903-0.046,1.937-0.946,2.309c-0.903,0.373-1.934-0.041-2.31-0.944c-0.147-0.351-0.37-0.682-0.662-0.972  c-0.598-0.6-1.392-0.931-2.238-0.931c-0.004,0-0.007,0-0.011,0c-1.263,0-2.396,0.8-2.825,1.986c-0.566,1.55,0.236,3.282,1.794,3.847  l3.287,1.192C81.224,28.56,82.976,32.317,81.74,35.695z"/><path d="M43.824,91.91c20.218,0,36.876-15.538,38.664-35.293c0.176-1.944-1.419-3.529-3.371-3.529c-1.951,0-3.508,1.585-3.722,3.522  C73.633,72.47,60.147,84.851,43.824,84.851c-17.517,0-31.766-14.248-31.766-31.764c0-16.324,12.377-29.779,28.234-31.544v4.191  c0,0.668,0.381,1.282,0.977,1.579c0.252,0.124,0.521,0.187,0.789,0.187c0.373,0,0.748-0.117,1.058-0.352l10.59-7.941  c0.443-0.331,0.705-0.855,0.705-1.414c0-0.552-0.262-1.075-0.705-1.413l-10.59-7.941c-0.534-0.393-1.246-0.462-1.847-0.165  c-0.596,0.303-0.977,0.91-0.977,1.578v4.619C20.541,16.27,5,32.869,5,53.087C5,74.49,22.416,91.91,43.824,91.91z"/><text x="0" y="115" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text><text x="0" y="120" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif"></text></svg>
                </div>
                <h3>Short Lead Time</h3>
                <p>3.4 week average lead time</p>
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
                <a href="#" class="nmc-btn btn-hvr-border">Get a quote</a>
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
    <hr>
  </div>

  <div class="container-fluid " >
    <div class="container nmc_awards" id="nmc_awards">
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
    </div>
  </div>
    <!-- footer content -->
    <?php include('include/footer.php'); ?>
    <script type="text/javascript">

    </script>
  </body>
</html>
