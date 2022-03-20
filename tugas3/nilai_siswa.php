<?php   

    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['nilai'];

    // menghitung nilai 
    $_nilaiuts = $uts * 0.3;
    $_nilaiuas = $uas * 0.4;
    $_nilaitugas = $tugas * 0.2;

    $nilai_akhir = $_nilaiuts + $_nilaiuas + $_nilaitugas;

    
    echo 'Nama :' . $_nama;
    echo '<br/>Mata Kuliah :' . $_matkul;
    echo '<br/>Nilai UTS :' . $uts;
    echo '<br/>Nilai UAS :' . $uas;
    echo '<br/>Nilai Tugas/Praktik:' . $tugas;
    echo '<br/><br/>Nilai Akhir :' . $nilai_akhir;
    
    require_once 'libfungsi.php';

    $grade = grade($nilai_akhir);
    echo '<br/>Grade :' . $grade;

    $predikat = predikat($grade);
    echo '<br/>Predikat :' . $predikat;

    $hasil_ujian = kelulusan($nilai_akhir);
    echo '<br/>DINYATAKAN ' . $hasil_ujian;
    
?>
