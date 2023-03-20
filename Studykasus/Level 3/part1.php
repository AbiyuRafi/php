<!DOCTYPE html>
<html>
<head>
	<title>Input 3 Bilangan Bulat</title>
</head>
<body>
	<form action="" method="post">
		<label for="bilangan1">Bilangan 1:</label>
		<input type="number" name="bilangan1" id="bilangan1" required><br>
		
		<label for="bilangan2">Bilangan 2:</label>
		<input type="number" name="bilangan2" id="bilangan2" required><br>
		
		<label for="bilangan3">Bilangan 3:</label>
		<input type="number" name="bilangan3" id="bilangan3" required><br>
		
		<button type="submit" name="submit">Proses</button>
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
// Mengambil nilai dari form HTML
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];
$bilangan3 = $_POST['bilangan3'];

// Menyimpan nilai ke dalam array
$bilangan = array($bilangan1, $bilangan2, $bilangan3);

// Mengurutkan nilai dalam array secara ascending
sort($bilangan);

// Mencetak nilai dalam array
echo "Bilangan terkecil adalah " . $bilangan[0] . "<br>";
echo "Bilangan tengah adalah " . $bilangan[1] . "<br>";
echo "Bilangan terbesar adalah " . $bilangan[2] . "<br>";
}
?>