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
			<li><a href="add_std.php">เพิ่มข้อมูลนักเรียน</a></li>
			<li><a href="manage_std.php" class="active">จัดการข้อมูลนักเรียน</a></li>
		</ul>
		</div>
	</div>
	<div class="container">
		<div class="col1 bg-white">
		<h2>ข้อมูลนักเรียน</h2>
				<table class="showrow">
					<tr class="showrow">
						<form method="post" action="save_edit.php">
						<th class="form" width="30%" style="border-right: 1px solid #222;">ID</th>
						<td class="form"><?echo "$getid"?></td>
					</tr>
					<tr class="showrow">
					<th class="form" width="30%" style="border-right: 1px solid #222;">ชื่อ - สกุล</th>
						<td class="form"><input type="text" name="txtName" id="txtName" required maxlength="50" value="<?$Name = $objResult["name"];echo "$Name"?>"/></td>
					</tr>					
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">เพศ</th>
						<td class="form"><input type="radio" name="txtSex" id="txtSex" value="ชาย" 
						<?$Sex = $objResult["sex"];if($Sex == "ชาย"){echo "checked";}?>/>ชาย   <input type="radio" name="txtSex" id="txtSex" value="หญิง" <?$Sex = $objResult["sex"];if($Sex == "หญิง"){echo "checked";}?>/>หญิง</td>
					</tr>					
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">ที่อยู่</th>
						<td class="form"><input type="text" name="txtAddr" id="txtAddr" value="<?$Addr = $objResult["addr"];echo "$Addr"?>" required/></td>
					</tr>
					<tr class="showrow">								
						<th class="form" width="30%" style="border-right: 1px solid #222;">วันเกิด</th>
						<td class="form"><input type="date" name="txtBirth" id="txtBirth" value="<?$Birth = $objResult["birth"];echo "$Birth"?>" required/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">อายุ</th>
						<td class="form"><input type="text" name="txtAge" id="txtAge" maxlength="2" value="<?$Age = $objResult["age"];echo "$Age"?>" required/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">อีเมล</th>
						<td class="form"><input type="email" name="txtEmail" id="txtEmail" value="<?$Email = $objResult["email"];echo "$Email"?>" required/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">โทรศัพท์</th>
						<td class="form"><input type="tel" name="txtTel" id="txtTel" value="<?$Tel = $objResult["tel"];echo "$Tel"?>" required maxlength="10"/></td>
					</tr>								
				</table><br>
				<center><input type="submit" name="txtImg" id="txtImg" value="บันทึกข้อมูล"/></center>
				</form>
		</div>
		<div class="col2 bg-white">
		<center><h2>ยินดีต้อนรับ</h2></center>
		<center>ADMIN</center>
		<center><br><a href="logout.php" class="red-btn">ออกจากระบบ</a></center>
		</div>
	</div>

</body>
</html>