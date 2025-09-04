<?php
class siswa
{
    public $namasiswa;
    public $umursiswa;
    public $jeniskelamin;
    
    public function __construct($namasiswa, $umursiswa, $jeniskelamin) {
        $this->namasiswa = $namasiswa;
        $this->umursiswa = $umursiswa;
        $this->jeniskelamin = $jeniskelamin;
        
    }

    public function siswa()
    {
        return "Kelas XI RPL 3";
    }
    
}

$nama = new siswa("Lintang", "17", "Laki-Laki");
echo "Nama Siswa:" . $nama->namasiswa . "<br>";
echo "Umur Siswa:" . $nama->umursiswa . "<br>";
echo "Jenis Kelamin:" . $nama->jeniskelamin . "<br>";

$nama = new siswa("Dadan", "16", "Laki-Laki");
echo "<br>Nama Siswa:" . $nama->namasiswa . "<br>";
echo "Umur Siswa:" . $nama->umursiswa . "<br>";
echo "Jenis Kelamin:" . $nama->jeniskelamin . "<br>";

$nama = new siswa("Deden", "15", "Laki-Laki");
echo "<br>Nama Siswa:" . $nama->namasiswa . "<br>";
echo "Umur Siswa:" . $nama->umursiswa . "<br>";
echo "Jenis Kelamin:" . $nama->jeniskelamin . "<br>";

$nama = new siswa("Ghaizan", "16", "Laki-Laki");
echo "<br>Nama Siswa:" . $nama->namasiswa . "<br>";
echo "Umur Siswa:" . $nama->umursiswa . "<br>";
echo "Jenis Kelamin:" . $nama->jeniskelamin . "<br>";


?>