<form action="login.php"> 
<input type="text" name="n1"> <br>
<input type="password" name="n2"><br>
<input type="submit" name="n3" value="ok">

</form>
<?php


if (isset ($_GET["n3"]))
{
$f1=file_get_contents("login.txt");
$f2=file_get_contents("pass.txt");
$f3=split(':',$f1);
$f4=split(':',$f2);
$t="no";
for($i=0;$i<count($f3);$i++)
{

if ($f3[$i]==$_GET["n1"]&&$f4[$i]==$_GET["n2"])
{
file_put_contents("user.txt",$_GET["n1"]);
echo "current user: ".$f3[$i];
$t="yes";
echo "<form><input type='submit' name='s2' value='exit'></form>";
if (isset ($_GET['s2']))
file_put_contents("user.txt","");


}
}
if ($t=="no")
{
echo "Error <br>";

}
}
?>
<a href="newuser.php"> Add new user </a>