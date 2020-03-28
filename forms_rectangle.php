<link rel="stylesheet" type="text/css" href="styleformtr.css"/><body>
<form action="forms_rectangle.php" method="POST" target="_self">
<center>
<?php

                print "<table border='0' bgcolor='#08FADA'>
                                <tr>
                <th colspan='2'>create new Rectangle</th></tr>
                <tr>
               <th> color fill :</th><td><input type='text' name='colorfill' class='t'/><br></td></tr><tr>
               <th> color line :</th><td><input type='text' name='colorline' class='t'/><br></td></tr><tr>
                <th>x1 : </th><td> <input type='text' name='x1' class='t'/><br></td></tr><tr>
                <th>y1 : </th><td><input type='text' name='y1' class='t'/><br></td></tr><tr>
               <th> x2 : </th><td><input type='text' name='x2' class='t'/><br></td></tr><tr>
              <th> y2 : </th><td> <input type='text' name='y2' class='t'/><br></td></tr><tr>
                <th colspan='2'><input type='submit' name='save' value='draw' class='t1'/><br></th></tr></table>
                ";
                
                @$cf=$_POST["colorfill"];
                @$cl=$_POST["colorline"];
                @$x1=$_POST["x1"];
                @$y1=$_POST["y1"];
                @$x2=$_POST["x2"];
                @$y2=$_POST["y2"];
                        if(@$_POST["save"]=="draw"){
                            if( @$x1 && @$x2 && @$y1 && @$y2!=null)
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
                                if(@$cl=="red")
                            {
                            @$cl=$r;}
                           elseif($cl=="green")
                            {@$cl=$g;}
                            elseif(@$cl=="blue")
                            {
                            @$cl=$b;}
                            imagefill($im,0,0,@$cf);
                            imagerectangle($im,$x1,$y1,$x2,$y2,$cl);
                            imagejpeg($im,"im2.jpeg");
                             
                            print "<img src='im2.jpeg'>"; 
  }
            
                     else
                       {print "<b><center><div class='error'> Please complete the details !! </div></center></b>";}
                }


?>
</center></form></body>