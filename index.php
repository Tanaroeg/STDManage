<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เข้าสู่ระบบ</title>
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div class="login-box">
		<h2>เข้าสู่ระบบ</h2>
		<form method="post" action="checklogin.php">
			<input type="text" name="txtUsername" id="txtUsername" placeholder="ชื่อผู้ใช้"><br><br>
			<input type="password" name="txtPassword" id="txtPassword" placeholder="รหัสผ่าน"><br><br>
			<input type="submit" name="login" value="เข้าสู่ระบบ">
		</form>
		     <? 
                $status = $_GET["status"];
                if($status == "fail") {
                    echo "<center><font color='red'>รหัสผ่านผิด</font></center>";
                }
            ?>
	</div>
</body>
</html>