<?php
class produkD
{
    //value
    public $judul,
    $penulis,
    $penerbit,
    $harga;
    //contruktor untuk inisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        //memastikan nilai pada function sama dengan variable dalam kelas produkD
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    //untuk mendapat nilai
    public function getLabel()
    {
        return " $this->penulis, $this->penerbit";
    }
    public function getInfoProduk()
    {
        $str = "{$this->judul}|{$this->getLabel()}  {$this->harga} ";
        return $str;
    }
}
class cetakInfoProduk
{
    ///function untuk mencetak info produkD dari kelas produkD
    public function cetak(produkD $produkD)
    {
        $str = " {$produkD->judul} | {$produkD->getLabel()} {$produkD->harga}";
        return $str;
    }
}
class komik extends produkD
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit = "penerbit", $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . "- {$this->jmlHalaman} halaman";
        return $str;
    }
}
class game extends produkD
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "game : " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
        return $str;
    }
}
$produk1 = new komik("komik", "naruto", "masashi", "shonen jump", 30000, 100);
$produk2 = new game("game", "uncharted", "neil", "sony computer", 30000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();