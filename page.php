

		<?php include "components/header.php"; ?>

<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<!--<div id="preloader">-->
	<!--	<div class="loader-container">-->
	<!--		<div class="progress-br float shadow">-->
	<!--			<div class="progress__item"></div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<?php include "components/navbar.php"; ?>
	</header>
	<!-- End header -->
	
	<?php 
		if(isset($_GET['page']))
		{
			if($_GET['page']=="About")
			{
				include 'pages/abouts.php';
			}
			elseif($_GET['page']=="ListAwards")
			{
				include 'pages/list_award_c.php';  //2020
			}
			
			elseif($_GET['page']=="ListAward21")
			{
				include 'pages/list_award21.php';  //2021
			}
			
			elseif($_GET['page']=="ListParticipant")
			{
				include 'pages/list_participant.php';
			}
			elseif($_GET['page']=="Information")
			{
				include 'pages/information.php';
			}
			elseif($_GET['page']=="Judge")
			{
				include 'pages/judge.php';
			}
			elseif($_GET['page']=="Contact")
			{
				include 'pages/contact.php';
			}
			elseif($_GET['page']=="Foto")
			{
				include 'pages/foto.php';
			}
			elseif($_GET['page']=="Video")
			{
				include 'pages/video.php';
			}
			elseif($_GET['page']=="GuideBook")
			{
				include 'pages/guide_book.php';
			}
		}
	?>
	
    <?php include "components/footer.php" ?>
</body>
