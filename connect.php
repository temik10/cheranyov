<?php

error_reporting(0);
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "restoran";
$link=mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$link)
{
  die('<p style = "color : red">'.mysqli_connect_errno()."-".mysqli_connect_error().'</p>');
}
echo "<p>вы подключились к серверу MySQL</p>";
?>
<font size="12"><p><b>Ресторан</b></p></font>

<font size="4"><p>Выбирете данные которые хотите изменить или найти какую-либо информацию:</p></font>

<br>

<form action="zapr1.php" method="GET">
  <input type="submit" name="submit" value="Поиск по названию блюда">
 </form>

<form action="zapr2.php" method="GET">
  <input type="submit" name="submit" value="Удаление продукта">
 </form>

<form action="zapr3.php" method="GET">
  <input type="submit" name="submit" value="Добавление продукта">
 </form>

<form action="zapr4.php" method="GET">
  <input type="submit" name="submit" value="Поиск по указанному весу">
 </form>

<form action="zapr5.php" method="GET">
  <input type="submit" name="submit" value="Поиск номеров по наличию продукта в блюде">
<br>
 </form>