<?php
require_once'connect.php';
?>
<form action="zapr4.php" method="GET">
Введите желаемый диапозон блюда:
<br>
Вес от:<input type="text" name="VesOt"><br>
Вес до:<input type="text" name="VesDo"><br>
<br>
<input type="submit" name="submit" value="Поиск"><br>
</form>
<?php
if($_GET['submit'])
{
  $result=mysqli_query($link,"SELECT
  bludo.bludo,
  produkti.Prodikti,
  recepti.Price_in_100g,
  weight.weight
FROM recepti
  INNER JOIN weight
    ON recepti.`Ves(geamm)` = weight.`weight.id`
  INNER JOIN bludo
    ON recepti.Name_bludo = bludo.`bludo.id`
  INNER JOIN produkti
    ON recepti.Produkt = produkti.`Produkti.id`
WHERE '$_GET[VesOt]' <= weight.weight
AND weight.weight <= '$_GET[VesDo]'");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Блюдо".'</th>';
echo '<th>'."Вес(гр)".'</th>';
echo '<th>'."Продукты".'</th>';
echo '<th>'."Цена за 100гр".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
  echo '<tr>';
  echo '<td>'.$row['bludo'].'</td>';
  echo '<td>'.$row['weight'].'</td>';
  echo '<td>'.$row['Prodikti'].'</td>';
    echo '<td>'.$row['Price_in_100g'].'</td>';
  echo '</tr>';

}
echo '</table>';
}
?>