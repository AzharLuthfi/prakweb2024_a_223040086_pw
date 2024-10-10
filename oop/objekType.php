<?php

class produk
{

    public $judul,
    $penulis,
    $penerbit,
    $harga;

    //construktor
    public function __construct($judul = "judul", $penulis = "pengarang", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


}

//membuat kelas cetakInfoProduk untuk menyimpan 
//prosedur krusus untuk mencetak info
class CetakInfoProduk
{
    //function cetak. parameternya diberi type produk agar hanya 
    //bisa menerima instance data produk(judul, penerbit, dll)) 
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


// // buat objek produk
$produk1 = new produk("Naruto", "kisimoto", "Shonen Jump", 30000);
$produk2 = new produk("Uncharted", "Neil Druckman", "Sony Computer", 40000);



// // menmpilkan data dilayar
echo "komik: " . $produk1->getLabel();
echo "<br>";
echo "game: " . $produk2->getLabel();
echo "<br>";

//membuat & memanggil objek cetakinfoProduk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);



?>