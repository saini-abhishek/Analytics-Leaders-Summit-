<?php
  session_start();
  //connect to database
  $db=mysqli_connect("localhost", "root", "", "Contact_details"); 
  if (isset($_POST['continue'])) {

    $fname = mysql_real_escape_string($_POST['FirstName']);
    $lname = mysql_real_escape_string($_POST['LastName']);
    $email = mysql_real_escape_string($_POST['corporateEmail']);
    $phone = mysql_real_escape_string($_POST['phone']);
    $company = mysql_real_escape_string($_POST['CompanyName']);
    $designation = mysql_real_escape_string($_POST['Designation']);
    $numofattend = mysql_real_escape_string($_POST['NumOfAttendies']);
    $event = mysql_real_escape_string($_POST['Twodayconf']);
    $promo = mysql_real_escape_string($_POST['promo']);
    $additional = mysql_real_escape_string($_POST['additionalparties']);

    
    $sql = "INSERT INTO Philippines_Enq(fname,lname,email,phone,company,designation,numofattend,event,promocode,additional) VALUES('$fname', '$lname', '$email', '$phone', '$company', '$designation', $numofattend, '$event', '$promo', '$additional')";
    if (mysqli_query($db,$sql)) {
      echo "";
      
    }
    
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ticket.css">
  <title>Analytics Leaders' Summit-Asia 2018 | Events</title>
</head>
<body style="margin: 0; padding: 0; text-align: center;">
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="myNavbar"style="background-color: #000; color: #fff; font-weight: bold; ">
  <!-- Brand/logo -->

  <a class="navbar-brand" id="logo" href="#"><img class="img-responsive" src="images/logo.png" height="62" width="94"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">Past Events</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Upcoming Events</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Philippines-new.html">ALS Philippines 2018</a>
        <a class="dropdown-item" href="thailand.html">ALS Thailand 2018</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link"href="default.html">Blog</a>
    </li>
  </ul>
</div>
</nav>

  <div class="jumbotron text-center main_cont">
    <div class="row" id="heading">
      <div class="col-sm-12">
        Thank you! We will get in touch with you shortly.
      </div>
      
    </div>
    
    <div class="row text-center" id="sud_context">
      <div class="col-sm-12">To confirm your email address an email with event's details was sent to you.</div>
      
    </div>
    
    <div class="row" id="back">
      <div class="col-sm-12">
        <a href="index.html"><u>Back to site</u></a>
      </div>
      
    </div>
    
    <div class="row" id="cal_div">
      <div class="col-sm-12">
        <button id="calender">Add to Calender</button>
      </div>
    </div>
    <div class="row" id="cal_sub_div">
      <div class="col-sm-4" style="margin-right: 47px;"></div>
      <div class="col-sm-1">
        <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=cl&passive=1209600&osid=1&continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Frender%3Faction%3DTEMPLATE%26text%3DAnalytics%2BLeaders%27%2BSummit%2BPhilippines%2B-%2BConference%2BInquiry%26dates%3D20180627T010000Z%2F20180628T100000Z%26location%3D%2BManila%2C%2BPhilippines&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar&scc=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" id="cal_social" target="blank"><u>Gmail</u></a>
      </div>
      <div class="col-sm-1">
        <a href="#" id="cal_social" target="blank"><u>Outlook</u></a>
      </div>
      <div class="col-sm-1">
        <a href="#" id="cal_social" target="blank"><u>iCal</u></a>
      </div>
    </div>
    
    <div class="row" id="share">
      
        <div class="col-sm-12">
          Share
        </div>
      
    </div>

    <div class="row" id="links">
      <div class="col-sm-4" style="margin-right: 47px;"></div>
      <div class="col-sm-1" style="" >
        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fwww.analyticsleaderssummit.com%252Fevents%252Fanalytics-leaders-summit-thailand-conference-registration%26title%3DCheck%2Bout%2Bthis%2Bevent.%2BHope%2Bto%2Bsee%2Byou%2Bthere%2521&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Freturn%2Fclose%3Ferror_code%3D4201%26error_message%3DUser%2Bcanceled%2Bthe%2BDialog%2Bflow%23_%3D_&display=popup&locale=en_GB"><img class="img-responsive " src="images/fblack.png" width="16" height="16"></a>
      </div>
      <div class="col-sm-1">
        <a href="https://twitter.com/intent/tweet?url=https://www.analyticsleaderssummit.com/events/analytics-leaders-summit-thailand-conference-registration&text=Check+out+this+event.+Hope+to+see+you+there!+%23events"><img class="img-responsive " src="images/timg.png" width="16" height="16"></a>
      </div>  
    
      <div class="col-sm-1">
        <a href="https://www.linkedin.com/start/join?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fsharing%2Fshare-offsite%3Fmini%3Dtrue%26url%3Dhttps%3A%2F%2Fwww.analyticsleaderssummit.com%2Fevents%2Fanalytics-leaders-summit-thailand-conference-registration%26title%3DCheck%2Bout%2Bthis%2Bevent.%2BHope%2Bto%2Bsee%2Byou%2Bthere%21&trk=login_reg_redirect"><img class="img-responsive " src="images/limg.png" width="16" height="16"></a>
      </div>
    
      </div>
    </div>
    
  
    <div class="social-links">
          <ul>
            <li><a href="https://www.linkedin.com/company/432088?trk"><img src="images/in.png" /></a></li>
            <li><a href="https://twitter.com/enigmacg?lang=en"><img src="images/tweeter.png" /></a></li>
            <li><a href="https://www.facebook.com/analyticsleadersummit/"><img src="images/fb.png" /></a></li>
            <li><a href="https://www.youtube.com/channel/UCgTMN4lwPTRrEFWIQ2_r4HQ"><img src="images/youtube.png" /></a></li>
          </ul>
        </div>

    
  </div>
<div class="container-fluid bottom"></div>
<script type="text/javascript">
  $(document).ready(function(){
    $(calender).click(function(){
        $(cal_social).toggle();
    });
});
</script>
</body>
</html>
