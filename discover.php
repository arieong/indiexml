<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js">
<?
include("db.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Music Station</title>
    <meta name="description" content="">
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- Le fav and touch icons -->
</head>
<body>
<div id="wrapper">
        <?php if($_SESSION['username'] != null){echo '<header class="navbar navbar-fixed-top">';
            echo '<div class="navbar-inner">';
            echo    '<div class="container">';
            echo      '<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">';
            echo          '<span class="icon-bar"></span>';
            echo           '<span class="icon-bar"></span>';
            echo           '<span class="icon-bar"></span>';
            echo      '</a>';
            echo        '<a id="logo" class="pull-left" href="index.html"></a>';
            echo       '<div class="nav-collapse collapse pull-right">';
            echo           '<ul class="nav">';
            echo              '<li><a href="index.php">Home</a></li>';
            echo              '<li><a href="profile.php">Profile</a></li>';
            echo                '<li class="login"><a href="logout.php">Logout</a></li>';
            echo            '</ul>'  ;  
            echo  '</div>';
            echo   '</div>';
            echo '</div>';
        echo '</header>';} 
        else 
            {echo '<header class="navbar navbar-fixed-top">';
            echo '<div class="navbar-inner">';
            echo    '<div class="container">';
            echo      '<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">';
            echo          '<span class="icon-bar"></span>';
            echo           '<span class="icon-bar"></span>';
            echo           '<span class="icon-bar"></span>';
            echo      '</a>';
            echo        '<a id="logo" class="pull-left" href="index.html"></a>';
            echo       '<div class="nav-collapse collapse pull-right">';
            echo           '<ul class="nav">';
            echo              '<li><a href="index.php">Home</a></li>';
            echo               '<li class="login"><a data-toggle ="modal" href="#loginForm">Login</a></li>';
            echo                '<li><a data-toggle ="modal" href="#regForm">Register</a></li>';
            echo            '</ul>'  ;  
            echo  '</div>';
            echo   '</div>';
            echo '</div>';
        echo '</header>';};?>


        <div id="item_box_list" class="index_list" style="position:relative;height:2577px;">
          <div class="item_box music_item repost" style="position: absolute;left:0px; top:0px;">

            <div class="square">
              <div class="item_img">
              <img class="lazy" src="">
              </div>
            </div>

            <div class="item_content">
              <h4>yyyyyyyeeeeeesss</h4>
              <h5>
              <small>by</small>
              MAI
              <small>one day ago</small>
              </h5>
            </div>
           </div>

           <div class="item_box music_item repost" style="position: absolute;left:335px; top:0px;">

            <div class="square">
              <div class="item_img">
              <img class="lazy" src="">
              </div>
            </div>

            <div class="item_content">
              <h4>yyyyyyyeeeeeesssuiwybefyuwbfyuibdwuiyfbdyuwi</h4>
              <h5>
              <small>by</small>
              MAI
              <small>one day ago</small>
              </h5>
            </div>
           </div>

           <div class="item_box music_item repost" style="position: absolute;left:670px; top:0px;">

            <div class="square">
              <div class="item_img">
              <img class="lazy" src="">
              </div>
            </div>

            <div class="item_content">
              <h4>yyyyyyyeeeeeesss</h4>
              <h5>
              <small>by</small>
              MAI
              <small>one day ago</small>
              </h5>
            </div>
           </div>
        </div>

        <!--Footer-->
        <footer id="footer">
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 cp">
                        &copy; 2016 All Rights Reserved.
                    </div>
                    <!--/Copyright-->
                    <div class="span6">
                        <ul class="social pull-right">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="span1">
                        <a id="gototop" class="" href="#"><i class="icon-angle-up"></i></a>
                    </div>
                    <!--/Goto Top-->
                </div>
            </div>
        </footer>
        <!--/Footer-->


        <div class="modal hide fade in" id="profile" aria-hidden="false">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
                <div class="modal-header">
                <h4>Personal info</h4>
            </div>
             

                <div class="well"> 
                                   <form class="form-horizontal" role="form">
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="Update your status"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="button">Post</button>
                                  </form>
                              </div>

                              <div class="panel panel-default">
                                 <div> <h4>User name</h4></div>
                                  <div class="panel-body">
                                    <div class="clearfix"></div>
                                    testing one
                                    <hr>
                                    
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                 <div> <h4>User name</h4></div>
                                  <div class="panel-body">
                                    <div class="clearfix"></div>
                                    testing two
                                    <hr>
                                    
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                 <div> <h4>User name</h4></div>
                                  <div class="panel-body">
                                    <div class="clearfix"></div>
                                    testing three
                                    <hr>
                                    
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                 <div> <h4>User name</h4></div>
                                  <div class="panel-body">
                                    <div class="clearfix"></div>
                                    testing one
                                    <hr>
                                    
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                 <div> <h4>User name</h4></div>
                                  <div class="panel-body">
                                    <div class="clearfix"></div>
                                    testing one
                                    <hr>
                                    
                                  </div>
                              </div>


            </div>
            <!--Modal Body-->
            <div class="modal-body">
                
            </div>
            <!--/Modal Body-->
        </div>
    
        <!--  Login form -->
        <div class="modal hide fade in" id="loginForm">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal"></i>
                <h4>Login Form</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-inline" action="connect.php" method="post" id="form-login">
                    <input type="text" class="input-small" name="id" placeholder="Username">
                    <input type="password" class="input-small" name="pw" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <a href="#">Forgot your password?</a>
            </div>
            <!--/Modal Body-->
        </div>

        <div class="modal hide fade in" id="regForm">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal"></i>
                <h4>Registration Form</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-inline" action="insert.php" method="post" id="form-reg">
                    <input type="text" class="input-small" name="id1" placeholder="Username">
                    <input type="password" class="input-small" name="pw1" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <!--/Modal Body-->
        </div>


        <!--  /Login form -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>