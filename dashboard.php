<?php
session_start();


?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="pingle_css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <title>Welcome <?php echo $_SESSION['username'] ?></title>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top full_opacity">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand head" id = "brand" href="landing_page.html">CommeHub</a>
        </div>

          <ul class="nav navbar-nav navbar-right" id="search">
            <li><div class="input-group" style="width:40vw;margin-top:10px;">
              <input type="text" class="form-control" placeholder="Search for anything...">
              <span class="input-group-btn">
                <button class="btn btn-success" type="button" style="padding:8px;"><img src="pingle/images/search-magnifier-interface-symbol(1).png" alt=""></button>
              </span>
            </div></li>
            <li><a href="flash_deals.html">Flash Deals</a></li>
            <li><a href="Active_votes.html">Active Votes</a></li>
            <li><a href="#"><img src="project_images\notifications-button (1).png" alt=""></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="project_images\1021873-dark-angel-wallpapers-1920x1080-ios.jpg" alt="avatar" class="avatar"></a>
              <ul class="dropdown-menu">
                <li><a id="profile" href="#">Profile</a></li>
                <li><a id="profile" href="#">Saved</a></li>
                <li><a id="profile" href="#">Transactions</a></li>
                <li role="separator" class="divider"></li>
                <li><a id="profile" href="#">Settings</a></li>
                <li><a id="profile" href="#">Help Center</a></li>
                <li><a id="profile" href="#">Careers</a></li>
                <li role="separator" class="divider"></li>
                <li><a id="profile" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>


        <!-- Collect the nav links, forms, and other content for toggling -->
      </div><!-- /.container-fluid -->
    </nav>

    <script src="http://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>  <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="transparent_to_solid_navbar.js"></script>
    <script src="animated_arrow.js"></script>
    <script src="back_to_top.js"></script>



  </body>
</html>
