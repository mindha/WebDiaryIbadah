<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Weather and News</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Diary Ibadah</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <div class="site-heading">
              <h1>Weather</h1>
              <span class="subheading">Update Cuaca Terkini</span>
            <form class="form-group" method="GET" action="home.php">
                <div class="form-group">
                  
                </div>
                <div class="form-group">
                  
                  <input type="text" class="form-control" id="place" name="q" placeholder="Masukkan Kota dan Negara">
                </div>
                <center>
                  <button type="submit" class="btn btn-primary" name="submit">Search</button>  
                </center>
                
              </form>  
            </div>

            <!-- Hasil -->
            <?php
              error_reporting(0);
              $get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
              date_default_timezone_set($get['timezone']);
              $city = $_GET['q'];
               $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=72f74e9012ef870f4d380e9866384c63";
               $data = json_decode(file_get_contents($string),true);
               
               $temp = $data['main']['temp'];
               
               $icon = $data['weather'][0]['icon'];
               $visibility = $data['visibility'];
               $visibilitykm = $visibility / 1000;
               $country =  "<center><h2 class='post-title'>".$data['name'].",".$data['sys']['country']."</h2></center>";
               
               $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
               $desc = "<p class='post-meta'>".$data['weather'][0]['description']."</p>";
               
               $temperature =  "<center><p class='post-meta'>Temp:".$temp."°C<br>";
               $clouds = "Clouds:".$data['clouds']['all']."%<br>";
               $humidity = "Humidity:".$data['main']['humidity']."%<br>";
               $windspeed = "Wind Speed:".$data['wind']['speed']."m/s<br>";
               $pressure = "Pressure:".$data['main']['pressure']."hpa<br>";
               $visibility =  "Visibility:".$visibilitykm."Km<br>";
               $sunrise = "Sunrise:".date('h:i A', $data['sys']['sunrise'])."<br>";
               $sunset = "Sunset:".date('h:i A', $data['sys']['sunset'])."</p></center>";
               
               
              ?>

  

            
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<!--Khusus Bagian Weather -->
          <div class="post-preview">
           
              <?php 
                  echo $country;
                  echo $logo; 
                  echo "<center><h2>".$desc."</h1></center>";
              ?>
               <?php echo $temperature; ?>
                    <?php echo $clouds; ?>
                    <?php echo $humidity; ?>
                    <?php echo $$windspeed; ?>
                    <?php echo $pressure; ?>
                    <?php echo $$visibility; ?>
                    <?php echo $sunrise; ?>
                    <?php echo $sunset; ?>
          
            
          </div>
          <hr>
<!-- End Weather -->

          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
              <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2017</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://github.com/mindha/WebDiaryIbadah">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Kelompok 4 EAI SI3803 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
