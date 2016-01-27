<?php include "../db.php";
$connection = mysql_connect($servername,$username, $password);
if (!$connection){
  die('Could not connect: ' . mysql_error()); }
mysql_select_db($db, $connection);
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

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Villa Aqua Suggestion Form</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<style>
body{
font-size:22px;
font-family: 'Open Sans', sans-serif;
color: #999;
padding:20px;
letter-spacing: .06em;
line-height: 26px;
}
.verde{
color:#2cbabb;
}
.verdebig{
color:#2cbabb;
font-size:28px;
}
h2{ font-weight:normal;
margin-top:35px;
margin-bottom:35px;
color:#C2C2C2;
}
.cuadro{
text-align:justify;
margin-top:15px;
}
#villa11,#villa12,#villa13,#villa14,#villa15,#villa21,#villa22,#villa23,#villa24,#villa25 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#villa31,#villa32,#villa33,#villa34,#villa35{
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#villa41,#villa42,#villa43,#villa44,#villa45 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#villa51,#villa52,#villa53,#villa54,#villa55,#villa61,#villa62,#villa63,#villa64,#villa65 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#house11,#house12,#house13,#house14,#house15,#house21,#house22,#house23,#house24,#house25,#house31,#house32,#house33,#house34,#house35 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge11,#concierge12,#concierge13,#concierge14,#concierge15,#concierge21,#concierge22,#concierge23,#concierge24,#concierge25 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge31,#concierge32,#concierge33,#concierge34,#concierge35{
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge41,#concierge42,#concierge43,#concierge44,#concierge45 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#concierge51,#concierge52,#concierge53,#concierge54,#concierge55 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef11,#chef12,#chef13,#chef14,#chef15,#chef21,#chef22,#chef23,#chef24,#chef25 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef31,#chef32,#chef33,#chef34,#chef35{
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef41,#chef42,#chef43,#chef44,#chef45 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#chef51,#chef52,#chef53,#chef54,#chef55,#chef61,#chef62,#chef63,#chef64,#chef65,#general11,#general12 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
#general11,#general12,#general13,#general14,#general15,#general21,#general22,#promo11,#promo12 {
background-image:url(/back-working/images/check-off.png);
width:37px;
height:37px;
padding:0px;
background-repeat:no-repeat;
text-align:center;
}
.puntos{
background-image:url(/back-working/images/puntos.png);
background-repeat:repeat-x;
background-position:bottom;
}
.renglon{
background-color:#FFF; float:left; padding-right:5px; }
td{color:#999;}

</style>
<script>
function checa(campo,param){
document.getElementById('villa'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('villa'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('villa'+campo+'3').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('villa'+campo+'4').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('villa'+campo+'5').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('villa'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';

if (campo==1) {document.getElementById('villaMaintenance').value=param;}
if (campo==2) {document.getElementById('villaAmenities').value=param;}
if (campo==3) {document.getElementById('villaWorking').value=param;}
if (campo==4) {document.getElementById('villaCleanliness').value=param;}
if (campo==5) {document.getElementById('villaPool').value=param;}
if (campo==6) {document.getElementById('villaGarden').value=param;}

}	
function house(campo,param){
document.getElementById('house'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('house'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('house'+campo+'3').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('house'+campo+'4').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('house'+campo+'5').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('house'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';

if (campo==1) {document.getElementById('houseFriendliness').value=param;}
if (campo==2) {document.getElementById('houseService').value=param;}
if (campo==3) {document.getElementById('houseCleanliness').value=param;}

}
function concierge(campo,param){
document.getElementById('concierge'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('concierge'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('concierge'+campo+'3').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('concierge'+campo+'4').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('concierge'+campo+'5').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('concierge'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';

if (campo==1) {document.getElementById('conciergeFriendliness').value=param;}
if (campo==2) {document.getElementById('conciergeService').value=param;}
if (campo==3) {document.getElementById('conciergeLanguages').value=param;}
if (campo==4) {document.getElementById('conciergeActivities').value=param;}
if (campo==5) {document.getElementById('conciergeRestaurants').value=param;}

}	
function chef(campo,param){
document.getElementById('chef'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('chef'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('chef'+campo+'3').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('chef'+campo+'4').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('chef'+campo+'5').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('chef'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';

if (campo==1) {document.getElementById('chefFriendliness').value=param;}
if (campo==2) {document.getElementById('chefService').value=param;}
if (campo==3) {document.getElementById('chefCleanliness').value=param;}
if (campo==4) {document.getElementById('chefPresentation').value=param;}
if (campo==5) {document.getElementById('chefFalvor').value=param;}
if (campo==6) {document.getElementById('chefFood').value=param;}

}	
function general(campo,param){
document.getElementById('general'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('general'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('general'+campo+'3').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('general'+campo+'4').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('general'+campo+'5').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('general'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';
document.getElementById('generalRate').value=param;

}
function general2(campo,param){
document.getElementById('general'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('general'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('general'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';
document.getElementById('generalFuture').value=param;

}
function promo(campo,param){
document.getElementById('promo'+campo+'1').style.backgroundImage = 'url(/back-working/images/check-off.png)';
document.getElementById('promo'+campo+'2').style.backgroundImage = 'url(/back-working/images/check-off.png)';

document.getElementById('promo'+campo+param).style.backgroundImage = 'url(/back-working/images/check-on.png)';
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
</head>

<body>
<div style="text-align:center"><img src="/back-working/images/logo-villaaqua.png" width="340" height="90" />  <h2>SUGGESTION FORM </h2></div>
<div class="cuadro">
<?php if ($inserto==1){?>

  <div style="text-align:center">

        <p class="verdebig">Thank you for helping us serve you better! </p>
    
        <p><br />
          Have a nice trip back home and we look forward <br />
        to welcome you back in Paradise in a near future! </p>

</div>
<?php }else{?>
  <p class="verdebig">On behalf of the Villa Aqua Team, we thank you for being our Guest! </p>
  <p>We would appreciate if you could spare a few minutes to fill out this questionnaire. We apreciate your help and for porviding us with the opportunity to improve our villa services and amenities. </p>
  <form id="form1" name="form1" method="post" action="" onSubmit = "return validar(this)">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="65%"><span class="verdebig">LA VILLA</span></td>
      <td width="7%" align="center"><img src="/back-working/images/triste.png" width="37" height="37" /></td>
      <td colspan="3" align="center"><img src="/back-working/images/barra.png" width="190" height="34" /></td>
      <td width="7%" align="center"><img src="/back-working/images/feliz.png" width="37" height="37" /></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Mantenimiento en general<input name="villaMaintenance" type="hidden" id="villaMaintenance" value="0" /></div></td>
      <td align="center"><div id="villa11" onclick="checa(1,1)"></div></td>
      <td align="center"><div id="villa12" onclick="checa(1,2)"></div></td>
      <td align="center"><div id="villa13" onclick="checa(1,3)"></div></td>
      <td align="center"><div id="villa14" onclick="checa(1,4)"></div></td>
      <td align="center"><div id="villa15" onclick="checa(1,5)"></div></td>
      </tr>
    <tr >
      <td class="puntos"><div class="renglon">Amenidades <input name="villaAmenities" type="hidden" id="villaAmenities" value="0" /></div></td>
       <td align="center"><div id="villa21" onclick="checa(2,1)"></div></td>
      <td align="center"><div id="villa22" onclick="checa(2,2)"></div></td>
      <td align="center"><div id="villa23" onclick="checa(2,3)"></div></td>
      <td align="center"><div id="villa24" onclick="checa(2,4)"></div></td>
      <td align="center"><div id="villa25" onclick="checa(2,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">¿Todo funcionó correctamente? <input name="villaWorking" type="hidden" id="villaWorking" value="0" /></div></td>
      <td align="center"><div id="villa31" onclick="checa(3,1)"></div></td>
      <td align="center"><div id="villa32" onclick="checa(3,2)"></div></td>
      <td align="center"><div id="villa33" onclick="checa(3,3)"></div></td>
      <td align="center"><div id="villa34" onclick="checa(3,4)"></div></td>
      <td align="center"><div id="villa35" onclick="checa(3,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Limpieza<input name="villaCleanliness" type="hidden" id="villaCleanliness" value="0" /></div></td>
      <td align="center"><div id="villa41" onclick="checa(4,1)"></div></td>
      <td align="center"><div id="villa42" onclick="checa(4,2)"></div></td>
      <td align="center"><div id="villa43" onclick="checa(4,3)"></div></td>
      <td align="center"><div id="villa44" onclick="checa(4,4)"></div></td>
      <td align="center"><div id="villa45" onclick="checa(4,5)"></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Mantenimiento de la piscina<input name="villaPool" type="hidden" id="villaPool" value="0" /></div></td>
      <td align="center"><div id="villa51" onclick="checa(5,1)"></div></td>
      <td align="center"><div id="villa52" onclick="checa(5,2)"></div></td>
      <td align="center"><div id="villa53" onclick="checa(5,3)"></div></td>
      <td align="center"><div id="villa54" onclick="checa(5,4)"></div></td>
      <td align="center"><div id="villa55" onclick="checa(5,5)"></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Mantenimiento de los jardines<input name="villaGarden" type="hidden" id="villaGarden" value="0" /></div></td>
      <td align="center"><div id="villa61" onclick="checa(6,1)"></div></td>
      <td align="center"><div id="villa62" onclick="checa(6,2)"></div></td>
      <td align="center"><div id="villa63" onclick="checa(6,3)"></div></td>
      <td align="center"><div id="villa64" onclick="checa(6,4)"></div></td>
      <td align="center"><div id="villa65" onclick="checa(6,5)"></div></td>
    </tr>
    <tr>
    <td colspan="6">Comentarios:</td>
      </tr>
    <tr>
      <td colspan="6"><label for="villacomments"></label>
        <textarea name="villaComments" id="villaComments" cols="45" rows="4" style="width:100%; font-size:24px"></textarea></td>
      </tr>
  </table>
  <br /><br /><table width="100%" border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="65%"><span class="verdebig">AMA DE LLAVES / CAMARISTA</span></td>
      <td width="7%" align="center"><img src="/back-working/images/triste.png" width="37" height="37" /></td>
      <td colspan="3" align="center"><img src="/back-working/images/barra.png" width="190" height="34" /></td>
      <td width="7%" align="center"><img src="/back-working/images/feliz.png" width="37" height="37" /></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Actitud del personal<input name="houseFriendliness" type="hidden" id="houseFriendliness" value="0" /></div></td>
      <td align="center"><div id="house11" onclick="house(1,1)"></div></td>
      <td align="center"><div id="house12" onclick="house(1,2)"></div></td>
      <td align="center"><div id="house13" onclick="house(1,3)"></div></td>
      <td align="center"><div id="house14" onclick="house(1,4)"></div></td>
      <td align="center"><div id="house15" onclick="house(1,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Calidad del servicio<input name="houseService" type="hidden" id="houseService" value="0" /></div></td>
       <td align="center"><div id="house21" onclick="house(2,1)"></div></td>
      <td align="center"><div id="house22" onclick="house(2,2)"></div></td>
      <td align="center"><div id="house23" onclick="house(2,3)"></div></td>
      <td align="center"><div id="house24" onclick="house(2,4)"></div></td>
      <td align="center"><div id="house25" onclick="house(2,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Limpieza de la casa<input name="houseCleanliness" type="hidden" id="houseCleanliness" value="0" /></div></td>
      <td align="center"><div id="house31" onclick="house(3,1)"></div></td>
      <td align="center"><div id="house32" onclick="house(3,2)"></div></td>
      <td align="center"><div id="house33" onclick="house(3,3)"></div></td>
      <td align="center"><div id="house34" onclick="house(3,4)"></div></td>
      <td align="center"><div id="house35" onclick="house(3,5)"></div></td>
      </tr>
    <tr>
      <td colspan="6">Comentarios:</td>
    </tr>
    <tr>
      <td colspan="6">
        <textarea name="houseComments" id="houseComments" cols="45" rows="4" style="width:100%; font-size:24px"></textarea></td>
      </tr>
  </table><br /><br />
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="65%"><span class="verdebig">ANFITRION DE VILLA /CONCIERGE</span></td>
      <td width="7%" align="center"><img src="/back-working/images/triste.png" width="37" height="37" /></td>
      <td colspan="3" align="center"><img src="/back-working/images/barra.png" width="190" height="34" /></td>
      <td width="7%" align="center"><img src="/back-working/images/feliz.png" width="37" height="37" /></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Actitud del Concierge
        <input name="conciergeFriendliness" type="hidden" id="conciergeFriendliness" value="0" /></div></td>
      <td align="center"><div id="concierge11" onclick="concierge(1,1)"></div></td>
      <td align="center"><div id="concierge12" onclick="concierge(1,2)"></div></td>
      <td align="center"><div id="concierge13" onclick="concierge(1,3)"></div></td>
      <td align="center"><div id="concierge14" onclick="concierge(1,4)"></div></td>
      <td align="center"><div id="concierge15" onclick="concierge(1,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Calidad de su servicio<input name="conciergeService" type="hidden" id="conciergeService" value="0" /></div></td>
       <td align="center"><div id="concierge21" onclick="concierge(2,1)"></div></td>
      <td align="center"><div id="concierge22" onclick="concierge(2,2)"></div></td>
      <td align="center"><div id="concierge23" onclick="concierge(2,3)"></div></td>
      <td align="center"><div id="concierge24" onclick="concierge(2,4)"></div></td>
      <td align="center"><div id="concierge25" onclick="concierge(2,5)"></div></td>
      </tr>
    <!-- <tr>
      <td class="puntos"><div class="renglon">Foreign languages spoken <input name="conciergeLanguages" type="hidden" id="conciergeLanguages" value="0" /></div></td>
      <td align="center"><div id="concierge31" onclick="concierge(3,1)"></div></td>
      <td align="center"><div id="concierge32" onclick="concierge(3,2)"></div></td>
      <td align="center"><div id="concierge33" onclick="concierge(3,3)"></div></td>
      <td align="center"><div id="concierge34" onclick="concierge(3,4)"></div></td>
      <td align="center"><div id="concierge35" onclick="concierge(3,5)"></div></td>
      </tr> -->
    <tr>
      <td class="puntos"><div class="renglon">Actividades recomendadas <input name="conciergeActivities" type="hidden" id="conciergeActivities" value="0" /></div></td>
      <td align="center"><div id="concierge41" onclick="concierge(4,1)"></div></td>
      <td align="center"><div id="concierge42" onclick="concierge(4,2)"></div></td>
      <td align="center"><div id="concierge43" onclick="concierge(4,3)"></div></td>
      <td align="center"><div id="concierge44" onclick="concierge(4,4)"></div></td>
      <td align="center"><div id="concierge45" onclick="concierge(4,5)"></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Restaurantes recomendados<input name="conciergeRestaurants" type="hidden" id="conciergeRestaurants" value="0" /></div></td>
      <td align="center"><div id="concierge51" onclick="concierge(5,1)"></div></td>
      <td align="center"><div id="concierge52" onclick="concierge(5,2)"></div></td>
      <td align="center"><div id="concierge53" onclick="concierge(5,3)"></div></td>
      <td align="center"><div id="concierge54" onclick="concierge(5,4)"></div></td>
      <td align="center"><div id="concierge55" onclick="concierge(5,5)"></div></td>
    </tr>
    <tr>
    <td colspan="6">Comentarios:</td>
      </tr>
    <tr>
      <td colspan="6">
        <textarea name="conciergeComments" id="conciergeComments" cols="45" rows="4" style="width:100%; font-size:24px"></textarea></td>
      </tr>
  </table>
  <br /><br />
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="65%"><span class="verdebig">CHEF</span></td>
      <td width="7%" align="center"><img src="/back-working/images/triste.png" width="37" height="37" /></td>
      <td colspan="3" align="center"><img src="/back-working/images/barra.png" width="190" height="34" /></td>
      <td width="7%" align="center"><img src="/back-working/images/feliz.png" width="37" height="37" /></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Actitud del Chef
        <input name="chefFriendliness" type="hidden" id="chefFriendliness" value="0" /></div></td>
      <td align="center"><div id="chef11" onclick="chef(1,1)"></div></td>
      <td align="center"><div id="chef12" onclick="chef(1,2)"></div></td>
      <td align="center"><div id="chef13" onclick="chef(1,3)"></div></td>
      <td align="center"><div id="chef14" onclick="chef(1,4)"></div></td>
      <td align="center"><div id="chef15" onclick="chef(1,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Calidad del servicio <input name="chefService" type="hidden" id="chefService" value="0" /></div></td>
       <td align="center"><div id="chef21" onclick="chef(2,1)"></div></td>
      <td align="center"><div id="chef22" onclick="chef(2,2)"></div></td>
      <td align="center"><div id="chef23" onclick="chef(2,3)"></div></td>
      <td align="center"><div id="chef24" onclick="chef(2,4)"></div></td>
      <td align="center"><div id="chef25" onclick="chef(2,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Limpieza de la cocina <input name="chefCleanliness" type="hidden" id="chefCleanliness" value="0" /></div></td>
      <td align="center"><div id="chef31" onclick="chef(3,1)"></div></td>
      <td align="center"><div id="chef32" onclick="chef(3,2)"></div></td>
      <td align="center"><div id="chef33" onclick="chef(3,3)"></div></td>
      <td align="center"><div id="chef34" onclick="chef(3,4)"></div></td>
      <td align="center"><div id="chef35" onclick="chef(3,5)"></div></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">Presentación de los alimentos<input name="chefPresentation" type="hidden" id="chefPresentation" value="0" /></div></td>
      <td align="center"><div id="chef41" onclick="chef(4,1)"></div></td>
      <td align="center"><div id="chef42" onclick="chef(4,2)"></div></td>
      <td align="center"><div id="chef43" onclick="chef(4,3)"></div></td>
      <td align="center"><div id="chef44" onclick="chef(4,4)"></div></td>
      <td align="center"><div id="chef45" onclick="chef(4,5)"></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Sabor de la comida<input name="chefFalvor" type="hidden" id="chefFalvor" value="0" /></div></td>
      <td align="center"><div id="chef51" onclick="chef(5,1)"></div></td>
      <td align="center"><div id="chef52" onclick="chef(5,2)"></div></td>
      <td align="center"><div id="chef53" onclick="chef(5,3)"></div></td>
      <td align="center"><div id="chef54" onclick="chef(5,4)"></div></td>
      <td align="center"><div id="chef55" onclick="chef(5,5)"></div></td>
    </tr>
    <tr>
      <td class="puntos"><div class="renglon">Calidad de los ingredientes<input name="chefFood" type="hidden" id="chefFood" value="0" /></div></td>
      <td align="center"><div id="chef61" onclick="chef(6,1)"></div></td>
      <td align="center"><div id="chef62" onclick="chef(6,2)"></div></td>
      <td align="center"><div id="chef63" onclick="chef(6,3)"></div></td>
      <td align="center"><div id="chef64" onclick="chef(6,4)"></div></td>
      <td align="center"><div id="chef65" onclick="chef(6,5)"></div></td>
    </tr>
    <tr>
    <td colspan="6">Comentarios:</td>
      </tr>
    <tr>
      <td colspan="6"><label for="chefcomments"></label>
        <textarea name="chefComments" id="chefComments" cols="45" rows="4" style="width:100%; font-size:24px"></textarea></td>
      </tr>
  </table><br /><br />
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="65%"><span class="verdebig">SATISFACCIÓN GENERAL</span></td>
      <td width="7%" align="center"><img src="/back-working/images/triste.png" width="37" height="37" /></td>
      <td colspan="3" align="center"><img src="/back-working/images/barra.png" width="190" height="34" /></td>
      <td width="7%" align="center"><img src="/back-working/images/feliz.png" width="37" height="37" /></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td class="puntos"><div class="renglon">¿Cómo calificaría su estancia? 
        <input name="generalRate" type="hidden" id="generalRate" value="0" /></div></td>
      <td align="center"><div id="general11" onclick="general(1,1)"></div></td>
      <td align="center"><div id="general12" onclick="general(1,2)"></div></td>
      <td align="center"><div id="general13" onclick="general(1,3)"></div></td>
      <td align="center"><div id="general14" onclick="general(1,4)"></div></td>
      <td align="center"><div id="general15" onclick="general(1,5)"></div></td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td colspan="4" class="puntos"><div class="renglon">¿Seleccionaría la villa para una estancia en el futuro? 
        <input name="generalFuture" type="hidden" id="generalFuture" value="0" /></div></td>
      <td align="center"><div id="general21" onclick="general2(2,1)"></div></td>
      <td align="center"><div id="general22" onclick="general2(2,2)"></div></td>
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
      <td colspan="6">¿Cuál considera que es la mejor característica de la villa?</td>
    </tr>
    <tr>
      <td colspan="6">
        <textarea name="bestFeature" id="bestFeature" cols="45" rows="2" style="width:100%; font-size:24px"></textarea></td>
      </tr>
      <tr>
      <td height="20" colspan="6"></td>
      </tr>
      <tr>
      <td colspan="6">¿Algo que no le haya gustado de la casa? </td>
    </tr>
    <tr>
      <td colspan="6">
        <textarea name="worst" id="worst" cols="45" rows="2" style="width:100%; font-size:24px"></textarea></td>
      </tr>
      <tr>
      <td height="20" colspan="6"></td>
      </tr>
      <tr>
      <td colspan="6">¿Que le falta a la villa? </td>
    </tr>
    <tr>
      <td colspan="6">
        <textarea name="lacking" id="lacking" cols="45" rows="2" style="width:100%; font-size:24px"></textarea></td>
      </tr>
      <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td colspan="4" class="puntos"><div class="renglon">¿Desearía recibir información acerca de nuestras promociones? <input name="receiveInformation" type="hidden" id="receiveInformation" value="0" /></div></td>
      <td align="center"><div id="promo11" onclick="promo(1,1)"></div></td>
      <td align="center"><div id="promo12" onclick="promo(1,2)"></div></td>
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
    <td colspan="6">¿Sería tan amable de regalarnos un comentario sobre su estancia para compartir con futuros huéspedes?</td>
      </tr>
    <tr>
      <td colspan="6">
        <textarea name="reviewShare" id="reviewShare" cols="45" rows="6" style="width:100%; font-size:24px"></textarea></td>
      </tr>
  </table><br /><br /><table width="100%" border="0" cellpadding="2" cellspacing="2">
   
    <tr>
      <td width="65%"><span class="verdebig">Información del Huesped </span></td>
      <td width="7%" align="center">&nbsp;</td>
      <td colspan="3" align="center">&nbsp;</td>
      <td width="7%" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td height="20" colspan="6"></td>
      </tr>
    <tr>
      <td><input name="name" type="text" id="name" style="width:95%; font-size:24px" value=""  /></td>
      <td colspan="5"><input name="email" type="text" id="email" style="width:100%; font-size:24px" value=""  /></td>
    </tr>
    <tr>
      <td>Nombre </td>
      <td colspan="5">Correo Electrónico</td>
      </tr>
    <tr>
      <td height="20" colspan="6"></td>
    </tr>
    <tr>
      <td><input name="city" type="text" id="city" style="width:95%; font-size:24px" value=""  /></td>
      <td colspan="5"><input name="phone" type="text" id="phone" style="width:100%; font-size:24px" value=""  /></td>
    </tr>
    <tr>
      <td>Ciudad / País</td>
      <td colspan="5">Teléfono</td>
      </tr>
  </table>
  
  <p align="center"><br />
    <input type="image" name="imageField" id="imageField" src="/back-working/images/submit.png" />
    <br />
    <br />
    <br />
  </p>
  
  </form>
</div>
<?php }?>
 <p align="center"><img src="/back-working/images/textura.png" width="100%" height="129" /></p>
</body>
</html>
<?php
	mysql_close ($connection);?>