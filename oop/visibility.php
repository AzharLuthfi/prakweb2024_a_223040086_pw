<?php
class ProdukE
{
    // Properti
    public $judul, $penulis, $penerbit;
    protected $diskon = 0;
    private $harga;

    // Konstruktor untuk inisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Fungsi untuk mendapatkan harga setelah diskon
    public function getHarga(): string
    {
        return "harga " . ($this->harga - ($this->harga * $this->diskon / 100));
    }

    // Fungsi untuk mendapatkan label produk
    public function getLabel(): string
    {
        return "$this->penulis, $this->penerbit";
    }

    // Fungsi untuk mendapatkan info produk
    public function getInfoProduk(): string
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class CetakInfoProduk
{
    // Fungsi untuk mencetak info produk
    public function cetak(ProdukE $ProdukE): string
    {
        $str = "{$ProdukE->judul} | {$ProdukE->getLabel()} (Rp. {$ProdukE->getHarga()})";
        return $str;
    }
}

class Komik extends ProdukE
{
    public $jmlHalaman;

    // Konstruktor kelas Komik
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override fungsi getInfoProduk
    public function getInfoProduk(): string
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman";
        return $str;
    }
}

class Game extends ProdukE
{
    public $waktuMain;

    // Konstruktor kelas Game
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Fungsi untuk mengatur diskon
    public function setDiskon($diskon): void
    {
        $this->diskon = $diskon;
    }

    // Override fungsi getInfoProduk
    public function getInfoProduk(): string
    {
        $str = "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} jam";
        return $str;
    }
}

// Membuat objek Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Menampilkan info produk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// Mengatur diskon dan menampilkan harga produk setelah diskon
$produk2->setDiskon(50);
echo "harga game (diskon 50%):  ";
echo "<br>";
echo $produk2->getHarga();
