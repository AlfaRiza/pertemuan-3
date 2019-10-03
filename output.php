<!DOCTYPE html>
<html>
<head>
	<title>OUTPUT</title>
</head>
<body>

	<?php 
	$nama = $_POST['nama'];
	$jml = $_POST['jumlah'];

	echo "anak pak $nama ada : $jml";

	for ($i=$jml; $i >= 0; $i--) { 
		if ($i == 0) {
			echo "Mati satu Pak $nama galau";
		}else{
			echo "Anak Ayam Turun $i";
			echo "Mati satu tinggal ".intval($i-1)." <br>";
			
		}
	}

	 ?>

</body>
</html>