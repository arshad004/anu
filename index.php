<?php

  if(isset($_POST['submit']) && !empty($_POST['name'])){
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $message=$_POST['message'];
  
  
 $from="noreply@aryanventure.com" ;
$to = 'dahad.aakash@gmail.com';$subject = 'Website enquiry';
$message = '<html><body><img src=""><h3>'."NAME:".$name."<br>"."EMAIL:".$email."<br>"."MOBILE:".$mobile."<br>"."MESSAGE:".$message."</h3></body></html>";  

 $headers="From:info@aryanventure.com\r\n";
 $headers="Content-type:text/html\r\n";
 
mail($to, $subject, $message, $headers);  
}
?>
<html>
<head>
    <title>Aryan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="images/logo-01.png" type="images/logo-01.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <!-- Libs CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
       <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link href="css/style.css" rel="stylesheet">
<!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style>
        a {
            color: 666666;
            font-size: 18px;
        }
        
        .navbar {
            background-color: f4f4f4;
        }
        /*Contact sectiom*/
        
        .content-header {
            font-family: 'Oleo Script', cursive;
            color: #fcc500;
            font-size: 45px;
        }
        
        .section-content {
            text-align: center;
        }
        
   
        
     
        /* carousel */
        
        #quote-carousel {
            padding: 0 10px 30px 10px;
            margin-top: 30px;
            text-align: center;
        }
        /* indicator position */
        
        #quote-carousel .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: -10px;
            margin-right: -19px;
        }
        /* indicator color */
        
        #quote-carousel .carousel-indicators li {
            background: #c0c0c0;
        }
        /* active indicator */
        
        #quote-carousel .carousel-indicators .active {
            background: orange;
            height: 10px;
            width: 10px;
            margin-bottom: 1px;
        }
        /* typography */
        
        h1 {
            text-align: center;
            margin-bottom: -20px !important;
        }
        
      
		
		.text-center {
    text-align: center;
    font-family: initial;
    font-size: 30px;
}
		
		
	.panel-content {
    font-size: 20px;
    font-family: initial;
    padding-top: 20px;
}
	
			@media only screen and (max-width: 500px) {
    #carosel {
    display:none;
	}
	
	#bullet_pt li {width:100%;}
	#logo{width: 5pc;}
	#panel-body{padding-left: 0px;
    padding-right: 0px;	
    }
	#pc{
	font-size: 20px;
    font-family: initial;
    padding-top: 20px;
 }
	
	}

  
	  .center{text-align:center;list-style-position:inside;}
	  
	  .bullet_pt{margin-top:20px;padding:0px;list-style:none;boxsizing:border-box;}
	  .bullet_pt li{display:inline-block;border:1px solid #ddd;width: 33%;padding:10px;verticle-align:middle;text-align:center;font-style:16px;background:#e67817;color:#fff;margin-top:5px;}
	  
	  
	/*  li{background-color:orange;color:#fff;border:2px #fff solid}*/
	

	
/*crousel */

#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 10px;
}
#quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 10px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 100px;
    height: 100px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .4s ease-in;
    vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
    width: 150px;
    height: 150px;
    opacity: 1;
    transition: all .2s;
}
.item blockquote {
    border-left: none;
    margin-top: -30px;
}
	
	/*crousel */
	</style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="#"><img  id="logo" src="img/logo.png" style="position:relative"></a>
                </div>

                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav" style=" margin-left: 148px;">
                        <li class="active"><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT US</a></li>
                        <li><a href="infrastructure.php">INFRASTRUCTURE</a></li>
                        <li><a href="product.php">OUR PRODUCTS</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                    </ul>
                </div>
               <div class="image2">
                    <img src="images/banner.jpg" width="100%">
                </div>
            </nav>
        </div>
		<div class="row">
			<div class="image2" style="margin-top: -212px;background-color:#f4f4f4">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>

                <div class="container">
                    <div class="row" id="carosel">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
                                <!--<ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                                </ol>
                                 -->
                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner">
								<!-- Quote 1 -->
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <img src="images/1.png">
                                                <p>&ldquo;We use genuine premium grade stitching on all seating surfaces complimented by matching threads. Beautiful top-stitch seams add to the high quality look and feel.&rdquo;</p>
                                                <small><strong>Aryan Venture your trusted stitching solution </strong></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quote 2 -->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <img src="images/2.png">
                                                <p>&ldquo;Aryan car Cover is perfect for all seasons! Just place this Smart Cover over your car and your car will be new always. It gives protection from Dust and sun heat. &rdquo;</p>
                                                <small><strong>All Weather car covers</strong></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quote 3 -->
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <img src="images/3.png">
                                                <p>&ldquo;These trolley covers are used for all your industrial needs. To make the trolley more sturdy and useful. It keeps design from rusting and make it more suitable and durable to use.&rdquo;</p>
                                                <small><strong>Trolley Covers for industrial use</strong></small>
                                            </div>
                                        </div>
                                    </div>
									

                                </div>
								

                            </div>
                        </div>
                    </div>
                </div>
                <img src="img/new.png" width="100%">
            </div>

        </div>
        <div class="row">
            <div class="panel-body" >
                <div class="panel-header">
                    <h3 class="text-center"><span style="background-color:e67817;color:#fff; border-width:5px;  
    box-shadow: 10px 10px 5px #888888; padding:5px; ">About Aryan Venture</span></h3>
                </div>
                <div id="pc" class="panel-content">
                    <p  style="font-size:20px;padding-left:15px;padding-right:15px;font-size:20px;">Founded in the year 2004, we ARYAN VENTURE have emerged as an affluent stitching manufacturer, quality range of :-</p> 
 <p id="lisection"  style="text-align:center;font-size:20px;padding-left:15px;padding-right:15px;font-size:20px;">
 <ul id="bullet_pt" class="bullet_pt" style="display:table;margin:0 auto;">
	 <li> Automotive  seat cover</li>
	 <li> Canopy</li>  
	 <li> Industrial trolley cover</li>
	 <li> Storage solution </li> 
	 <li> Temporary cubicle</li>
	 <li> Bumper  protection cover</li> 
	 <li> Protection cover for car</li>
	 <li> Bumper mould</li>
	 <li> Robot industrial bin</li> 
</ul>
 </p>
 <p  style="font-size:20px;padding-left:15px;padding-right:15px;font-size:20px;">
Our offered products are provided in enormous sizes, colors, designs and other related specifications as per the specific requirements of the patrons within the promised time frame. 
 </p>
 <p  style="font-size:20px;padding-left:15px;padding-right:15px;font-size:20px;">
Operating from Sanaswadi (PUNE), these products are sourced under the strict guidance of our dedicated team of procuring agents from reliable and honest vendors of the market by keeping in mind the current market trend. The products provided by us are widely appreciated in the market for their qualitative features such as alluring look, impeccable finish, tear resistance, mesmerizing design, etc
</p>  
  </div>
            </div>
        </div>
        <div class="row">
            <div class="image2">
                <img src="images/ORANE BANNER.jpg" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="panel-body" style="background-color: f4f4f4;">
                <div class="panel-header">
                    <span style="background-color:#e67817;">  <h3 class="text-center"><span style="background-color:e67817;color:#fff; border-width:5px;  
    box-shadow: 10px 10px 5px #888888;padding:5px;">Our Products</span></h3>
                    <br>
                    </span>
                </div>
				
				
				<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h3>Car Covers<h3>
                                       <!-- <small>A person</small>-->
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h3>Car Seat Cover </h3>
                                       <!--  <small>A person</small>-->
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h3>Custom Trolley Cover</h3>
                                        <!-- <small>A person</small>-->
                                    </div>
                                </div>
                            </blockquote>
                        </div>
						  <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h3>Robo Arm Cover</h3>
                                        <!-- <small>A person</small>-->
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/Car-Covers.png" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/Untitled-6.png" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/img.png" alt="">
                        </li>
						<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/robo.png" alt="">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
				
				
				
				
              
            </div>

        </div>

        
	<?php include "footer.php"; ?>

</body>

<style>
    $(document).ready(function() {
        //carousel options
        $('#quote-carousel').carousel( {
            pause: true, interval: 10000,
        }
        );
    }
    
    );
</style>

</html>







