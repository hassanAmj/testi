<?php
//this connects to the database
require_once("class/db.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<link href="css/bootstrap.min.rtl.css" rel="stylesheet" media="screen">
		<link href="css/index.css" rel="stylesheet" media="screen">
		<link href="css/header.css" rel="stylesheet" media="screen">
		<link href="css/footer.css" rel="stylesheet" media="screen">
		<link href="css/content.css" rel="stylesheet" media="screen">
		<link href="css/display.css" rel="stylesheet" media="screen">

		<style>

	
				@font-face {
				font-family: 'B Koodak Bold_0';
				src: url('/fonts/B Koodak Bold_0.eot');
				src: local('B Koodak Bold_0'), url('fonts/B Koodak Bold_0.woff') format('woff'), url('fonts/B Koodak Bold_0.ttf') format('truetype'), url('B Koodak Bold_0.svg') format('svg');
				font-weight: normal;
				font-style: normal;
				}
				
				@font-face {
				font-family: 'iransans';
				src: url('fonts/iransans.eot');
				src: url('fonts/iransans.eot?#iefix') format('embedded-opentype'),
					 url('fonts/iransans.woff') format('woff'),
					 url('fonts/iransans.ttf') format('truetype');
					 font-weight: normal;
					 font-style: normal;
			}
			
		</style>

	
	</head>
	<body>

			<section class="container">
				<?php include ("mohtva/header.php");?>
				
					
				<?php include ("mohtva/content.php");?>
					
				
				
				<div id="result">

					<?php include ("mohtva/display.php");?>

				</div>
				
				<div class="row" style="margin-bottom:25px;margin-top:50px;">
						<div class="col-lg-12" >
							<div class="col-sm-4 smart-item-container">
								<a  href="" style="color:white;">
									<div id="box-primary">
										<div  id="link_hover" class="row" style="background-color:#2dcaa8;border-radius: 4px;height:75px;padding-top:22px;		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);">
												<div class="col-md-9 col-sm-8 col-xs-8">
													<div class="detail-container-inner">
														<h4 style="margin-right: 15px;">قوانین و مقررات مشاور املاک</h4>
														<p></p>
													</div>
												</div>
												<div class="col-md-3 col-sm-4 col-xs-4">
													<span><i class="fa fa-gavel" data-fa-transform="rotate-270" style="font-size:42px;margin-top:-3px;margin-right:12px;"></i></span>
												</div>
										
										</div>
									
									</div>
								</a>
							</div>
							<div class="col-sm-4 smart-item-container">
								<a id="link_hover" href="http://localhost:84/amlak/mohtva/insert.php" style="color:white;">
									<div id="box-primary">
										<div id="link_hover" class="row" style="background-color:#2dcaa8;border-radius: 4px;height:75px;padding-top:22px;margin-right:5px;		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);">
												<div class="col-md-9 col-sm-8 col-xs-8">
													<div class="detail-container-inner">
														<h4 style="margin-right: 15px;">اضافه کردن خانه و ملک </h4>
														<p></p>
													</div>
												</div>
												<div class="col-md-3 col-sm-4 col-xs-4">
													<span><i class="fa fa-plus" style="font-size:42px;margin-top:-3px;margin-right:8px;"></i></span>
												</div>
										</div>
									
									</div>
								</a>
							</div>
							<div class="col-sm-4 smart-item-container">
								<a id="link_hover" href="" style="color:white;">
									<div id="box-primary">
										<div id="link_hover" class="row" style="background-color:#2dcaa8;border-radius: 4px;height:75px;padding-top:22px;margin-right:5px;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);">
												<div class="col-md-9 col-sm-8 col-xs-8">
													<div class="detail-container-inner">
														<h4 style="margin-right: 10px;">عضویت ویژه مشاورین املاک</h4>
														<p></p>
													</div>
												</div>
												<div class="col-md-3 col-sm-4 col-xs-4">
													<span><i class="fa fa-users" style="font-size:42px;margin-top:-5px;"></i></span>
												</div>
										</div>
									
									</div>
								</a>
							</div>
						</div>
				</div>
		
			</section><!--container-->
			
			
			
			<?php include ("mohtva/footer.php");?>
		

		<script src="js/jquery.js"></script>
		<script src="js/fontawesome-all.min.js"></script>
		<script src="js/toggle.js"></script>
		
	</body>
</html>
