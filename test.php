<?php
echo "<head><title>Test for OpenShift</title></head>";
echo "<body bgcolor='#cccccc'>";

if (isset($_GET['server']))
{
  $server=$_GET['server']; 
}else{
  $server="";
}

if ($server == "")
{
 echo "<center><font size=11 color='black'><br><br>Welcome to OpenShift Test website...<b><br>Active Server is: $_SERVER[SERVER_ADDR]</font><br><br>";
$server="$_SERVER[SERVER_ADDR]";
 echo "<META HTTP-EQUIV='refresh' content='2;URL=./test.php?server=$server'>";
}else{
 if ($server == $_SERVER[SERVER_ADDR])
 {
   echo "<center><font size=11 color='black'><br><br>You are accessing server: $_SERVER[SERVER_ADDR]</font>";
   echo "<META HTTP-EQUIV='refresh' content='2;URL=./test.php?server=$server'>";
 }else{
  echo "<center><font size=11 color='black'><br><br>You have now changed from server: $server to server: $_SERVER[SERVER_ADDR]</font>";
   $server="$_SERVER[SERVER_ADDR]";
   echo "<META HTTP-EQUIV='refresh' content='2;URL=./test.php?server=$server'>";
 }
}
 
echo "</body></html>";
