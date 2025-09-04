<?php
class kucing 
{
    public $nama;
    public $warna;
    public $jenis;

    // method khusus yang akan di panggil pertama kali
    public function __construct($nama, $warna, $jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;
    }
    
    public function makan()
    {
        return "kucing sedang makan";
    }
}

$kucing1 = new kucing("Luna", "Hitam","Persia");
echo "Nama Kucing 1 : " . $kucing1->nama . "<br>";
echo "Warna Kucing 1 : " . $kucing1->warna ."<br>";
echo "Jenis Kucing 1 :" . $kucing1->jenis ."<br>";
?>