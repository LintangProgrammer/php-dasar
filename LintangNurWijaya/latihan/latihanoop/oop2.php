<?php
class laptop
{
    // property / atribut
    public $merk = "LOQ";
    public $warna = "abu-abu";

    // method / fungsi
    public function coding()
    {
        return "PHP, JavaScript, HTML, CSS";
    }
    
    public function belajar()
    {
        return "belajar coding";
    }
}
// inisiasi / pembuatan objek
$laptop1 = new laptop();
echo " merk laptop: " . $laptop1->merk . "<br>";
echo "warna laptop : " . $laptop1->warna . "<br>";
echo "digunakan untuk : " . $laptop1->belajar () , "<br>" . $laptop1->coding() ;

?>