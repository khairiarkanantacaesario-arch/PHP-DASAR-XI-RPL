<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugas nilai</title>
</head>
<body>
	<?php 
    $na = 150;
    
    if ($na >= 101) {
    	echo ("keterangan : nilai tidak valid ");
    	echo "<br>";
    	echo "predikat :nilai tidak valid ";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";

     }elseif ($na >= 90){
     	echo ("keterangan : lulus");
    	echo "<br>";
    	echo "predikat :A";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";
     }elseif ($na >=80){
     	echo ("keterangan : lulus");
    	echo "<br>";
    	echo "predikat :B";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";
    }elseif ($na >=70){
     	echo ("keterangan : lulus");
    	echo "<br>";
    	echo "predikat :C";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";
    }elseif ($na >=50){
     	echo ("keterangan : tidak lulus");
    	echo "<br>";
    	echo "predikat :D";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";
    }elseif ($na >=40){
     	echo ("keterangan : tidak lulus");
    	echo "<br>";
    	echo "predikat :E";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";
    }elseif ($na <= -1){
     	echo ("keterangan : tidak valid");
    	echo "<br>";
    	echo "predikat :tidak valid";
    	echo "<br>";
    	echo "nilai akhir:" . $na;
    	echo "<br>";
    }
	?>

</body>
  </html>