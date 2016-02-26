<form > 
<input type="text" name="n1"> <br>
<input type="password" name="n2"><br>
<input type="submit" name="n3" value="ok">
</form>
<?php
session_start();
 $host="mysql9.000webhost.com";  
$user="a3079210_sok";
$pass="12345qwerty";
$db="a3079210_green";

if (isset ($_GET["n3"]))
{
$c=new mysqli($host, $user, $pass,$db);
$r=$c->query("select login,pass from user");
while ($f=$r->fetch_assoc())
{

$n1=$_GET["n1"];
$n2=$_GET["n2"];
if ($n1==$f["login"]&&$n2==$f["pass"])
{
$a=$f['login'];

$_SESSION["user"]=$a;
}
}
}
//print_r($_SESSION);
if ($_SESSION["user"]) {
$a=$_SESSION["user"];
$c=new mysqli($host, $user, $pass,$db);
$r=$c->query("select photo from user");
$row=$r->fetch_assoc();
$n1=$row["photo"];
$c->close();
echo "<img class='photo' src='$n1'><br>";

echo "<a href='profile.php'>$a </a><br>";
echo "<a href='logout.php'>Logout $a</a>";


}

?>