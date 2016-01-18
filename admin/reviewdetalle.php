<?php include "../db.php";
$connection = mysql_connect($servername,$username, $password);
if (!$connection){
  die('Could not connect: ' . mysql_error()); }
mysql_select_db($db, $connection);
$idr=$_REQUEST["idr"];
if ($_POST["name"]){
$name=mysql_real_escape_string($_POST["name"]);

 	 	 	 	 	 	
$name=mysql_real_escape_string($_POST["name"]);
//$date=now();
$city=mysql_real_escape_string($_POST["city"]);
$email=mysql_real_escape_string($_POST["email"]);
$phone=mysql_real_escape_string($_POST["phone"]);
$villaMaintenance=$_POST["villaMaintenance"];
$villaAmenities=$_POST["villaAmenities"];
$villaWorking=$_POST["villaWorking"];
$villaCleanliness=$_POST["villaCleanliness"];
$villaPool=$_POST["villaPool"];
$villaGarden=$_POST["villaGarden"];
$villaComments=mysql_real_escape_string($_POST["villaComments"]);
$houseFriendliness=$_POST["houseFriendliness"];
$houseService=$_POST["houseService"];
$houseCleanliness=$_POST["houseCleanliness"];
$houseComments=mysql_real_escape_string($_POST["houseComments"]);
$conciergeFriendliness=$_POST["conciergeFriendliness"];
$conciergeService=$_POST["conciergeService"];
$conciergeLanguages=$_POST["conciergeLanguages"];
$conciergeActivities=$_POST["conciergeActivities"];
$conciergeRestaurants=$_POST["conciergeRestaurants"];
$conciergeComments=mysql_real_escape_string($_POST["conciergeComments"]);
$chefFriendliness=$_POST["chefFriendliness"];
$chefService=$_POST["chefService"];
$chefCleanliness=$_POST["chefCleanliness"];
$chefPresentation=$_POST["chefPresentation"];
$chefFalvor=$_POST["chefFalvor"];
$chefFood=$_POST["chefFood"];
$chefComments=mysql_real_escape_string($_POST["chefComments"]);
$generalRate=$_POST["generalRate"];
$generalFuture=$_POST["generalFuture"];
$bestFeature=$_POST["bestFeature"];
$worst=$_POST["worst"];
$lacking=$_POST["lacking"];
$receiveInformation=$_POST["receiveInformation"];
$reviewShare=$_POST["reviewShare"];

$sql="insert into reviews (name, date, city, email, phone, villaMaintenance, villaAmenities, villaWorking, villaCleanliness, villaPool, villaGarden, villaComments, houseFriendliness, houseService, houseCleanliness, houseComments, conciergeFriendliness, conciergeService, conciergeLanguages, conciergeActivities, conciergeRestaurants, conciergeComments, chefFriendliness, chefService, chefCleanliness, chefPresentation, chefFalvor, chefFood, chefComments, generalRate, generalFuture, bestFeature, worst, lacking, receiveInformation, reviewShare)";
$sql=$sql." values ('$name', now(), '$city', '$email', '$phone', '$villaMaintenance', '$villaAmenities', '$villaWorking', '$villaCleanliness', '$villaPool', '$villaGarden', '$villaComments', '$houseFriendliness', '$houseService', '$houseCleanliness', '$houseComments', '$conciergeFriendliness', '$conciergeService', '$conciergeLanguages', '$conciergeActivities', '$conciergeRestaurants', '$conciergeComments', '$chefFriendliness', '$chefService', '$chefCleanliness', '$chefPresentation', '$chefFalvor', '$chefFood', '$chefComments', '$generalRate', '$generalFuture', '$bestFeature', '$worst', '$lacking', '$receiveInformation', '$reviewShare')";



mysql_query ($sql);
$inserto=1;
}

if ($_GET['onIndex'] == on)
{
	$sql = 'UPDATE reviews SET onIndex = 1 WHERE idreview= '.$idr;
	mysql_query ($sql);
	
}
else 
{
	$sql = 'UPDATE reviews SET onIndex = 0 WHERE idreview= '.$idr;
	mysql_query ($sql);
}

if ($_GET['onReviews'] == on)
{
	$sql = 'UPDATE reviews SET onSection = 1 WHERE idreview= '.$idr;
	mysql_query ($sql);

}
else
{
	$sql = 'UPDATE reviews SET onSection = 0 WHERE idreview= '.$idr;
	mysql_query ($sql);
}

if ($_GET['idr'])
{
	$query = 'SELECT * FROM reviews WHERE idreview = '.$idr;
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$publish = $row;
	
}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Villa Aqua Suggestion Form</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<style>
body{
font-size:14px;
font-family: 'Open Sans', sans-serif;
color: #999;
padding:5px;
letter-spacing: .06em;
line-height: 14px;
}
.verde{
color:#2cbabb;
}
.verdebig{
color:#2cbabb;
font-size:18px;
}
h2{ font-weight:normal;
margin-top:15px;
margin-bottom:15px;
color:#C2C2C2;
}
.cuadro{
text-align:justify;
margin-top:5px;
}
#villa11,#villa12,#villa13,#villa14,#villa15,#villa21,#villa22,#villa23,#villa24,#villa25 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#villa31,#villa32,#villa33,#villa34,#villa35{
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#villa41,#villa42,#villa43,#villa44,#villa45 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#villa51,#villa52,#villa53,#villa54,#villa55,#villa61,#villa62,#villa63,#villa64,#villa65 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#house11,#house12,#house13,#house14,#house15,#house21,#house22,#house23,#house24,#house25,#house31,#house32,#house33,#house34,#house35 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge11,#concierge12,#concierge13,#concierge14,#concierge15,#concierge21,#concierge22,#concierge23,#concierge24,#concierge25 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge31,#concierge32,#concierge33,#concierge34,#concierge35{
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge41,#concierge42,#concierge43,#concierge44,#concierge45 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge51,#concierge52,#concierge53,#concierge54,#concierge55 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef11,#chef12,#chef13,#chef14,#chef15,#chef21,#chef22,#chef23,#chef24,#chef25 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef31,#chef32,#chef33,#chef34,#chef35{
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef41,#chef42,#chef43,#chef44,#chef45 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef51,#chef52,#chef53,#chef54,#chef55,#chef61,#chef62,#chef63,#chef64,#chef65,#general11,#general12 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#general11,#general12,#general13,#general14,#general15,#general21,#general22,#promo11,#promo12 {
background-image:url(../images/check-off.png);
width:17px;
height:17px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
.puntos{
background-image:url(../images/puntos.png);
background-repeat:repeat-x;
background-position:bottom;
}
.renglon{
background-color:#FFF; float:left; }
td{color:#999;}

</style>
<script>
function checa(campo,param){
document.getElementById('villa'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('villa'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('villa'+campo+'3').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('villa'+campo+'4').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('villa'+campo+'5').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('villa'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';

if (campo==1) {document.getElementById('villaMaintenance').value=param;}
if (campo==2) {document.getElementById('villaAmenities').value=param;}
if (campo==3) {document.getElementById('villaWorking').value=param;}
if (campo==4) {document.getElementById('villaCleanliness').value=param;}
if (campo==5) {document.getElementById('villaPool').value=param;}
if (campo==6) {document.getElementById('villaGarden').value=param;}

}	
function house(campo,param){
document.getElementById('house'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('house'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('house'+campo+'3').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('house'+campo+'4').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('house'+campo+'5').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('house'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';

if (campo==1) {document.getElementById('houseFriendliness').value=param;}
if (campo==2) {document.getElementById('houseService').value=param;}
if (campo==3) {document.getElementById('houseCleanliness').value=param;}

}
function concierge(campo,param){
document.getElementById('concierge'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('concierge'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('concierge'+campo+'3').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('concierge'+campo+'4').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('concierge'+campo+'5').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('concierge'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';

if (campo==1) {document.getElementById('conciergeFriendliness').value=param;}
if (campo==2) {document.getElementById('conciergeService').value=param;}
if (campo==3) {document.getElementById('conciergeLanguages').value=param;}
if (campo==4) {document.getElementById('conciergeActivities').value=param;}
if (campo==5) {document.getElementById('conciergeRestaurants').value=param;}

}	
function chef(campo,param){
document.getElementById('chef'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('chef'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('chef'+campo+'3').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('chef'+campo+'4').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('chef'+campo+'5').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('chef'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';

if (campo==1) {document.getElementById('chefFriendliness').value=param;}
if (campo==2) {document.getElementById('chefService').value=param;}
if (campo==3) {document.getElementById('chefCleanliness').value=param;}
if (campo==4) {document.getElementById('chefPresentation').value=param;}
if (campo==5) {document.getElementById('chefFalvor').value=param;}
if (campo==6) {document.getElementById('chefFood').value=param;}

}	
function general(campo,param){
document.getElementById('general'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('general'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('general'+campo+'3').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('general'+campo+'4').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('general'+campo+'5').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('general'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';
document.getElementById('generalRate').value=param;

}
function general2(campo,param){
document.getElementById('general'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('general'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('general'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';
document.getElementById('generalFuture').value=param;

}
function promo(campo,param){
document.getElementById('promo'+campo+'1').style.backgroundImage = 'url(../images/check-off.png)';
document.getElementById('promo'+campo+'2').style.backgroundImage = 'url(../images/check-off.png)';

document.getElementById('promo'+campo+param).style.backgroundImage = 'url(../images/check-on.png)';
document.getElementById('receiveInformation').value=param;

}	

function validar(formulario) {
if (formulario.villaMaintenance.value =='0') {
    alert("Please give us your rate about the Villa");
    formulario.villa11.focus();
    return (false);
  }
if (formulario.houseFriendliness.value =='0') {
    alert("Please give us your rate about the House Keeping");
    formulario.house11.focus();
    return (false);
  }  
if (formulario.conciergeFriendliness.value =='0') {
    alert("Please give us your rate about the Concierge");
    formulario.concierge11.focus();
    return (false);
  }     
if (formulario.name.value =='') {
    alert("Please type your name");
    formulario.name.focus();
    return (false);
  } 
  return (true); 
}
							
</script>
<script type="text/javascript">
function NewWindow(mypage,myname,w,h,scroll){var winl=(screen.width-w)/2;var wint=(screen.height-h)/2;winprops='height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable'
win=window.open(mypage,myname,winprops)
if(parseInt(navigator.appVersion)>=4){win.window.focus();}}
</script>
<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>
</head>

<body>
<div style="text-align:center"><img src="images/logo-villaaqua.png" width="340" height="90" /></div>
<div class="cuadro">
<?php if ($inserto==1){?>
<?php }else{?>
  <p class="verdebig"><?php 
  if (is_numeric($idr)){
  $query="select * from reviews where idreview=".$idr;
$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){?>
  </p>
  <table width="422" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td><span class="verdebig">GUEST INFORMATION</span></td>
    </tr>
    <tr>
      <td height="20">Name</td>
    </tr>
    <tr>
      <td><div style="color:#3CC"><?php echo $row["name"];?></div></td>
    </tr>
    <tr>
      <td>City / Country</td>
    </tr>
    <tr>
      <td height="20"><div style="color:#3CC"><?php echo $row["city"];?></div></td>
    </tr>
    <tr>
      <td>Email</td>
    </tr>
    <tr>
      <td><span style="color:#3CC"><?php echo $row["email"];?></span></td>
    </tr>
    <tr>
      <td height="20">Phone #</td>
    </tr>
    <tr>
      <td><div style="color:#3CC"><?php echo $row["phone"];?></div></td>
    </tr>
  </table>
  <br />
  <br />
  <table border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="300"><span class="verdebig">VILLA</span></td>
      <td align="center"><img src="images/triste.png" width="17" height="17" /></td>
      <td colspan="3" align="center">&nbsp;</td>
      <td align="center"><img src="images/feliz.png" width="17" height="17" /></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Maintenance<input name="villaMaintenance" type="hidden" id="villaMaintenance" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["villaMaintenance"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["villaMaintenance"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["villaMaintenance"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["villaMaintenance"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["villaMaintenance"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr >
      <td class="puntos"><div class="renglon">Amenities <input name="villaAmenities" type="hidden" id="villaAmenities" value="0" /></div></td>
       <td align="center"><div id="villa11" <?php if ($row["villaAmenities"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["villaAmenities"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["villaAmenities"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["villaAmenities"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["villaAmenities"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
    <td class="puntos"><div class="renglon">Was everything working properly? <input name="villaWorking" type="hidden" id="villaWorking" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["villaWorking"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["villaWorking"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["villaWorking"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["villaWorking"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["villaWorking"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Cleanliness<input name="villaCleanliness" type="hidden" id="villaCleanliness" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["villaCleanliness"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["villaCleanliness"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["villaCleanliness"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["villaCleanliness"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["villaCleanliness"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Swimming pool maintenance<input name="villaPool" type="hidden" id="villaPool" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["villaPool"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["villaPool"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["villaPool"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["villaPool"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["villaPool"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Garden maintenance<input name="villaGarden" type="hidden" id="villaGarden" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["villaGarden"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["villaGarden"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["villaGarden"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["villaGarden"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["villaGarden"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
    <td colspan="6">Comments</td>
    </tr>
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["villaComments"];?></div></td>
    </tr>
  </table>
  <br /><br /><table border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="300"><span class="verdebig">HOUSE KEEPING</span></td>
      <td align="center"><img src="images/triste.png" width="17" height="17" /></td>
      <td colspan="3" align="center">&nbsp;</td>
      <td align="center"><img src="images/feliz.png" width="17" height="17" /></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Friendliness of the staff <input name="houseFriendliness" type="hidden" id="houseFriendliness" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["houseFriendliness"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["houseFriendliness"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["houseFriendliness"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["houseFriendliness"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["houseFriendliness"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Quality of Service <input name="houseService" type="hidden" id="houseService" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["houseService"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["houseService"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["houseService"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["houseService"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["houseService"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Cleanliness of the Villa <input name="houseCleanliness" type="hidden" id="houseCleanliness" value="0" /></div></td>
     <td align="center"><div id="villa11" <?php if ($row["houseCleanliness"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["houseCleanliness"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["houseCleanliness"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["houseCleanliness"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["houseCleanliness"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td colspan="6">Comments</td>
    </tr>
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["houseComments"];?></div></td>
    </tr>
  </table><br /><br />
  <table border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="300"><span class="verdebig">CONCIERGE</span></td>
      <td align="center"><img src="images/triste.png" width="17" height="17" /></td>
      <td colspan="3" align="center">&nbsp;</td>
      <td align="center"><img src="images/feliz.png" width="17" height="17" /></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Friendliness of the concierge 
        <input name="conciergeFriendliness" type="hidden" id="conciergeFriendliness" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["conciergeFriendliness"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["conciergeFriendliness"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["conciergeFriendliness"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["conciergeFriendliness"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["conciergeFriendliness"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Quality of Service <input name="conciergeService" type="hidden" id="conciergeService" value="0" /></div></td>
       <td align="center"><div id="villa11" <?php if ($row["conciergeService"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["conciergeService"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["conciergeService"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["conciergeService"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["conciergeService"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Foreign languages spoken <input name="conciergeLanguages" type="hidden" id="conciergeLanguages" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["conciergeLanguages"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["conciergeLanguages"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["conciergeLanguages"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["conciergeLanguages"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["conciergeLanguages"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Activities recommended<input name="conciergeActivities" type="hidden" id="conciergeActivities" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["conciergeActivities"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["conciergeActivities"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["conciergeActivities"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["conciergeActivities"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["conciergeActivities"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Restaurants recommended<input name="conciergeRestaurants" type="hidden" id="conciergeRestaurants" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["conciergeRestaurants"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["conciergeRestaurants"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["conciergeRestaurants"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["conciergeRestaurants"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["conciergeRestaurants"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
    <td colspan="6">Comments</td>
    </tr>
    
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["conciergeComments"];?></div></td>
    </tr>
<tr></tr>
  </table>
  <br /><br />
  <table border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="300"><span class="verdebig">CHEF</span></td>
      <td align="center"><img src="images/triste.png" width="17" height="17" /></td>
      <td colspan="3" align="center">&nbsp;</td>
      <td align="center"><img src="images/feliz.png" width="17" height="17" /></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Friendliness of the Chef 
        <input name="chefFriendliness" type="hidden" id="chefFriendliness" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["chefFriendliness"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["chefFriendliness"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["chefFriendliness"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["chefFriendliness"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["chefFriendliness"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Quality of Service <input name="chefService" type="hidden" id="chefService" value="0" /></div></td>
       <td align="center"><div id="villa11" <?php if ($row["chefService"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["chefService"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["chefService"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["chefService"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["chefService"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Cleanliness of the kitchen <input name="chefCleanliness" type="hidden" id="chefCleanliness" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["chefCleanliness"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["chefCleanliness"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["chefCleanliness"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["chefCleanliness"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["chefCleanliness"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Food Presentation<input name="chefPresentation" type="hidden" id="chefPresentation" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["chefPresentation"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["chefPresentation"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["chefPresentation"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["chefPresentation"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["chefPresentation"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Food flavor<input name="chefFalvor" type="hidden" id="chefFalvor" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["chefFalvor"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["chefFalvor"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["chefFalvor"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["chefFalvor"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["chefFalvor"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Quality of food<input name="chefFood" type="hidden" id="chefFood" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["chefFood"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["chefFood"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["chefFood"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["chefFood"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["chefFood"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
    <td colspan="6">Comments</td>
    </tr>
    <tr>
      <td colspan="6"><label for="chefcomments"></label>
        <div style="color:#3CC"><?php echo $row["chefComments"];?></div></td>
    </tr>
  </table><br /><br />
  <table width="421" border="0" cellpadding="2" cellspacing="2">
   
    <tr>					
      <td width="300"><span class="verdebig">GENERAL SATISFACTION </span></td>
      <td align="center"><img src="images/triste.png" width="17" height="17" /></td>
      <td colspan="3" align="center">&nbsp;</td>
      <td align="center"><img src="images/feliz.png" width="17" height="17" /></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">How would you rate your stay?
        <input name="generalRate" type="hidden" id="generalRate" value="0" /></div></td>
      <td align="center"><div id="villa11" <?php if ($row["generalRate"]>0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa12"<?php if ($row["generalRate"]>1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa13" <?php if ($row["generalRate"]>2){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa14" <?php if ($row["generalRate"]>3){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["generalRate"]>4){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td colspan="4" class="puntos"><div class="renglon">Would you select this villa for future?
          <input name="generalFuture" type="hidden" id="generalFuture" value="0" /></div></td>
      <td align="center"><div id="villa14" <?php if ($row["generalFuture"]==1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["generalFuture"]==0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td align="center">yes</td>
      <td align="center">no</td>
    </tr>
      <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td colspan="6">The best feature of the Villa?</td>
    </tr>
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["bestFeature"];?></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6">The worst of the Villa?</td>
    </tr>
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["worst"];?></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6">What is the Villa lacking?</td>
    </tr>
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["lacking"];?></div></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" class="puntos"><div class="renglon">Would you like to receive informatio<br />
of deals and promotions?
<input name="generalFuture" type="hidden" id="generalFuture" value="0" /></div></td>
      <td align="center"><div id="villa14" <?php if ($row["receiveInformation"]==1){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      <td align="center"><div id="villa15" <?php if ($row["receiveInformation"]==0){ ?>style="background-color:#0a9f99"<?php }?>></div></td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td align="center">yes</td>
      <td align="center">no</td>
    </tr>
    <tr>
      <td colspan="6">Would you be so kind to share a review of your stay for our future guests?</td>
    </tr>
    <tr>
      <td colspan="6"><div style="color:#3CC"><?php echo $row["reviewShare"];?></div></td>
    </tr>
    </table>
  <div style="color:#3CC"></div>
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
  </table>
  <?php }}?>
  <div class="publish-reviews">
  <br>
  	<span class="verdebig">PULISH REVIEW </span>
  	<br><br>
  	<form action="reviewdetalle.php" method="get">
  		<input type="hidden" name="idr" value="<?php echo $idr; ?>" >
	  	<div class="left"><input type="checkbox" name="onIndex" value="on" <?php if ($publish['onIndex'] == 1) echo 'checked'; ?>>On the index</div>
	  	<div class="right"><input type="checkbox" name="onReviews" value="on" <?php if ($publish['onSection'] == 1) echo 'checked'; ?>>On reviews</div>
	  	<br>
	  	<input type="submit" value="Save">
	</form>
  </div>
</div>
<?php }?>
 <p align="center"><img src="images/textura.png" width="100%" height="129" /></p>
</body>
</html>
<?php
	mysql_close ($connection);?>