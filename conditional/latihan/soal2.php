<?php
$username1 = "admin";
$password1 = "12345";
$username2 = "Siswa";
$password2 = "1111";

if ($username1 == "admin") {
if ($password1 == "12345") {
echo "<br> Login berhasil!";
} else {
echo "Password salah!";
}
} else {
echo "Username tidak ditemukan!";
}

if ($username2 == "siswa") {
if ($password2 == "1111") {
echo "<br> Login berhasil!";
} else {
echo "Password salah!";
}
} else {
echo "<br> Username tidak ditemukan!";
}