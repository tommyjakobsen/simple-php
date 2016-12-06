<?php
if(isset($_GET["pod"]))
{
    $pod=$_GET["pod"];
}else{
    $pod="1";
}

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
 imagestring($image, 130, 10, 110,  "Running Pod(s): $pod", $text_color);
//Create active pod and connection
if($server1 == $server2 || !preg_match('/[0-9]/', $server2)  || (!preg_match('/[0-9]/', $server2) && !preg_match('/[0-9]/', $server1)))
	{
	imageline($image, 400, 75, 350, 230, $blue);
	imagecopy($image, $activepod, 320, 230, 0,0,40,44);
	}else{

        imagecopy($image, $deadpod, 320, 230, 0,0,40,44);

	//New server	
	imageline($image, 400, 75, 430, 233, $blue);
        imagecopy($image, $activepod, 420, 230, 0,0,40,44);
        }


header("Content-type: image/jpeg");
   

imageJpeg($image);
imageDestroy($image);

imageDestroy($activepod);
imageDestroy($deadpod);


?>
