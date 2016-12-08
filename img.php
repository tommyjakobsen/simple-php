<?php
if(isset($_GET["pod"]))
{
    $pod=$_GET["pod"];
}else{
    $pod="1";
}
$ip="$_SERVER[SERVER_ADDR]";

$target_file="server.txt";
$target_file2="server2.txt";
$server1 = file_get_contents("$target_file");
$server2 = file_get_contents("$target_file2");
//
$activepod= imagecreatefrompng("img/activePod.png");
$deadpod= imagecreatefrompng("img/deadPod.png");
$host=php_uname('n');
$image = imagecreatefrompng("img/openshift_total.png");

//NUMBER OF PODS
 imagestring($image, 100, 10, 60,  "Running Pod(s): $pod", $text_color);
//Create active pod and connection
if($ip == preg_replace('/\n/', '', $server1))
{
    $pod1="activepod";    
}else{
    $pod1="deadpod";
}

if($pod == 1)
        {
        imageline($image, 400, 75, 350, 230, $blue);
        imagecopy($image, ${$pod1}, 320, 230, 0,0,40,44);
        }

if($pod  == 2)
        {
 
        imageline($image, 400, 75, 430, 233, $blue);
        imagecopy($image, ${$pod1}, 420, 230, 0,0,40,44);
        imageline($image, 400, 75, 350, 230, $blue);
        imagecopy($image, $activepod, 320, 230, 0,0,40,44);
        }

if($pod  == 3)
        {
        imageline($image, 400, 75, 430, 233, $blue);
        imagecopy($image, ${$pod1}, 420, 230, 0,0,40,44);
        imageline($image, 400, 75, 350, 230, $blue);
        imagecopy($image, $activepod, 320, 230, 0,0,40,44);
        imageline($image, 400, 75, 550, 230, $blue);
        imagecopy($image, $activepod, 550, 230, 0,0,40,44);
        }
header("Content-type: image/jpeg");
   
imageJpeg($image);
imageDestroy($image);
imageDestroy($activepod);
imageDestroy($deadpod);
?>
