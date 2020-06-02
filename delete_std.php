<?
	session_start();
	if($_SESSION['login'] != "ok"){
  	header("location:index.php");
	}
	include("dbconnect.php");
	$getid = $_GET["ID"];
	$objCon = mysqli_connect($host,$username,$password,$dbname);
	mysqli_set_charset($objCon,"utf8");
	$strSQL = "DELETE FROM info WHERE info.ID = $getid";
	$objQuery = mysqli_query($objCon,$strSQL);

	if(mysqli_affected_rows($objCon)) {
		header("location:manage_std.php");
	}else{
		echo "fail";
	}
?>