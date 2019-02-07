<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">
    <script type="text/javascript" src="<?=base_url()?>asset/js/jquery.js">
    </script>
    <script type="text/javascript" src="<?=base_url()?>asset/js/bootstrap.js">
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
      <!-- <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-home"></span>
</button>
    </div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=base_url()?>index.php/Dashboard/">Home</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/kontak">Kontak</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/profil">Profil</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/trending">Trending</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/booking">Booking</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/agenda">Agenda</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tampilmodal" data-toggle="modal">Logout</a></a></li>
        <li><a href="#formm" data-toggle="modal">Login</a></a></li>
        </ul>
        <div id="formm" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Login</h4>
              </div>
              <form class="form-horizontal" role="form">
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
            </div>
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <!-- <button type="submit" class="btn btn-default">Sign in</button> -->
            </div>
            </div>
            </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sign In</button>
                <!-- <button type="button" class="btn btn-primary">Sign In</button> -->
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="row">
      <div class="col-md-12" style="background:#ccccff;height:600px width:100%">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?=base_url()?>asset/18.jpg" alt="..."style="height:600px;width:100%">
      <div class="carousel-caption">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url()?>asset/12.jpg" alt="..." style="height:600px;width:100%">
      <div class="carousel-caption">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url()?>asset/16.jpg" alt="..." style="height:600px;width:100%">
      <div class="carousel-caption">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>



      </div>
    </div>


    <!-- <div class="row">
      <div class="col-md-2" style="background:#9999ff;height:1000px">
          <p></p>



</div>
      </div> -->
      <div class="col-md-10" style="background:#e6e6ff;height:950px">
<?php
$this->load->view($konten);
 ?>
      </div>

      <div class="col-md-2" style="background:#ccccff;height:950px">
        <p></p>
        <div class="panel-group" id="accordion">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Chicago
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Chicago, on Lake Michigan in Illinois, is among the largest cities in the U.S. Famed for its bold architecture, it has a skyline punctuated by skyscrapers such as the iconic John Hancock Center, 1,451-ft. Willis Tower (formerly the Sears Tower) and the neo-Gothic Tribune Tower. The city is also renowned for its museums, including the Art Institute of Chicago with its noted Impressionist and Post-Impressionist works.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          NEW YORK CITY
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
      New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that’s among the world’s major commercial, financial and cultural centers. Its iconic sites include skyscrapers such as the Empire State Building and sprawling Central Park. Broadway theater is staged in neon-lit Times Square.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          CHINA
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
      China is a populous nation in East Asia whose vast landscape encompasses grassland, desert, mountains, lakes, rivers and more than 14,000km of coastline. Capital Beijing mixes modern architecture with historic sites such as the Forbidden City palace complex and Tiananmen Square. Shanghai is a skyscraper-studded global financial center. The iconic Great Wall of China runs east-west across the country's north.
      </div>
    </div>
  </div>
  <p></p>
  <p></p>


        <!-- 4:3 aspect ratio -->
        <!-- <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="tokyo.mp4"></iframe>
        </div> -->

      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="background:#ccccff;height:100px">
<div class="text-center">
  <h5>Privacy Policy Classifications</h5>
  <h5>© Tour/Adventure. All rights reserved. © Tour Based on "Lalalaland" works, by Alfina Dhona Pratiwi, Tour Entertainment</h5>

</div>
      </div>
    </div>



    <div id="tampilmodal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Logout</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure for exit?&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-primary">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  </body>
</html>
