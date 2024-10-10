<?php

// cara membuat kelas
class buku
{


}

// cara membuat objek
$buku1 = new buku();
$buku2 = new buku();

// menampilkan data objek ke layar
var_dump($buku1);
var_dump($buku2);
// penjelasan hasil
// object(produk): Menunjukkan bahwa variabel yang sedang diperiksa adalah sebuah objek dari kelas bernama produk. Ini menunjukkan tipe data adalah "object", dan objek ini adalah instansiasi dari kelas produk.

// #1: Ini adalah ID internal yang diberikan oleh PHP untuk melacak objek ini selama eksekusi skrip. Dalam hal ini, objek produk memiliki ID 1. Jika ada objek lain yang dibuat, mereka akan memiliki ID yang berbeda seperti #2, #3, dan seterusnya.

// (0): Angka ini menunjukkan jumlah properti yang dimiliki objek tersebut. Dalam hal ini, (0) berarti objek ini tidak memiliki properti, atau properti belum ditambahkan atau diinisialisasi dalam objek tersebut.

// { }: Kurung kurawal kosong menunjukkan bahwa objek ini saat ini tidak memiliki data atau properti apapun di dalamnya. Jika objek tersebut memiliki properti, mereka akan terdaftar di dalam kurung kurawal ini

?>