<?php

if(isset($_POST['cari']))
{
$host = "localhost";
$username = "root";
$password = "";
$db = "kamus";
$db_link = mysqli_connect($host,$username,$password,$db);
if (!$db_link){
echo "koneksi gagal";
}
$result = mysqli_query($db_link, "SELECT * FROM ter");
$array = array();
while ($row=mysqli_fetch_assoc($result))
{
   $array[] = $row;
}
  $xs = $_POST['ind'];
  $data = explode(" ", $xs);
  $jumlah_kata = (integer)count($data);
  for ($j=0; $j <count($data); $j++) { 
  for ($i = 0; $i <= count($array); $i++) {
    if ($array[$i]['ind'] == $data[$j]) {
      echo $h = $array[$i]['jawa']."(Postion :".$i.")";
     }
  }
 }
}
?>
<form action="" method="post">
  <input type="text" name="ind">
  <input type="submit" name="cari" value="cari">
</form>