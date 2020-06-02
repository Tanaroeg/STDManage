<?
    session_start();
	require_once("dbconnect.php");
	$objCon = mysqli_connect($host,$username,$password,$dbname);
	$strSQL = "SELECT * FROM user WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' and
	password =
	'".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'
	";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if($objResult) {
        $_SESSION["login"] = "ok";
        header("location:info_std.php");

    }else{

        header("location:index.php?status=fail");

    }

?>