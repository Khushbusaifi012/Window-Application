<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="EduRead - Education HTML5 Template">
  <meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admission Window</title> 
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
  <!-- Popup -->
  <link href="css/assets/magnific-popup.css" rel="stylesheet"> 
  <!-- Slick Slider -->
  <link href="css/assets/slick.css" rel="stylesheet">   
  <link href="css/assets/slick-theme.css" rel="stylesheet">      
  <!-- owl carousel -->
  <link href="css/assets/owl.carousel.css" rel="stylesheet">
  <link href="css/assets/owl.theme.css" rel="stylesheet">
  <!-- Main Menu-->
  <link rel="stylesheet" href="css/assets/meanmenu.css">   
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/custom.css"> 
</head>
<body class="register">
<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<header id="header">
 <!--  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12 header-top-left">
          <ul class="list-unstyled">
            <li><i class="fa fa-phone top-icon"></i> +91 9958444048</li>
            <li><i class="fa fa-envelope top-icon"></i> support@admissionwindow.com</li>
          </ul>
        </div>
        <div class="col-sm-6 col-xs-12 header-top-right">
          <ul class="list-unstyled">
            <li><a href="register.php"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
            <li><a href="login.php"><i class="fa fa-lock top-icon"></i>Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->

  <div class="header-body" style="background: none!important;min-height: 0px!important;">
    <nav class="navbar edu-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand  data-scroll"><img src="images/logo.png" alt="" style="width:110px;"><!-- <span>EduRead</span> --></a>
        </div>

        <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav pull-right">
            <h3 class="feature_title">Notifications</h3>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
   
  </div>
</header>
  <!--  End header section-->

<style>
  .notification{
    max-width: 90vw;
  min-width: 275px;
  margin: 10vh auto;
  }
	
.tabs {
  display: flex;
  
  border-bottom: none;
}

.tab {
 display: inline-block;
    padding: 6px 12px;
    margin-bottom: 10px;
    margin-right: 8px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
   background: #000!important;
   color: white!important;
}

.tab.active {
  border-bottom: none;
  border-right: none;
  border-left: none;
  background: red!important;
}

.tab:hover {
  background: #fff;
}

.tab.active:first-child {
  border-left: 1px solid #ccc;
}
.tab.active:last-child {
  border-right: 1px solid #ccc;
  border-left: 1px solid #ccc;
}

.active {
  display: block;
}

.tab-content {
  background-color: #fff;
}

.tab-content-item {
  border: 1px solid #ccc;
  display: none;
  max-width: 100%;
  margin-top: -1px;
  padding-inline: 20px;
}

.tab-content-item.active {
  display: block;
}

.lineheight li{list-style: none!important;}

.feature_title {
    color: #EE3B24 !important;
    margin: 10px auto;
    font-size: 40px;
    line-height: 65px;
    text-transform: uppercase;
}


/*Tab CSS Ends above*/
@media only screen and (max-width: 768px) {
  .tabs{display: block!important;}
  .tab{display: block!important;}
}

</style>

<div class="notification">

<hr>
<div class="row"> 
  <div class="tabs">
    <div class="tab active" data-tab-content="tab1-content">All</div>
    <div class="tab" data-tab-content="tab2-content">Engineering</div>
    <div class="tab" data-tab-content="tab3-content">Medical/Dental</div>
    <div class="tab" data-tab-content="tab4-content">Agriculture</div>
    <div class="tab" data-tab-content="tab5-content">Architecture</div>
    <div class="tab" data-tab-content="tab6-content">Pharmacy</div>
    <div class="tab" data-tab-content="tab7-content">Veterinary</div>
    <div class="tab" data-tab-content="tab8-content">BAMS</div>
    <div class="tab" data-tab-content="tab9-content">BHMS</div>
    <div class="tab" data-tab-content="tab10-content">NEET-UG</div>
    <div class="tab" data-tab-content="tab11-content">JEE Main</div>
    <div class="tab" data-tab-content="tab12-content">JEE Advanced</div>
    <div class="tab" data-tab-content="tab13-content">ICAR</div>
    <div class="tab" data-tab-content="tab14-content">BITSAT</div>
  </div>
</div>

<div class="row"> 
  <div class="tabs">
    <div class="tab" data-tab-content="tab15-content">AIIMS</div>
    <div class="tab" data-tab-content="tab16-content">JIPMER</div>
    <div class="tab" data-tab-content="tab17-content">National Level Exams</div>
    <div class="tab" data-tab-content="tab18-content">State Level Board Exams</div>
    <div class="tab" data-tab-content="tab19-content">M.Sc Agriculture</div>
    <div class="tab" data-tab-content="tab20-content">Results</div>
    <div class="tab" data-tab-content="tab21-content">Counsellings</div>
    <div class="tab" data-tab-content="tab22-content">Latest</div>
  </div>
</div>
<hr>

  <div class="tab-content">
    <div class="tab-content-item active" id="tab1-content">
      
      <div class="container lineheight">
        <ul class="portfolio-wrap  paginate paginate-0" id="portfolio_items" style="line-height: 3em !important;">
          <!--mains start-->
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="notification-detail.php"><b>National Entrance Screening Test (NEST) 2023 Notification Released</b><span class="badge pull-right">2023-02-22</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="notification-detail.php"><b>Inviting Online Applications for Joint Entrance Examination (Main) - 2023 Session 2 - Reg</b><span class="badge pull-right">2023-02-15</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="notification-detail.php"><b>Manipal Entrance Test (MET) 2023 Schedule</b><span class="badge pull-right">2023-02-13</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="notification-detail.php"><b>Indian Statistical Institute (ISI) Admission Test 2023 Notification Released</b><span class="badge pull-right">2023-02-13</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="notification-detail.php"><b>Common University Entrance Test (CUET UG) 2023 Notification Released</b><span class="badge pull-right">2023-02-09</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Tentative Telangana State Common Entrance Tests (TS-CET) Schedule 2023</b><span class="badge pull-right">2023-02-07</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>International Institute of Information Technology Hyderabad Undergraduate Entrance Examination (IIITH - UGEE) 2023 Notification Released</b><span class="badge pull-right">2023-02-06</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Birla Institute of Technology and Science Admission Test (BITSAT) 2023 Notification Released</b><span class="badge pull-right">2023-01-31</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>JEE Advanced (JEE Adv) 2023 Notification Released</b><span class="badge pull-right">2022-12-29</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Kalinga Institute of Industrial Technology Entrance Exam (KIITEE) 2023 Notification Released</b><span class="badge pull-right">2022-12-10</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Joint Entrance Examination (JEE Mains) 2023 Notification Released</b><span class="badge pull-right">2022-12-15</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Amrita Engineering Entrance Examination 2O23 Application Started</b><span class="badge pull-right">2022-11-18</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Aircraft Maintenance Engineering Common Entrance Test (AMECET) 2023 Notification Released</b><span class="badge pull-right">2022-10-01</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>All India Forensic Science Entrance Test (AIFSET) 2O23 Notification Released</b><span class="badge pull-right">2022-11-01</span></a>
          </li> 
          <!--bitsat wall end-->

        </ul>

      </div>
    </div>
    <div class="tab-content-item" id="tab2-content">
      
      <div class="container lineheight">
        <ul class="portfolio-wrap  paginate paginate-0" id="portfolio_items" style="line-height: 3em !important;">
          <!--mains start-->
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>National Entrance Screening Test (NEST) 2023 Notification Released</b><span class="badge pull-right">2023-02-22</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Inviting Online Applications for Joint Entrance Examination (Main) - 2023 Session 2 - Reg</b><span class="badge pull-right">2023-02-15</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Manipal Entrance Test (MET) 2023 Schedule</b><span class="badge pull-right">2023-02-13</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Indian Statistical Institute (ISI) Admission Test 2023 Notification Released</b><span class="badge pull-right">2023-02-13</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Common University Entrance Test (CUET UG) 2023 Notification Released</b><span class="badge pull-right">2023-02-09</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Tentative Telangana State Common Entrance Tests (TS-CET) Schedule 2023</b><span class="badge pull-right">2023-02-07</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>International Institute of Information Technology Hyderabad Undergraduate Entrance Examination (IIITH - UGEE) 2023 Notification Released</b><span class="badge pull-right">2023-02-06</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Birla Institute of Technology and Science Admission Test (BITSAT) 2023 Notification Released</b><span class="badge pull-right">2023-01-31</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>JEE Advanced (JEE Adv) 2023 Notification Released</b><span class="badge pull-right">2022-12-29</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Kalinga Institute of Industrial Technology Entrance Exam (KIITEE) 2023 Notification Released</b><span class="badge pull-right">2022-12-10</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Joint Entrance Examination (JEE Mains) 2023 Notification Released</b><span class="badge pull-right">2022-12-15</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Amrita Engineering Entrance Examination 2O23 Application Started</b><span class="badge pull-right">2022-11-18</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Aircraft Maintenance Engineering Common Entrance Test (AMECET) 2023 Notification Released</b><span class="badge pull-right">2022-10-01</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>All India Forensic Science Entrance Test (AIFSET) 2O23 Notification Released</b><span class="badge pull-right">2022-11-01</span></a>
          </li> 
          <!--bitsat wall end-->

        </ul>

      </div>
    </div>
    <div class="tab-content-item" id="tab3-content">
     
      <div class="container lineheight">
        <ul class="portfolio-wrap  paginate paginate-0" id="portfolio_items" style="line-height: 3em !important;">
          <!--mains start-->
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>National Entrance Screening Test (NEST) 2023 Notification Released</b><span class="badge pull-right">2023-02-22</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Inviting Online Applications for Joint Entrance Examination (Main) - 2023 Session 2 - Reg</b><span class="badge pull-right">2023-02-15</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Manipal Entrance Test (MET) 2023 Schedule</b><span class="badge pull-right">2023-02-13</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Indian Statistical Institute (ISI) Admission Test 2023 Notification Released</b><span class="badge pull-right">2023-02-13</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Common University Entrance Test (CUET UG) 2023 Notification Released</b><span class="badge pull-right">2023-02-09</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Tentative Telangana State Common Entrance Tests (TS-CET) Schedule 2023</b><span class="badge pull-right">2023-02-07</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>International Institute of Information Technology Hyderabad Undergraduate Entrance Examination (IIITH - UGEE) 2023 Notification Released</b><span class="badge pull-right">2023-02-06</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Birla Institute of Technology and Science Admission Test (BITSAT) 2023 Notification Released</b><span class="badge pull-right">2023-01-31</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>JEE Advanced (JEE Adv) 2023 Notification Released</b><span class="badge pull-right">2022-12-29</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" >
            <a href="#"><b>Kalinga Institute of Industrial Technology Entrance Exam (KIITEE) 2023 Notification Released</b><span class="badge pull-right">2022-12-10</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Joint Entrance Examination (JEE Mains) 2023 Notification Released</b><span class="badge pull-right">2022-12-15</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Amrita Engineering Entrance Examination 2O23 Application Started</b><span class="badge pull-right">2022-11-18</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>Aircraft Maintenance Engineering Common Entrance Test (AMECET) 2023 Notification Released</b><span class="badge pull-right">2022-10-01</span></a>
          </li> 
          <li class="col-xs-12 col-sm-12 col-md-12 single-portfolio a1 cambria" style="display: none;">
            <a href="#"><b>All India Forensic Science Entrance Test (AIFSET) 2O23 Notification Released</b><span class="badge pull-right">2022-11-01</span></a>
          </li> 
          <!--bitsat wall end-->

        </ul>

      </div>
    </div>
  </div>
</div>


<script>
  const tabs = document.querySelectorAll('.tab');
const tabContents = document.querySelectorAll('.tab-content-item');

tabs.forEach(tab => {
  tab.addEventListener('click', function() {
    // remove active class from all tabs and tab content
    tabs.forEach(tab => tab.classList.remove('active'));
    tabContents.forEach(content => content.classList.remove('active'));

    // add active class to current tab and its corresponding tab content
    this.classList.add('active');
    document.getElementById(this.dataset.tabContent).classList.add('active');
  });
});

</script>

<?php include 'footer.php'; ?>
