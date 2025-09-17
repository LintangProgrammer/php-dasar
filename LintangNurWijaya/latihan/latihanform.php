<!DOCTYPE html>
<html lang="en">

<style>
    .form{
        border-style: solid;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <div class="form">
        <form action="" method="POST">
            <label for="">Nama</label>
            <input type="text" name="nama" required>
            <br>

            <label for="">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" required>
            <br>

            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="" required> Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="" required> Perempuan
            <br>

            <label for="">Tinggi Badan</label>
            <input type="number" name="tinggi_badan">
            <br>

           <label for="">Berat Badan</label>
           <input type="number" name="berat_badan">
           <br>

           <label for="">BMI/IMT</label>
           <input type="number" name="bmi">
           <br>

            <input type="submit" value="Submit">
        </form>
    </fieldset>
    </div>

    <?php
    class Biodata 
    {
        public $nama,
        $tanggal_lahir,
        $jenis_kelamin,
        $tinggi_badan,
        $berat_badan,
        $bmi;
        
        public function __construct($nama, $tanggal_lahir, $jenis_kelamin, $tinggi_badan, $berat_badan, $bmi)
        {
            $this->nama = $nama;
            $this->tanggal_lahir = $tanggal_lahir;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->tinggi_badan = $tinggi_badan;
            $this->berat_badan = $berat_badan;
            $this->bmi = $bmi;
        }
        
       public function tampilkanbiodata()
       {
            return "Nama: " . $this->nama . "<br>" .
                "Tanggal Lahir: " . $this->tanggal_lahir . "<br>" .
                "Jenis Kelamin: " . $this->jenis_kelamin . "<br>" .
                "Tinggi Badan: " . $this->tinggi_badan . "<br>" .
                "Berat Badan: " . $this->berat_badan . "<br>" .
                "BMI/IMT: " . $this->bmi . "<br>"; 

       } 


    }

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $a = $_POST['nama'];
        $b = $_POST['tanggal_lahir'];
        $c = $_POST['jenis_kelamin'];
        $d = $_POST['tinggi_badan'];
        $e = $_POST['berat_badan'];
        $f = $_POST['bmi'];
        $biodata = new biodata($a, $b, $c, $d, $e, $f);
        echo $biodata->tampilkanbiodata();
    }

    ?>
</body>

</html