<?php
abstract class Produk
{
    // Properti
    private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

    // Konstruktor untuk inisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        // Memastikan nilai pada parameter sama dengan properti dalam kelas Produk
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter dan Getter untuk Judul
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    // Setter dan Getter untuk Penulis
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }

    // Setter dan Getter untuk Penerbit
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    // Setter dan Getter untuk Diskon
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }

    // Setter dan Getter untuk Harga
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        // Menghitung harga setelah diskon
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Mendapatkan label
    public function getLabel()
    {
        return "{$this->penulis}, {$this->penerbit}";
    }

    // Method abstrak untuk mendapatkan info produk
    abstract public function getInfoProduk();

    // Method untuk mendapatkan info dasar
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    // Method untuk mencetak info produk
    public function cetak()
    {
        $str = "DAFTAR PRODUK:<br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()}<br>";
        }
        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        // Memanggil konstruktor induk dengan 4 parameter
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        // Memanggil konstruktor induk dengan 4 parameter
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: " . $this->getInfo() . " - {$this->waktuMain} jam.";
        return $str;
    }
}

// Instansiasi objek Produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 50000, 50);

// Membuat objek CetakInfoProduk dan menambahkan produk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// Menampilkan daftar produk
echo $cetakProduk->cetak();
?>