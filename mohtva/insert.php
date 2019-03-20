<?php
//this connects to the database
require_once("../class/db.php");

include("../class/jdf.php");

?>	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/> 
		<link href="../fonts" rel="stylesheet" type="text/html">
		<link href="../css/bootstrap.min.rtl.css" rel="stylesheet" media="screen">
		<link href="../css/header.css" rel="stylesheet" media="screen">
		<link href="../css/footer.css" rel="stylesheet" media="screen">
		<link href="../css/content.css" rel="stylesheet" media="screen">
		<link href="../css/content2.css" rel="stylesheet" media="screen">
		<link href="../css/display.css" rel="stylesheet" media="screen">
	    <link href="../css/insert.css" rel="stylesheet" media="screen">
		<link href="../css/ionicons.min.css" rel="stylesheet" media="screen">
		<style>
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

	<head>
	
	
	<body>
		

			<section class="container">
				<?php include ("header.php");?>
				
			
				</section>
				<div class="container">
					<div class="row">
						<div class="h-frm-insert">
							<div id="formInsert">
								 
											<img src="image/insert.png" style="margin-right:300px;width:70px;height:70px;margin-top:10px;">
											<p style="font-family:B Nazanin;font-size:16px;text-align:center;margin-top:20px;">لطفا جهت افزایش احتمال انجام معامله <span style="color:red">  قیمت مناسب و مقطوع  </span>وارد نمایید</P>
											
											
												<header id="fomtoper">
													<h1 id="titleform">
														<span style="margin-right: 80px;">ثبت ملک جدید</span>
													</h1>
												</header>
											
													<form action="" method="Post" >
														<div class="divider">
															<table>
																<tr>
																	<td>
																		<div class="row">
																			<li class="dropdown" style="list-style:none;">
																				<div>
																					<label class="control-label col-sm-6 required" style="margin-top:15px;margin-right:12px;font-size:16px;width: 80px;">   ملک  :</label>
																					<select id="melk-selected" name="melk-selected"  >
																						<option value="آپارتمان" selected='selected'>آپارتمان</option>
																						<option value="ویلایی">ویلایی</option>
																						<option value="مغازه">مغازه</option>
																						<option value="دفترکار">دفترکار</option>
																						<option value="زمین">زمین</option>
																					</select>
																					<i class="fa fa-caret-down" style="margin-right:-22px;"></i>

																				</div>
																			</li>
																		</div>
																	</td>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:15px;margin-right:70px;font-size:16px;width: 100px;">درخواست :</label>
																				<select id="darkhast-selected" name="darkhast-selected"  >
																					<option value="فروش" selected='selected'>فروش</option>
																					<option value="رهن و اجاره">رهن و اجاره</option>
																					<option value="رهن کامل">رهن کامل</option>
																					<option value="اجاره کامل">اجاره کامل</option>
																				</select>
																				<i class="fa fa-caret-down" style="margin-right:-22px;"></i>

																			</div>
																		</div>
																	</td>
																	
																</tr>
																<tr>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:5px;font-size:16px;width: 100px;">مساحت :</label>
																				<input type="text" name="text-masahat" style="width: 150px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:30px;}">
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:70px;font-size:16px;width: 100px;">تعداد اتاق :</label>
																				<input type="text" name="text-otaq" style="width: 150px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:40px;}">
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:5px;font-size:16px;width: 100px;">قیمت کل :</label>
																				<input type="text" name="text-qaymatkol" style="width: 150px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:30px;}">
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:70px;font-size:16px;width: 110px;">قیمت متری :</label>
																				<input type="text" name="text-qaymatmetri" style="width: 150px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:30px;}">
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:5px;font-size:16px;width: 100px;">نام مالک :</label>
																				<input type="text" name="text-malek" style="width: 150px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:30px;}">
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:70px;font-size:16px;width: 110px;">تلفن همراه :</label>
																				<input type="text" name="text-telphon" style="width: 150px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:30px;}">
																			</div>
																		</div>
																	</td>
																</tr>
													
															</table>
																
															<tr>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:25px;margin-right:5px;font-size:16px;width: 100px;">آدرس :	</label>
																				
																					<input type="text" name="text-addressCity" placeholder=" شهر" style="width: 90px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:30px;}">
																					<span style="padding-right:10px;">-</span>
																				    <input type="text" name="text-addressregion" placeholder=" محدوده" style="width: 90px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:10px;}">
																					<input type="text" name="text-address" placeholder=" آدرس  " style="width: 260px;height: 32px;margin-top: 20px;border-color: #d5d0d0;margin-right:6px;}">

																			</div>
																		</div>
																	</td>
																	
															</tr>
															
															<tr>
																	<td>
																		<div class="row">
																			<div class="col-ms-6">
																				<label class="control-label col-sm-6 required" style="margin-top:50px;margin-right:5px;font-size:16px;width: 100px;">توضیحات :</label>
																				<input type="textarea" name="textarea-tozihat" style="width: 482px;height: 80px;margin-top: 35px;border-color: #d5d0d0;margin-right:30px;}">
																			</div>
																		</div>
																	</td>
																	
															</tr>
															<tr>
																	<td>
																		<div class="row">
																			<div class="col-ms-12">
																				
																				<input class="btn-insert" id="btn-save" type="submit" name="submit" value="ثبت ملک">
																				<input class="btn-insert2" id="btn-cancel" type="submit" name="cancel" value="انصراف" >

																			</div>
																		</div>
																	</td>
																	
															</tr>
														</div>
													</form>
												
											
								 
							</div>
						</div>
						
						
					</div>
				</div>
				
				  	
			        
				

				
			<?php
					$connect_db->exec('SET NAMES utf8');
				
					if(@$_POST['submit']){
						
						$melk = $_REQUEST['melk-selected'];
						$city = $_REQUEST['text-addressCity'];
						$darkhast=$_REQUEST['darkhast-selected'];
						$region= $_REQUEST['text-addressregion'];
						$masahat=$_REQUEST['text-masahat'];
						$otaq=$_REQUEST['text-otaq'];
						$qaymatkol=$_REQUEST['text-qaymatkol'];
						$qaymatmetri=$_REQUEST['text-qaymatmetri'];
						$malek=$_REQUEST['text-malek'];
						$telphon=$_REQUEST['text-telphon'];
						$insertDate=jdate("Y-m-j");
						$address= $_REQUEST['text-address'];
						$explanation= $_REQUEST['textarea-tozihat'];
							
						echo $insertDate;
						if(empty(trim($melk))||empty(trim($darkhast))||empty(trim($masahat))||empty(trim($otaq))||empty(trim($qaymatkol))||empty(trim($qaymatmetri))||empty(trim($malek))||empty(trim($telphon))){
							echo "Data Not Saved: No field should be empty <br>";
							echo "<a href=insert.php>Insert Another Data</a>";
						
						}
						else{
							try{
									$sqll="INSERT INTO melk(melkType, city, request, region, area, num_room, pricetotal, pricemeter, insetDate, address, namemalek, tel,explanation)VALUES(:melk, :city, :darkhast, :region, :masahat, :otaq, :qaymatkol, :qaymatmetri, :insertDate, :address, :malek, :telphon, :explanation)";
						
							$s=$connect_db->prepare($sqll);
							$s->bindValue(":melk", $melk);
							$s->bindValue(":city", $city);
							$s->bindValue(":darkhast", $darkhast);
							$s->bindValue(":region", $region);
							$s->bindValue(":masahat", $masahat);
							$s->bindValue(":otaq", $otaq);
							$s->bindValue(":qaymatkol", $qaymatkol);
							$s->bindValue(":qaymatmetri", $qaymatmetri);
							$s->bindValue(":insertDate", $insertDate);
							$s->bindValue(":address", $address);
							$s->bindValue(":malek", $malek);
							$s->bindValue(":telphon", $telphon);
							$s->bindValue(":explanation", $explanation);
					
							if($s->execute())
							{
								echo "Data Saved <br>";
								echo "<a href=insertdata1.php> Insert Another Data </a>";
							}else{
								echo "Query Problem";
							}
							}catch(PDOException $e){
								echo $e->getMessage();
							}
						}
							
						
				
					}
			?>
			<?php include ("footer.php");?>


			
			
			
		<script src="../css/js/bootstrap.min.js"></script>
		<script src="../css/js/nav.js"></script>
		<script src="../js/fontawesome-all.min.js"></script>

	</body>
</html>