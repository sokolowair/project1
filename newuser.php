<html>
<head>



   </head>
<body>
<form>
<input type="text" name="n1"><br>
<input type="password" name="n2"><br>
<input type="password" name="n3"><br>
<input type="submit" name="s1" value="add">

</form>
<?php
if (isset($_GET["s1"]))
{
if ($_GET["n2"] != $_GET["n3"])
{
 header ("Location: newuser.php");

}
if ($_GET["n2"] == $_GET["n3"]);
{
   $t1=file_get_contents("login.txt");
   file_put_contents("login.txt",$_GET["n1"].":".$t1);
   $t2=file_get_contents("pass.txt"); 
   file_put_contents("pass.txt",$_GET["n2"].":".$t2);
    header ("Location: index.php ");
}
}


?>

  </body>
</html>