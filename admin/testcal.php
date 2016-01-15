<?php
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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style>
#calendario{
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;}
#calendario ul{
	padding:0px;
	margin:0px;
	list-style:none;
}
#calendario ul li{
	padding: 3px;
	float: left;
	margin: 0px;
	width: 14px;
	text-align: center;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
}
#calendario ul li:last-child {
	padding: 3px;
	float: left;
	margin: 0px;
	width: 14px;
	text-align: center;
	border: 1px solid #CCC;
}

</style>
</head>

<body>
<div id="calendario">
<?php 
if (!$addmonth){
$dDate = date("m/d/Y"); 
$fDate = DateAdd("m", 2, $dDate);
}
else{
$dDate =DateAdd("m", 1, $dDate);
}
$iDIM =  intval(GetDaysInMonth(date("m",strtotime($dDate)),date("Y",strtotime($dDate))));
$iYEA =  date("Y",strtotime($dDate));
$iDOW =  date("N",strtotime($iDOWt));
$iMON =  date("m",strtotime($dDate));
?>
<?php echo date("F", mktime(0, 0, 0, $iMON, 10))."  ".$iYEA;
echo "<ul>";

$iCurrent = date("d",strtotime($dDate));
while (strtotime($dDate) <= strtotime($fDate)) {
	$dDate=DateAdd("d", 1, $dDate);
	$dCurrent = date("D",strtotime($dDate));
echo "<li>".substr($dCurrent, 0, 2)."</li>";	
}
echo "</ul><div style='clear:both'></div>";

if (!$addmonth){
$dDate = date("m/d/Y"); 
$fDate = DateAdd("m", 2, $dDate);
}
echo "<ul>";
$iCurrent = date("d",strtotime($dDate));
while (strtotime($dDate) <= strtotime($fDate)) {
	$dDate=DateAdd("d", 1, $dDate);
	$iCurrent = date("d",strtotime($dDate));
echo "<li>".$iCurrent."</li>";	
}
echo "</ul>";
	
	
	?>
    </div>
</body>
</html>