<?PHP
$ip = $_SERVER['SERVER_ADDR'];
echo $ip;
$servername='adharacancun.com';

$username='adharaca_reserva';
$password='LFJ5EH5g2G';
$db="adharaca_reservations";

$connection = mysql_connect($servername,$username, $password);
if (!$connection){
die('Could not connecta: ' . mysql_error()); }
else{
	echo "vientos";
}
mysql_select_db($db, $connection);
?>