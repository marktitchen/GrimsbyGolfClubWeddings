<?php
session_start();
?>
<!DOCTYPE html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

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
  <title>Grimsby Golf Club Weddings | Wedding Venue Grimsby | wedding venue in Grimsby</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/1.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>

<body>

  <?php include 'navigation.php';?>
  <div class="header"> <img src="pictures/header-images/outside4.png" class="responsiveHeaderImage"> </div>

  <h2> Thank you for your feedback! </h2>

  <?php include 'footer.php';?>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>


  <?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>

</html>
