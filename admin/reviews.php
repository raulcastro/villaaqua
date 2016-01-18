<?php include "../db.php";
date_default_timezone_set('America/Cancun');
include "logcheck.php";
$villaid=1;
$owneridses=1;
$dateres=date("Y-m-d");?>

<?php
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
$staffcomments=$_POST["comments"];
$suppliersnote=$_POST["notes"];
$emailcontact=$_POST["email"];
$agencia=$_POST["agencia"];

$connection = mysql_connect($servername,$username, $password);
if (!$connection){
  die('Could not connect: ' . mysql_error()); }
mysql_select_db($db, $connection);
$sql = "update availability set estatus=$estatus, client='$client', agencia='$agencia', arrival='$arrival', emailcontact='$emailcontact', departure='$departure', staffcomments='$staffcomments', suppliersnote='$suppliersnote' where idres=".$idreserva;
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
$staffcomments=$_POST["comments"];
$suppliersnote=$_POST["notes"];
$emailcontact=$_POST["email"];
$agencia=$_POST["agencia"];

$connection = mysql_connect($servername,$username, $password);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($db, $connection);

$sql = "INSERT INTO availability (client, arrival, departure, villa, owner, agencia, estatus, dateres, staffcomments, suppliersnote, emailcontact)";
$sql = $sql." VALUES('$client', '$arrival', '$departure', '$villa', '$owner', '$agencia', '$estatus', '$dateres', '$staffcomments', '$suppliersnote','$emailcontact')";
mysql_query ($sql);
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
<script type="text/javascript">
function NewWindow(mypage,myname,w,h,scroll){var winl=(screen.width-w)/2;var wint=(screen.height-h)/2;winprops='height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable'
win=window.open(mypage,myname,winprops)
if(parseInt(navigator.appVersion)>=4){win.window.focus();}}
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
  </script>
</head>

<body>
<table width="945" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
    
    <tr>
      <td valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="44%" height="99"><a href="/admin/"><img src="images/logo-villaaqua.png" width="340" height="90" border="0" /></a></td>
          <td width="56%"><div align="right">
            <table width="300px" border="0" cellpadding="4" cellspacing="1">
              <tr>
                <td align="right" nowrap="nowrap"><a href="villarate.php" class="Aqua">Rates</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="reviews.php" class="Aqua">Reviews</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php" class="Aqua">Log out</a></td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table></td>
    </tr>
  <tr>
    <td width="925"><table width="803" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td width="33" bgcolor="#003366">&nbsp;</td>
        <td width="106" bgcolor="#003366"><div align="center" class="style11">Fecha</div></td>
        <td width="130" bgcolor="#003366"><div align="center" class="style11">Cliente</div></td>
        <td width="129" bgcolor="#003366"><div align="center" class="style11">Email</div></td>
        <td width="180" bgcolor="#003366"><div align="center" class="style11">Calificación Gral</div></td>
        <td width="144" bgcolor="#003366"><div align="center" class="style11">Publicar</div></td>
        <td width="45" bgcolor="#003366">&nbsp;</td>
      </tr>
      <?php $connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);

$query="select * from reviews where borrado=0 order by idreview desc";
$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$fecha=date("M d, y",strtotime($row['date']));
		?>
      <tr id="res<?php echo $row["idres"];?>" class="bablanco">
        <td ><div align="center"><a href="reviewdetalle.php?idr=<?php echo $row["idreview"];?>&onIndex<?php echo $row['onIndex'];?>" onclick="NewWindow(this.href,'Review','450','650','yes');return false;" ><img src="images/icon_edit.png" width="16" height="16" border="0" /></a></div></td>
        <td align="center"><?php echo $fecha;?></td>
        <td align="left" nowrap="nowrap"><?php echo $row["name"];?></td>
        <td align="left" nowrap="nowrap"><?php echo $row["email"];?></td>
        <td align="center"><img src="images/cali<?php echo $row["generalRate"];?>.png" width="126" height="11" /></td>
        <td align="center"><?php if ($row["publicar"]==1){?>Si<?php }?>
          <?php if ($row["publicar"]==0){?>
          NO
  <?php }?></td>
        <td align="center"><a href="enviareview.php?idr=<?php echo $row["idreview"];?>" onclick="NewWindow(this.href,'Review','450','300','yes');return false;" ><img src="images/mail.gif" width="25" height="15" border="0" /></a></td>
      </tr>
      <?php }
?>
    </table>
      <br />
      <?php if(!$_REQUEST["edita"]){ ?>
    <?php } //termina forma de inserción ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
