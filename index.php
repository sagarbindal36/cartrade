<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prateek Kalra Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	.t:hover{
background:linear-gradient(to bottom,yellow,green);		}
	</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Title</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                
                    <li class="t">
                        <a href="#" style="color:#00F;">New Cars</a>
                    </li>
                    <li class="t">
                        <a href="#" style="color:#00F;">Buy Used Cars</a>
                    </li>
                    <li class="t">
                        <a href="#" style="color:#00F;">Contact Us</a>
                    </li>
                     <li class="t">
                        <a href="#" style="color:#00F;">User reviews</a>
                    </li>
             
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <div class="item">
               <img src="home_slider_img_ver3.jpg" alt="" width="100%" height="100%"></span>
               </div>
               </div>
                            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   
                </h1>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Popular used cars</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                   <div class="col-md-6">
                    <img class="img-responsive" src="img/maruti-suzuki-swift-9322_380x240.png">
                    </div>
                    <div class="col-md-3">
                    <div class="row">
                    <img class="img-responsive" src="hyundai-fluidic-verna-default-image_156x120.png">
                    <a href="#" class="btn btn-warning btn-sm">Hyundai Verna</a>
                    <img class="img-responsive" src="mahindra-xuv500-default-image_156x120.png">
                    <a href="#" class="btn btn-primary btn-sm">Mahindra XUV 500</a>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="row">
                    <img class="img-responsive" src="Honda-city-gray_156x120.png">
                    <a href="#" class="btn btn-success btn-sm">Honda City</a>
                    <img class="img-responsive" src="chevrolet-cruze-default-image_156x120.png">
                    <a href="#" class="btn btn-info btn-sm">Chevrolet Cruze</a>
                    </div>
                    </div>                    </div>
                                            <a href="#" class="btn btn-danger">Maruti Suzuki Swift</a>
                    </div>
                </div>
            </div>
         <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Find used cars by city</h4>
                    </div>
                    <div class="panel-body">
                    <?php
					$query="select * from city ";
					$result=mysqli_query($conn,$query);
					if(mysqli_num_rows($result)>0)
					{
					while($row=mysqli_fetch_array($result))
				{
                      echo  "<a href='#' style='text-transform:capitalize'>".$row['cname']."</a>";
				?>
                <br>

                <?php

				}
					}
				    ?>
					</div>
                </div>
                                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Find used cars by budget</h4>
                    </div>
                    <div class="panel-body">
                    <?php
					$query="select * from budget ";
					$result=mysqli_query($conn,$query);
					if(mysqli_num_rows($result)>0)
					{
					while($row=mysqli_fetch_array($result))
				{
                      echo  "<a href='#' style='text-transform:capitalize'>".$row['cbudget']."</a>";
				?>
                <br>

                <?php

				}
					}
				    ?>
					</div>
                </div>

            </div>            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Find used cars by models</h4>
                    </div>
                    <div class="panel-body">
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
        <?php
		include('footer.php');
		?>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
