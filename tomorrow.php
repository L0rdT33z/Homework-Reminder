<?php
@session_start();
if (!isset($_SESSION['login_true'])) 
{
echo '<meta http-equiv="refresh" content="0; url=./index.php" />';
exit();
}

	function safe($value){ 
   return mysql_real_escape_string($value); 
} 

if(safe($_GET["id"]))
{	
	$strSQL = "INSERT INTO hwdone (name,homework_id) VALUES ('".$_SESSION['login_true']."', 
'".safe($_GET["id"])."')";
		echo("<script> alert('สำเร็จ !'); window.location='index.php';</script>");
$objQuery = mysql_query($strSQL);
}


?>
<table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.7);">
<thead>
<tr>
<th><center>วิชา</center></th>
<th><center>รายละเอียด</center></th>
<th><center>วันที่ส่ง</center></th>
<th><center>สถานะ</center></th>

</tr>
</thead>

<tbody>
				  <?			
				  

if(date('D') == 'Sat') { 
  $datetime = new \DateTime('today+2 day');
} 
else if(date('D') == 'Fri') { 
  $datetime = new \DateTime('today+3 day');
} 
else if(date('d/m/Y') == '15/01/2019') { 
  $datetime = new \DateTime('today+2 day');
} 
else {
  $datetime = new DateTime('tomorrow');
}

$tomorrowdate = $datetime->format('Ymd');
$result1 = mysql_query("select * from hwdata WHERE timestamp = '".$tomorrowdate."' ORDER BY timestamp") or die ("Err Can not to result");
while( $dbarr1 = mysql_fetch_array($result1)){
	
	
$query = "SELECT name FROM hwdone WHERE name ='".$_SESSION['login_true']."' AND homework_id = '".$dbarr1['id']."'";
$result = mysql_query($query);

		if(mysql_num_rows($result) == "0"){	
	?>
<tr>



<td align="center" valign="middle"><?=$dbarr1["subject_name"];?></td>
<td align="center" valign="middle"><?=$dbarr1["desc"];?></td>
<td align="center" valign="middle"><?=$dbarr1["deadline"];?></td>
<td align="center" valign="middle"><font color="red">ยังไม่เสร็จ</font></td>


</tr>
	  <?
	  	}
		else
		{
		?>
		
		<tr>
		<td align="center" valign="middle"><?=$dbarr1["subject_name"];?></td>
<td align="center" valign="middle"><?=$dbarr1["desc"];?></td>
<td align="center" valign="middle"><?=$dbarr1["deadline"];?></td>
<td align="center" valign="middle"><font color="green">เสร็จแล้ว</font></td>
</tr>

	  <?		
		}
}
	?>
	
</tbody>

</table>