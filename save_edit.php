<?
	session_start();
	if($_SESSION['login'] != "ok"){
  	header("location:index.php");
	}
	require_once("dbconnect.php");
	$getid = $_GET["ID"];
	$objCon = mysqli_connect($host,$username,$password,$dbname);
	mysqli_set_charset($objCon,"utf8");
	$strSQL = "UPDATE info SET name = '".trim($_POST['txtName'])."',sex = '".trim($_POST['txtSex'])."',addr = '".trim($_POST['txtAddr'])."',birth = '".trim($_POST['txtName'])."',age = '".trim($_POST['txtAge'])."',email = '".trim($_POST['txtEmail'])."',tel = '".trim($_POST['txtTel'])."'
	WHERE ID = $getid";
    $objQuery = mysqli_query($objCon,$strSQL);
    header("location:manage_std.php");
?>