<?php

if(isset($_GET["offsett"]))

        {
        $offsett=$_GET["offsett"];
        echo "Calculating with offsett: $offsett<br><br>";
        }else{
        $offsett=0;
        }

if(isset($_GET["tresh"]))
        {
        $tresh=$_GET["tresh"];
        }else{
        $tresh="";
        }


if(isset($_GET["boardln"]))
        {
        $boardln=$_GET["boardln"];
        }else{
        $boardln="";
        }
 echo "<form  action='./park.php' method='get'> 
  Offset:
  <input type='text' name='offsett' value='$offsett'><br>
  Board Len:
  <input type='text' name='boardln' value='$boardln'>
  Edges:
  <input type='text' name='tresh' value='$tresh'><i>(seperate with ; </i>
<br>

 <input type='submit' value='Submit'> 
</form>";

$i=0;

$med_count=0;
$loopcount=0;
$temp_med_count=$offsett;
$treshArray=preg_split('/;/', $tresh);

//print_r($treshArray);


while ($i < 1200)
        {
        if($loopcount==0)
                {
                if($temp_med_count == $boardln)
                {
                        $loopcount++;
                        $color="color=red";
                        $med_count=0;
                        $line="--------------------------------------------- board edge";
                        }else{
                        $color="";
                        $line="";
                        }

                $temp_med_count++;
                }else{

                if($med_count==$boardln)
                        {
                        $color="color=red";
                        $med_count=0;
                        $line="--------------------------------- board edge";
                        }else{
                        $color="";
                        $line="";
                        }

                }
        if (in_array("$i", $treshArray)) {
                        $color="color=blue";
                        $line="============================ wall edge";
                        }



        echo "<font size=2 $color>$i $line</font><br>";
        $i++;
        $med_count++;
        }
