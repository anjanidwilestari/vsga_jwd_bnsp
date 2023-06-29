<?php 
function penambahan() {
   //ambil variable parameter
   $jumlah_argumen = func_num_args();
 
   //proses penambahan
   $nilai=0;
   for ($i = 0; $i < $jumlah_argumen; $i++)
   {
      $nilai += func_get_arg($i);
   }
   return $nilai;
}

echo "penambahan(1,2) = ".penambahan(1,2);
echo "<br />";
 
echo "penambahan(5,4,3,2,1) = ".penambahan(5,4,3,2,1);
echo "<br />";
 
echo "penambahan(0,6,8,19,20,44,21) = ".penambahan(0,6,8,19,20,44,21);
?>

// $nama="Mukidi";
    // $kota="Malang";

    // function kenalan($nama, $kota){
    //     echo "Perkenalkan, nama saya ".$nama."<br><br>";
    //     echo "Asal Kota ".$kota;
    // }
    // echo kenalan($nama, $kota);