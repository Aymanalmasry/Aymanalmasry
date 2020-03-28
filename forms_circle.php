<link rel="stylesheet" type="text/css" href="styleformtr.css"/><body>
<form action="forms_circle.php" method="POST" target="_self">
<center>
<?php

                print " <table border='0' bgcolor='#08FADA'>
                <tr>
                <th colspan='2'>create new Circle</th></tr>
                <tr>
               <th> color fill :</th><td><input type='text' name='colorfill' class='t'/><br></td></tr><tr>
               <th> color Circle :</th><td><input type='text' name='colorc' class='t'/><br></td></tr><tr>
                <th>xc : </th><td> <input type='text' name='xc' class='t'/><br></td></tr><tr>
                <th>yc : </th><td><input type='text' name='yc' class='t'/><br></td></tr><tr>
               <th> w : </th><td><input type='text' name='w' class='t'/><br></td></tr><tr>
               <th> h : </th><td><input type='text' name='h' class='t'/><br></td></tr><tr>
              <th> angle 1  : </th><td> <input type='text' name='a1' class='t'/><br></td></tr><tr>
              <th> angle 2  : </th><td> <input type='text' name='a2' class='t'/><br></td></tr><tr>
                <th colspan='2'><input type='submit' name='save' value='draw' class='t1'/><br></th></tr></table>
                ";
                 @$cf=$_POST["colorfill"];
                @$cc=$_POST["colorc"];
                @$xc=$_POST["xc"];
                @$yc=$_POST["yc"];
                @$w=$_POST["w"];
                 @$h=$_POST["h"];
                @$angle1=$_POST["a1"];
                @$angle2=$_POST["a2"];
                       if(@$_POST["save"]=="draw"){
                           if( @$cf!=null && @$cc!=null && @$xc!=null && @$yc!=null && @$w!=null && @$h!=null && @$angle1!=null && @$angle2 !=null)
                            {
                            $im=imagecreate(600,600);
                            $r=imagecolorallocate($im,255,0,0);
                            $g=imagecolorallocate($im,0,255,0);
                            $b=imagecolorallocate($im,0,0,255);
                            if(@$cf=="red")
                            {
                            @$cf=$r;}
                           elseif($cf=="green")
                            {@$cf=$g;}
                            elseif(@$cf=="blue")
                            {
                            @$cf=$b;}
                                if(@$cc=="red")
                            {
                            @$cc=$r;}
                           elseif($cc=="green")
                            {@$cc=$g;}
                            elseif(@$cc=="blue")
                            {
                            @$cc=$b;}
                            imagefill($im,0,0,@$cf);
                            imagearc($im,$xc,$yc,$w,$h,$angle1,$angle2,$cc);
                            imagepng($im,"arc1.png");
                            print "<img src='arc1.png'>";
                }
                     else 
                           print "<div class='error'>pleace enter complete values</div>";
                }


?>
</center></form></body>