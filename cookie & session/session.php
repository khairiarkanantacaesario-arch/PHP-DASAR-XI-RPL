 <?php

    session_start();
    
    if (isset($_POST['buat'])) {
     
   	 $namasession=$_POST['session'];
      $_SESSION['isi']= $namasession;

      header("Location:session.php");
   }

   // ketika button hapus  di klik
   if (isset($_POST['hapus'])) {

      session_unset();

     header(Location:session.php);
   	}

  ?>
<!DOCTYPE html>
<html>
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>session</title>
</head>
  <body>
   <h1>session akan muncul dibawah</h1>
    <?php if(isset($_SESSION['isi'])):?>
      <h4> isi  dari session akan muncul <?= $_SESSION['isi']?></h4>
   <?php endif ?>
    <form method="post" action="">
    	<input type="text" name="session">
    	<button type="submit" name="Buat">buat</button>
    	<button type="submit" name="Hapus">hapus</button>
   </form>
</body>
</html>
