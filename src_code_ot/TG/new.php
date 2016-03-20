<html>
<body>

<?php
#echo "hello";
#$com = "/home/student/Akil/TG/main.py";
#$pid = popen($com,"r");
#while(!feof($pid))
#{
#echo fread($pid,256);
#flush();
#sleep(100000);
#}
#pclose($pid);
echo exec('/home/student/Akil/TG/main.py');
?>
</body>
</html>
