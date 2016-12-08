<?php

$target_file="server.txt";
$target_file2="server2.txt";
ob_end_clean();
ob_flush();
echo "<head><title>Test for OpenShift</title></head>";
echo "<body bgcolor='#abcdef'>";


$server1 = file_get_contents("$target_file");
$server="$_SERVER[SERVER_ADDR]";

if(!preg_match("/$server/", $server1))
        {
        ob_flush();
        echo "<center><font size=3 color='red'><br><br>You have now changed to: $server</font>";
        ob_end_flush();
        ob_end_clean();
        sleep(4);
        $handle2=fopen("$target_file2", "w");
        fwrite($handle2, $server);
        fclose($handle2);
        }else{
        echo "<center><font size=3 color='black'><br><br>You are accessing server: $server</font>";
        }

$handle=fopen("$target_file", "w");
fwrite($handle, $server);
fclose($handle);


$len1=strlen($server1);
echo "</body></html>";
