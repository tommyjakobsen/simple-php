<?php

echo "<head><title>Test for OpenShift</title></head>";
echo "<body bgcolor='#abcdef'>";


echo "<font size=14 color='black'><br><br>Test website...</font><br><br>";

//print_r($_SERVER);
foreach($_SERVER as $key=>$val)
{
 echo "$key: $val<br>"; 
}
echo "</body></html>";
