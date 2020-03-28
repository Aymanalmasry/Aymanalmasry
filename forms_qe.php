<link rel="stylesheet" type="text/css" href="styleformtr.css"/><body>
<form action="forms_qe.php" method="POST" target="_self">
<center>
<?php
                @$a=$_POST["a"];
                @$b=$_POST["b"];
                @$c=$_POST["c"];
                @$save=$_POST["save"];


          print 
                "<table border='0' bgcolor='#08FADA'>
                 <tr>
                <th colspan='2'>Quadratic equation</th></tr> 
                <tr>
               <th> a :&nbsp&nbsp<input type='text' name='a' class='t' value='$a'/><br></th></tr><tr>
               <th> b :<input type='text' name='b' class='t' value='$b'/><br></th></tr><tr>
                <th>c : <input type='text' name='c' class='t'value='$c'/><br></t></tr><tr>

                <th colspan='2'><input type='submit' name='save' value='Solution' class='qe'/><br></th></tr>
                "; 
            

                    if(@$_POST["save"]=="Solution"){
                        if($a&&$b&&$c!=null){
                        $d=$b*$b-(4*$a*$c);
                        if($d>=0){@$x1=(-$b+bcsqrt($d))/(2*$a);
                        @$x2=(-$b-bcsqrt($d))/(2*$a);
                        print "<tr><th colspan='2'><div class='error'>X1=" . @$x1 . "<br>" . "X2=" . @$x2."</div></th></tr>";
                        }
                        else print "<tr><th colspan='2'><div class='error'>There are no roots for the equation</div></th></tr>";
                    }
                    else print "<tr><th colspan='2'><div class='error'>pleace enter complete values</div></th></tr></table>";
            }

?>
</center></form></body>