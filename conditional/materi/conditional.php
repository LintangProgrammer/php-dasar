<?php
// A. if
  $nilai = 80;
 if ($nilai >= 75) {
  echo "<br> Selamat Anda Lulus";
}
    
// B. if else
$umur = 16;
if($umur >= 17) {
    echo "boleh membuat KTP";
   } else {
    echo "<br> belum boleh membuat KTP";
  }

// C. if elseif else
$nilai = 65;
if ($nilai >= 90) {
    echo "nilai A";
}   elseif ($nilai >= 75) {
    echo "nilai B";
}   elseif ($nilai >= 60) {
    echo "<br> nilai C";
}   else{
    echo "nilai D";
}

// D. nested if
$username = "admin";
$password = "12345";

if ($username == "admin") {
    if ($password == "12345") {
        echo "<br> Login berhasil!";
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}

?>