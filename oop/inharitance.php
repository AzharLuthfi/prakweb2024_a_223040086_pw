<?php

class produkB
{
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

    // Konstruktor
    public function __construct(
        $judul = "judul",
        $penulis = "pengarang",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = "jumlah halaman",
        $waktuMain = "waktu main",
        $tipe = "tipe"
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }


    // Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// Kelas Komik
class Komik extends produkB
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} 
                (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends produkB
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} 
                (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

// Kelas CetakInfoProduk
class CetakInfoProduk
{
    // Fungsi cetak dengan parameter tipe produkB
    public function cetak(produkB $produkB)
    {
        $str = "{$produkB->judul} | {$produkB->getLabel()} (Rp. {$produkB->harga})";
        return $str;
    }
}

// Membuat objek produkB
$produk1 = new Komik("Naruto", "Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 40000, 0, 50);

// Menampilkan data di layar
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

?>