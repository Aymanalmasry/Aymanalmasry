<html>
<head><title>forms</title>
                <style>
   select{
     font-size:1.5em;
     border:5px inset;
     border-radius:10px ;
   }
tr{
                     
color:#ff0051;
font-size: 1.7em;

 }
 table{
  margin:5px;
  width:50%;
  
 }
 form input[type=submit]{
font-size:1.2em;
width: 20%; color: #fff; background:#3cc022;
border:0;
margin:20px auto;
padding:10px 5px;
font-weight:bold;
border-radius: 25px;
               }
form input[type=text]{
    padding-top: 15px;
    padding-left:15px;
font-size:1.2em;
cursor:auto;
width: 70%; color: #333; 
border:0;
font-weight:bold;
margin: 20px;
margin:5px auto;
padding:10px;
border-radius: 25px;

               }
form input[type=text]:hover{
    width: 73%;
}
form input[type=submit]:hover{
    width: 21%;
    height: 7%;
    background:#45D926;
}
.error{
  font-size: 2em;  
  color:#ff0051;
  font-weight:bold;
}
.ss{

}
                </style>
</head>
<body bgcolor="">
<?php 
@$s=$_POST["send"];
@$q=$_POST["draw"];
if(@$s=="send" || @$_POST["save"]=="draw"|| @$_POST["save"]=="Solution")
{
if(@$q==1)
@$a1="selected";
elseif(@$q==2)
@$a2="selected";
elseif(@$q==3)
@$a3="selected";
elseif(@$q==4)
@$a4="selected";
elseif(@$q==5)
@$a5="selected";
elseif(@$q==6)
@$a6="selected";
}

?>

<form action="forms.php" method="POST" target="_self">
<center><table border="0"><tr>

       <select name="draw">
       <option value="0"></option>
            <option value="1" <?php  print @$a1;?>  >line</option>
            <option value="2" <?php  print @$a2;?>  >rectangle</option>
            <option value="3" <?php  print @$a3;?>  >Circle</option>
            <option value="4" <?php  print @$a4;?>  >table</option>
            <option value="5" <?php  print @$a5;?>  >Quadratic equation</option>
            <option value="6" <?php  print @$a5;?>  >Calculator</option>
            </select><br />
            <input type="submit" name="send" value="send" />
            <hr size="30%" />
            
<?php 
            
@$s=@$_POST["draw"];
if(@$s==1)
{
    include("forms_line.php");
}           
elseif(@$s==2)
{
    include("forms_rectangle.php");
}
 elseif(@$s==3)
{ 
    include("forms_circle.php");
}
elseif(@$s==4)
{
    include("forms_table.php");
}
                                
elseif(@$s==5)
{
    include("forms_qe.php");
}
elseif(@$s==6)
{   
    include("forms_culc.php");
}
 ?>
        
        </table></center>
</form>
</body>
</html>