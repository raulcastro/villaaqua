<? 
date_default_timezone_set('America/Cancun');
if ($_REQUEST["out"]==1){
session_start(); 
session_destroy(); 
}
// Login & Session example by sde 
// auth.php 

// start session 
session_start();  

// convert username and password from _POST or _SESSION 
if($_POST["log"]){ 
  $_SESSION['nusuario']=$_POST["usernm"]; 
  $_SESSION['clavepass']=$_POST["passwrd"];   
} 

// query for a user/pass match 
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$result=mysql_query("select * from owners where estatus=1 and nuser='" . $_SESSION['nusuario'] . "' and passwrd='" . $_SESSION['clavepass'] . "'"); 

// retrieve number of rows resulted 
$num=mysql_num_rows($result);  
while($row = mysql_fetch_array($result)){
	  $villaid=1; 
	  $owneridses=$row['idowner'];}
mysql_close ($connection);	  
// print login form and exit if failed. 
if($num < 1){ 
  header( "Location: login.php" );   
  exit; 
} 
?>  
