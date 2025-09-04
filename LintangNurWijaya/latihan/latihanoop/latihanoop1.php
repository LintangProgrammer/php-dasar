<?php
class  motor
{
    public $merkmotor = "Honda Astrea";
    public $warna = "Hitam";
    public $velg = "VND";
    public $rem = "Brembo"; 

    public function __construct($merkmotor, $warna, $velg, $rem)
    {
        $this->merkmotor = $merkmotor;
        $this->warna = $warna;
        $this->velg = $velg;
        $this->rem = $rem;
    }
    
    public function motor()
    {
        return "motor classic";   
    }

}

$motor = new motor("Honda Astrea", "Hitam" ,"VND", "Brembo");
echo "Merk Motor:" . $motor->merkmotor . "<br>";
echo "Warna Motor:" . $motor->warna ."<br>";
echo "Merk Velg:" . $motor->velg ."<br>";
echo "Merk Rem:". $motor->rem ."<br>";


?>