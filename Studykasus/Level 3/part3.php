<!DOCTYPE html>
<html>
<head>
    <title>Periksa Sisi Segitiga</title>
</head>
<body>
    <h2>Masukkan panjang sisi segitiga:</h2>
    <form action="" method="post">
        Sisi 1: <input type="text" name="sisi1"><br>
        Sisi 2: <input type="text" name="sisi2"><br>
        Sisi 3: <input type="text" name="sisi3"><br>
        <input type="submit" value="Periksa" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
// Input sisi segitiga
$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$sisi3 = $_POST['sisi3'];

// Periksa sisi segitiga
if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
    echo "Segitiga ini memiliki sisi SAMA SISI.";
} elseif ($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3) {
    echo "Segitiga ini memiliki sisi SAMA KAKI.";
} else {
    echo "Segitiga ini memiliki sisi SEMBARANG.";
}
}
?>

