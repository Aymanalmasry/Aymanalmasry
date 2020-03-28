<link rel="stylesheet" type="text/css" href="styleformtr.css"/><body>
<form action="forms_table.php" method="POST" target="_self">
<center>
<?php

            print "
                <table border='0' bgcolor='#08FADA'>
                                               <tr>
                <th colspan='2'>create new table</th></tr> 
                <tr>
               <th> numper of rows :</th><td><input type='text' name='r' class='t'/><br></td></tr><tr>
               <th> numper of cols :</th><td><input type='text' name='c' class='t'/><br></td></tr><tr>
                <th>border : </th><td> <input type='text' name='border' class='t'/><br></td></tr><tr>
                <th>border color : </th><td> <input type='text' name='bc' class='t'/><br></td></tr><tr>
                <th>bgcolor : </th><td><input type='text' name='bgcolor' class='t'/><br></td></tr><tr>
                <th>cellspacing : </th><td><input type='text' name='space' class='t'/><br></td></tr><tr>
                <th>cellpadding : </th><td><input type='text' name='padding' class='t'/><br></td></tr><tr>
               <th>  width </th><td><input type='text' name='w' class='t'/><br></td></tr><tr>
              <th> height </th><td> <input type='text' name='h' class='t'/><br></td></tr><tr>
                <th colspan='2'><input type='submit' name='save' value='draw' class='t1'/><br></th></tr></table>
                ";    
                @$r=$_POST["r"];
                @$c=$_POST["c"];
                @$bord=$_POST["border"];
                @$bc=$_POST["bc"];
                @$bgcolor=$_POST["bgcolor"];
                @$space=$_POST["space"];
                @$padding=$_POST["padding"];
                @$w=$_POST["w"];
                @$h=$_POST["h"];
                if(@$_POST["save"]=="draw"){
                    
                    if( @$r && @$c && @$bord && @$bgcolor && @$w && @$h!=null){
                    print "<table border='$bord' cellspacing='2' width='$w%' height='$h%' bgcolor='$bgcolor' bordercolor='@$bc'
                    cellspacing='@$space' cellpadding='@$padding' >";
                        for($i=1;$i<=@$r;$i++)
                        { 
                            print"<tr >";
                            
                            for($j=1;$j<=@$c;$j++)
                            {
                            print"<td>PHP</td>";
                            }
                             print"</tr>";
                        }
                             print"</table>";}else print "<div class='error'>pleace enter complete values</div>";}


?>
</center></form></body>