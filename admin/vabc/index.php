<?php include "../../db.php";
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
$staffcomments=$_POST["comments"];
$suppliersnote=$_POST["notes"];
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
<link href="../estilo.css" rel="stylesheet" type="text/css" />
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
      buttonImage: "../images/calendar.gif",
      buttonImageOnly: true
    });
  });
    $(function() {
    $( "#departure" ).datepicker({
      showOn: "button",
      buttonImage: "../images/calendar.gif",
      buttonImageOnly: true
    });
  });
  $(function() {
    $( "#payment1" ).datepicker({
      showOn: "button",
      buttonImage: "../images/calendarb.png",
      buttonImageOnly: true
    });
  });
  $(function() {
    $( "#payment2" ).datepicker({
      showOn: "button",
      buttonImage: "../images/calendarb.png",
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
          <td width="44%" height="99"><img src="../images/logo-villaaqua.png" width="340" height="90" /></td>
          <td width="56%"><div align="right">
            <table width="300px" border="0" cellpadding="4" cellspacing="1">
              <tr>
                <td align="right" nowrap="nowrap"><a href="../reviews.php" class="Aqua">Reviews</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php" class="Aqua">Log out</a></td>
              </tr>
              </table>
          </div></td>
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
                <td><input  id="email" name="email"  style="width:200px" /></td>
                </tr>
                   <tr>
                  <td class="leftMargin_10">Reser.  Date:</td>
                  <td><div id="datediv"><?php echo $dateres;?></div></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Arrival :</td>
                  <td nowrap="nowrap"><input name="arrival" type="text" class="cuerpo" id="arrival" size="10">
                    <span class="leftMargin_10">Departure:
                    <input name="departure"  id="departure" size="10" class="cuerpo" />
                    </span></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Num Pax</td>
                  <td><select name="pax" id="pax">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    </select>
                    <span class="leftMargin_10"> &nbsp;Num Rooms
<select name="rooms" id="rooms">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                      </span></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Payment:</td>
                  <td><input name="payment1" type="text" class="cuerpo" id="payment1" size="12" />
                    Bal:
                    <input name="payment2" type="text" class="cuerpo" id="payment2" size="12" /></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Notes:</td>
                  <td><label for="textarea"></label>
                    <textarea name="textarea" id="textarea" rows="5" style="width:200px"></textarea></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Status:</td>
                  <td><select name="estatus" id="estatus">
                    <option value=""></option>
                    <option value="1">Pending</option>
                    <option value="2">Confirmed</option>
                    <option value="3">Cancel</option>
                    </select></td>
                </tr>
              </tbody>
            </table>
            <input type="submit" class="botones" name="boton" id="submitbtn" style="display:block" value="Submit" /><input name="addres" class="botones" type="hidden" id="addres" value="1" /></form>
            <?php }?>
            <?php if (is_numeric($_REQUEST["id"])){
				$idreserva=$_REQUEST["id"];
            $connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);

$query="select * from availability where idres=$idreserva";
$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$vllegada=date("m/d/Y",strtotime($row['arrival']));
		$vsalida=date("m/d/Y",strtotime($row['departure']));
		if ($row['payment1']){
		$pago1=date("m/d/Y",strtotime($row['payment1']));
		}
		if ($row['payment2']){
		$pago2=date("m/d/Y",strtotime($row['payment2']));
		}
		$diareserva=$row["dateres"];

?>
            <form id="form1" name="form1" method="post" onSubmit = "return validar(this)" action="index.php"><table width="390" border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
            <tbody>
              <tr>
                <td width="96" class="leftMargin_10"><span >Property:</span></td>
                <td width="170"><strong><span id="villadiv"><?php echo $villaname; ?></span><input name="villa" type="hidden" id="villa" value="1"/></strong></td>
              </tr>
              <tr>
                <td class="leftMargin_10"><span >Reserved By:</span> <br />
                  Agency/Direct </td>
                <td><div id="ownerdiv"></div> <input  id="agencia" name="agencia" value="<?php echo $row["agencia"];?>"  style="width:200px" />
                <input name="owner" type="hidden" id="owner" value="1"/></td>
              </tr>
              <tr>
                <td class="leftMargin_10">Client Name:</td>
                <td><input  id="client" name="client" value="<?php echo $row["client"];?>"  style="width:200px" /></td>
              </tr>
              <tr>
                <td class="leftMargin_10">Contact Email:</td>
                <td><input  id="email" name="email" value="<?php echo $row["emailcontact"];?>"  style="width:200px" /></td>
                </tr>
                   <tr>
                  <td class="leftMargin_10">Res.  Date:</td>
                  <td><div id="datediv"><?php echo $diareserva;?></div></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Arrival :</td>
                  <td><input name="arrival" type="text"  id="arrival" size="10"  value="<?php echo $vllegada;?>"> 
                  &nbsp;Departure:
                  <input name="departure"  id="departure" size="10" value="<?php echo $vsalida;?>"  /></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Num Pax</td>
                  <td><select name="pax" id="pax">
                    <option value=""></option>
                    <option value="1" <?php  if($row["pax"]==1){?>selected="selected"<?php }?>>1</option>
                    <option value="2" <?php  if($row["pax"]==2){?>selected="selected"<?php }?>>2</option>
                    <option value="3" <?php  if($row["pax"]==3){?>selected="selected"<?php }?>>3</option>
                    <option value="4" <?php  if($row["pax"]==4){?>selected="selected"<?php }?>>4</option>
                    <option value="5" <?php  if($row["pax"]==5){?>selected="selected"<?php }?>>5</option>
                    <option value="6" <?php  if($row["pax"]==6){?>selected="selected"<?php }?>>6</option>
                    <option value="7" <?php  if($row["pax"]==7){?>selected="selected"<?php }?>>7</option>
                    <option value="8" <?php  if($row["pax"]==8){?>selected="selected"<?php }?>>8</option>
                    <option value="9" <?php  if($row["pax"]==9){?>selected="selected"<?php }?>>9</option>
                    <option value="10" <?php  if($row["pax"]==10){?>selected="selected"<?php }?>>10</option>
                    <option value="11" <?php  if($row["pax"]==111){?>selected="selected"<?php }?>>11</option>
                    <option value="12" <?php  if($row["pax"]==12){?>selected="selected"<?php }?>>12</option>
                    </select>
                    <span class="leftMargin_10"> &nbsp;Num Rooms
  <select name="rooms" id="rooms">
    <option value=""></option>
    <option value="1" <?php  if($row["rooms"]==1){?>selected="selected"<?php }?>>1</option>
    <option value="2" <?php  if($row["rooms"]==2){?>selected="selected"<?php }?>>2</option>
    <option value="3" <?php  if($row["rooms"]==3){?>selected="selected"<?php }?>>3</option>
    <option value="4" <?php  if($row["rooms"]==4){?>selected="selected"<?php }?>>4</option>
    <option value="5" <?php  if($row["rooms"]==5){?>selected="selected"<?php }?>>5</option>
    </select>
                      </span></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Payment:</td>
                  <td><input name="payment1" type="text" class="cuerpo" id="payment1" size="12" value="<?php echo $pago1;?>" />
                    Bal:
                    <input name="payment2" type="text" class="cuerpo" id="payment2" size="12"  value="<?php echo $pago2;?>" /></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Notes:</td>
                  <td><label for="textarea"></label>
                    <textarea name="comments" id="comments" rows="5" style="width:200px"><?php echo $row["staffcomments"];?></textarea></td>
                </tr>
                <tr>
                  <td class="leftMargin_10"></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="leftMargin_10">Status:</td>
                  <td><select name="estatus" id="estatus">
                    <option value=""></option>
                      <option value="1" <?php  if($row["estatus"]==1){?>selected="selected"<?php }?>>Pending</option>
                      <option value="2" <?php  if($row["estatus"]==2){?>selected="selected"<?php }?>>Confirmed</option>
                      <option value="3" <?php  if($row["estatus"]==3){?>selected="selected"<?php }?>>Cancel</option>
                  </select></td>
                </tr>
                <tr>
                  <td class="leftMargin_10"><input type="submit" class="botones" name="submitbtn" id="submitbtn2" style="display:block" value="Update" />
                    <input name="editres" class="botones" type="hidden" id="editres" value="<?php echo $row["idres"];?>" />&nbsp;</td>
                  <td>
                    <a href="index.php"><strong>Cancel</strong></a></td>
                </tr>
              </tbody>
            </table>
            </form>
             <?php }}?>
            </td>
          <td width="733" valign="top" bgcolor="#FFFFFF"><div style="padding:5px; height:330px; overflow:scroll; margin-right:10px;"><table width="610" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
              <td width="30" bgcolor="#003366">&nbsp;</td>
              <td width="150" bgcolor="#003366"><div align="center" class="style11">Client</div></td>
              <td width="69" bgcolor="#003366"><div align="center" class="style11">From</div></td>
              <td width="45" bgcolor="#003366"><div align="center" class="style11">To</div></td>
              <td width="50" bgcolor="#003366"><div align="center" class="style11">Status</div></td>
              <td width="172" bgcolor="#003366"><div align="center" class="style11">Agency</div></td>
              </tr>
<?php $connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);

$query="select * from availability where estatus>0 order by idres desc";
$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$llegada=date("M d, y",strtotime($row['arrival']));
		$salida=date("M d, y",strtotime($row['departure']));
		?>
            <tr id="res<?php echo $row["idres"];?>" class="bablanco">
              <td valign="top" ><div align="center"><a href="index.php?id=<?php echo $row["idres"];?>"><img src="../images/icon_edit.png" width="16" height="16" border="0" /></a></div></td>
              <td valign="top"><div align="left"><?php echo $row["client"];?></div></td>
              <td valign="top" nowrap="nowrap"><div align="center">
                <?php echo $llegada;?>
              </div></td>
              <td valign="top" nowrap="nowrap"><div align="center">
                <?php echo $salida;?>
              </div></td>
              <td valign="top"><div align="center">
                <?php if ($row["estatus"]==1){?>
                On hold
                <?php }?>
                <?php if ($row["estatus"]==2){?>
                Confirm
                 <?php }?>
              </div></td>
              <td valign="top"><?php echo $row["agencia"]?></td>
              </tr>
            <?php }
?>
          </table>
          </div></td>
        </tr>
        <tr>
          <td height="7" colspan="2" valign="top" bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
          <td colspan="2" valign="top" bgcolor="#FFFFFF"></td>
          </tr>
      </table></td>
        </tr>
      </table>
    <?php } //termina forma de inserción ?>   <?php if($inserto==1 ){ ?>
      <p class="Titu_villas">Reservation submited successfully</p>
      <?php } ?>
	  <?php if($actualizo==1 ){ ?>
      <p class="Titu_villas">Reservation updated successfully</p>
    <?php } ?>    </td>
  </tr>
  <tr>
    <td><table border="0" align="center" cellpadding="12" cellspacing="0" bgcolor="#FFFFFF">
<?php 
$contarows=0;
$contacolumns=0;
$contajoin=0;
while ($contarows<6){ // formo la tabla, aqui los renglones ?>
  <tr>
<?php  while ($contacolumns<4){ // hago las columnas ?> 
    <td valign="top">
<?php
if ($contajoin==0){
$dDate = date("m/d/Y"); }
else{
$dDate =DateAdd("m", 1, $dDate);
}
$iDIM =  intval(GetDaysInMonth(date("m",strtotime($dDate)),date("Y",strtotime($dDate))));
$iYEA =  date("Y",strtotime($dDate));
//$iDOW = intval(getDayOfWeek( date("d",strtotime($dDate)), date("m",strtotime($dDate)),  date("Y",strtotime($dDate)))+1);
$iDOWt =  date("m",strtotime($dDate))."/02/".date("Y",strtotime($dDate));
$iDOW =  date("N",strtotime($iDOWt));
$iMON =  date("m",strtotime($dDate));

?>
<table cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr bgcolor="#ADCBE9">
                    <td colspan="7" align="center" bgcolor="#339999"><table width="93%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="center" ><font class="link_language style1"><b><?php echo date("F", mktime(0, 0, 0, $iMON, 10))."  ".$iYEA;?></b></font></td>
                      </tr>
                    </table></td>
        </tr>
                  <tr bgcolor="#D6E1FC">
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666">Sun</font><font color="#003366" face="verdana" size="2"><br />
                    </font></td>
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666"><span>Mon</span><br />
                    </font></td>
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666">Tue<br />
                    </font></td>
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666">Wed</font></td>
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666">Thu<br />
                    </font></td>
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666">Fri<br />
                    </font></td>
                    <td width="20" align="center" bgcolor="#E7F9FE" class="link_azul_email"><font color="#666666">Sat</font></td>
                  </tr>
                  <?php
//Write spacer cells at beginning of first row if month doesn't start on a Sunday.
if ($iDOW <> 1) {
	echo "\t"."<TR>"."\r";
	$iPosition = 1;
	while ($iPosition < $iDOW){ 
		echo "\t"."\t"."<TD bgcolor='#FFFFFF'>&nbsp;</TD>"."\r";
		$iPosition++;
	}
}

//Write days of month in proper day slots
$iCurrent = 1;
$iPosition = $iDOW;
while ($iCurrent <= $iDIM){
	// if we're at the begginning of a row { write TR
	if ($iPosition == 1) {
		echo "\t"."<TR>"."\r";
	}
	// if the day we're writing is the selected day { highlight it somehow.
$fet=date("m",strtotime($dDate)) . "/" . $iCurrent . "/" . date("Y",strtotime($dDate));
$fechin=date("Y",strtotime($dDate)). "/" . date("m",strtotime($dDate)) . "/" .$iCurrent;
$fechin2=date("Y-m-d",strtotime($fechin));

$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);

$query2="select nuser from owners where idowner = " . $owneridses;
$result2 = mysql_query($query2);	 
$row2 = mysql_fetch_array($result2); 
$vowner=$row2['nuser'];

$query="select * from availability where estatus>0 and departure> CURDATE()  and villa=".$villaid. " and arrival <= '" . $fechin . "' and departure >='" . $fechin ."'";
$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	  {
	  $idreserva=$row['idres'];
	  $varrival=date("Y-m-d",strtotime($row['arrival']));
	  $vdeparture=date("Y-m-d",strtotime($row['departure']));
	  $vclient=$row['client'];
	  $vemail=$row['emailcontact'];
	  $vstatus=$row['estatus'];
	  $vcomments=$row['comments'];
	  $vnotes=$row['notes'];
	  $vvilla=$row['villa'];
	  $vownerid=$row['owner'];
	  $agencia=$row['agencia'];
	  
	  if($vstatus==1){ $vstatusx="Pending"; }
	  if($vstatus==2){ $vstatusx="Confirmed"; }
	  
	  
	  $vdateres=date("m-d-Y",strtotime($row['dateres']));
	  
$priv=1;
	  
	$a=$a+1;
	$diacurso=date("d",strtotime($fechin));
	if ($a==1){
	if ($row['estatus']==2) { $ibgro="color.gif"; }
	if ($row['estatus']==1) { $ibgro="gris.gif"; }
	if ($row['estatus']==1 and $diacurso==date("d",strtotime($row['arrival']))) { $ibgro="nb.gif"; }
	if ($row['estatus']==1 and $diacurso==date("d",strtotime($row['departure']))) { $ibgro="2n.gif"; }
	if ($row['estatus']==1 and $diacurso==date("d",strtotime($row['departure'])) and $diacurso==date("d",strtotime($row['arrival']))) { $ibgro="2b.gif"; }
	
	if ($row['estatus']==2 and $diacurso==date("d",strtotime($row['arrival']))) { $ibgro="n1.gif"; }
	if ($row['estatus']==2 and $diacurso==date("d",strtotime($row['departure']))) { $ibgro="1n.gif"; }
	if ($row['estatus']==2 and $diacurso==date("d",strtotime($row['departure'])) and $diacurso==date("d",strtotime($row['arrival']))) { $ibgro="1a.gif"; }
	}


if ($a==2) {
if ($row['estatus']==2) {
if ($ibgro=="nb.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['departure']))) { $ibgro="1b.gif"; }
if ($ibgro=="2n.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['arrival']))) { $ibgro="2a.gif"; }
if ($ibgro=="n1.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['departure']))) { $ibgro="1a.gif"; }
if ($ibgro="1n.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['arrival']))) { $ibgro="1a.gif"; }
}
if ($row['estatus']==1) {
if ($ibgro=="nb.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['departure']))) { $ibgro="2b.gif"; }
if ($ibgro=="2n.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['arrival']))) { $ibgro="2b.gif"; }
if ($ibgro=="n1.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['departure']))) { $ibgro="2a.gif"; }
if ($ibgro=="1n.gif" and date("d",strtotime($fechin))==date("d",strtotime($row['arrival']))) { $ibgro="1b.gif"; }
}
}

}

if ($a==0) {
$ibgro="blanco.gif";
}	
$diax=intval(getDayOfWeek(date("d",strtotime($fet)), date("m",strtotime($fet)), date("Y",strtotime($fet))));
if ($ibgro =="blanco.gif"){
echo "\t"."\t"."<TD  background='../images/" .$ibgro."' align='center'  bgcolor='#FFFFFF'>".$iCurrent."<BR></TD>"."\r"; }
else{
echo "\t"."\t"."<TD  background='../images/" .$ibgro."' align='center'  bgcolor='#FFFFFF'><a class='thumbnail' href='javascript:void(0);' onclick='seleres(".'"'.$idreserva.'"'.");'>".$iCurrent."</a><BR></TD>"."\r"; }

	
	// if we're at the endof a row { write /TR
	if ($iPosition == 7) {
		echo "\t"."</TR>"."\r";
		$iPosition = 0;
	}
	
	// Increment variables
	$iCurrent++;
	$iPosition++;
	$idreserva="";
	$idreserva="";
	$varrival="";
	$vdeparture="";
	$vclient="";
	$vstatus="";
	$vcomments="";
	$vnotes="";
	$vvilla="";
	$vowner="";
	$vdateres="";
$a=0;
}

// Write spacer cells at end of last row if month doesn't end on a Saturday.
if ($iPosition <> 1) {
	while ($iPosition <= 7){
		echo "\t"."\t"."<TD  bgcolor='#FFFFFF'>&nbsp;</TD>"."\r";
		$iPosition++;
	}
	echo "\t"."</TR>"."\r";
}
?>
      </table>    </td>
	  <?php
	  $contacolumns++;
	  $contajoin++;
	   } //cierro columnas ?> 
    </tr>
<?php
$contacolumns=0;
$contarows++;
} //cierro renglones ?>  
</table></td>
  </tr>
</table>
</body>
</html>
