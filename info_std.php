<?
	session_start();
	if($_SESSION['login'] != "ok"){
  	header("location:index.php");
	}
	include("dbconnect.php");
	$objCon = mysqli_connect($host,$username,$password,$dbname);
	mysqli_set_charset($objCon,"utf8");
	$strSQL = "SELECT * FROM info ORDER BY ID ASC";
	$objQuery = mysqli_query($objCon,$strSQL);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ระบบจัดการนักเรียน</title>
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div class="nav">
		<div class="container">
		<ul>
			<li><a href="info_std.php" class="active">ข้อมูลนักเรียน</a></li>
			<li><a href="add_std.php">เพิ่มข้อมูลนักเรียน</a></li>
			<li><a href="manage_std.php">จัดการข้อมูลนักเรียน</a></li>
		</ul>
		</div>
	</div>
	<div class="container">
		<div class="col1 bg-white">
		<h2>ข้อมูลนักเรียน</h2>
				<table class="showrow">
					<tr class="showrow">
						<th class="showrow">รูปภาพ</th>
						<th class="showrow">ID</th>
						<th class="showrow">ชื่อ - สกุล</th>
						<th class="showrow">เพศ</th>
						<th class="showrow"></th>
					</tr>
				<?while($objResult = mysqli_fetch_array($objQuery)) { ?>
					<tr class="showrow">
						<td class="showrow"><img width="150px" src="images/<?$Img = $objResult["img"];echo "$Img"?>" /></td>
						<td class="showrow"><?$ID = $objResult["ID"];echo "$ID"?></td>
						<td class="showrow"><?$Name = $objResult["name"];echo "$Name"?></td>
						<td class="showrow"><?$Sex = $objResult["sex"];echo "$Sex"?></td>
						<td class="showrow"><a href="view_std.php?ID=<?$ID = $objResult["ID"];echo "$ID"?>" class="green-btn">ดูข้อมูล</a></td>
					</tr>
				<?}?>
				</table>
		</div>
		<div class="col2 bg-white">
		<center><h2>ยินดีต้อนรับ</h2></center>
		<center>ADMIN</center>
		<center><br><a href="logout.php" class="red-btn">ออกจากระบบ</a></center>
		</div>
	</div>

</body>
</html>