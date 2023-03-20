<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mencari Bilangan Tengah</title>
</head>
<body>
	<form method="post" action="">
		<label for="bilangan1">Bilangan Pertama:</label>
		<input type="number" name="bilangan1"><br>

		<label for="bilangan2">Bilangan Kedua:</label>
		<input type="number" name="bilangan2"><br>

		<label for="bilangan3">Bilangan Ketiga:</label>
		<input type="number" name="bilangan3"><br>

		<button type="submit" name="submit">Cari Bilangan Tengah</button>
	</form>
</body>
</html>


<?php
if(isset($_POST['submit'])){
// Ambil nilai dari form HTML
$bil1 = $_POST['bilangan1'];
$bil2 = $_POST['bilangan2'];
$bil3 = $_POST['bilangan3'];

// Cari bilangan dengan nilai tengah
if ($bil1 > $bil2) {
    if ($bil2 > $bil3) {
        $nilai_tengah = $bil2;
    } elseif ($bil1 > $bil3) {
        $nilai_tengah = $bil3;
    } else {
        $nilai_tengah = $bil1;
    }
} else {
    if ($bil2 < $bil3) {
        $nilai_tengah = $bil2;
    } elseif ($bil1 < $bil3) {
        $nilai_tengah = $bil3;
    } else {
        $nilai_tengah = $bil1;
    }
}

// Cetak bilangan dengan nilai tengah
echo "Bilangan dengan nilai tengah adalah: " . $nilai_tengah;
}
?>