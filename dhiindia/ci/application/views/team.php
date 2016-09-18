<!DOCTYPE html>
<html>
<head>
	<title>Our Team.</title>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/navcustom.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>
<style type="text/css">
	.gap-right {
  		margin-right: 10px; 
	}
	.gap-top-row{
		margin-top: 10px;
	}
	.main-content-cataegory{

		margin-top: 0.2em;
	}
	.clearfix h3{
		font-size:2em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: bold;
	}
	.pageheader h3{
		font-size:2em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: bold;
	}
	.clearfix p{
		font-size:1em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: light;
	}
	.pageheader{
		background-color: #7eb7b5;
	}
	.bottom-margine-zero{
		margin-bottom: 0px;
	}
	.nav-font-menu{
		font-size:1.5em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: light;
	}
	.logo{
		margin-top:5px; 
		height: 76px;
	}
	.logo-small{
		margin-top: 5px;
		height: 50px;
		padding-top: 8px;
	}
	.col-centered{
    	float: none;
    	margin: 0 auto;
	}
	.top-menu{
		font-size:1.3em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: bold;
		border-left: black;
    	border-left-width: 0.5px;
    	border-right-style: ridge

	}
	.top-menu-icon{
		color: #3ea92b;

	}
	.footer-section{
    	background: #3a3939;
	}
	.footer-menu-headings{
		color:#7eb7b5;
		font-size:1.5em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: light;
	}
	.footer-menu-icon{
		color: #ffffff;
	}
	.footer-images{
		height: 40px;
	}
.footer-ul {
    font-size: 13px;
    list-style: none;
    padding-left: 4em;
    padding-top: 1em;
}
.footer-ul li {
    position: relative;  
    margin-top:1em;
}
.patent-text{
		font-size:0.90em;
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: light;
    	color:#ffffff;
}
.social-list{
	margin-left:0px; 
	padding: 0px;
}
.social-list li{
    display:inline;
}
.social-list li img{
	height: 20px;
}

.footer-text-ul {
    font-size: 13px;
    list-style: none;
    padding-left: 4em;
    padding-top: 0em;
    margin-top: 1px;
}
.footer-text-ul li {
    position: relative;  
    margin-top:1.5em;
    color:#a2a1a1;
    list-style-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACDElEQVQ4Ea1VPUsjURSdlw8nxTaLKJbiR7JgI7qFjRbbpUgmgvkJVoIurHFZdNFKVgXRrfwPUZPJFGks0qu7hSAyi9oJYqEkQTIT5e25k0x4vMmoAR883r3nnHvf1503TGnT4vG4Gg6raVDT6KPoH5uye8aUv5yzXL1e2y8Wi1YTbw2sZTUNTdNmELAFt1/mJP+acyVjGPkDEW8lTKfTwVrN3maMzYuCN9g7qhpezGazz6QNuQGWZe8i2ZzrdzB+xUIC0C9QjLPCRCKVwtnkOkgiSzljXNN13WDYapdl1c+hGJRVoo/Vb3DOv4uYZP/r6+sdCQ4Nxeg2ZyXS40L8pVKpBpB4ykM2gO5q9fEsgFlTPgIPbBj6ChKue4gmQLlCOLuxNoIjGTNNkxOm67nlZDJFZ/9D1uAcxxjICogPIlko5FvlJOKijbhV+GsiBrtC1/1qsBTkuNherR1OdXiDPiySmP1E9Mkulx8mSqXSE9nglzD8IltqN7gU5Y8Ekjsu92g06uwkmZzOgNsgkdyQ65TKIC8Tfn4ioS0qCt/04ylXQFVDhxBc+olc/Pb27hsC6NHwayjsnsZtvuenF6TpTPPiIhb7pMKc9Jv+JRw3vl4o6HukobJxGp6gnyB+u34H404k0kU16TRPDb7bA+vOQGPjFxCh5z+OW/2MPtDg2RXGY3xiRdu28+1+Af8B5Veuq3n4GT4AAAAASUVORK5CYII=);
}
.footer-section h3{
	color:#7ec2c1;
	font-family: 'Open Sans Condensed', sans-serif;
	margin-left:1.5em; 
}
.side-menu{
	font-family: 'Open Sans Condensed', sans-serif;
    font-size: 1em;
    padding-left: 4em;
    padding-top: 0em;
    margin-top: 1px;
}
.side-menu li {
    position: relative;  
    margin-top:1.5em;
    color:#a2a1a1;
    list-style-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAACDElEQVQ4Ea1VPUsjURSdlw8nxTaLKJbiR7JgI7qFjRbbpUgmgvkJVoIurHFZdNFKVgXRrfwPUZPJFGks0qu7hSAyi9oJYqEkQTIT5e25k0x4vMmoAR883r3nnHvf1503TGnT4vG4Gg6raVDT6KPoH5uye8aUv5yzXL1e2y8Wi1YTbw2sZTUNTdNmELAFt1/mJP+acyVjGPkDEW8lTKfTwVrN3maMzYuCN9g7qhpezGazz6QNuQGWZe8i2ZzrdzB+xUIC0C9QjLPCRCKVwtnkOkgiSzljXNN13WDYapdl1c+hGJRVoo/Vb3DOv4uYZP/r6+sdCQ4Nxeg2ZyXS40L8pVKpBpB4ykM2gO5q9fEsgFlTPgIPbBj6ChKue4gmQLlCOLuxNoIjGTNNkxOm67nlZDJFZ/9D1uAcxxjICogPIlko5FvlJOKijbhV+GsiBrtC1/1qsBTkuNherR1OdXiDPiySmP1E9Mkulx8mSqXSE9nglzD8IltqN7gU5Y8Ekjsu92g06uwkmZzOgNsgkdyQ65TKIC8Tfn4ioS0qCt/04ylXQFVDhxBc+olc/Pb27hsC6NHwayjsnsZtvuenF6TpTPPiIhb7pMKc9Jv+JRw3vl4o6HukobJxGp6gnyB+u34H404k0kU16TRPDb7bA+vOQGPjFxCh5z+OW/2MPtDg2RXGY3xiRdu28+1+Af8B5Veuq3n4GT4AAAAASUVORK5CYII=);
}
.side-menu li a{
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 1em;
	color: #7b7e80;
}
.form-text{
	color:#7ec2c1;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 1.3em;
	color: #333;
}
.side-menu-form{

}

.side-menu-form input{
	margin-bottom: 0.5em;
	width: 80%;
}

.form-data{
	margin-left: 1em;
}

.left-bar{
	margin-bottom: 5em;
}
.main-content{
	margin-bottom: 5em;
}

.form-data button{
    background-color:#1ebfaf;
    color: #FFF;	
}
.catagory-list{
	margin-bottom: 2em;
}

</style>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div>
				<img src="images/logo-retina.jpg" class="pull-left gap-right logo"/>
				<img src="images/46-years.png" class="pull-left gap-right logo-small "/>
			</div>
			
		</div>
		<div class="col-md-9 top-menu-root hidden-xs">
			<div class="col-md-4 col-sm-4  text-center top-menu">
				<i class="fa fa-phone top-menu-icon" aria-hidden="true"></i>
				<p>Call toll free</p>
				1800 103 9300
			</div>
			<div class="col-md-4 col-sm-4  text-center top-menu">
				<i class="fa fa-calendar top-menu-icon" aria-hidden="true"></i>
				<p>Schedule</p>
				Appointment
			</div>
			<div class="col-md-4 col-sm-4 text-center top-menu">
				<i class="fa fa-envelope top-menu-icon" aria-hidden="true"></i>
				<p>Leave a</p>
				Message
			</div>
			
		</div>
		
	</div>
</div>
<nav class="navbar navbar-default bottom-margine-zero">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse col-md-offset-5" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-font-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Treatments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Direct hair fusion</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#">Results</a></li>
        <li><a href="#">Client Feedback</a></li>
        <li><a href="#">Clinics</a></li>
        <li><a href="#">What's New</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 pageheader">
				<h3>
					Our Team
				</h3>
			</div>
			<div class="col-md-4 left-bar ">
				<ul class="side-menu">
						<li><a href="#">Introduction</li>
						<li><a href="#">Our team</a></li>
						<li><a href="#">Our Results</a></li>
						<li><a href="#">Client Feedback</a></li>
						<li><a href="#">Our Clicnics</a></li>
						<li><a href="#">Book a consultation</a></li>
						<li><a href="#">Contact us</a></li>
				</ul>
				<div class="form-data">
					<p class="form-text">Ask our specialists!</p>
					<p class="form-text">Our specialists will be glad to assist 
					you and answer to your questions.</p>
					<form>
						  <div class="form-group side-menu-form">
						    <input type="email" class="form-control" id="email" placeholder="email">
						    <input type="email" class="form-control" id="email" placeholder="phone">
						    <input type="email" class="form-control" id="email" placeholder="city">
						    <input type="email" class="form-control" id="email" placeholder="If other city, pleace specify">
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
					
			</div>
			<div class="col-md-8 main-content">

				<div class="row catagory-list">
					<div class="col-md-12 main-content-cataegory">
						<p>World renowned Experts, University Professors and Medical Specialists</p>
					</div>
					
					<?php 
					 	foreach ($team as $member):?>
					<div class="col-md-6 col-sm-6 gap-top-row">
						<div class="clearfix">
					 		<img src="<?php echo $member->photo;?>" alt="..." class="pull-left gap-right">
	  						<h3><?php echo $member->member_name;?></h3>
	  						<p><?php echo $member->designation;?></p>
	  						<a class="showcv" data-toggle="collapse" data-target="<?php echo '#'.$member->id; ?>">Show CV </a>
							<div id="<?php echo $member->id;?>" class="collapse">
								<p><?php echo $member->cv;?></p>
							</div>
						</div>
					</div>		
					<?php endforeach;?>
				</div>


			</div>
		</div>
	</div>	
		<!-- footer start-->
		<footer class="row footer-section">
			<div class="row">
				<div class="col-md-3">
					<ul class="footer-ul">
						<li>
							<i class="fa fa-phone footer-menu-icon" aria-hidden="true"></i>
							<span class="footer-menu-headings">1800 103 9300</span>
						</li>
						<li>
							<img class="footer-images" src="images/46-years_colors.png" />
						</li>
						<li>
							<img class="footer-images" src="images/logo-retina.jpg" />
						</li>
						<li>
							<img class="footer-images" src="images/iso-logo.png" />
						</li>
						<li>
							<img class="footer-images" src="images/CQC-logo.png" />
						</li>
						<li>
							<p class="patent-text">US Patent #8,801,743 B2</p>
						</li>
						<li>
							<p class="patent-text">EU Patent #EU 2234550</p>
						</li>
						<li>
							<ul class="social-list">
								<li>
									<img src="images/dhi-facebook.jpg">
								</li>
								<li>
									<img src="images/dhi-twitter.jpg">
								</li>
								<li>
									<img src="images/dhi-youtube.jpg">
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>About Us</h3>
					<ul class="footer-text-ul">
						<li>Introduction</li>
						<li>Our team</li>
						<li>Our Results</li>
						<li>Client Feedback</li>
						<li>Our Clicnics</li>
						<li>Book a consultation</li>
						<li>Contact us</li>

					</ul>
				</div>
				<div class="col-md-3">
					<h3>Our Services</h3>
					<ul class="footer-text-ul">
						<li>Introduction</li>
						<li>Our team</li>
						<li>Our Results</li>
						<li>Client Feedback</li>
						<li>Our Clicnics</li>
						<li>Book a consultation</li>
						<li>Contact us</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Treatments</h3>
					<ul class="footer-text-ul">
						<li>Introduction</li>
						<li>Our team</li>
						<li>Our Results</li>
						<li>Client Feedback</li>
						<li>Our Clicnics</li>
						<li>Book a consultation</li>
						<li>Contact us</li>
					</ul>
				</div>

			</div>
		</footer>
		<!-- footer end-->
	</div>

<script src ="bower_components/jquery/dist/jquery.js"></script>
<script src ="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script>
	$('.collapse').collapse('hide');
	$('.showcv').click(function(event){
		console.log("Clicked");
		var target=$(this).attr("data-target");
		console.log(target);
		$("#"+target).collapse('toggle');
	});
</script>
</body>
</html>