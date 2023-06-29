<!DOCTYPE html>
<html>
<body>
	<form action="Tugas4_AnjaniDwilestari.php" method="POST">
		<label for="jmlBintang">Jumlah Bintang = </label>
		<input type="jmlBintang" id="jmlBintang" name="jmlBintang"><br><br>
        <input type="submit" name="kirim" value="KIRIM"><br>
		<?php 
			if(isset($_POST['jmlBintang'])):
				//pengulangan menampilkan Bintang berurutan dari jumlah banyak sampai jumlah sedikit
				$jmlBintang=($_POST["jmlBintang"]);
				$b=$jmlBintang;
				$a=$jmlBintang;
				echo "<h1>";
				while ($a) {
					$n=$b;
					while ($n) {
						echo "*";
						$n--;
					}
					echo "<br>";
					$a--;
					$b--;
				}
				echo "</h1>";
			endif; 
		?>
	</form>
</body>
</html>