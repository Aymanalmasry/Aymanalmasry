<link rel="stylesheet" type="text/css" href="styleformtr.css"/><body>
<form action="forms_culc.php" method="POST" target="_self">
<center>
<?php

                @$num1=@$_POST["num1"];
                @$num2=@$_POST["num2"];
                @$culc=@$_POST["culc"];
                if($culc=="+"){
                    if($num1&&$num2!=null)
                    {
                      @$r=$num1+$num2;  
                    }
                }
                elseif($culc=="-"){
                    if($num1&&$num2!=null)
                    {
                      @$r=$num1-$num2;  
                    }
                }
                elseif($culc=="X"){
                    if($num1&&$num2!=null)
                    {
                      @$r=$num1*$num2;  
                    }
                }
                elseif($culc=="/"){
                    if($num1&&$num2!=null)
                    {
                      @$r=$num1/$num2;  
                    }
                }
   
             

          print 
                "<table border='0' bgcolor='#08FADA'>
                 <tr>
                <th colspan='2'>calculator</th></tr> 
                <tr>
                <th>num1 : <input type='text' name='num1' value='$num1' class='t'/></th></tr><tr> 
                  <th>  num2 : <input type='text' name='num2' value='$num2' class='t'/>
                </th></tr><tr>
                <th colspan='2'>Result : <input type='text' name='r' readonly value=".@$r ."><br></th></tr>
                <tr>
                <th colspan='2'>
                <input type='submit' name='culc' value='+' class='ss'/>
                <input type='submit' name='culc' value='-' class='ss'/>
                <input type='submit' name='culc' value='X' class='ss'/>
                <input type='submit' name='culc' value='/' class='ss'/></th>
                </tr>
                </table>
                ";



?>
</center></form></body>