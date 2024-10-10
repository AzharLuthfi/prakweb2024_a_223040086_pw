<?php

class buku
{

    public $judul,
    $pengarang,
    $penerbit,
    $harga;

    public function __construct($judul = "judul", $pengarang = "pengarang", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getLabel()
    {
        return "$this->judul, $this->pengarang";
    }


}

// // buat objek buku
$buku1 = new buku("asmaranda", "kisimoto", "idgram", 30000);
$buku2 = new buku("dilan", "bagus", "idgram", 40000);



// // menmpilkan data dilayar
echo "buku: " . $buku1->getLabel();
echo "<br>";
echo "buku: " . $buku2->getLabel();

?>