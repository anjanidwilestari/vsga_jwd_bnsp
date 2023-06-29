<!DOCTYPE html>
<html>
<body>
	<form action="Tugas4_AnjaniDwilestari.php" method="POST">
		<label for="jmlBintang">Jumlah Bintang = </label>
		<input type="number" id="jmlBintang" name="jmlBintang"><br><br>
        <input type="submit" name="kirim" value="KIRIM"><br>
		<?php 
			if(isset($_POST['jmlBintang'])):
				//pengulangan menampilkan Bintang berurutan dari jumlah sedikit sampai jumlah banyak
				$jmlBintang=($_POST["jmlBintang"]);
				$i=1;
				echo "<h1>";
				while ($i<=$jmlBintang) {
					$j=0;
					while ($j<$i) {
						echo "*";
						$j++;
					}
					echo "<br>";
					$i++;
				}
				echo "</h1>";
			endif; 
		?>
	</form>
</body>
</html>