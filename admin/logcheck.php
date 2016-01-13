<? 
if ($_REQUEST["out"]==1){
session_start(); 
session_destroy(); 
}
// Login & Session example by sde 
// auth.php 

// start session 
session_start();  
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);

// convert username and password from _POST or _SESSION 
if($_POST["log"]){ 
  $_SESSION['nusuario']=mysql_real_escape_string($_POST["usernm"]); 
  $_SESSION['clavepass']=mysql_real_escape_string($_POST["passwrd"]);   
} 

// query for a user/pass match 

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
