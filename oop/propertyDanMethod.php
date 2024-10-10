<?php

class books
{

    public $judul = "judul",
    $pengarang = "pengarang",
    $penerbit = "penerbit",
    $harga = 0;

    //method
    public function getLabel()
    {
        return $this->judul;
    }


}

// // buat objek buku
$buku1 = new books();

// // mengisi properti class buku
$buku1->judul = "laskar pelangi";
$buku1->pengarang = "Asmarandana";
$buku1->penerbit = "Puspa Indah";
$buku1->harga = "200000";

// // menmpilkan data dilayar
var_dump($buku1);

?>