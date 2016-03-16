<html>
<head>

<title>Alternative Energy Sources</title>
<style>
 
  h1 {

   text-align: left;

}
  h3 {
  
  text-align: left;

}

  img.lamp {
  
    float: left;
    margin: 20px;
    margin-left:20px;
    height: 200px;
    width: 400px;
}


</style>
<link href="style.css" rel="stylesheet" >
<link href="style2.css" rel="stylesheet" >
</head>
<body>

<?php 

 $tmp=file_get_contents("menu.html");
 echo $tmp;
   

?>
<?php require 'hello.php';?>
<img class="lamp" src=http://www.hse.gov.uk/eet/assets/images/eet-abstract-bulb.jpg>
<h1>New Energy </h1>

  <h3><p>A plethora of potential alternative energy technologies seem just out of reach these days.<br> The theories behind some of these "new" forms of energy production have been around for a long time and have historically met considerable opposition from traditional science and engineering. They still do today. <br> <p>The most common arguments against investigation of these new energy forms center around one of two important principles of physics.<br><p>The first is conservation of energy in closed systems and the second is the current model of the nuclei of atoms, in particular hydrogen. </h3><br>
<h3><p>The response to these criticisms from researchers in the field has been two-fold as well. <p>First, the definition of a closed system is open to discussion. <br> <p>Most researchers into new forms of compare electricity production do not argue the concept of energy conservation but point out that it is possible to define the system such that vacuum (or zero-point) energy is included and the apparent problems disappear. <br> <p>For permanent magnet motors, it is thought that the magnetic energy is converted directly.<br><p>Second, it is pointed out that current models of nuclear fusion are incomplete and cannot produce the observed deficit of solar neutrinos. <br> <p>This leaves the models open to significant interpretation.</h3>

<?php
$tmp=file_get_contents("footer.html");
echo $tmp;

?>
</body>
</html>
