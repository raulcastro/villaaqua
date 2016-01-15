<?php include "../db.php";
date_default_timezone_set('America/Cancun');
include "logcheck.php";
$villaid=1;
$owneridses=1;
$dateres=date("Y-m-d");?>

<?php

 function cleanQuery($string){ 
           if(get_magic_quotes_gpc())  // prevents duplicate backslashes 
           { 
           $string = stripslashes($string); 
           } 
           $badWords = array("/delete/i", "/update/i","/union/i","/insert/i","/drop/i","/http/i","/--/i","/script/i","/.css/i"); 
           $string = preg_replace($badWords, "", $string); 

           
          $string = mysql_escape_string($string); 
          return $string; 
           } 
		   
		   
	  $villaname="Villa Aqua";


if($_POST['editres']>0 and $_POST["estatus"]=="3"){ //cancelo reservacion
$idreserva=$_POST["editres"];
$connection = mysql_connect($servername,$username, $password);
if (!$connection){
  die('Could not connect: ' . mysql_error()); }
mysql_select_db($db, $connection);
$sql = "update availability set estatus=0 where idres=".$idreserva;
mysql_query ($sql);
mysql_close ($connection);
$actualizo=1;
}
////////////////////////////////////////
if($_POST['editres']>0 and $_POST["estatus"]!="3"){ //confirmo reservacion
$idreserva=$_POST["editres"];
$estatus=$_POST["estatus"];
$client=$_POST["client"];
$barrival=$_POST["arrival"];
$arrival=date("Y-m-d",strtotime($barrival));
$bdeparture=$_POST["departure"];
$departure=date("Y-m-d",strtotime($bdeparture));
$villa=$villaid;
$owner=$owneridses;
$staffcomments=cleanQuery($_POST["comments"]);
$suppliersnote=cleanQuery($_POST["notes"]);
$emailcontact=$_POST["email"];
$agencia=$_POST["agencia"];
if  ($_POST["payment1"]!=""){
$bpago1=$_POST["payment1"];
$vpago1=date("Y-m-d",strtotime($bpago1));
	}
if  ($_POST["payment2"]!=""){
$bpago2=$_POST["payment2"];
$vpago2=date("Y-m-d",strtotime($bpago2));
}

if  (is_numeric($_POST["rooms"])){
$vrooms=$_POST["rooms"];
}else{
$vrooms="NULL";
	}		
if  (is_numeric($_POST["pax"])){
$vpax=$_POST["pax"];
}else{
$vpax="NULL";
	}			

$connection = mysql_connect($servername,$username, $password);
if (!$connection){
  die('Could not connect: ' . mysql_error()); }
mysql_select_db($db, $connection);
$sql = "update availability set estatus=$estatus, client='$client', agencia='$agencia', arrival='$arrival', emailcontact='$emailcontact', departure='$departure', staffcomments='$staffcomments', suppliersnote='$suppliersnote',  pax=$vpax, rooms=$vrooms";
if ($vpago1){
$sql =$sql .", payment1='$vpago1'";
}else{
	$sql =$sql .", payment1=NULL";
	}
if ($vpago2){
$sql =$sql .", payment2='$vpago2'";
}else{
$sql =$sql .", payment2=NULL";	
	}

$sql =$sql . " where idres=".$idreserva;


mysql_query ($sql);


mysql_close ($connection);
$actualizo=1;
}
///////////////////////////////////////
if($_POST['editres']==0 and $_POST["boton"]=="Submit"){

$client=$_POST["client"];
$barrival=$_POST["arrival"];
$arrival=date("Y-m-d",strtotime($barrival));
$bdeparture=$_POST["departure"];
$departure=date("Y-m-d",strtotime($bdeparture));
$villa=$villaid;
$owner=$owneridses;
$estatus=$_POST["estatus"];
$dateres=date("Y-m-d");
$staffcomments=cleanQuery($_POST["comments"]);
$suppliersnote=cleanQuery($_POST["notes"]);
$emailcontact=$_POST["email"];
$agencia=$_POST["agencia"];
if  ($_POST["payment1"]!=""){
$bpago1=$_POST["payment1"];
$vpago1=date("Y-m-d",strtotime($bpago1));
}
if  ($_POST["payment2"]!=""){
$bpago2=$_POST["payment2"];
$vpago2=date("Y-m-d",strtotime($bpago2));
}
if  (is_numeric($_POST["rooms"])){
$vrooms=$_POST["rooms"];
}else{
$vrooms="NULL";
	}		
if  (is_numeric($_POST["pax"])){
$vpax=$_POST["pax"];
}else{
$vpax="NULL";
	}			


$connection = mysql_connect($servername,$username, $password);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($db, $connection);

$sql = "INSERT INTO availability (client, arrival, departure, villa, owner, agencia, estatus, dateres, staffcomments, suppliersnote, emailcontact, pax, rooms)";
$sql = $sql." VALUES('$client', '$arrival', '$departure', '$villa', '$owner', '$agencia', '$estatus', '$dateres', '$staffcomments', '$suppliersnote','$emailcontact' , $vpax, $vrooms)";
mysql_query ($sql);

$last = mysql_insert_id(); 

if ($vpago1){
$sql ="update availability set payment1='$vpago1' where idres=".$last;
mysql_query ($sql);
}
if ($vpago2){
$sql ="update availability set payment2='$vpago2' where idres=".$last;
mysql_query ($sql);
	}



mysql_close ($connection);
$inserto=1;
}
?>
<?php 
//idres` INT NOT NULL AUTO_INCREMENT ,
//villa` INT NOT NULL ,
//owner` INT NOT NULL ,
//arrival` DATE NOT NULL ,
//departure` DATE NOT NULL ,
//client` VARCHAR( 100 ) NOT NULL ,
//estatus` INT NOT NULL ,
//dateres` DATETIME NOT NULL ,
//staffcomments` TEXT NOT NULL ,
//suppliersnote` TEXT NOT NULL ,

function dateAdd($interval,$number,$dateTime) {
        
    $dateTime = (strtotime($dateTime) != -1) ? strtotime($dateTime) : $dateTime;       
    $dateTimeArr=getdate($dateTime);
                
    $yr=$dateTimeArr[year];
    $mon=$dateTimeArr[mon];
    $day=$dateTimeArr[mday];
    $hr=$dateTimeArr[hours];
    $min=$dateTimeArr[minutes];
    $sec=$dateTimeArr[seconds];

    switch($interval) {
        case "s"://seconds
            $sec += $number; 
            break;

        case "n"://minutes
            $min += $number; 
            break;

        case "h"://hours
            $hr += $number; 
            break;

        case "d"://days
            $day += $number; 
            break;

        case "ww"://Week
            $day += ($number * 7); 
            break;

        case "m": //similar result "m" dateDiff Microsoft
            $mon += $number; 
            break;

        case "yyyy": //similar result "yyyy" dateDiff Microsoft
            $yr += $number; 
            break;

        default:
            $day += $number; 
         }       
                
        $dateTime = mktime($hr,$min,$sec,$mon,$day,$yr);
        $dateTimeArr=getdate($dateTime);
        
        $nosecmin = 0;
        $min=$dateTimeArr[minutes];
        $sec=$dateTimeArr[seconds];

        if ($hr==0){$nosecmin += 1;}
        if ($min==0){$nosecmin += 1;}
        if ($sec==0){$nosecmin += 1;}
        
        return date("m/d/Y",$dateTime);
} 

function GetDaysInMonth($iMonth, $iYear) 
{ 
// calculate number of days in a month 
return $iMonth == 2 ? ($iYear % 4 ? 28 : ($iYear % 100 ? 29 : ($iYear % 400 ? 28 : 29))) : (($iMonth - 1) % 7 % 2 ? 30 : 31); 
} 

function GetMonthString($n)
{
    $timestamp = mktime(0, 0, 0, $n, 1, 2005);    
    return date("M", $timestamp);
}

function getDayOfWeek($day, $month, $year, $calendarSystem = 1) {    
    if ($month < 3) 
    { 
        $month = $month + 12; 
        $year = $year - 1; 
    } 
        
    return ($day + (2 * $month) + (int) (6 * ($month + 1) / 10) + $year + (int) ($year / 4) - (int) ($year / 100) + (int) ($year / 400) + $calendarSystem) % 7; 
} 

function SubtractOneMonth($dDate) {
	return DateAdd("m", -1, $dDate);
	}

function AddOneMonth($dDate) {
	return DateAdd("m", 1, $dDate);
}

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript">
function fillform(barrival,bdeparture,breservedby,bagencia,bidreserva,bstatus,bcomments,bnotes,bdate,bclient,vemail,bpriv) {
	document.form1.arrival.value=barrival;
	document.form1.departure.value=bdeparture;
	document.form1.client.value=bclient;
	document.form1.estatus.style.display="";
	document.form1.estatus.value=bstatus;
	document.form1.email.value=vemail;
	document.form1.submitbtn.style.display="";
	document.form1.editres.value=bidreserva;
	document.form1.agencia.value=bagencia;
	document.getElementById('datediv').innerHTML = bdate; 
	
}

function fillform2(barrival,bowner) {
	

	document.form1.submitbtn.style.display="";
	document.getElementById('datediv').innerHTML = ''; 
	document.form1.editres.value=0;
	document.form1.client.value="";
	document.form1.client.readOnly=false;
	document.getElementById('ownerdiv').innerHTML = bowner;
	document.getElementById('statusdiv').innerHTML = ''; 
	document.form1.estatus.style.display="";
	document.form1.estatus.value=1;
	document.form1.email.value="";
	document.form1.agencia.value="";
	if (document.form1.arrival.value=="" && document.form1.departure.value==""){
	document.form1.arrival.value=barrival; 
	}else if(document.form1.arrival.value!="" && document.form1.departure.value==""){
	document.form1.departure.value=barrival; 
	}else if(document.form1.arrival.value!="" && document.form1.departure.value!=""){
	document.form1.arrival.value=barrival; 
	document.form1.departure.value=''; 
	}
	
}

function seleres(param){
	vres=localStorage.getItem("reservaid");
	$('#res'+vres).addClass('bablanco');
	localStorage.setItem("reservaid", param); 
	$('#res'+param).addClass('cambiafondo');
	}

function validar(formulario) {
  if (formulario.arrival.value =='') {
    alert("Please select arrival date");
    formulario.arrival.focus();
    return (false);
  }
   if (formulario.departure.value=='') {
    alert("Please select departure date");
    formulario.departure.focus();
    return (false);
  } 
  if (formulario.client.value =='') {
    alert("Please type your the name of the client");
    formulario.client.focus();
    return (false);
  }
  if (formulario.estatus.value =='' && formulario.editres.value =='0') {
    alert("Please select the status of the reservation");
    formulario.estatus.focus();
    return (false);
  }
  return (true); 
}

</script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<title>Villaqua Availability</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.style11 {	color: #FFFFFF;
	font-weight: bold;
}
.bablanco{
	background-color:#FFF;
}
.cambiafondo{
	background-color:#6CF;
}
</style>
<script>
  $(function() {
    $( "#arrival" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });
    $(function() {
    $( "#departure" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });
  $(function() {
    $( "#payment1" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendarb.png",
      buttonImageOnly: true
    });
  });
  $(function() {
    $( "#payment2" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendarb.png",
      buttonImageOnly: true
    });
  });
  </script>
</head>

<body>
<table width="1045" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
    
    <tr>
      <td valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="44%" height="99"><img src="images/logo-villaaqua.png" width="340" height="90" /></td>
          <td width="56%"><div align="right">
            <table width="300px" border="0" cellpadding="4" cellspacing="1">
              <tr>
                <td align="right" nowrap="nowrap"><a href="villarate.php" class="Aqua">Rates</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="reviews.php" class="Aqua">Reviews</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php" class="Aqua">Log out</a></td>
              </tr>
              </table>
          </div>
          </td>
        </tr>
      </table>        </td>
    </tr>
  <tr>
    <td width="925"><br />
      <?php if(!$_REQUEST["edita"]){ ?>  
    
<table width="100%" border="0" cellpadding="6" cellspacing="1" bgcolor="#999999">
        <tr>
          <td bgcolor="#FFFFFF"><table border="0" cellpadding="0" cellspacing="0" bgcolor="#999999">
        <tr>
          <td width="400" valign="top" bgcolor="#FFFFFF">
          <?php if (! is_numeric($_REQUEST["id"])){?>
          <form id="form1" name="form1" method="post" onSubmit = "return validar(this)" action="index.php"><table width="390" border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
            <tbody>
              <tr>
                <td width="92" class="leftMargin_10"><span >Property:</span></td>
                <td width="264"><strong><span id="villadiv"><?php echo $villaname; ?></span><input name="villa" type="hidden" id="villa" value="1"/></strong></td>
              </tr>
              <tr>
                <td class="leftMargin_10"><span >Reserved By:</span> <br />
                  Agency/Direct </td>
                <td><div id="ownerdiv"></div> <input  id="agencia" name="agencia"  style="width:200px" />
                <input name="owner" type="hidden" id="owner" value="1"/></td>
              </tr>
              <tr>
                <td class="leftMargin_10">Client Name:</td>
                <td><input  id="client" name="client"  style="width:200px" /></td>
              </tr>
              <tr>
                <td class="leftMargin_10">Contact Email:</td>
             