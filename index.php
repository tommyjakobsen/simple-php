
        <?php
flush();
ob_flush();
echo "<html><head>";
if(isset($_GET["pod"])){
        $pod=$_GET["pod"];
        }else{
        $pod="1";
        }
        $handle=fopen("./pods.txt", "w");
        fwrite($handle, $pod);
        fclose($handle);
flush();
ob_flush();
?>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<title>Test for OpenShift</title>
<?php
flush();
ob_flush();
echo "

<script>
var to = 2;
function gogo(){
var d=new Date(),
    dummy=d.getTime(),
        i=0,
        pix=document.images;
for(; i < pix.length; i++){
if(pix[i].className!=='refr'){continue;}
else{
var obj = pix[i],
    s_rc=obj.getAttribute('src'),
    pure_src = s_rc.substring(0,s_rc.indexOf('x=x')+3);
obj.setAttribute('src',pure_src+'&pod=$pod&'+dummy);
obj.setAttribute('title',pure_src+'&pod=$pod&'+dummy);
obj.nextSibling.innerHTML=obj.getAttribute('src');
}
}
setTimeout(gogo,to*500);
}
onload=gogo;
</script>
";
flush();
ob_flush();
?>
</head>
<body>
<script>
function refreshIframe(){
var iframe = document.getElementById('myframe');
iframe.src = iframe.src;
}
setInterval(refreshIframe, 8000);
</script>

<script>
function refreshIframe(){
var iframe = document.getElementById('myframe2');
iframe.src = iframe.src;
//alert(iframe.src);
}
setInterval(refreshIframe, 3000);
</script>






<center><h2>Client View</h2>
<table border=0 cellspacing=0>
<tr><td align=middle></td></tr>
<?php
 flush();
ob_flush();   
$host=$_SERVER["HTTP_HOST"];
echo "<tr><td align=middle><iframe src=\"http://$host/test.php\" frameBorder=\"1\" scrolling=\"no\" id='myframe' width=270></iframe> <br><img src='./img/keyboard.png'> </td></tr>";

echo "<tr><td align=middle><img src='./img/leftArrow.png' height=50></td></tr>

<tr><td colspan=2 cellspan=2 align=middle>
<img src=\"./img.php?x=x&pod=$pod\" class=\"refr\" alt=\"\" />
</td></tr></table>";
flush();
ob_flush();
?>
</body>
</hmtl>
