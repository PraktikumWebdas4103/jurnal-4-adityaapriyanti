<form method="POST" action="" enctype="multipart/form-data">

	Nama : <input type="text" name="nama"><br>
	Hobby : <br>
	<input type="checkbox" name="hobbi[]">Nari</br>
	<input type="checkbox" name="hobbi[]">Berenang</br>
	<input type="checkbox" name="hobbi[]">Futsal</br>
	<input type="checkbox" name="hobbi[]">Sepeda</br>
	Gambar : 
	<input type="file" name="gambar"></br><br>
	<input type="submit" name="submit">
</form>

<?php
	if (isset($_POST['submit'])) {
		$gambar=$_FILES['gambar']['name'];
		$hobby=$_POST['hobbi'];
		echo "<img src='gambar'>";
		
	}
?>