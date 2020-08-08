<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
body{
    background-image: url('https://i.pinimg.com/originals/33/b2/17/33b217c4dc623df089741c2adc1f66e9.gif');
    background-size: cover;
    --height: 100vh;
    padding:0;
    margin:0;
}
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th {
  padding: 25px;
  text-align: center;
}
td {
  padding: 15px;
  text-align: center;
}
#t01 tr:nth-child(even) {
  background-color: #00ffff;
}
#t01 tr:nth-child(odd) {
 background-color: #ff3399;
}
#t01 th {
  background-color: #ff3399;
  color: black;
}
}
</style>
</head>
<body>
<?php
date_default_timezone_set("Asia/Makassar");
$day = date("l");
if ($day == "Monday") {
?>
<table id="t01">
  <tr>
    <th colspan="2">SENIN</th>
  </tr>
  <tr>
    <td>Sistem Komputer</td>
    <td>12.30 - 13.15</td> 
  </tr>
  <tr>
    <td>Seni Budaya</td>
    <td>13.15 - 14.00</td>
  </tr>
  <tr>
    <td>Bahasa Bali</td>
    <td>14.00 - 14.45</td>
  </tr>
</table>
<?php } else if ($day == "Tuesday") { ?>
<table id="t01">
  <tr>
    <th colspan="2">SELASA</th>
  </tr>
  <tr>
    <td>Komputer dan Jaringan Dasar</td>
    <td>12.30 - 13.15</td> 
  </tr>
  <tr>
    <td>Fisika</td>
    <td>13.15 - 14.00</td>
  </tr>
  <tr>
    <td>Pendidikan Agama dan Budi Pekerti</td>
    <td>14.00 - 14.45</td>
  </tr>
</table>
<?php } else if ($day == "Wednesday") { ?>
<table id="t01">
  <tr>
    <th colspan="2">RABU</th>
  </tr>
  <tr>
    <td>Kimia</td>
    <td>12.30 - 13.15</td> 
  </tr>
  <tr>
    <td>Bahasa Indonesia</td>
    <td>13.15 - 14.00</td>
  </tr>
  <tr>
    <td>Matematika</td>
    <td>14.00 - 14.45</td>
  </tr>
</table>
<?php } else if ($day == "Thursday") { ?>
<table id="t01">
  <tr>
    <th colspan="2">KAMIS</th>
  </tr>
  <tr>
  	<td>Dasar Desain Grafis</td>
  	<td>11.45 - 12.30</td>
  </tr>
  <tr>
    <td>Sejarah Indonesia</td>
    <td>12.30 - 13.15</td> 
  </tr>
  <tr>
    <td>Simulasi dan Komunikasi Digital</td>
    <td>13.15 - 14.00</td>
  </tr>
  <tr>
    <td>Penjaskes</td>
    <td>14.00 - 14.45</td>
  </tr>
</table>
<?php } else if ($day == "Friday") { ?>
<table id="t01">
  <tr>
    <th colspan="2">JUMAT</th>
  </tr>
  <tr>
    <td>Pemrograman Dasar</td>
    <td>12.30 - 13.15</td> 
  </tr>
  <tr>
    <td>PPKn</td>
    <td>13.15 - 14.00</td>
  </tr>
  <tr>
    <td>Bahasa Inggris</td>
    <td>14.00 - 14.45</td>
  </tr>
</table>
<?php
} else {
?>
<table id="t01">
	<tr>
		<th>LIBUR!!!</th>
	</tr>
</table>
<?php
}
?>

</body>
</html>
