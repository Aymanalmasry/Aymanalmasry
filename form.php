<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

<link rel="stylesheet" type="text/css" href="styleform.css">
	<title>Untitled 6</title>
</head>

<body >
<div class="form">
<form action="form.php" method="POST">


<h2> ”ÃÌ·</h2><div align="right">«œŒ· «”„ «·„” Œœ„
<input type="text" placeholder="" name="name"/></p>
«œŒ· «·»—Ìœ «·≈·ﬂ —Ê‰Ì
<input type="email" placeholder="****aym***@gmail.com" name="mail"/></p>
«œŒ· «·—ﬁ„ «·”—Ì
<input type="password" placeholder="12345aumvc67" name="pass"/></div></p>
<input type="submit" value="ss" name="submit"/>
</form></div>
</form>

</body>
</html>
<?php
@$name=$_POST["name"];
@$mail=$_POST["mail"];
@$pass=$_POST["pass"];
@$sub=$_POST["submit"];

if($sub=="ss"){
    $ar=array($name,$mail,$pass);
print"<table border='0' bordercolor='red' width='50%' height='80%'>";// cellspacing='0'>";
for($i=0;$i<=count($ar);$i++)
{
   // print"<tr>";
    //for($j=0;$j<count($ar);$j++)
    
       // if($i+$j==11 or $i==$j or $i==10 or $i==1 or $j==1 or $j==10)
        /*{
        $bg="#fff";
        }
        else
        {
            $bg="#ff0055";
        }*/
       @ print"<tr><td>$ar[$j]</td></tr>";
    
   // print"</tr>";
}
//print"</table>";
//for($i=0;$i<3;$i++){
  //  print $ar[$i];

}
?>