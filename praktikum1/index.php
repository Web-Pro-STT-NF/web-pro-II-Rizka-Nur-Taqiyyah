<?php
    //membuat variabel user
    $nama = "Rizka Nur Taqiyyah";
    $umur = 19;
    $berat = 55.5;

    //menampilkan variabel
    echo "Nama :" . $nama;
    echo "<br/>Umur: $umur";
    echo "<br/>Berat : $berat";

    //variabel sistem
    echo '<br/>Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];

    //membuat variabel constant
    Define('PHI', 3.14);
    $r = 10;
    $luas = PHI * $r * $r;

    //menampilkan variabel constant
    echo "<br/>Luas Lingkaran : $luas";
?>