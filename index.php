<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<!-- Adding bootstrap files -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Adding self created CSS file -->
		<link rel="stylesheet" href="css/index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/scroll.js"></script>
        <script>
        $(function () {
          $(document).keydown(function (evt) {
            if(evt.keyCode==40){
                    $('html, body').animate({
                        scrollTop: $("#mainpart").offset().top
                    }, 500);
                }
              else if(evt.keyCode==38){
                  $('html, body').animate({
                    scrollTop: $("#maincarousel").offset().top
                }, 500);
            }
          });
        });
        
        </script>
        </head>
    <body onload="">
			<!-- start of navbar -->
			<!-- end of navbar -->
            <table id="maintab" width="1300" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top">
                <div id="animation">
                    <img src="images/Elabs%20logo.png" width="120" height="100">
                </div>
              </td>
          <td align="right" valign="middle">
            <div  id="bar" class="container" onclick="myclick(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </td>
            </tr>
          </table>
        <!-- Start of navbar-->
        <div id="mySidenav" class="sidenav">
          <a href="#"> Home <i class="glyphicon glyphicon-home"></i></a>
          <a href="#"> Login <i class="glyphicon glyphicon-log-in"></i></a>
          <a href="#"> Courses <i class="fa fa-book"></i></a>
          <a href="#"> Members <i class="fa fa-list-alt"></i></a>
            <a href="#"> About Us <i class="glyphicon glyphicon-tasks"></i></a>
            <br><br><br><br><br><br><br><br><br><br><br><br>     
          <a href="#"> Intranet <i class="fa fa-rss"></i></a>
        <div class="footer_menu">
        <div class="container">
                <p id="disclaimer">
                    <i class="glyphicon glyphicon-copyright-mark"></i>This site in maintained by<br> Elabs Web Developer Team</p>
        </div>
        </div>
        </div>
        <!-- End of Navbar-->
        <!-- start of main content -->
        
            <!-- start of carousel-->
        <div class="container-fluid" id="maincarousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="center-block" src="images/1.jpg" width="500px" height="700px">
                </div>

                <div class="item">
                    <img class="center-block" src="images/2.jpg" width="500px" height="700px">
                </div>

                <div class="item">
                    <img class="center-block" src="images/3.jpg" width="1250px" height="700px">
                </div>

                <div class="item">
                    <img class="center-block" src="images/4.jpg" width="1250px" height="700px">
                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
            </div>
            </div>
        <!-- end of the carousel -->
        <!-- start of second part-->
    <div id="mainpart">
        <div id="btleft"></div>
        <div id="btright"></div>
        <div id="bbleft"></div>
        <div id="bbright"></div>
        <div id="bmiddle"></div>
    </div>
        <!--end of main content-->
        
    </body>
</html>