<?
	session_start();
	if($_SESSION['login'] != "ok"){
	header("location:index.php");
	}
	require_once("dbconnect.php");
	$getid = $_GET["ID"];
	$objCon = mysqli_connect($host,$username,$password,$dbname);
	mysqli_set_charset($objCon,"utf8");
	$strSQL = "SELECT * FROM info WHERE ID = $getid";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
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
			<li><a href="info_std.php">ข้อมูลนักเรียน</a></li>
			<li><a href="add_std.php" class="active">เพิ่มข้อมูลนักเรียน</a></li>
			<li><a href="manage_std.php">จัดการข้อมูลนักเรียน</a></li>
		</ul>
		</div>
	</div>
	<div class="container">
		<div class="col1 bg-white">
		<h2>ข้อมูลนักเรียน</h2>
				<table class="showrow">
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">ID</th>
						<td class="form"><?echo "$getid"?></td>
					</tr>
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">ชื่อ-สกุล</th>
						<td class="form"><?$Name = $objResult["name"];echo "$Name"?></td>
					</tr>
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">เพศ</th>
						<td class="form"><?$Sex = $objResult["sex"];echo "$Sex"?></td>
					</tr>					
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">ที่อยู่</th>
						<td class="form"><?$Addr = $objResult["addr"];echo "$Addr"?></td>
					</tr>
					<tr class="showrow">								
						<th class="form" width="30%" style="border-right: 1px solid #222;">วันเกิด</th>
						<td class="form"><?$Birth = $objResult["birth"];echo "$Birth"?></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">อายุ</th>
						<td class="form"><?$Age = $objResult["age"];echo "$Age"?></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">อีเมล</th>
						<td class="form"><?$Email = $objResult["email"];echo "$Email"?></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">โทรศัพท์</th>
						<td class="form"><?$Tel = $objResult["tel"];echo "$Tel"?></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">รูปภาพ</th>
						<td class="form"><img width="250px" src="images/<?$Img = $objResult["img"];echo "$Img"?>" /></td>
					</tr>									
				</table><br>
		</div>
		<div class="col2 bg-white">
		<center><h2>ยินดีต้อนรับ</h2></center>
		<center>ADMIN</center>
		<center><br><a href="logout.php" class="red-btn">ออกจากระบบ</a></center>
		</div>
	</div>

</body>
</html>