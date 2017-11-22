<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>West Palawan Premiere</title>
    <link rel="icon" href="img/wpp3.png">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/paper-kit.css?v=2.1.0" rel="stylesheet">

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nucleo-icons.css" rel="stylesheet">
    <style>
        .navbar-default{
            background-color: rgba(255,255,255,.9);
            
        }
        .navbar-wrapper{
            margin-top: 20px;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 20;
        }
        .ml-auto{
            margin-right: auto!important;
            margin-left: 0px!important;
        }
        .nav-link{
            color: black !important;
        }
        #projectstitle:after {
          display: inline-block;
          margin: 0 0 8px 10px;
          height: 3px;
          content: " ";
          text-shadow: none;
          background-color: #999;
          width: 255px;
        }
        #projectstitle:before {
          display: inline-block;
          margin: 0 10px 8px 0;
          height: 3px;
          content: " ";
          text-shadow: none;
          background-color: #999;
          width: 255px;
        }
        .panorama-container {
            position: relative;
            height: 600px;
            padding-bottom: 40%;  /* 4/3 on mobile, padding = 3/4 */
        }
        .panorama-container iframe {
            position: absolute;
            top: 0;
            left: 0; 
            width: 400%; 
            height: 100%;
        }
        .card-image{
            height: 140px;
        }
        .author, .card-description{
            text-align: left!important;
        }
        .card-projects{
            background-position:center;
            background-size:cover;
            padding-top: 20%;
            padding-bottom: 20%;
            border-radius: 0px;
        }
        .tooltip.bs-tooltip-bottom .arrow{display:none;}
        .tooltip.bs-tooltip-bottom{margin-top:0px!important;}
        .project-details:hover{
            transition: all 0.5s ease;
        }
        .popover.bs-popover-auto[x-placement^=bottom],.popover.bs-popover-bottom{margin-top:0px}
    </style>

</head>
<body>
    
    <div class="navbar-wrapper">
        <nav class="navbar navbar-expand-lg navbar-default">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href=""><img src="img/wpp4.png" width="200"></a>
                    <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="../index.html" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="../documentation/tutorial-components.html" target="_blank" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="../documentation/tutorial-components.html" target="_blank" class="nav-link">Projects</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="../documentation/tutorial-components.html" target="_blank" class="nav-link">Gallery</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="../documentation/tutorial-components.html" target="_blank" class="nav-link">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
        <div class="header-3" data-parallax="true">

            <div class="page-carousel">
                <div class="filter"></div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <div class="page-header" style="background-image: url('img/lowresolution paul quiambao batch 1 (17).jpg');">
                                
                                <!-- CAROUSEL CAPTION -->

                                <!-- <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <h1 class="title">Paper Kit 2 PRO</h1>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br>
                                                <div class="buttons">
                                                    <a href="#pablo" class="btn btn-danger btn-round  btn-lg">
                                                        Read More
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-get-pocket"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="carousel-item active">
                            <div class="page-header" style="background-image: url('img/lowresolution paul quiambao batch 1 (20).jpg')">
                                
                                <!-- CAROUSEL CAPTION -->

                                <!-- <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 ml-auto mr-auto text-center">
                                                <h1 class="title">Awesome Experiences</h1>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br>
                                                <h6>Connect with us:</h6>
                                                <div class="buttons">
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header" style="background-image: url('img/lowresolution paul quiambao batch 1 (27).jpg')">
                                
                                <!-- CAROUSEL CAPTION -->

                                <!-- <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 ml-auto text-right">
                                                <h2 class="title">Premium Offers for Venice</h2>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br>
                                                <div class="buttons">

                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-lg">
                                                        <i class="fa fa-share-alt"></i> Share Offer
                                                    </a>
                                                    <a href="#pablo" class="btn btn-success btn-round btn-lg">
                                                        <i class="fa fa-shopping-cart"></i> Shop Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

		<!-- <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/daniel-olahh.jpg');">
			<div class="filter"></div>

			<div class="container-fluid">

			    <div class="motto text-center">
			        <h1>Example page</h1>
			        <h3>Start designing your landing page here.</h3>
			        <br />
			        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-outline-neutral btn-round"><i class="fa fa-play"></i>Watch video</a>
			        <button type="button" class="btn btn-outline-neutral btn-round">Download</button>
			    </div>
			</div>
    	</div> -->

        <div class="main">
			<div class="section text-center">
            <div class="container text-center">
                <div class="row text-center" style="display: inline-block;">
                        <h2 class="title text-center" id="projectstitle">Projects</h2>
                        <!-- <button type="button" class="btn btn-outline-danger btn-round" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Popover on bottom" data-content="Here will be some very useful information about this popover." data-original-title="" title="">on bottom</button>
                        <button type="button" class="btn btn-popover btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                          Tooltip on bottom
                        </button> -->
                </div>
				<br/><br/>
				<div class="row">
					<div class="col-md-3">

                        <!-- USING PAPER KIT DEFAULT CARD -->
						<!-- <div class="info">
							<div class="card-avatar">
                                <img class="img img-fluid" src="img/lowresolution paul quiambao batch 1 (19).jpg">
                            </div>
							<div class="description">
								<h4 class="info-title">Lazuli</h4>
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada in risus ac maximus. Donec. </p>
								<a href="#pkp" class="btn btn-link btn-danger">See more</a>
							</div>
						</div> -->

                        <!-- USING DIV BACKGROUND -->
                        <!-- <div class="card card-project" >
                            <div data-background="image" style="background-image: url('img/lowresolution paul quiambao batch 1 (19).jpg');" class="card-body card-projects" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Popover on bottom" data-content="Here will be some very useful information about this popover." data-original-title="" title="">
                                <h3 class="card-title" style="color: white;background-color: rgba(98,100,151,0.8)">Lazuli</h3>
                            </div>
                            <div class="card-footer project-details wow animated animated4 fadeInLeft">
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                
                            </div>
                        </div> -->

                        <!-- USING BOOTSTRAP CARD IMG-OVERLAY -->
                        <div class="card">
                          <img class="card-img" src="img/lowresolution paul quiambao batch 1 (19).jpg" alt="Card image">
                          <div class="card-img-overlay" data-container="body" data-toggle="popover" data-placement="bottom" data-title="" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. " data-original-title="" title="">
                            <h3 class="card-text" style="color: white;background-color: rgba(98,100,151,0.8)">Lazuli</h3>
                          </div>
                        </div>

					</div>
					<div class="col-md-3">
						<!-- <div class="info">
							<div class="card-avatar">
                                <img class="img img-fluid" src="img/lowresolution paul quiambao batch 1 (7).jpg">
                            </div>
							<div class="description">
								<h4 class="info-title">Sapphire Sands</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada in risus ac maximus. Donec. </p>
								<a href="#pkp" class="btn btn-link btn-danger">See more</a>
							</div>
						</div> -->

                        <!-- <div class="card card-project" >
                            <div data-background="image" style="background-image: url('img/lowresolution paul quiambao batch 1 (7).jpg');" class="card-body card-projects" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Popover on bottom" data-content="Here will be some very useful information about this popover." data-original-title="" title="">
                                <h3 class="card-title" style="color: white;background-color: rgba(98,100,151,0.8)">Sapphire Sands</h3>
                            </div>
                            <div class="card-footer project-details wow animated animated4 fadeInLeft">
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                
                            </div>

                        </div> -->

                        <!-- USING BOOTSTRAP CARD IMG-OVERLAY -->
                        <div class="card ">
                          <img class="card-img " src="img/lowresolution paul quiambao batch 1 (7).jpg" alt="Card image">
                          <div class="card-img-overlay" data-container="body" data-toggle="popover" data-placement="bottom" data-title="" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. " data-original-title="" title="">
                            <h3 class="card-text" style="color: white;background-color: rgba(98,100,151,0.8)">Sapphire Sands</h3>
                          </div>
                        </div>

					</div>
					<div class="col-md-3">
						<!-- <div class="info">
							<div class="card-avatar">
                                <img class="img img-fluid" src="img/lowresolution paul quiambao batch 1 (20).jpg">
                            </div>
							<div class="description">
								<h4 class="info-title">Diamond Cave</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada in risus ac maximus. Donec. </p>
								<a href="#pkp" class="btn btn-link btn-danger">See more</a>
							</div>
						</div> -->

                        <!-- <div class="card card-project" >
                            <div data-background="image" style="background-image: url('img/lowresolution paul quiambao batch 1 (20).jpg');" class="card-body card-projects" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Popover on bottom" data-content="Here will be some very useful information about this popover." data-original-title="" title="">
                                <h3 class="card-title" style="color: white;background-color: rgba(98,100,151,0.8)">Diamond Cave</h3>
                            </div>
                            <div class="card-footer project-details wow animated animated4 fadeInLeft">
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                
                            </div>
                        </div> -->

                        <!-- USING BOOTSTRAP CARD IMG-OVERLAY -->
                        <div class="card">
                          <img class="card-img" src="img/lowresolution paul quiambao batch 1 (20).jpg" alt="Card image">
                          <div class="card-img-overlay" data-container="body" data-toggle="popover" data-placement="bottom" data-title="" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. " data-original-title="" title="">
                            <h3 class="card-text" style="color: white;background-color: rgba(98,100,151,0.8)">Diamond Cave</h3>
                          </div>
                        </div>

					</div>
					<div class="col-md-3">
						<!-- <div class="info">
							<div class="card-avatar">
                                <img class="img img-fluid" src="img/lowresolution paul quiambao batch 1 (26).jpg">
                            </div>
							<div class="description">
								<h4 class="info-title">Midlands</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada in risus ac maximus. Donec. </p>
								<a href="#pkp" class="btn btn-link btn-danger">See more</a>
							</div>
						</div> -->

                        <!-- <div class="card card-project" >
                            <div data-background="image" style="background-image: url('img/lowresolution paul quiambao batch 1 (26).jpg');" class="card-body card-projects" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Popover on bottom" data-content="Here will be some very useful information about this popover." data-original-title="" title="">
                                <h3 class="card-title" style="color: white;background-color: rgba(98,100,151,0.8)">Midlands</h3>
                            </div>
                            <div class="card-footer project-details wow animated animated4 fadeInLeft">
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                
                            </div>
                        </div> -->

                        <!-- USING BOOTSTRAP CARD IMG-OVERLAY -->
                        <div class="card">
                          <img class="card-img" src="img/lowresolution paul quiambao batch 1 (26).jpg" alt="Card image">
                          <div class="card-img-overlay" data-container="body" data-toggle="popover" data-placement="bottom" data-title="" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. " data-original-title="" title="">
                            <h3 class="card-text" style="color: white;background-color: rgba(98,100,151,0.8)">Midlands</h3>
                          </div>
                        </div>

					</div>
				</div>

            </div>
        </div>

        <div class="container-fluid" style="overflow: hidden">
          <div class="row">
            <div class="col-sm-6 col-md-3 panorama-container">
                              
              <script src="https://360player.io/static/dist/scripts/embed.js" async></script>
              <iframe src="https://360player.io/p/rjhRh7/" frameborder="0" width=560 height=315 allowfullscreen data-token="rjhRh7"></iframe>

                          
            </div>
          </div>
        </div> 

		<div class="section">
            <div class="container">
				<div class="row">
    				<div class="col-md-4">
                         <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="../assets/img/faces/clem-onojeghuo-3.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <div class="author" style="text-align: left;">
                                        <h4 class="card-title">About Us</h4>
                                        <hr style="border-width:4px">
                                    </div>
                                </a>
                                <p class="card-description" style="text-align: left;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. Donec elementum eget purus ut sagittis. Suspendisse maximus neque eu neque vestibulum, et dignissim justo tempor. Quisque laoreet lectus ligula, vitae tempus. 
                                </p>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="../assets/img/faces/joe-gardner-2.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <div class="author">
                                        <h4 class="card-title">Help</h4>
                                        <hr style="border-width:4px">
                                    </div>
                                </a>
                                <p class="card-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. Donec elementum eget purus ut sagittis. Suspendisse maximus neque eu neque vestibulum, et dignissim justo tempor. Quisque laoreet lectus ligula, vitae tempus. 
                                </p>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="../assets/img/faces/erik-lucatero-2.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Contact Us</h4>
                                        <hr style="border-width:4px">
                                    </div>
                                </a>
                                <p class="card-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu egestas felis. Etiam quis felis tincidunt diam blandit porttitor. Proin convallis facilisis libero, eu vulputate nunc lobortis ut. 
                                </p>
                            </div>
                            <div class="card-footer text-center">
                               <!--  <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a> -->


                                <a class="btn btn-lg btn-link btn-just-icon btn-fill" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                    <!-- <p class="d-lg-none">Twitter</p> -->
                                </a>
                                <a class="btn btn-lg btn-link btn-just-icon btn-fill" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank">
                                    <i class="fa fa-facebook-square"></i>
                                    <!-- <p class="d-lg-none">Facebook</p> -->
                                </a>
                            
                                <a class="btn btn-lg btn-link btn-just-icon btn-fill" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                    <!-- <p class="d-lg-none">Instagram</p> -->
                                </a>
                            
                                <a class="btn btn-lg btn-link btn-just-icon btn-fill" rel="tooltip" title="Follow on Vimeo" data-placement="bottom" href="https://www.vimeo.com/" target="_blank">
                                    <i class="fa fa-vimeo-square"></i>
                                    <!-- <p class="d-lg-none">Vimeo</p> -->
                                </a>
                                
                            </div>
                        </div>
    				</div>
    			</div>
        	</div>
    	</div>

            <!-- <div class="section landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="text-center">Keep in touch?</h2>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
										<div class="input-group">
	                                        <span class="input-group-addon">
	                                            <i class="nc-icon nc-single-02"></i>
	                                        </span>
	                                        <input type="text" class="form-control" placeholder="Name">
	                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="nc-icon nc-email-85"></i>
											</span>
											<input type="text" class="form-control" placeholder="Email">
										</div>
                                    </div>
                                </div>
                                <label>Message</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                                <div class="row">
                                    <div class="col-md-4 ml-auto mr-auto">
                                        <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
	<footer class="footer section-dark">
		<div class="container">
            <hr style="border-width: 4px;">
            <div class="row">
				<!-- <nav class="footer-nav">
					<ul>
						<li><a href="https://www.creative-tim.com">Creative Tim</a></li>
						<li><a href="http://blog.creative-tim.com">Blog</a></li>
						<li><a href="https://www.creative-tim.com/license">Licenses</a></li>
					</ul>
				</nav> -->
				<div class="credits ml-auto text-center">
					<span class="copyright text-center">
						© <script>document.write(new Date().getFullYear())</script> West Palawan Premiere
					</span>
				</div>
			</div>
		</div>
	</footer>
</body>

<!-- Core JS Files -->
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="js/popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="assets/js/paper-kit.js?v=2.1.0"></script>
<script type="text/javascript">
    $(function () {
      $('[data-toggle="popover"]').popover();
    })
</script>
</html>
