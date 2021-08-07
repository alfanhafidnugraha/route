<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Tugas Laravel</title>
    <nav class="navbar navbar-expand bg-white sticky-top text-right">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="/galeri" class="nav-link text-dark"><strong>Galeri Foto</strong></a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/profil" class="nav-link text-dark"><strong>Profil</strong></a></li>
        </ul>
    </nav>

    <style>
        .carousel-inner img{
            width: 1500px;
            height: 500px;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <br><br><br><br>
        <h1 class="text-white text-center">Halaman Beranda</h1>
        <br>

    </div>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1.jpg" alt="Los Angeles">
          </div>
          <div class="carousel-item">
            <img src="2.jpg" alt="Chicago" >
          </div>
          <div class="carousel-item">
            <img src="3.jpg" alt="New York">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        <br><br><br>
      </div>
</body>
</html>