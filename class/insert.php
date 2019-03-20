<?php
require_once("db.php");
?>
<!DOCTYPE html> 
<html lang=en>
	<head>
	<style>
	html, body{
	width:100%;
	height:100%;
	margin:0%;
	font-family:"helvetica","verdana","calibri", "san serif";
	overflow:hidden;
	padding:0%;
	border:0%;
	}
	#hold{
		padding:20px;
	}
	input[type= text]{
		width: 20%;
		height: 30px;
	}
	input[type= email]{
		width: 20%;
		height: 30px;
	}
	
	</style>
	 		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi"/>
	
	<title>Populate Database</title>
	
	</head>
	<body>
	<?php
	if(isset($_POST['submit'])){
		$name=$_POST['firstName'];
		$email=$_POST['lastName'];
		$department=$_POST['dept'];
		$position=$_POST['pos'];
	if(empty(trim($name))||empty(trim($email))||empty(trim($department))||empty(trim($position))){
		echo "Data Not Saved: No field should be empty <br>";
		echo "<a href=insertdata1.php>Insert Another Data</a>";
		
	}
	else{
		$sql="INSERT INTO record(name, email, department, position)VALUES(:name, :email, :department, :position)";
		$st=$conn->prepare($sql);
		$st->bindValue(":name", $name);
		$st->bindValue(":email", $email);
		$st->bindValue(":department", $department);
		$st->bindValue(":position", $position);
		$st->execute();
		$st=null;
		echo "Data Saved <br>";
		echo "<a href=insertdata1.php> Insert Another Data </a>";
	}
	}
	else{
	?>
	<div id= hold>
	<form action=insertdata1.php method=post> 
 <label for = firstName> Name </label> <br>          <input type=text name=firstName id=firstName required /> <br> <br>
 <label for = lastName> Email </label> <br>          <input type=email name=lastName id=lastName  required/> <br> <br>
 <label for = department> department </label> <br>   <input type=text name=dept id=dept required /> <br>  <br> 
<label for = position> position </label> <br>        <input type= text name=pos id=pos required /> <br>  <br> 
<input type=submit value= submit name= submit>
</form>
</div>
<?php
	}
?>
	</body>
	</html>