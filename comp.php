
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>ChemHub</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<!--<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
    <?php
if ( isset( $_POST['submit'] ) ) 
{	
	$compId = $_POST['compId'];
	$typeId = $_POST['type'];
}
?>
		<div id="top"></div>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="sticky-header" style="background-color:#4a4fad;">
				<div class="container">
					<div class="header-content d-flex justify-content-between align-items-center">
						<div class="logo">
							<!--<a href="#top" class="smooth"><img src="img/logo.png" alt=""></a>-->
                            <h1 style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif">ChemHub</h1>
						</div>
						<div class="right-bar d-flex align-items-center">
							<nav class="d-flex align-items-center">
								<ul class="main-menu">
									<li><a href="index.html"><h4>Home</h4></a></li>
								</ul>
								<!--<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>-->
							</nav>
							<!--<div class="search relative">
								<span class="lnr lnr-magnifier"></span>
								<form action="#" class="search-field">
									<input type="text" placeholder="Search here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search here'">
									<button class="search-submit"><span class="lnr lnr-magnifier"></span></button>
								</form>
							</div>
							<div class="header-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</header>
        <section class="section-full gray-bg">
        <div class="container">
        <h3>Compound Id: <?php echo $compId; ?><br></h3>
		<h3>type: <?php echo $typeId; ?><br></h3>
        </div>
        </section>
        </body>
        </html>