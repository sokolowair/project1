<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" >
<title>Title of the document</title>
</head>

<body>
<form >
Photo<br>
<input type="text" name="n1"><br>
<input type="submit" name="s"><br>



</form>
<?php
$host="mysql9.000webhost.com";  
$user="a3079210_sok";
$pass="12345qwerty";
$db="a3079210_green";

if($_GET["s"]){



$c=new mysqli($host, $user, $pass,$db);
$n1=$_GET['n1'];
$r=$c->query("update user SET photo='$n1' ");
$c->close();
}
$c=new mysqli($host, $user, $pass,$db);
$r=$c->query("select photo from user");
$row=$r->fetch_assoc();
$n1=$row["photo"];
$c->close();
echo "<img src='$n1'>";

?>
</body>

</html>
