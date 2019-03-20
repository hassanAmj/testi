
<?php
	//this connects to the database
	require_once("class/db.php");

?>
<html>
	<head>
		<script src="js/jquery.js"></script>

	</head>
	<body>
				<meta charset="utf-8"/> 

				<h1 id="titrsitecontent2">املاک پیشنهاد شده در کرمانشاه</h1>
				<div class="contentkol">
						<div class="categories-sidebar" style="transform:translateZ(0px);">
							<div class="ui pointing vertical menu">
								<a>
									<div style="direction:rtl;margin-right:10px;">
										<h2 class="normal-heading" style="margin-left:30px;margin-right:42px">املاک<h2>
									</div>
								</a>
								<a class="item" href="#">
									<div class="padded ">
										<h3 class="normal-heading" style="direction:rtl;float:right;margin-top:-5px;">فروش مسکونی (آپارتمان ، خانه ، ویلایی)</h3>
									</div>
								</a>
								<a class="item" href="#">
									<div class="padded ">
										<h3 class="normal-heading" style="direction:rtl;float:right;margin-top:0px;">اجاره مسکونی (آپارتمان، خانه ، ویلایی)</h3>
									</div>
								</a>
								<a class="item" href="#">
									<div class="padded ">
										<h3 class="normal-heading" style="direction:rtl;float:right;margin-top:0px;">فروش اداری و تجاری (مغازه ، دفترکار ، صنعتی)</h3>
									</div>
								</a>
								<a class="item" href="#">
									<div class="padded ">
										<h3 class="normal-heading" style="direction:rtl;float:right;margin-top:0px;">اجاره اداری و تجاری ( مغازه ، دفترکار ، صنعتی )</h3>
									</div>
								</a>
							</div>
						</div>
						<div style="margin-right:150px;font-size:12px;">
							<?php
					
					
					
								echo "<table border='1' id='tableTitrPish'>
								<tr>
								<td id='styletd1'>
								<div id='menutitle'>
								<div id='trpish' style='margin-right:0px;'>کد ملک</div>
								<div id='trpish' style='margin-right:-7px;'>شهر</div>
								<div id='trpish'>ملک</div>
								<div id='trpish'>درخواست</div>
								<div id='trpish' margin-right: 20px;>محدوده</div>
								<div id='trpish'>مساحت</div>
								<div id='trpish'>اتاق</div>
								<div id='trpish' style='margin-right:14px;'>قیمت کل</div>
								<div id='trpish' style='margin-right:18px;'>قیمت متری</div>
								<div id='trpish' style='margin-right:20px;'>تاریخ ثبت</div>
								<div id='trpish'></div>
								</div>
								</td>
								</tr>";
									
								
								$connect_db->exec('SET NAMES utf8');
								
								$sql=" select * from melk";
										$st=$connect_db->prepare($sql);
										$st->execute();
										$total=$st->rowCount();//get the number of rows returned
										if($total < 1 ){//if no row was returned
											echo "<tr> <td style> No Data: DataBase Empty </td> ";//print out error message
											echo "<td> No Data: DataBase Empty </td> ";//print out error message
											echo " <td> No Data: DataBase Empty </td>";//print out error message
											echo " <td> No Data: DataBase Empty </td>";//print out error message
											echo "<td> No Data: DataBase Empty  </td>";//print out error message
											
										}
							
								while($row=$st->fetch(PDO::FETCH_ASSOC))
								{
									
									echo "<tr id='tablePresent' >
									<td id='tablecontent'>
									<div>
									<div id='bodertd' style='margin-right:-2px;'>" . $row['melkid'] . "</div>
									<div id='bodertd' style='margin-right: -8px;'>" . $row['city'] . "</div>
									<div id='bodertd' style='margin-right:8px;'>" . $row['melkType'] . "</div>
									<div id='bodertd'>" . $row['request'] . "</div>
									<div id='bodertd'>" . $row['region'] . "</div>
									<div id='bodertd'>" . $row['area'] . "</div>
									<div id='bodertd'>" . $row['num_room'] . "</div>
									<div id='bodertd'  style='margin-right:14px;'>" . $row['pricetotal'] . "</div>
									<div id='bodertd'  style='margin-right:18px;'>" . $row['pricemeter'] . "</div>
									<div id='bodertd'  style='margin-right:20px;'>" . $row['insetDate'] . "</div>
									<div class='accordion'>
									<div class='accordion-item'>
									<div class='type'></div>
									</div>
									<div class='data' style='width:100%'><div style='margin-right:5px;float:right;width:600px;text-align:right;'>" .$row['explanation'] . "</div><div style='text-align:left;float:right;width:150px'><a  href='#'>صفحه ملک</a></div></div>
									</div>
									</div>
									</td>
									</tr>";
									
								
								}

								echo "</table>";
						
							?>
				
				
			

						</div>
						
				
				

	</body>
</html>
