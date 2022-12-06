<?php
// statis adalah mempertahankan nilai aslinya

function test(){
    $angka = 0; // mendefinisikan variable lokal 
    // variable lokal jika sudah melewati scopenya akan kembali ke nilai awal
    echo "A : {$angka} <br>";
    $angka++; //menambahkan d=fungsi increment
}
test();
test();
test();

?>