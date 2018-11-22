<?php

#require 'posts.php';










?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="./pingle/pingle_css.css">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->


    <title>CommeHub - Home</title>
  </head>
  <!-- <style>
    .head{
      color: gold;
    }
    .el1{
      color: gold;
    }
    .el2{
      color: gold;
    }
    .form1{
      border-color: gold;
      border-width: 2px;
    }
  </style> -->
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar head"></span>
            <span class="icon-bar head"></span>
            <span class="icon-bar head"></span>
          </button>
          <a class="navbar-brand head" id = "brand" href="#">CommeHub</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- <li class="active el1"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
            <!-- <li><a href="#">Link</a></li> -->
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <!-- <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control form1" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default form1">Submit</button>
          </form> -->
          <ul  class="nav navbar-nav navbar-right">
            <li><a href="flash_deals.html">Flash Deals</a></li>
            <li><a href="Active_votes.html">Active Votes</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="login.html" id= "login">Login</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="contentDiv">
      <div class="jumbotron jumbotron-fluid" id = "first_jumbo">
        <div class="container">
          <h1 class="display-2">Fluid jumbotron.</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          <button class="btn btn-outline-danger">This is a Button</button>
        </div>
          <a href="#first_vote"><img class="arrow" src="./pingle/images/angle-arrow-down(4).png" /></a>

      </div>
    </div>




    <div class="container">
      <div class="jumbotron shard" id = "first_vote">
        <div class="row">
          <a href="/vote/Samsung-970-EVO-Massdrop">
            <div>
              <h4>Samsung 970 EVO Massdrop????</h4>

            <div class="poll_card__author"><span>– </span>by
              <a class="user__name" href="/profile/Nerdtality/polls"><strong>Nerdtality</strong></a>
            </div>

            </div>
              <div class="col-lg-3 col-md-3 col-sm-3">

                      <div>

                                <img class = " img-responsive" alt="Samsung 970 EVO Massdrop????" src="https://massdrop-s3.imgix.net/img_poll/OpygxvaeQSiA4CNcrPM8_20-147-691-V01.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=1" srcset="https://massdrop-s3.imgix.net/img_poll/OpygxvaeQSiA4CNcrPM8_20-147-691-V01.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=1 1x, https://massdrop-s3.imgix.net/img_poll/OpygxvaeQSiA4CNcrPM8_20-147-691-V01.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=2 2x, https://massdrop-s3.imgix.net/img_poll/OpygxvaeQSiA4CNcrPM8_20-147-691-V01.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=3 3x" class="responsive poll_card__img">

                              <div ></div>
                              <div>
                              </div>
                      </div>
                    </div>


              <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="poll_card__options_heading"><h4>Options</h4></div>
                <div class="poll_card__votes">


                    <div class="first">
                      <div>
                      <div class="poll_card__product_name"><strong class="poll_card__option_position">1st</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_first">950</strong> votes</h5></div>
                      </div>
                      <div class="poll_card__product_name">SAMSUNG 970 EVO M.2 1TB</div>
                      <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success first" id = "first_vote" role="progressbar" style="width:" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>


                    <div class="second">
                      <div>
                      <div class="poll_card__product_name"><strong class="poll_card__option_position">2nd</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_second">1574</strong> votes</h5></div>
                      </div>
                      <div class="poll_card__product_name">SAMSUNG 970 EVO M.2 500GB</div>
                      <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success second" id = "first_vote" role="progressbar" style="width:" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>


                    <div class="third">
                      <div>
                      <div class="poll_card__product_name"><strong class="poll_card__option_position">3rd</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_third">172</strong> votes</h5></div>
                      </div>
                      <div class="poll_card__product_name">SAMSUNG 970 EVO M.2 250GB</div>
                      <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-success third" id = "first_vote" role="progressbar" style="width:" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

              <button type="button" name="button"><span class="poll_card__more_options_button button button--large link_button--primary">+1 Other Option</span></button>

            </div>
          </div>
          </a>
        </div>
      </div>
    </div>


    <div class="container">


      <!-- <div class="accordion" id="accordionExample">
  <div class="card">
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel-footer" id="headingOne">
    <h5 class="mb-0">
      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Collapsible Group Item #1
      </button>
    </h5>
  </div>



</div> -->

      <!-- <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt t labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1> -->
    </div>
    <div class="panel panel-default">
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
        <div class="panel-body">
          <div class="container">
            <div class="jumbotron shard" id = "second_vote">
              <div class="row">
                <a href="/vote/Gerforce-GTX-1080-TI-for-the-gamers">
                  <div>
                    <h4>Gerforce GTX 1080 TI for the gamers!</h4>

                  <div class="poll_card__author"><span>– </span>by
                    <a class="user__name" href="/profile/FuzzFrrek/polls"><strong>FuzzFrrek</strong></a>
                  </div>

                  </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">

                            <div>

                                      <img class = " img-responsive" alt="Gerforce GTX 1080 TI for the gamers" <img alt="Gerforce GTX 1080 TI for the gamers!" src="https://massdrop-s3.imgix.net/img_poll/9w5ywnI9T0yLrQZSR6mj_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=1" srcset="https://massdrop-s3.imgix.net/img_poll/9w5ywnI9T0yLrQZSR6mj_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=1 1x, https://massdrop-s3.imgix.net/img_poll/9w5ywnI9T0yLrQZSR6mj_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=2 2x, https://massdrop-s3.imgix.net/img_poll/9w5ywnI9T0yLrQZSR6mj_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=3 3x" class="responsive poll_card__img">

                                    <div ></div>
                                    <div>
                                    </div>
                            </div>
                          </div>


                    <div class="col-lg-9 col-md-9 col-sm-9">
                      <div class="poll_card__options_heading"><h4>Options</h4></div>
                      <div class="poll_card__votes">


                          <div class="first">
                            <div>
                            <div class="poll_card__product_name"><strong class="poll_card__option_position">1st</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_first">500</strong> votes</h5></div>
                            </div>
                            <div class="poll_card__product_name">EVGA GeForce GTX 1080 Ti FTW3 GAMING, 11GB GDDR5X, iCX Technology - 9 Thermal Se</div>
                            <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                            <div class="progress" style="height: 10px;">
                              <div class="progress-bar progress-bar-success first" id = "second_vote" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>


                          <div class="second">
                            <div class="poll_card__product_name"><strong class="poll_card__option_position">2nd</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_second">815</strong> votes</h5></div>
                            <div class="poll_card__product_name">ASUS ROG-STRIX-GTX1080TI-O11G-GAMING GeForce 11GB OC Edition VR Ready 5K HD Gami</div>
                            <div class="progress" style="height: 10px;">
                              <div class="progress-bar progress-bar-success second" id = "second_vote" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>


                          <div class="third">
                            <div>
                            <div class="poll_card__product_name"><strong class="poll_card__option_position">3rd</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_third">149</strong> votes</h5></div>
                            </div>
                            <div class="poll_card__product_name">MSI GTX 1080 TI DUKE 11G OC Graphic Cards: Amazon.ca: Computers & Tablets</div>
                            <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                            <div class="progress" style="height: 10px;">
                              <div class="progress-bar progress-bar-success third" id="second_vote" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                    <button type="button" name="button"><span class="poll_card__more_options_button button button--large link_button--primary">+1 Other Option</span></button>

                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>


          <div class="container">
            <div class="jumbotron shard" id = "third_vote">
              <div class="row">
                <a href="/vote/The-Last-Watch-You-ll-Ever-Own">
                  <div>
                    <h4>The Last Watch You'll Ever Own</h4>

                  <div class="poll_card__author"><span>– </span>by
                    <a class="user__name" href="/profile/Nerdtality/polls"><strong>a community member</strong></a>
                  </div>

                  </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">

                            <div>

                                      <img alt="The Last Watch You'll Ever Own" src="https://massdrop-s3.imgix.net/img_poll/mNbIFKwCQxPYRj3mi0aw_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=1" srcset="https://massdrop-s3.imgix.net/img_poll/mNbIFKwCQxPYRj3mi0aw_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=1 1x, https://massdrop-s3.imgix.net/img_poll/mNbIFKwCQxPYRj3mi0aw_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=2 2x, https://massdrop-s3.imgix.net/img_poll/mNbIFKwCQxPYRj3mi0aw_md_img.jpg?auto=format&amp;fm=jpg&amp;fit=crop&amp;w=235&amp;h=235&amp;dpr=3 3x" class="responsive poll_card__img">
                                    <div ></div>
                                    <div>
                                    </div>
                            </div>
                          </div>


                    <div class="col-lg-9 col-md-9 col-sm-9">
                      <div class="poll_card__options_heading"><h4>Options</h4></div>
                      <div class="poll_card__votes">


                          <div class="first">
                            <div>
                            <div class="poll_card__product_name"><strong class="poll_card__option_position">1st</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_first">1095</strong> votes</h5></div>
                            </div>
                            <div class="poll_card__product_name">Rolex Submariner Date Watch: Oystersteel - 116610LN</div>
                            <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                            <div class="progress" style="height: 10px;">
                              <div class="progress-bar progress-bar-success first" id = "third_vote" role="progressbar" style="width:" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>


                          <div class="second">
                            <div>
                            <div class="poll_card__product_name"><strong class="poll_card__option_position">2nd</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_second">823</strong> votes</h5></div>
                            </div>
                            <div class="poll_card__product_name">Omega Speedmaster Moonwatch Professional Chronograph 42 mm - 311.30.42.30.01.006</div>
                            <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                            <div class="progress" style="height: 10px;">
                              <div class="progress-bar progress-bar-success second" id = "third_vote"  role="progressbar" style="width:" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>


                          <div class="third">
                            <div>
                            <div class="poll_card__product_name"><strong class="poll_card__option_position">3rd</strong><h5 class="poll_card__vote_count"><strong class="poll_card__vote_count_number_third">406</strong> votes</h5></div>
                            </div>
                            <div class="poll_card__product_name">Rolex GMT-Master II Watch: 18 ct white gold – 116719BLRO</div>
                            <div class="wd_spacerSize--5 d_spacerSize--5 wt_spacerSize--5 nt_spacerSize--5 p_spacerSize--5"></div>
                            <div class="progress" style="height: 10px;">
                              <div class="progress-bar progress-bar-success third" id = "third_vote" role="progressbar" style="width:" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                    <button type="button" name="button"><span class="poll_card__more_options_button button button--large link_button--primary">+1 Other Option</span></button>

                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
      <a class="no_underline" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      <div class="panel-footer" id="headingOne">
        <h4 class="panel-title">
            Click to see more votes
        </h4>
      </div>
      </a>
    </div>
    <div class="jumbotron" style="padding:20px;">
      <h3 style = "text-align:center;"><strong>How it works</strong></h3>
      <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>


    <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
      <!-- Indicators -->
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="">
                    <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
                  </div>
                  <hr id="testimonial_divider">
                  <div class="" style = "text-align:center;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                    <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                    <br>
                    <br>
                    <br>
                    <br>
                  </div>
                </div>

            <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="Los Angeles"> -->

          <div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="">
                  <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
                </div>
                <hr id="testimonial_divider">
                <div class="" style = "text-align:center;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                  <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
            <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="Chicago"> -->
          </div>

          <div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="">
                  <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
                </div>
                <hr id="testimonial_divider">
                <div class=""  style = "text-align:center;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                  <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
            <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="New York"> -->
           </div>
          </div>
        </div>
        </div>


        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="">
                  <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
                </div>
                <hr id="testimonial_divider">
                <div class="" style = "text-align:center;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                  <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
              </div>

          <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="Los Angeles"> -->

        <div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="">
                <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
              </div>
              <hr id="testimonial_divider">
              <div class="" style = "text-align:center;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="Chicago"> -->
        </div>

        <div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="">
                <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
              </div>
              <hr id="testimonial_divider">
              <div class=""  style = "text-align:center;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="New York"> -->
         </div>
        </div>
      </div>
      </div>




      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="">
                <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
              </div>
              <hr id="testimonial_divider">
              <div class="" style = "text-align:center;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
                <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>

        <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="Los Angeles"> -->

      <div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="">
              <img src="pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
            </div>
            <hr id="testimonial_divider">
            <div class="" style = "text-align:center;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
              <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="Chicago"> -->
      </div>

      <div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="">
              <img src="./pingle/images/wJmAVDG-dark-wolf-wallpaper.jpg" id = "testimonial_image" class="img-responsive img-default" alt="Responsive image">
            </div>
            <hr id="testimonial_divider">
            <div class=""  style = "text-align:center;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h4 style="font-weight:bolder;color:rgba(20,182,173, 1);">Miss Jane Doe</h4>
              <h5 style="font-weight:bolder;color:rgba(20,182,173, 1);"><em>Single Mum</em></h5>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        <!-- <img src="wJmAVDG-dark-wolf-wallpaper.jpg" alt="New York"> -->
       </div>
      </div>
    </div>
    </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <footer>
      <div class="container">
        <div class="row" style="text-align:center;font-weight:bolder;color:white;padding:auto;">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <br>
            <a href="about.html" style="color:white;text-decoration:none;"><h4 >Meet the team!</h4></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <br>
            <h4>contact us</h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <br>
            <h4>we are hiring!</h4>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="facebook-logo-in-circular-button-outlined-social-symbol.png" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="twitter-circular-button.png" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="instagram.png" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="social-linkedin-circular-button.png" alt="">
          </div>

        </div>
        <a href=".navbar" class="back-to-top"><img class="img-responsive" src="arrow-in-circle-point-to-up.png" alt=""></a>
      </div>
      <br>
    </footer>
    <footer
    id="all_rights_reserved"><h5>© 2018 CommeHub All rights reserved.</h5>
    </footer>
    <!-- <a href="#" class="back-to-top"><img src="arrow-in-circle-point-to-up.png" alt=""></a> -->
    <script src="http://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>  <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="./pingle/js/transparent_to_solid_navbar.js"></script>
    <script src="./pingle/js/animated_arrow.js"></script>
    <script src="./pingle/js/back_to_top.js"></script>

  </body>
</html>