<?php

$namaPanggilan = "Bima";
$tanggalHariIni = date("j");

if (strlen($namaPanggilan) == ($tanggalHariIni - 2)) {
    echo "Berhasil";
} elseif (strlen($namaPanggilan) < $tanggalHariIni) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}

echo "\n\n";

$anggotaKelompok = [
    ["nama" => "Bima Bayu Sofana", "nim" => "12345"],
    ["nama" => "Muhammad Hanif Sauqi", "nim" => "23456"],
    ["nama" => "Yhodimas Geffananda", "nim" => "34567"],
    ["nama" => "Muhammad Rizky Aziz", "nim" => "45678"],
    ["nama" => "Robertus Dimasena ", "nim" => "56789"]
];

foreach ($anggotaKelompok as $anggota) {
    $nama = $anggota["nama"];
    $nim = $anggota["nim"];
    $peran = ($nim % 2 == 0) ? "Back-end Developer" : "Front-end Developer";
    echo "Nama: $nama, NIM: $nim, Peran: $peran\n";
}

echo "\n";

$kotaKKN = [
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
];

$namaDepan = str_split($namaPanggilan);
$tujuanKKN = "Jawa Timur"; // Jika tidak ditemukan kota tujuan

foreach ($namaDepan as $huruf) {
    foreach ($kotaKKN as $kota) {
        if (strtolower(substr($kota, 0, 1)) === strtolower($huruf)) {
            $tujuanKKN = $kota;
            break 2;
        }
    }
}

echo "Nama: $namaPanggilan\n";
echo "Tujuan KKN: $tujuanKKN\n";

?>