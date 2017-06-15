<!DOCTYPE html>
<?php
//session_start(); 
$sxe = simplexml_load_file('http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=5', NULL, TRUE);
//include("db.php");
?>

<head>
    <style>#map {height:300px;width:430px;}</style>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Index XML</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_u2fHirU2F-5ZLoM7FK6WC36u5DZXHrc&callback=initMap"async defer></script>

    <script>
      function initMap(itemID) {
        myLatLng = {lat: -25.363, lng: 131.044};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }


      function Choose(itemID){
          //myLatLng = {lat: 25.0421875, lng: 121.5061323};
          //alert(jArray.Info[itemID].showInfo.element['@attributes'].latitude);
          //alert(jArray.Info[itemID].showInfo.element['@attributes'].longitude);
          document.getElementById('price').innerHTML = "票價: " + jArray.Info[itemID].showInfo.element['@attributes'].price;
          document.getElementById('time').innerHTML = "時間: " + jArray.Info[itemID].showInfo.element['@attributes'].time;
          document.getElementById('location').innerHTML = "地點: " + jArray.Info[itemID].showInfo.element['@attributes'].location;
          document.getElementById('locationName').innerHTML = jArray.Info[itemID].showInfo.element['@attributes'].locationName;
          document.getElementById('title').innerHTML = jArray.Info[itemID]['@attributes'].title;
          document.getElementById("myimg").src = jArray.Info[itemID]['@attributes'].imageUrl;          
          document.getElementById('descriptionFilterHtml').innerHTML = jArray.Info[itemID]['@attributes'].descriptionFilterHtml;
          myLatLng = {lat: Number(jArray.Info[itemID].showInfo.element['@attributes'].latitude), 
                      lng: Number(jArray.Info[itemID].showInfo.element['@attributes'].longitude)};
          map.setCenter(myLatLng);
          var marker = new google.maps.Marker({
              map: map,
              position: myLatLng
            });
      }
    </script>

<!--  live search  -->
    <script>
    function showResult(str) {
    if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
    }
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
    }
    </script>




</head>

<body>

<div id="wrapper">
<header class="navbar navbar-fixed-top">
             <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </a>
                    <a id="logo" class="pull-left" href="index.html"></a>
                   <div class="nav-collapse collapse pull-right">
                       <ul class="nav">
                          <li><a href="discover.php">Discover</a></li>
                          <li><a href="index.php">Home</a></li>
                           <li class="login"><a data-toggle ="modal" href="#loginForm">Login</a></li>
                            <li><a data-toggle ="modal" href="#regForm">Register</a></li>
                       </ul>
              </div>
              </div>
             </div>
</header>




<!--Slider-->
<section id="slide-show">

            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                    <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                        <img src="940x400.jpg">
                        </div>
                    </div>
                    
                    <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                        <img src="940-2.jpg">
                        </div>
                    </div>
                    
                    <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                        <img src="33.jpg">
                        </div>
                    </div>  
					
					<div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                        <img src="wss.jpg">
                        </div>
                    </div>  
                </div>

                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
                    <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
                </nav>
            </div>

</section>


<!--Banner-->
<a href="" class="full-banner-block"></a>
<img src="https://d3b04i02ue2ssk.cloudfront.net/commerical/home_banner/www_5136.jpg?1467889602"></a>


<!--  Data  -->
<div class="row">
             		<?php 
             		$count = count($sxe->eventItem->event->Info);
             		for($i=1;$i<30;$i++){
             		?>
						<div class="col-lg-2 col-md-2 m-bottom-3 m-bottom-4">
                			<h1><?php $temp = $sxe->eventItem->event->Info[$i]['startDate'];echo substr($temp,5);?></h1>
                    		<a data-toggle="modal" href ="#event" onClick="Choose('<?php echo $i?>');" class="post-block main-board-pjax">
                    		<img class="post-img" src=" <?php $temp = $sxe->eventItem->event->Info[$i]['imageUrl'];if($temp!=""){echo $temp;}else {echo 'sorry.png';}?> ">
                    		</a>
                    		<h5><?php $temp = $sxe->eventItem->event->Info[$i]['title'];echo $temp;?></h5>
                		</div>
                		<?php
						}
            			?>
          <!--<div class="col-lg-4 col-md-4">
            <form>
              <input type="search" size="30" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
            </form>
          </div>-->

</div>


<!--  Footer  -->
<footer id="footer">

            <div class="container">
                <div class="row-fluid">
                    <div class="span5 cp">
                        &copy; 2016 All Rights Reserved.
                    </div>
                    <div class="span4">
                        <ul class="social pull-right">
                            <li><a href="#" style="text-decoration:none;"><i class="icon-facebook"></i></a></li>
                            <li><a href="#" style="text-decoration:none;"><i class="icon-twitter"></i></a></li>
                            <li><a href="#" style="text-decoration:none;"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#" style="text-decoration:none;"><i class="icon-youtube"></i></a></li>
                            <li><a href="#" style="text-decoration:none;"><i class="icon-instagram"></i></a></li>
                        </ul>
					</div>
                      
                        <div class="span1">
                            <a id="gototop" class="" href="#"><i class="icon-angle-up"></i></a>
                        </div>
                </div>
            </div>

</footer>
    

<!--  Login form -->
<div class="modal hide fade " id="loginForm">

            <div class="modal-header">
                <h4>Login Form</h4>
            </div>            
            <div class="modal-body">
                <form class="form-inline" action="connect.php" method="post" id="form-login">
                    <input type="text" class="input-small" name="id" placeholder="Username">
                    <input type="password" class="input-small" name="pw" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>                
            </div>
            
</div>


<!--  Reg form  -->
<div class="modal hide fade" id="regForm">

            <div class="modal-header">
                <h4>Registration Form</h4>
            </div>           
            <div class="modal-body">
                <form class="form-inline" action="insert.php" method="post" id="form-reg">
                    <input type="text" class="input-small" name="id1" placeholder="Username">
                    <input type="password" class="input-small" name="pw1" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            
</div>


<!--  Event form  -->
<div class="modal fade" id="event">
      <div id="wrapper1">
          <div id="item_box_list" class="index_list" style="position:relative;height:1700px;">
              <div class="item_box music_item repost" style="position: absolute;width:430px;left:100px; top:0px;">
                  <div class="square1">
                      <div class="item_img">
                          <img id="myimg" class="lazy" src= "">
                      </div>
                  </div>
                <div class="item_content1">
                    <h3><div id="title"></div></h3>
                    <div style="margin: 0px auto;" id="descriptionFilterHtml"></div>
                    <h3><div id="price"></div></h3>
                    <h3><div id="time"></div></h3>
                    <h3><div id="location"></div></h3>
                    <h5>
                    <small>by</small>
                    <div id="locationName"></div>
                    </h5>
                </div>
              
            <div id="map"><!--  Google map  -->
    <script>
    var map;
    var myLatLng;
    var jArray = <?php echo json_encode($sxe->eventItem->event); ?>;
    //console.log(jArray.Info[0]['@attributes'].title);
    //console.log(jArray.Info[0].showInfo.element['@attributes'].latitude);
    </script></div>
                
              </div>
           </div>
        </div>
</div>

    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
	



<!-- SL Slider -->
        <script type="text/javascript">
        $(function() {
            var Page = (function() {
                var $navArrows = $('#nav-arrows'),
                    slitslider = $('#slider').slitslider({
                        autoplay: true
                    }),
                    init = function() {
                        initEvents();
                    },
                    initEvents = function() {
                        $navArrows.children(':last').on('click', function() {
                            slitslider.next();
                            return false;
                        });
                        $navArrows.children(':first').on('click', function() {
                            slitslider.previous();
                            return false;
                        });
                    };
                return {
                    init: init
                };
            })();
            Page.init();
        });
        </script>
        

</div>

</body>
    
</html>
