<head>
<title>fgets1.php</title>
</head>

<?php
$file = fopen("test1.txt","r");
echo fgets($file);
fclose($file);
?>

<body>
</body>
</html>
