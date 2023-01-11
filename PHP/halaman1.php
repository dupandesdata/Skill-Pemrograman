<?php
  // Penulisan setiap kode harus diakhiri dengan ;

  // Standar testing ocho dan print.
  echo "Hallo World";
  
  // Variabel diawali dengan menggunakan $ seperti dengan javascript tidak boleh diawali dengan angka 
  $nama = "John Doe";
  $umur = 30;
  $tinggi = 1.75;
  $pendidikan = array("S1", "S2", "S3");
  $a = 10;
  $b = 20;

  // Mencetak nilai dari sebuah variabel beserta informasi tipe data dan ukuran dari variabel tersebut, jika di javascript adalah typeof()
  var_dump($nama);
  
  // Mencetak nilai dari sebuah variabel array.
  print_r($pendidikan);
  
  // Pengabungan string .
  echo "Nama saya ". $nama . " " . "Usia $umur";
  
  // Operator Aritmatika
  $c = $a + $b;    // $c akan bernilai 30
  $d = $a - $b;    // $d akan bernilai -18
  $e = $a * $b;    // $e akan bernilai 200
  $f = $a / $b;    // $f akan bernilai 0.5
  $g = $a % $b;    // $g akan bernilai 10
  
  // Operator Pembanding 
  $c = ($a == $b);    // $c akan bernilai false
  $d = ($a != $b);    // $d akan bernilai true
  $e = ($a > $b);     // $e akan bernilai true
  $f = ($a < $b);     // $f akan bernilai false
  $g = ($a >= $b);    // $g akan bernilai true
  $h = ($a <= $b);    // $h akan bernilai false

  // Operator Logika
  $c = ($a && $b);   // $c akan bernilai false
  $d = ($a || $b);   // $d akan bernilai true
  $e = !$a;          // $e akan bernilai false
  $f = ($a === $b);   // $f akan bernilai true
  $h = ($a !== $b);   // $h akan bernilai false
  
  // Operator Ternary
  $c = ($a > $b) ? $a : $b;   // $c akan bernilai 5
  
  // Operator Array
  $a = array(1, 2, 3);
  $b = $a[1];    // $b akan bernilai 2

  // gettype() dan is_type function digunakan untuk memeriksa tipe data dari suatu variabel.
  $a = "hello";
  $b = 5;
  $c = null;

  echo gettype($a);   // string
  echo is_string($a);   // 1
  echo gettype($b);   // integer
  echo is_integer($b);  // 1
  echo gettype($c);   // NULL
  echo is_null($c);    // 1
?>
