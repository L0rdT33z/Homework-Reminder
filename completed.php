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
	$strSQL = "DELETE FROM hwdone WHERE name ='".$_SESSION['login_true']."' AND homework_id='".safe($_GET["id"])."'";
$objQuery = mysql_query($strSQL);
		echo("<script> alert('สำเร็จ !'); window.location='index.php';</script>");
}


?>
<table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.7);">
<thead>
<tr>
<th><center>วิชา</center></th>
<th><center>รายละเอียด</center></th>
<th><center>วันที่ส่ง</center></th>
<th><center>การกระทำ</center></th>

</tr>
</thead>

<tbody>
				  <?
$result1 = mysql_query("select * from hwdata ORDER BY timestamp") or die ("Err Can not to result");
while( $dbarr1 = mysql_fetch_array($result1)){
	
	
$query = "SELECT name FROM hwdone WHERE name ='".$_SESSION['login_true']."' AND homework_id = '".$dbarr1['id']."'";
$result = mysql_query($query);

		if(mysql_num_rows($result) > "0"){	
	?>
<tr>
<td align="center" valign="middle"><?=$dbarr1["subject_name"];?></td>
<td align="center" valign="middle"><?=$dbarr1["desc"];?></td>
<td align="center" valign="middle"><?=$dbarr1["deadline"];?></td>
<td align="center" valign="middle"><a href="./home.php?p=completed&id=<?=$dbarr1["id"];?>">ยังไม่เสร็จ</a></td>
</tr>
	  <?
	  	}
}
	?>
	
</tbody>

</table>