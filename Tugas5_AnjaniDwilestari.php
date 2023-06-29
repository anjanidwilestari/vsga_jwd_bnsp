<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
	<form action="Tugas5_AnjaniDwilestari.php" method="POST">
        <label for="bil1" >Bilangan pertama = </label>
		<input type="number" id="bil1" name="bil1" required><br><br>
        <label for="bil1">Bilangan kedua = </label>
		<input type="number" id="bil2" name="bil2" required><br><br>
        <input type="submit" name="hitung" value="HITUNG"><br><br>
    </form>
    <?php 
        function Tambah($bil1,$bil2){
            return $bil1+$bil2;
        }
        function Kurang($bil1,$bil2){
            return $bil1-$bil2 ;
        }
        function Kali($bil1,$bil2){
            return $bil1*$bil2;
        }
        function Bagi($bil1,$bil2){
            return $bil1/$bil2;
        }

        if(isset($_POST['hitung'])){
            $bil1=$_POST['bil1'];
            $bil2=$_POST['bil2'];
            try{
                echo "Hasil penjumlahan adalah : ".Tambah($bil1,$bil2);
                echo "<br>";
                echo "Hasil pengurangan adalah : ".Kurang($bil1,$bil2);
                echo "<br>";
                echo "Hasil perkalian adalah : ".Kali($bil1,$bil2);
                echo "<br>";
                echo "Hasil pembagian adalah : ".Bagi($bil1,$bil2);
            }catch(Throwable $e){
                if (isset($_POST['hitung'])){
                    $bil2=$_POST['bil2']=0;
                    echo "Hasil pembagian adalah : ". "Error";
                }
                
            }
            
        }
    ?>
</body>
</html>