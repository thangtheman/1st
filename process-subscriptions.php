<?php	
$dbhost = "localhost";
$dbuname = "dsc-admin";
$dbpass = "@$!@tv100!";
$dbname = "dsc-database";

$con = mysql_connect($dbhost, $dbuname, $dbpass);

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dsc-database", $con);

$sql="insert into subscriptions (`email`) values ('".$_POST['email']."')";

mysql_query($sql);
?>
<script type="text/javascript">
	var x = document.referrer;
    var nurl=x.substr(0,x.lastIndexOf("/"))+"/thankyou.php";
	window.location.href=(nurl);
</script>