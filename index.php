<html>
<style>
table, th, td {
  border:1px solid black;
  text-align:center;
}
td{
    width: 20%;
}
</style>
<body>
<?php
    $i1 = 10;
    $i2 = 20;
    $r1 = 10.0;
    $r2 = 20.0;
    $somai = $i1+$i2;
    $somar = $r1+$r2;
?>
<table>
  <tr>
    <th>Números inteiros</th>
    <th>Total Soma números inteiros</th>
    <th>Números reais</th>
    <th>Total Soma números reais</th>
    <th>Total Soma números inteiros e reais</th>
  </tr>
  <tr>
    <td><?php print "$i1 , $i2" #Concatenando: $i1." , ".$i2 ?> </td>
    <td><?php print "$somai"?></td>
    <td><?php printf("%.1f , %.1f", $r1,$r2); #Concatenando: $r1." , ".$r2?></td>
    <td><?php print "$somar"?></td>
    <td><?php  printf("%.1f", $somai + $somar);?></td>
  </tr>
</table>
</body>
</html>