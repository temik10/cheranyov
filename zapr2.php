<?php
require_once'connect.php';
?>
 <form action="zapr2.php" method="GET">
 	Удалить продукт: <input type="text" name="qwerty"><br>
     <br>
 	<input type="submit" name="submit" value="Удалить"><br>
 </form>
 <?php
 if ($_GET['submit'])
 {
 	$result=mysqli_query($link,"DELETE LOW_PRIORITY QUICK
 		FROM produkti WHERE prodikti = '$_GET[qwerty]'
 		LIMIT 100");
 }
?>