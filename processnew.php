<!DOCTYPE html lang="en">
<html>

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156818054-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-156818054-1');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Imagine having your Wedding Breakfast in a unique setting? At Grimsby Golf Club, we know that each and every wedding is unique and our experienced team will be able to provide bespoke arrangements for every aspect of your celebration, making sure you and your guests have a truly perfect time" />
  <meta name="keywords" content="Wedding venue grimsby, Wedding venue in Grimsby, Weddings in Grimsby, Grimsby Golf Club, Wedding, Wedding Venue, Grimsby">
  <meta name="author" content="Mark Titchen">
  <link rel="icon" href="pictures/icon.jpeg" type="image/gif" sizes="16x16">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
  <title>Grimsby Golf Club Weddings | Menus | Wedding Venue Grimsby | wedding venue in Grimsby</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/1.css">

  <!-- Font Awesome-->
  <script src="https://kit.fontawesome.com/a96ccef492.js" crossorigin="anonymous"></script>

  <!-- bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Grimsby Golf Club Weddings</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menus.php">Menus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pricing-calculator.php">Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enquiries.php">Enquiries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="survey.php">Survey</a>
      </li>
    </ul>
  </nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pictures/outside1.png" alt="Grimsby Golf Club Weddings">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pictures/outside2.png" alt="Wedding venue in Grimsby">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pictures/outside3.png" alt="Wedding venue Grimsby">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pictures/outside4.png" alt="Wedding venue Grimsby">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--working-->

<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "s0238905@grimsby.ac.uk";
    $email_subject = "Your email subject line";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    //$eventCategory = $_POST['eventCategory']; // required
    $fullName = $_POST['fullName']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";


  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    //$email_message .= "Event Category: ".clean_string($eventCategory)."\n";
    $email_message .= "Full Name: ".clean_string($fullName)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

<br />
<br />

<div class="container-fluid">
  <strong>Thank you for contacting us. We will be in touch with you very soon.</strong>
</div>
<?php

}
?>

<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #2ec4b6;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right" style="width: 60px;">

          <!-- Facebook -->
          <a class="fb-ic" style="color: black;" href="https://www.facebook.com/grimsbygolfclubweddings">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" style="color: black;" href="https://twitter.com/grimsbygolfclu1">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Grimsby Golf Club</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Imagine having your Wedding Breakfast in a unique setting with unrivalled views across our stunning parkland golf course?</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="index.php" style="color: black;">Home</a>
        </p>
        <p>
          <a class="dark-grey-text" href="enquiries.php" style="color: black;">Enquiries</a>
        </p>
        <p>
          <a class="dark-grey-text" href="menus.php" style="color: black;">Menus</a>
        </p>
        <p>
          <a class="dark-grey-text" href="gallery.php" style="color: black;">Gallery</a>
        </p>
        <p>
          <a class="dark-grey-text" href="pricing-calculator.php" style="color: black;">Pricing Calculator</a>
        </p>
        <p>
          <a class="dark-grey-text" href="http://www.grimsbygolfclub.co.uk/" style="color: black;">Grimsby Golf Club</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          Grimsby Golf Club</p>
        <p>
          Little Coates Road</p>
        <p>
          Grimsby</p>
        <p>
          DN34 4LU</p>
          <p>
            01472 342630</p>
          <p>
            catering@grimsbygolfclub.co.uk</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div style="background-color: #ffffff;">
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
      <a class="dark-grey-text" style="color: black;"> Mark Titchen</a>
    </div>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>

</html>
