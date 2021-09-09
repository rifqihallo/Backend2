<?php
// Interface
interface model{
    public function Warna();
}
// interable
function getIterable():iterable{
    return["Selamat datang"," di Toko Kami"];
}
$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item;

}
// class
class produk {
    public $merek,
            $jenis,
             $harga;

// contruktor
function __construct ($merk, $jenis, $harga) {
    $this ->merk =$merk;
    $this ->jenis =$jenis;
    $this ->harga =$harga;
}

// destructor
    function __destruct(){
        echo "Jual Kopi : Merek : {$this->merk} | Jenis :{$this->jenis} | Harga : {$this->harga}.";
        echo "<br>";
    }
}

// inheritance
class Produk2 extends produk implements Model{
    public function warna(){
        echo "<hr>Kopi terbaik di Indonesia";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 250, $dua = 500;
}
// Static Methods
class Stok{
    public static function staticMethod() {
        echo "Sisa Produk Kopi = 250 <br> Sisa Produk Jamu = 500";
        echo "<hr>";
    }
}

// objek
$produk1 = new Produk2("Kopi","Kare",15000);
$produk2 = new Produk2("Jamu","Gunung",12000);
$produk2 -> Warna();
Stok::staticMethod();
echo "Kopi Terjual : " . Terjual::$satu;
echo "<br> Jamu Terjual : " . Terjual::$dua;
echo"<hr>";