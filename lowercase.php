<table border=1 cellpadding=5 cellspacing=0>
<tr>
<td width="1%">ID</td>
<td width="18%">Judul</td>
<td width="56%">Isi</td>
<td width="25%">Url</td>

</tr>
<?php
include "index.php";
include "koneksi.php";

$query = "SELECT * FROM berita";
$result = mysqli_query($koneksi,$query);
$numrows = mysqli_num_rows($result);
$no=1;
while($row = mysqli_fetch_array($result)){  
echo "<tr>";

$id1 = $row['id'];
$judul1 = $row['judul'];
$isi1 = $row['isi'];
$url1 = $row['url'];
echo "<td><font color=blue></font>" .  $id1 . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($judul1) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($isi1) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($url1) . "<br></td>"; 
echo "</tr>";
$no++;

}

?>