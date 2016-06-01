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

$sql="insert into contacts (`name`, `email`, `phone`, `subject`, `message`) values ('".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";

mysql_query($sql);
?>
<script type="text/javascript">
	var x = document.referrer;
    var nurl=x.substr(0,x.lastIndexOf("/"))+"/thankyou.php";
	window.location.href=(nurl);
</script>