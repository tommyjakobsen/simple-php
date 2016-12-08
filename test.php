<?php
flush();
ob_flush();
$target_file="server.txt";
$target_file2="server2.txt";

echo "<head><title>Test for OpenShift</title></head>";
echo "<body bgcolor='#0000ff'>";


$server1 = file_get_contents("$target_file");
$server="$_SERVER[SERVER_ADDR]";

if(!preg_match("/$server/", $server1))
        {
        flush();
        ob_flush();
        echo "<center><font size=3 color='red'><br><br>You have now changed pod: $server</font>";
         flush();
        ob_flush();
        sleep(4);
        $handle2=fopen("$target_file2", "w");
        fwrite($handle2, $server);
        fclose($handle2);
        }else{
        flush();
        ob_flush();
        echo "<center><font size=3 color='black'><br><br>You are accessing pod<br>with internal IP: $server</font>";
        flush();
        ob_flush();
        }

$handle=fopen("$target_file", "w");
fwrite($handle, $server);
fclose($handle);


$len1=strlen($server1);
echo "</body></html>";
