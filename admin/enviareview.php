<?php include "../db.php";
$connection = mysql_connect($servername,$username, $password);
if (!$connection){
  die("Could not connect: " . mysql_error()); }
mysql_select_db($db, $connection);


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Villa Aqua Reviews</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
}
</style>
</head>

<body>
<p>
  <?php if (!$_POST["correo"]){?>
<img src="../images/logo-villaaqua.png" width="340" height="90" /></p>
<div style="padding:10px;">
<h3>Envío de reviews</h3>
<form id="form1" name="form1" method="post" action="enviareview.php?idr=<?php echo $_REQUEST["idr"];?>">
  
  <label for="correo">Email:</label>
  <input name="correo" type="text" id="correo" size="30" />
  <input type="submit" name="button" id="button" value="Submit" />
</form>
</div>
<?php }?>
  <?php 
  $idr=$_REQUEST["idr"];
  $destino=$_POST["correo"];
  if (is_numeric($idr) && $destino){
  $query="select * from reviews where idreview=".$idr;
$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
    
    
$text=$text."<div style='font-family:Arial, Helvetica, sans-serif; font-size:14px'>";
$text=$text."<img src='http://www.villaaqua.com/images/logo-villaaqua.png' width='340' height='90' /><br /><br /><br />";
$text=$text."<table width='590' border='0' cellspacing='0' cellpadding='2' >";
$text=$text."<tr><td ><span style='color:#2cbabb; font-size:18px'>GUEST INFORMATION</span></td>";
$text=$text."<td >&nbsp;</td></tr>";
$text=$text."<tr><td width='253' >Name</td>";
$text=$text."<td width='326' ><span style='color:#2cbabb'>".$row['name']."</span></td></tr>";
$text=$text."<tr><td >City / Country</td>";
$text=$text."<td ><span style='color:#2cbabb'>".$row['city']."</span></td></tr>";
$text=$text."<tr><td >Email</td>";
$text=$text."<td ><span style='color:#2cbabb'>".$row['email']."</span></td></tr>";
$text=$text."<tr><td >Phone #</td>";
$text=$text."<td ><span style='color:#2cbabb'>".$row['phone']."</span></td></tr>";
$text=$text."</table><br /><br />";
$text=$text."<table width='590' border='0' cellspacing='0' cellpadding='2' >";
$text=$text."<tr><td width='250' ><span style='color:#2cbabb; font-size:18px'>VILLA</span></td>";
$text=$text."<td width='329' ><img src='http://www.villaaqua.com/images/caritas.png' width='114' height='24' /></td></tr>";
$text=$text."<tr><td >Maintenance:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['villaMaintenance']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Amenities:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['villaAmenities']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Was everything working properly?</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['villaWorking']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Cleanliness:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['villaCleanliness']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Swimming pool maintenance:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['villaPool']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Garden maintenance:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['villaGarden']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Comments:</td>";
$text=$text."<td ><span style='color:#2cbabb'>".$row['villaComments']."</span></td></tr>";
$text=$text."</table><br /><br />";
$text=$text."<table width='590' border='0' cellspacing='1' cellpadding='2' >";
$text=$text."<tr><td width='248' ><span style='color:#2cbabb; font-size:18px'>HOUSE KEEPING</span></td>";
$text=$text."<td width='331'><img src='http://www.villaaqua.com/images/caritas.png' width='114' height='24' /></td></tr>";
$text=$text."<tr><td >Friendliness of the staff:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['houseFriendliness']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Quality of Service:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['houseService']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Cleanliness of the Villa:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['houseCleanliness']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Comments:</td>";
$text=$text."<td ><span style='color:#2cbabb'>".$row['houseComments']."</span></td></tr>";
$text=$text."</table><br /><br />";
$text=$text."<table width='590' border='0' cellspacing='1' cellpadding='2' >";
$text=$text."<tr><td width='247' ><span style='color:#2cbabb; font-size:18px'>CONCIERGE</span></td>";
$text=$text."<td width='332' ><img src='http://www.villaaqua.com/images/caritas.png' width='114' height='24' /></td></tr>";
$text=$text."<tr><td >Friendliness of the concierge: </td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['conciergeFriendliness']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Quality of Service:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['conciergeService']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Foreign languages spoken:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['conciergeLanguages']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Activities recommended: </td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['conciergeActivities']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Restaurants recommended: </td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['conciergeRestaurants']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td valign='top' >Comments:</td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>".$row['conciergeComments']."</span></td></tr>";
$text=$text."</table><br /><br />";
$text=$text."<table width='590' border='0' cellspacing='0' cellpadding='2' >";
$text=$text."<tr><td width='255' ><span style='color:#2cbabb; font-size:18px'>CHEF</span></td>";
$text=$text."<td width='324' ><img src='http://www.villaaqua.com/images/caritas.png' width='114' height='24' /></td></tr>";
$text=$text."<tr><td >Friendliness of the Chef:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['chefFriendliness']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Quality of Service:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['chefService']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Cleanliness of the kitchen:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['chefCleanliness']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Food Presentation:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['chefPresentation']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Food flavor:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['chefFalvor']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td >Quality of food:</td>";
$text=$text."<td ><img src='http://www.villaaqua.com/images/".$row['chefFood']."cal.png' width='114' height='22' /></td>";
$text=$text."</tr><tr><td valign='top' >Comments: </td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>".$row['chefComments']."</span></td></tr>";
$text=$text."</table><br /><br />";
$text=$text."<table width='590' border='0' cellspacing='0' cellpadding='2' >";
$text=$text."<tr><td width='257' ><span style='color:#2cbabb; font-size:18px'>GENERAL SATISFACTION </span></td><td width='325' ><img src='http://www.villaaqua.com/images/caritas.png' width='114' height='24' /></td></tr>";
$text=$text."<tr><td valign='top' >How would you rate your stay?:</td>";
$text=$text."<td valign='top' ><img src='http://www.villaaqua.com/images/".$row['generalRate']."cal.png' width='114' height='22' /></td></tr>";
$text=$text."<tr><td valign='top' >&nbsp;</td><td valign='top' >&nbsp;</td></tr>";
$text=$text."<tr><td valign='top' >Would you select this villa for future?</td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>";
if ($row['generalFuture']==1){ $text=$text."YES"; }
if ($row['generalFuture']==0){ $text=$text."NO"; }
$text=$text."</span></td></tr>";
$text=$text."<tr><td valign='top' >&nbsp;</td><td valign='top' >&nbsp;</td></tr>";
$text=$text."<tr><td valign='top' >The best feature of the Villa?</td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>".$row['bestFeature']."</span></td></tr>";
$text=$text."<tr><td valign='top' >&nbsp;</td><td valign='top' >&nbsp;</td></tr>";
$text=$text."<tr><td valign='top' >The worst of the Villa?</td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>".$row['worst']."</span></td></tr>";
$text=$text."<tr><td valign='top' >&nbsp;</td><td valign='top' >&nbsp;</td></tr>";
$text=$text."<tr><td valign='top' >What is the Villa lacking? </td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>".$row['lacking']."</span></td></tr>";
$text=$text."<tr><td valign='top' >&nbsp;</td><td valign='top' >&nbsp;</td></tr>";
$text=$text."<tr><td valign='top' >Would you like to receive informatio of deals and promotions?</td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>";
if ($row['receiveInformation']==1){ $text=$text. "YES"; }
if ($row['receiveInformation']==0){ $text=$text. "NO"; }
$text=$text."</span></td></tr>";
$text=$text."<tr><td valign='top' >&nbsp;</td><td valign='top' >&nbsp;</td></tr>";
$text=$text."<tr><td valign='top' >Would you be so kind to share a review of your stay for our future guests?</td>";
$text=$text."<td valign='top' ><span style='color:#2cbabb'>".$row['reviewShare']."</span></td></tr>";
$text=$text."</table></div>";
 }}
 
 
if($text!="" && is_numeric($idr)) {
$to = $destino; 
$from = 'rentals@villaaqua.com';
$subject = "Review from ".$row['name'];
$message = $text;

// Set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: Villa Aqua Rentals <rentals@villaaqua.com>' . "\r\n";
if($message!= ''){
	$mail_sent = @mail($to,$subject,$message,$headers);
	//echo $mail_sent ? "Mail sent" : "Mail failed";
	if($mail_sent){
		
		
	$mailsent=1;
	} else{
	$mailsent=0;
	}
}
}
 

 ?>
 <?php if ($mailsent==1){?>
<h3>
Mensaje enviado correctamente
</h3>
<?php
echo $message;
 }?>
</body>
</html>
<?php
	mysql_close ($connection);?>