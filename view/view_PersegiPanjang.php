<?php

require '../class/class_perhitungan.php';

$hitung = new perhitungan();

//menghitung method
// echo $hitung->LuasPersegiPanjang(10, 8);

// membuat kondisi if untuk tomboh hitung
if (isset($_POST['hitung'])) {
    // Dibawah ini adalah code pelemparan variabel dari variabel form
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    // Dibawah ini adalah code memanggil fungsi disuatu class melalui object yang di instance
    echo $hitung->luasPersegi($panjang, $lebar);
} else {
    echo "Silahkan Masukan Sisi Pada Persegi Anda.";
}

?>
