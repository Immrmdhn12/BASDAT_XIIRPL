<?php

$warnaterang = ['kuning', 'hijau', 'pink'];
$warnagelap = ['hitam', 'abu - abu', 'cokelat'];

// Gabungkan 2 array tersebut menjadi 1
$warna_warna = array_merge($warnaterang, $warnagelap);

// Array_merge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Magenta', 'Cyan', 'Hijau Kelabu']
);

// unpacking untuk mengekstrak array menggunakan ...
$list_buah_lokal = ['mangga', 'rambutan'];
$list_buah = ['kurma', 'anggur', $list_buah_lokal, 'kismis'];

// kurma, anggur , mangga , rambutan , kismis


// Explode array berfungsi memecah-belah string lalu diubah ke dalam array

// Expload ada 2 paramater : delimiter(pemisah), string sasaran (sasaran yang akan kita pecah menjadi array)
$siswa = "andi budi dono kasino indro";
// var_dump(explode(" ", $siswa));

// Impload fungsi kebalikannya expload
// impload dia 2 paramater : glue (penggabung), array sasaran (sasaran yang akan ita gabung menjadi string)

$siswa_pintar = ['refa', 'agus', 'novan']; //array
$siswa_jago = implode(' ', $siswa_pintar); //string
