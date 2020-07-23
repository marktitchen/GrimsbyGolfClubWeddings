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
  <title>Grimsby Golf Club Weddings | Pricing Calculator | Wedding Venue Grimsby | wedding venue in Grimsby</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/1.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

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
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="pricing-Calculator.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Calculator <span class="sr-only">(current)</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#day-calculator">Day Calculator</a>
            <a class="dropdown-item" href="#evening-calculator">Evening Calculator</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enquiries.php">Enquiries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
      </ul>
  </nav>

  <!-- Header Image -->
  <img src="pictures/header-images/picture4.png" alt="Grimsby Golf Club Weddings" style="width:100%">

  <!-- Day Calculator -->
  <section id="day-calculator">
    <div class="container-fluid" style="background-color: #ffffff;">
      <h1>Calculator</h1>
      <br />
      <form>
        <div class="form-group">
          <h2>Day Calculator</h2>
          <br />
          <label for="exampleFormControlInput1">Number of guests attending wedding breakfast:</label>
          <input type="number" class="form-control" id="noOfGuestsWeddingBreakfast" placeholder="100">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select your wedding breakfast menu:</label>
          <select class="form-control" id="choiceWeddingBreakfastMenu">
            <option value="0">Not Selected</option>
            <option value="1">1 Course </option>
            <option value="2">2 Course </option>
            <option value="3">3 Course </option>
            <option value="4">Buffet </option>
            <option value="5">Alternative Buffet</option>
            <option value="6">BBQ </option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Do you wish to have a civil ceremony?</label>
          <select class="form-control" id="choiceCivilCeremony">
            <option value="0">Not Selected</option>
            <option value="1">Yes | £75 fee</option>
            <option value="2">No</option>
          </select>
        </div>
        <button type="button" onclick="dayFunction()" class="btn btn-primary">CALCULATE</button>
      </form>
    </div>
    <div class="container-fluid" style="background-color: #ffffff;">
      <p id="day"></p>
    </div>
    </select>

    <script>
      function dayFunction() {

        var roomHire = 700;
        var choicecivilceremony = document.getElementById("choiceCivilCeremony").value;

        switch (choicecivilceremony) {
          case "0":
            choiceCivilCeremonyFee = 0;
            break;
          case "1":
            choiceCivilCeremonyFee = 75;
            break;
          case "2":
            choiceCivilCeremonyFee = 0;
            break;
        }

        var choiceweddingbreakfastmenu = document.getElementById("choiceWeddingBreakfastMenu").value;

        switch (choiceweddingbreakfastmenu) {
          case "0":
            // Not selected
            lowPriceWeddingBreakfastPerHead = 0;
            highPriceWeddingBreakfastPerHead = 0;
            break;
          case "1":
            // 1 Course
            lowPriceWeddingBreakfastPerHead = 13.50;
            highPriceWeddingBreakfastPerHead = 14.95;

            break;
          case "2":
            // 2 Course
            lowPriceWeddingBreakfastPerHead = 17.50;
            highPriceWeddingBreakfastPerHead = 21.50;
            break;
          case "3":
            // 3 Course
            lowPriceWeddingBreakfastPerHead = 23.50;
            highPriceWeddingBreakfastPerHead = 25.95;
            break;

          case "4":
            // Buffet
            lowPriceWeddingBreakfastPerHead = 8.95;
            highPriceWeddingBreakfastPerHead = 11.50;
            break;
          case "5":
            // Alternative Buffet
            lowPriceWeddingBreakfastPerHead = 4.75;
            highPriceWeddingBreakfastPerHead = 13.95;
            break;
          case "6":
            // BBQ
            lowPriceWeddingBreakfastPerHead = 14.50;
            highPriceWeddingBreakfastPerHead = 16.95;
            break;

        }

        var noOfGuestsWeddingBreakfast = document.getElementById("noOfGuestsWeddingBreakfast").value;
        var totalLowWeddingBreakfast = lowPriceWeddingBreakfastPerHead * noOfGuestsWeddingBreakfast;
        var totalHigWeddingBreakfast = highPriceWeddingBreakfastPerHead * noOfGuestsWeddingBreakfast;
        var totalLowCost = totalLowWeddingBreakfast + roomHire + choiceCivilCeremonyFee;
        var totalHighCost = totalHigWeddingBreakfast + roomHire + choiceCivilCeremonyFee;

        document.getElementById("day").innerHTML =

          /*"Civil ceremony fee: £" + choiceCivilCeremonyFee + "<br>" +
          "Room hire: £" + roomHire + "<br>" +
          "No of guests: " + noOfGuestsWeddingBreakfast + "<br>" +
          "Low Cost per head: £ " + lowPriceWeddingBreakfastPerHead + "<br>" +
          "High Cost per head: £ " + highPriceWeddingBreakfastPerHead + "<br>" +
          "Low Total (eveything) £ " + totalLowCost + "<br>" +
          "Hight Total (everything) £ " + totalHighCost + "<br>" +*/
          "<h2>" + "The total will cost between £" + totalLowCost + " and £" + totalHighCost + "</h2>";

      }
    </script>

    <!-- Evening Calculator -->
    <section id="evening-calculator">
      <div class="container-fluid" style="background-color: #cbf3f0;">
        <form>
          <div class="form-group">
            <h2>Evening Calculator</h2>
            <br />
            <label for="exampleFormControlInput1">Number of guests evening buffet:</label>
            <input type="number" class="form-control" id="noOfGuestsAttendingBuffet" placeholder="100">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select your chosen buffet menu:</label>
            <select class="form-control" id="mySelect">
              <option value="0">Not Selected</option>
              <option value="1">Buffet </option>
              <option value="2">Alternative Buffet</option>
              <option value="3">BBQ </option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Do you wish to hire our resident DJ? (7pm till midnight)?</label>
            <select class="form-control" id="choiceHireDJ">
              <option value="0">Not Selected</option>
              <option value="1">Yes | £225 fee</option>
              <option value="2">No</option>
            </select>
          </div>
          <!--<button type="button" onclick="myFunction()" class="btn">CALCULATE</button>-->
          <button type="button" onclick="eveningFunction()" class="btn btn-primary">CALCULATE</button>
        </form>
      </div>
      <div class="container-fluid" style="background-color: #cbf3f0;">
        <p id="evening"></p>
      </div>

      </select>

      <script>
        function eveningFunction() {

          var roomHire = 400;
          var choicehiredj = document.getElementById("choiceHireDJ").value;

          switch (choicehiredj) {
            case "0":
              choiceHireDJFee = 0;
              break;
            case "1":
              choiceHireDJFee = 225;
              break;
            case "2":
              choiceHireDJFee = 0;
              break;
          }

          var day = document.getElementById("mySelect").value;

          switch (day) {
            case "0":
              // "Not Selected";
              lowEveningFoodOption = 0;
              highEveningFoodOption = 0;

              break;
            case "1":
              // Buffet
              lowEveningFoodOption = 8.95;
              highEveningFoodOption = 11.50;
              break;
            case "2":
              // Alternative Buffet
              lowEveningFoodOption = 4.75;
              highEveningFoodOption = 13.95;
              break;
            case "3":
              // BBQ
              lowEveningFoodOption = 14.50;
              highEveningFoodOption = 16.95;
              break;
          }

          var menuOption = document.getElementById("mySelect").value;
          var noOfGuestsAttendingBuffet = document.getElementById("noOfGuestsAttendingBuffet").value;
          var totalLowEveningFoodOption = lowEveningFoodOption * noOfGuestsAttendingBuffet;
          var totalHighEveningFoodOption = highEveningFoodOption * noOfGuestsAttendingBuffet;
          var totalLowCost = totalLowEveningFoodOption + roomHire + choiceHireDJFee;
          var totalHighCost = totalHighEveningFoodOption + roomHire + choiceHireDJFee;

          document.getElementById("evening").innerHTML =

            /*"Civil ceremony fee: £" + choiceCivilCeremonyFee + "<br>" +
            "Room hire: £" + roomHire + "<br>" +
            "DJ fee: £" + choiceHireDJFee + "<br>" +
            "Low eveing option per head: £" + lowEveningFoodOption + "<br>" +
            "High evening option per head £" + highEveningFoodOption + "<br>" +
            "No of guests: " + noOfGuestsAttendingBuffet + "<br>" +
            "Total Low: £" +  totalLowEveningFoodOption + "<br>" +
            "Total High: £" +  totalHighEveningFoodOption  + "<br>" +
            "Total buffet cost: £" + totalBuffetCost + "<br>" +*/
            "<h2>" + "The total will cost between £" + totalLowCost + " and £" + totalHighCost + "</h2>";
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
