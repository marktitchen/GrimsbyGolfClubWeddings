<!doctype html>
<html lang="en">

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
  <title>Grimsby Golf Club Weddings | Gallery | Wedding Venue Grimsby | wedding venue in Grimsby</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/1.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <style>
    * {
      box-sizing: border-box;
    }

    .row {
      margin: 10px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row>.column {
      padding: 8px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      display: none;
      /* Hide all elements by default */
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }

    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }

    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: white;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #ddd;
    }

    .btn.active {
      background-color: #666;
      color: white;
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }
  </style>



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
          <a class="nav-link" href="gallery.php">Gallery<span class="sr-only">(current)</span></a>
        </li>
      </ul>
  </nav>


  <!-- Header Image -->
  <img src="pictures/header-images/survey.png" alt="Grimsby Golf Club Weddings" style="width:100%">

  <div class="container-fluid" style="background-color: #ffffff;">
    <h1>Gallery</h1>
    <br />

    <!-- please not this gallery grid is not my original work and i have modified it to suit my needs
      here is my source: https://www.w3schools.com/howto/howto_js_portfolio_filter.asp-->
    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('outside')"> Outside</button>
      <button class="btn" onclick="filterSelection('inside')"> Inside</button>
      <button class="btn" onclick="filterSelection('food')"> Food</button>
    </div>

    <!-- Portfolio Gallery Grid -->
    <div class="row">
      <div class="column inside">
        <div class="content">
          <img src="pictures/inside/inside6.png" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column inside">
        <div class="content">
          <img src="pictures/inside/inside2.png" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column inside">
        <div class="content">
          <img src="pictures/inside/inside3.png" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column outside">
        <div class="content">
          <img src="pictures/outside/outside4.jpg" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column outside">
        <div class="content">
          <img src="pictures/outside/outside3.jpg" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column outside">
        <div class="content">
          <img src="pictures/outside/outside6.jpg" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>

      <div class="column food">
        <div class="content">
          <img src="pictures/food/picture1.jpg" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column food">
        <div class="content">
          <img src="pictures/food/picture4.jpg" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <div class="column food">
        <div class="content">
          <img src="pictures/food/picture6.jpg" alt="Grimsby Golf Club Weddings" style="width:100%">
        </div>
      </div>
      <!-- END GRID -->
    </div>
  </div>


  <script>
    filterSelection("all")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>

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

  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>
