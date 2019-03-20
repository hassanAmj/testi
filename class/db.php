<?php
$dsn = "mysql:host=localhost;dbname=database_amlakmehdi"; 
$username = "root"; 
$password = "567Mvev5WWtpwrFR"; 
try{
$connect_db = new PDO( $dsn, $username, $password );  
$connect_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $pd){
echo $pd->getMessage();
}
?>