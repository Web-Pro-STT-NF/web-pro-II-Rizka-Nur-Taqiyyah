<!DOCTYPE html>
<html>
<body>
<?php 
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
    // cetak buah ke index ke 2
    echo $ar_buah[2];
     // cetak jumlah buah
    echo '<br/>Jumlah Buah ' . count($ar_buah);
    // cetak seluruh buah 
    echo '<ol>';
    foreach($ar_buah as $buah){
    echo '<li>'. $buah .'</li>';
    }
    echo '</ol>';
    // tambahkan buah 
    $ar_buah[]="Durian";
    // hapus buah index ke 1
    unset($ar_buah[1]);
    
    // ubah buah index ke 2 menjadi Manggis
    $ar_buah[2]="Manggis";
    // cetak seluruh buah dengan index nya
    echo '<ul>';
    
    foreach($ar_buah as $k => $v){
    echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
    }
    echo '</ul>';
?>

<?php
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    array_push($ar_buah,"Manggis");
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';

    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';

    array_pop($ar_buah);
    array_push($ar_buah, "kelengkeng");
    array_shift($ar_buah);
    array_unshift($ar_buah,"belewah","anggur");
    foreach($ar_buah as $buah){
        echo $buah. '<br/>';
    }
    ?> 
</body>
</html>
