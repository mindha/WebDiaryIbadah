<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <?php

        $url = 'https://time.siswadi.com/pray/Bandung';
        $data = file_get_contents($url);
        $content = json_decode($data, true);
    ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Jadwal Sholat</h1>
              <span class="subheading">This is what I do.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php
            print "<p align='center'>".$content['location']['address']."</p>";
          ?>
          Sholat Fardhu
          <table align="center" cellpadding="10px" border="2" margin="10px">
            <tr>
              <th align='center'>Fajr</th>
              <th align='center'>Dhuhr</th>
              <th align='center'>Asr</th>
              <th align='center'>Maghrib</th>
              <th align='center'>Isha</th>
            </tr>
            <?php
              print "<tr>";
              print "<td align='center'>".$content['data']['Fajr']."</td>";
              print "<td align='center'>".$content['data']['Dhuhr']."</td>";
              print "<td align='center'>".$content['data']['Asr']."</td>";
              print "<td align='center'>".$content['data']['Maghrib']."</td>";
              print "<td align='center'>".$content['data']['Isha']."</td>";
              print "</tr>";
            ?>
          </table>
          </br>
          Jadwal Lainya
          <table align="text-center" cellpadding="20px" border="2">
            <tr>
              <th align="center">Dhuha</th>
              <th align="center">Matahari Tenggelam</th>
              <th align="center">Sepertiga Malam</th>
              <th align="center">Tengah Malam</th>
              <th align="center">Duapertiga Malam</th>
            </tr>
            <?php
              print "<tr>";
              print "<td align='center'>".$content['data']['Sunrise']."</td>";
              print "<td align='center'>".$content['data']['Sunset']."</td>";
              print "<td align='center'>".$content['data']['SepertigaMalam']."</td>";
              print "<td align='center'>".$content['data']['TengahMalam']."</td>";
              print "<td align='center'>".$content['data']['DuapertigaMalam']."</td>";
              print "</tr>";
            ?>
          </table>
          </br></br>
          <p align="center">Atau cari Jadwal berdasarkan lokasi yang Anda inginkan :</p>
          <form class="form-group" method="GET" action="home.php">
                <div class="form-group">
                  
                </div>
                <div class="form-group">
                  
                  <input type="text" class="form-control" id="place" name="q" placeholder="Masukkan Kota">
                </div>
                <center>
                  <button type="submit" class="btn btn-primary" name="submit">Search</button>  
                </center>
                
          </form>
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
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
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
