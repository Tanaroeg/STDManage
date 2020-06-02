<?
	session_start();
	if($_SESSION['login'] != "ok"){
  	header("location:index.php");
	}
	require_once("dbconnect.php");
	$objCon = mysqli_connect($host,$username,$password,$dbname);
	mysqli_set_charset($objCon,"utf8");
	if(copy($_FILES["img"]["tmp_name"],"images/".$_FILES["img"]["name"])) {
		$img = $_FILES["img"]["name"];
	    $strSQL = "INSERT INTO info (name,sex,addr,birth,age,email,tel,img) VALUES ('".$_POST["txtName"]."','".$_POST["txtSex"]."','".$_POST["txtAddr"]."','".$_POST["txtBirth"]."','".$_POST["txtAge"]."','".$_POST["txtEmail"]."','".$_POST["txtTel"]."','$img');
        $objQuery = mysqli_query($objCon,$strSQL)";
        header("location:manage_std.php");
  	}
?>