<?php include "../db.php";?>
<?php include "logcheck.php" ?>
<?php if($_REQUEST["delf"]<>""){;
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$sql ="update villasrates set deleted=1 where idr=".$_REQUEST["delf"];
mysql_query ($sql);
mysql_close ($connection);
}

 if($_REQUEST["delp"]<>""){;
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$sql ="update promotions set deleted=1 where idpromo=".$_REQUEST["delp"];
mysql_query ($sql);
mysql_close ($connection);
}

 if($_POST["policy"]<>""){;
 $idvilla=1;
 $vpolicia=$_POST["policy"];
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$sql ="update properties set policy=' $vpolicia' where id=1";
mysql_query ($sql);
mysql_close ($connection);
}


if($_POST["idvilla"]<>"" && $_POST["nueva"]==1){; //inserto nuevo registro
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$specialrate=$_POST["special"]; 

$season=$_POST["season"]; 	
$season_esp=$_POST["season_esp"]; 	 	 	 	 	 	 
$fromrate=	$_POST["fromrate"];
$torate=$_POST["torate"]; 
$fromrate=date("Y-m-d",strtotime($fromrate));
$torate=date("Y-m-d",strtotime($torate));
 	 	 	 	 	 	
$bedrooms=$_POST["bedrooms"]; 	 	 	 	 	 	
$rate1=str_replace(",","",$_POST["rate1"]);
$rate2=str_replace(",","",$_POST["rate2"]);
$rate3=str_replace(",","",$_POST["rate3"]); 	
$rate4=str_replace(",","",$_POST["rate4"]); 	
$rate5=str_replace(",","",$_POST["rate5"]); 	
$rate6=str_replace(",","",$_POST["rate6"]); 	
$rate7=str_replace(",","",$_POST["rate7"]); 	
$rate8=str_replace(",","",$_POST["rate8"]); 	
$rate9=str_replace(",","",$_POST["rate9"]); 	
$rate10=str_replace(",","",$_POST["rate10"]); 	
$rate11=str_replace(",","",$_POST["rate11"]); 	
$rate12=str_replace(",","",$_POST["rate12"]); 
$nights=$_POST["nights"]; 
$lastupdate=date("Y-m-d"); 	 	 	 	 	 	 	
$usuario=$_SESSION['adnusuario'];	 	 	 	 	 	  	 	 	
$idvilla=1; 	
mysql_select_db($db, $connection);
$sql="insert into villasrates (season, season_esp,fromrate, torate, bedrooms, rate1, rate2, rate3, rate4, rate5, rate6, rate7, rate8, rate9, rate10, rate11, rate12, nights, lastupdate, usuario, idvilla, specialrate)";
$sql=$sql." values('$season', '$season_esp', '$fromrate', '$torate', '$bedrooms', '$rate1', '$rate2', '$rate3', '$rate4', '$rate5', '$rate6', '$rate7', '$rate8', '$rate9', '$rate10', '$rate11', '$rate12', '$nights','$lastupdate', '$usuario', '$idvilla', '$specialrate')";
mysql_query ($sql);

$tarifaminima=0;



$inserto=1;
}	

if($_POST["actualiza"]<>""){; //actualizo registro existente
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$idvilla=1; 	
$specialrate=$_POST["special"]; 
$season=$_POST["season"]; 	 	
$season_esp=$_POST["season_esp"]; 	 	  	 	 	 	 
$fromrate=	$_POST["fromrate"];
$torate=$_POST["torate"]; 
$fromrate=date("Y-m-d",strtotime($fromrate));
$torate=date("Y-m-d",strtotime($torate));

$bedrooms=$_POST["bedrooms"]; 	 	 	 	 	 	 	 	
$rate1=str_replace(",","",$_POST["rate1"]);
$rate2=str_replace(",","",$_POST["rate2"]);
$rate3=str_replace(",","",$_POST["rate3"]); 	
$rate4=str_replace(",","",$_POST["rate4"]); 	
$rate5=str_replace(",","",$_POST["rate5"]); 	
$rate6=str_replace(",","",$_POST["rate6"]); 	
$rate7=str_replace(",","",$_POST["rate7"]); 	
$rate8=str_replace(",","",$_POST["rate8"]); 	
$rate9=str_replace(",","",$_POST["rate9"]); 	
$rate10=str_replace(",","",$_POST["rate10"]); 	
$rate11=str_replace(",","",$_POST["rate11"]); 	
$rate12=str_replace(",","",$_POST["rate12"]);
$nights=$_POST["nights"]; 
$specialrate=$_POST["special"]; 
$lastupdate=date("Y-m-d"); 	 	 	 	 	 	 	
$usuario=$_SESSION['adnusuario'];	 	 	 	 	 	  	 	 	
mysql_select_db($db, $connection);
$sql="update villasrates set season='$season',  season_esp='$season_esp', fromrate='$fromrate', torate='$torate', bedrooms='$bedrooms', rate1='$rate1', rate2='$rate2', rate3='$rate3', rate4='$rate4', rate5='$rate5', rate6='$rate6', rate7='$rate7', rate8='$rate8', rate9='$rate9', rate10='$rate10', rate11='$rate11', rate12='$rate12', specialrate='$specialrate', nights='$nights', lastupdate='$lastupdate', usuario='$usuario' where idr=".$_POST["actualiza"];
mysql_query ($sql);

$tarifaminima=0;



$inserto=1;
}	


?>
<?php
$idvilla=1;
$connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$query="select * from properties where id=".$idvilla;
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$nombre=$row["title"];
$policy=$row["policy"];
mysql_close ($connection); ?>   
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Villa Aqua Rates</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link href="menustyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script><script language="javascript" type="application/javascript">
function NewWindow(mypage, myname, w, h, scroll) {
var winl = (screen.width - w) / 2;
var wint = (screen.height - h) / 2;
winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable'
win = window.open(mypage, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}
</script>
<script language="JavaScript">
function verify(){
input_box=confirm("Are you sure?");
if (input_box==true){ 
return true; 
}
else{
return false;
}
}
</script>
<script>
  $(function() {
    $( "#fromrate" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });
    $(function() {
    $( "#torate" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });

  </script>
</head>
<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    
<tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td>
     <table width="100%" border="0" cellspacing="0" cellpadding="15">
       <tr>
        <td>
  
  <p>
    <?php if ($_REQUEST["new"]==1){ ?>
    </p>
  <p><span class="Aqua">New rate</span>
  </p>
  <form name="form1" method="post" action="villarate.php">
    <table border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td width="302" nowrap bgcolor="#FFFFFF"><label>
          Season:
              <input name="season" type="text" id="season" size="10">
        Español:
        <input name="season_esp" type="text" id="season_esp" size="10">
        </label></td>
        <td width="149" align="left" nowrap bgcolor="#FFFFFF">Fom:          <input name="fromrate" type="text" id="fromrate" size="10"></td>
        <td width="316" align="left" nowrap bgcolor="#FFFFFF">To:          <input name="torate" type="text" id="torate" size="10"></td>
        </tr>
      <tr>
        <td colspan="3" bgcolor="#FFFFFF"><table border="0" cellspacing="1" cellpadding="5">
          <tr bgcolor="#CCCCCC">
            <td align="center" nowrap bgcolor="#FFFFFF">1bd</td>
            <td bgcolor="#FFFFFF" align="center">2bd</td>
            <td bgcolor="#FFFFFF" align="center">3bd</td>
            <td bgcolor="#FFFFFF" align="center">4bd</td>
            <td bgcolor="#FFFFFF" align="center">5bd</td>
            <td align="center" nowrap bgcolor="#FFFFFF">Min. nigths</td>
            </tr>
          <tr bgcolor="#CCCCCC">
            <td bgcolor="#FFFFFF" align="center"><input name="rate1" type="text" id="rate1" size="8"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate2" type="text" id="rate2" size="8"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate3" type="text" id="rate3" size="8"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate4" type="text" id="rate4" size="8"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate5" type="text" id="rate5" size="8"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="nights" type="text" id="nights" size="8"></td>
            </tr>
          </table></td>
        </tr>
      <tr>
        <td height="50" colspan="3" bgcolor="#FFFFFF"><p>
          <input type="submit" name="button" id="button" value="Submit">
          <input type="hidden" name="idvilla" id="idvilla" value="<?php echo $idvilla;?>">
          <input type="hidden" name="special" id="special" value="0">
          <input type="hidden" name="nueva" id="nueva" value="1">
        </p>
          <p><a href="villarate.php">Cancel</a> </p></td>
        </tr>
      </table>
    <p>&nbsp;</p>
  </form>
  <p>
    <?php }?>
    
    <?php if ($_REQUEST["edit"]<>""){ 
  $connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$query="select * from villasrates where idr=".$_REQUEST["edit"];
$result = mysql_query($query);
$row = mysql_fetch_array($result) ?>
  </p>
  <p><span class="Aqua">Edit  rate</span> </p>
  <form name="form1" method="post" action="villarate.php">
    <table border="0" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td width="320" nowrap bgcolor="#FFFFFF"><label>Season:
            <input name="season" type="text" id="season" value="<?php echo $row["season"];?>" size="10">
Español:
<input name="season_esp" type="text" id="season_esp" value="<?php echo $row["season_esp"];?>" size="10">
        </label></td>
        <td width="194" nowrap bgcolor="#FFFFFF">Fom:          <input name="fromrate" type="text" id="fromrate" value="<?php echo $row["fromrate"];?>" size="10"></td>
        <td width="328" nowrap bgcolor="#FFFFFF">To:          <input name="torate" type="text" id="torate" value="<?php echo $row["torate"];?>" size="10"></td>
        </tr>
      <tr>
        <td colspan="3" bgcolor="#FFFFFF"><table border="0" cellspacing="1" cellpadding="5">
          <tr bgcolor="#CCCCCC">
            <td align="center" nowrap bgcolor="#FFFFFF">1bd</td>
            <td bgcolor="#FFFFFF" align="center">2bd</td>
            <td bgcolor="#FFFFFF" align="center">3bd</td>
            <td bgcolor="#FFFFFF" align="center">4bd</td>
            <td bgcolor="#FFFFFF" align="center">5bd</td>
            <td align="center" nowrap bgcolor="#FFFFFF">Min. nigths</td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <td bgcolor="#FFFFFF" align="center"><input name="rate1" type="text" id="rate1" size="8" value="<?php echo $row["rate1"];?>"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate2" type="text" id="rate2" size="8" value="<?php echo $row["rate2"];?>"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate3" type="text" id="rate3" size="8" value="<?php echo $row["rate3"];?>"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate4" type="text" id="rate4" size="8" value="<?php echo $row["rate4"];?>"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="rate5" type="text" id="rate5" size="8" value="<?php echo $row["rate5"];?>"></td>
            <td bgcolor="#FFFFFF" align="center"><input name="nights" type="text" id="nights" size="8" value="<?php echo $row["nights"];?>"></td>
          </tr>
          </table></td>
        </tr>
      <tr>
        <td height="50" colspan="3" bgcolor="#FFFFFF"><p>
          <input type="submit" name="button" id="button" value="Submit">
          <input type="hidden" name="actualiza" id="actualiza" value="<?php echo  $row["idr"];?>">
          <input type="hidden" name="special" id="special" value="0">
          <input type="hidden" name="idvilla" id="idvilla" value="<?php echo $row["idvilla"];?>">
        </p>
          <p><a href="villarate.php">Cancel</a> </p></td>
        </tr>
      </table>
    <p>&nbsp;</p>
  </form>
  <p>
    <?php mysql_close ($connection);
  }?><br>
    <?php if ($_REQUEST["newd"]<>""){ ?>
    <span class="Aqua"> Add new promotion description</span>  </p>
  <form name="form1" method="post" action="villarate.php">
    <table border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td bgcolor="#FFFFFF" class="listables"><div align="left">
          <input name="description" type="text" id="description" size="90">
          </div></td>
      </tr>
      <tr>
	      <td align="center" bgcolor="#FFFFFF" class="listables">
	        <input type="submit" name="button2" id="button2" value="Submit">
	        <input name="idspecial" type="hidden" id="idspecial" value="<?php echo $idvilla;?>">
	        
	        <br><br><a href="villarate.php">Cancel</a></td>
        </tr>
      </table>
  </form>
  <?php  }?>
  <?php if(!$_REQUEST["new"] && !$_REQUEST["newp"] && !$_REQUEST["newd"] && !$_REQUEST["edit"] && !$_REQUEST["editp"]){
	  ?>

 
  <p class="Titu_villas"><?php echo $nombre;?> Rates
</p>
  <table border="0" cellspacing="0" cellpadding="1">
    <tr>
      <td nowrap><a href="villarate.php?new=1&idv=<?php echo $idvilla;?>"><u>Add new rate</u></a></td>
      <td width="20">&nbsp;</td>
      </tr>
  </table>
  <br>
  <br>
  <table border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
      <td class="headlists">Edit</td>
      <td class="headlists">Season</td>
      <td class="headlists">From</td>
      <td class="headlists">To</td>
      <td nowrap class="headlists">Min. nights</td>
      <td class="headlists">1bd</td>
      <td class="headlists">2bd</td>
      <td class="headlists">3bd</td>
      <td class="headlists">4bd</td>
      <td class="headlists">5bd</td>
      <td class="headlists">Delete</td>
      </tr>
    <?php $connection = mysql_connect($servername,$username, $password);
mysql_select_db($db, $connection);
$query="select * from villasrates where idvilla=".$idvilla." and deleted=0 and specialrate=0 order by fromrate";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){    ?>
    <tr>
      <td bgcolor="#FFFFFF" class="listables"><a href="villarate.php?edit=<?php echo $row['idr']; ?>"><img src="images/lapiz.gif" width="19" height="14" border="0"></a></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="center"><?php echo $row['season'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="center"><?php echo $row['fromrate'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="center"><?php echo $row['torate'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="center"><?php echo $row['nights'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="right"><?php echo $row['rate1'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="right"><?php echo $row['rate2'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="right"><?php echo $row['rate3'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="right"><?php echo $row['rate4'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="right"><?php echo $row['rate5'];?></div></td>
      <td bgcolor="#FFFFFF" class="listables"><div align="center"><a onClick="return verify()" href="villarate.php?delf=<?php echo $row['idr'];?>&idv=<?php echo $idvilla;?>"><img src="images/delete.gif" width="20" height="20" border="0"></a></div></td>
      </tr>
    <?php }
mysql_close ($connection);
?>    
  </table>
   

  <p><br>
<p class="admintitles">Policy<br>
  <form name="form1" method="post" action="villarate.php">
              <p>
                <textarea cols="80" id="policy" name="policy" rows="5"><?php echo $policy;?>
              </textarea>
              </p>
              <p>
                <input type="submit" name="button3" id="button3" value="Submit policy">
              </p>
  </form>
            </p></p>
  <?php }?>
  
      <p>&nbsp;</p></td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?php
	// Include CKEditor class.
	include_once "../ckeditor/ckeditor.php";
	// Create class instance.
	$CKEditor = new CKEditor();
	// Path to CKEditor directory, ideally instead of relative dir, use an absolute path:
	//   $CKEditor->basePath = '/ckeditor/'
	// If not set, CKEditor will try to detect the correct path.
	$CKEditor->basePath = '../ckeditor/';
	// Replace textarea with id (or name) "editor1".
	$CKEditor->replace("policy");
	?>
</body>
</html>
