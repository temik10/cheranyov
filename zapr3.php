
<?php
require_once'connect.php';
?>
<form action="zapr3.php" method="GET">
 	Добавить продукт: <input type="text" name="qwerty"><br>
    <br>
 	<input type="submit" name="submit" value="Добавить"><br>
 </form>
 <?php
 if ($_GET['submit'])
 {
 $result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO produkti (`Produkti.id`, Prodikti) VALUES (0, '$_GET[qwerty]')");
 }
?>