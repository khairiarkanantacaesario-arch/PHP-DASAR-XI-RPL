<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pengulangan 2</title>
</head>
<body>
    <h1>pengulangan</h1>
    <h2>for</h2>
    <?php
    for ($i=1; $i < 5; $i++) { 
    	echo "hello word <br>";
    }
    ?>

    <h2>white</h2>
    <?php
    $i = 1;
    while ($i <= 5) {
    	echo "hello word <br>";
    	$i++;
    }
    ?>

  <h2>Do White</h2>
  <?php
  $i = 1;
  do {
  	echo "hello word <br>";
  	$i++;
  } while ($i <= 5);
  	?>
  	
</body>
</html>