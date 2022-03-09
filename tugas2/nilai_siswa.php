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

$nilai_A = $nilai_akhir >= 85;
$nilai_B = $nilai_akhir >= 70;
$nilai_C = $nilai_akhir >= 56;
$nilai_D = $nilai_akhir >= 36;
$nilai_E = $nilai_akhir >= 0;

if ($nilai_akhir>85)
{
    $grade = "A";
}
elseif ($nilai_akhir>70)
{
    $grade = "B";
}
elseif ($nilai_akhir>56)
{
    $grade = "C";
}
elseif ($nilai_akhir>36)
{
    $grade = "D";
}
elseif ($nilai_akhir>0)
{
    $grade = "E";
}
else
{
    $grade = "I";
}

echo 'Nama :' . $_nama;
echo '<br/>Mata Kuliah :' . $_matkul;
echo '<br/>Nilai UTS :' . $uts;
echo '<br/>Nilai UAS :' . $uas;
echo '<br/>Nilai Tugas/Praktik:' . $tugas;
echo '<br/>Nilai Akhir :' . $nilai_akhir;
echo '<br/>Grade :' . $grade;

switch(true){
    case ($nilai_A):
        echo "<br/>Predikat : Sangat Memuaskan";
        break;
    case ($nilai_B):
        echo "<br/>Predikat : Memuaskan";
        break;
    case ($nilai_C):
        echo "<br/>Predikat : Cukup";
        break;
    case ($nilai_D):
        echo "<br/>Predikat : Kurang";
        break;
    case ($nilai_E):
        echo "<br/>Predikat : Sangat Kurang";
        break;
    default:
        echo "<br/>Tidak Ada";
}

if( $nilai_akhir > 55){
    echo "<h3>LULUS</h3>";
}else{
    echo "<h3>TIDAK LULUS</h3>";
}
?>