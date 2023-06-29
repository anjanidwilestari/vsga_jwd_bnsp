<?php 
echo "=============== CETAK BILANGAN GANJIL GENAP 1-100 ==============="."<br>";
    for ($i=1; $i<=100; $i++){ //kode untuk perulangan for i akan dimulai dengan angka 1 dan batasnya angka 100
        if($i%2){ //dibuat percangan jika i mod 2 artinya jika tidak habis dibagi 2
            $data = $i." adalah Bilangan Ganjil."; //maka hasilnya akan ganjil
        } else { //jika habis dibagi 2
            $data = $i." adalah Bilangan Genap"; //maka genap
        }
        //tampilkan data dan membuat baris baru
        echo $data."<br>";
    }
?>
