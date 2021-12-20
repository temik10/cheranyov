<?php
require_once'Connect.php';
?>
<form action="zapr5.php" method="GET">
Содержит продукт в блюде:<input type="text" name="q"><br>
<br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
  $result=mysqli_query($link,"SELECT
  produkti.Prodikti,
  bludo.bludo,
  `info in menu`.Time_vipolnenie,
  `info in menu`.`Kol-vo_kall`,
  `info in menu`.Stoimost,
  `info in menu`.Kategoria
FROM `info in menu`
  INNER JOIN bludo
    ON `info in menu`.Naimen_bluda = bludo.`bludo.id`
  INNER JOIN recepti
    ON recepti.Name_bludo = bludo.`bludo.id`
  INNER JOIN produkti
    ON recepti.Produkt = produkti.`Produkti.id`
WHERE produkti.Prodikti = '$_GET[q]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Блюдо".'</th>';
echo '<th>'."Продукты".'</th>';
echo '<th>'."Вермя приготовления (мин)".'</th>';
echo '<th>'."Кол-во ккал".'</th>';
echo '<th>'."Категория".'</th>';
echo '<th>'."Стоимость".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
  echo '<tr>';
  echo '<td>'.$row['bludo'].'</td>';
  echo '<td>'.$row['Prodikti'].'</td>';
  echo '<td>'.$row['Time_vipolnenie'].'</td>';
    echo '<td>'.$row['Kol-vo_kall'].'</td>';
      echo '<td>'.$row['Kategoria'].'</td>';
        echo '<td>'.$row['Stoimost'].'</td>';
  echo '</tr>';

}
echo '</table>';
}
?>