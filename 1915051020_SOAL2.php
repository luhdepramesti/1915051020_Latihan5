<html>
<head>
<title>Baris Aritmatika</title>
</head>
<h1> BARIS ARITMATIKA </h1>
<b>"Masukan Angka"</b> <br> <br>
<body style="background: url(https://i.postimg.cc/K89JwbWH/marble-zoom-meeting-background-design-template-c1fc0e9b0de6eb4b718339202100bcda.jpg);background-size:cover;background-attachment: fixed;">
<form method="POST">
    Nilai Awal : <input type="text" name="x" value="<?=isset($_POST['x']) ? $_POST['x'] : ''?>"><br><br>
    Nilai Beda : <input type="text" name="y" value="<?=isset($_POST['y']) ? $_POST['y'] : ''?>"><br><br>
    Suku Yang Dicari : <input type="text" name="z" value="<?=isset($_POST['z']) ? $_POST['z'] : ''?>"><br><br>
    <input type="submit" name ="submit" value="Hasil">
</form>
<?php
if (isset($_POST["submit"])){
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];
echo "Nilai Awal = ". $x ;
echo "<br> Nilai Beda = ". $y ;
echo "<br> <br> Hasil Barisan Aritmatika Setelah Diinputkan User : " ; 
for ($i=1 ; $i<=$z; $i++){
    $hasilsuku = $x + ($y*($i-1));    
    echo "<br>".$hasilsuku;
}
$hasilsuku = $x + ($z-1) * $y;
echo "<br> <br> Nilai Suku ke- " .$z; 
echo "<br>".$hasilsuku;
}
?>