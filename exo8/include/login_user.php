<?php
  include('connect.php');
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Overpass+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>login</title>
  </head>


  <body class="body_bg_img img-responsive">

      <?php include('navbar.php')?>

         <!--header div-->
         <div class="container-fluid simple">
           <section class="row simple">
              <div class="col-md-12 text-center">
                <div class="bg_white">
                  <?php include("login.php") ?>
                </div>
              </div>
            </section>
         </div>


          <!--script import-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    </body>
</html>
