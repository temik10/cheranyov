<?php
require_once'connect.php';
?>
<form action="zapr1.php" method="GET">
 Название блюда:<select name="bludo">
 <?php
$result=mysqli_query($link,"SELECT
  bludo.bludo
FROM bludo");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
  echo"<option>". ($row['bludo']."</option>");
}
?>
 </select><br><br>
 <input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"SELECT
  `info in menu`.Kategoria,
  `info in menu`.Time_vipolnenie,
  `info in menu`.`Kol-vo_kall`,
  `info in menu`.Stoimost,
  bludo.bludo
FROM `info in menu`
  INNER JOIN bludo
    ON `info in menu`.Naimen_bluda = bludo.`bludo.id`
WHERE bludo.bludo = '$_GET[bludo]'");
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="10">';
echo '<tr>';
echo '<th>'."Категория".'</th>';
echo '<th>'."Время готовки (мин.)".'</th>';
echo '<th>'."Ккал".'</th>';
echo '<th>'."Стоимость".'</th>';
echo '<th>'."Блюдо".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
  echo '<tr>';
  echo '<td>'.$row['Kategoria'].'</td>';
  echo '<td>'.$row['Time_vipolnenie'].'</td>';
  echo '<td>'.$row['Kol-vo_kall'].'</td>';
  echo '<td>'.$row['Stoimost'].'</td>';
  echo '<td>'.$row['bludo'].'</td>';
  echo '</tr>';
}
}
echo '</table>';
?>