<?php

$target_file="server.txt";
$target_file2="server2.txt";
echo "<head><title>Test for OpenShift</title></head>";
echo "<body bgcolor='#ffccbb'>";


$server1 = file_get_contents("$target_file");
$server="$_SERVER[SERVER_ADDR]";

if(!preg_match("/$server/", $server1))
	{
	echo "<center><font size=3 color='red'><br><br>You have now changed to: $server</font>";
	$handle=fopen("$target_file", "w");
	fwrite($handle, $server);
	fclose($handle);
	}else{
 	echo "<center><font size=3 color='black'><br><br>You are accessing pod with local ip: $server</font>";
	}

//$handle=fopen("$target_file", "w");
//fwrite($handle, $server);
//fclose($handle);
 
echo "</body></html>";
