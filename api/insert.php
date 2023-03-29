<?php
$baglanti=mysqli_connect("db4free.net:3306","mahmutcanmutta","mahmutcankoyar123","mahmutcan");

$name=$_POST["gelenisim"];
$no=$_POST["gelenno"];

$sorgu="INSERT INTO ogrenciler(isim,numara) values('{$name}','{$no}')";
$komut=mysqli_query($baglanti,$sorgu);
if($komut)
{
    echo "veri eklendi";
} 
else{
    echo "veri ekleme sırasında hata oluştu!";
}
msqli_close($baglanti);

?>

