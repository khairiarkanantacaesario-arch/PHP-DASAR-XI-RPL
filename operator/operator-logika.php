<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operator logika</title>
</head>
<body>
	<?php  
     $n = true;
     $i = false;
     echo "	operator logika";
     echo "<br>";
     echo "n && i : " . var_dump($n && $i);
     echo "<br>";
     echo "i && i : " . var_dump($i && $i);
     echo "<br>";
     echo "n && n : " . var_dump($n && $n);
     echo "<br>";
     echo "i && n : " . var_dump($i && $n);
     echo "<br><br>";

     echo "== operator logika or ==";
     echo "<br>";
     echo "n || i : " . var_dump($n || $i);
     echo "<br>";
     echo "i || i : " . var_dump($i || $i);
     echo "<br>";
     echo "n || n : " . var_dump($n || $n);
     echo "<br>";
     echo "i || n : " . var_dump($i || $n);
     echo "<br> <br>";

     echo "== operator negasi ==";
     echo "<br>";
     echo "negasi n " ;var_dump(!$n);
     echo "<br>";
     echo "negasi i";var_dump(!$i);


     ?> 
</body>
</html>