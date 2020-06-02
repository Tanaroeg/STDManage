<?session_start();

if($_SESSION['login'] != "ok"){

  header("location:index.php");

}?>
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
						<form method="post" action="save_std.php" enctype="multipart/form-data"> 
						<th class="form" width="30%" style="border-right: 1px solid #222;">ชื่อ - สกุล</th>
						<td class="form"><input type="text" name="txtName" id="txtName" required maxlength="50"/></td>
					</tr>
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">เพศ</th>
						<td class="form"><input type="radio" name="txtSex" id="txtSex" value="ชาย"/>ชาย   <input type="radio" name="txtSex" id="txtSex" value="หญิง"/>หญิง</td>
					</tr>					
					<tr class="showrow">
						<th class="form" width="30%" style="border-right: 1px solid #222;">ที่อยู่</th>
						<td class="form"><input type="text" name="txtAddr" id="txtAddr" required/></td>
					</tr>
					<tr class="showrow">								
						<th class="form" width="30%" style="border-right: 1px solid #222;">วันเกิด</th>
						<td class="form"><input type="date" name="txtBirth" id="txtBirth" required/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">อายุ</th>
						<td class="form"><input type="text" name="txtAge" id="txtAge" maxlength="2" required/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">อีเมล</th>
						<td class="form"><input type="email" name="txtEmail" id="txtEmail" required/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">โทรศัพท์</th>
						<td class="form"><input type="tel" name="txtTel" id="txtTel" required maxlength="10"/></td>
					</tr>
					<tr class="showrow">									
						<th class="form" width="30%" style="border-right: 1px solid #222;">รูปภาพ</th>
						<td class="form"><input type="file" name="img" id="img"/></td>
					</tr>									
				</table><br>
				<center><input type="submit" name="submit" value="ส่งข้อมูล"/></center>
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