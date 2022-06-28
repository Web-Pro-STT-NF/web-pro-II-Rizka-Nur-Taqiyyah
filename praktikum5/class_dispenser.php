<?php
class dispenser{
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;
    public const PHI = 3.14;
    public $jari2;
    public $tinggi;

    public function __construct($jari2, $tinggi){
        $this-> jari_jari = $jari2;
        $this-> tinggi = $tinggi;
        echo "<br/>Jari-jari : " . $jari2."cm";
        echo "<br/>Tinggi : " . $tinggi."cm";
    }

    public function volumewadah(){
        return self::PHI * $this->jari_jari * $this-> jari_jari * $this-> tinggi;
    }   
}
class harga extends dispenser{
    public function __construct($hargasegelas){
        $this-> hargasegelas = $hargasegelas;
        echo"<br/>";
        echo"<br/>Diketahui :";
        echo"<br/>Harga satu gelas :" .$hargasegelas;
    }
    public function harga(){
        return $this-> hargasegelas * 5;
    }
}

    echo"<br/> PHI :" .dispenser::PHI;
    $volumewadah = new dispenser(30,50);
    $harga = new harga(1000);
    echo "<br/> Volume Wadah :" .$volumewadah-> volumewadah()."cm3";
    echo "<br/> Harga 5 Gelas :" .$harga->harga();
?>