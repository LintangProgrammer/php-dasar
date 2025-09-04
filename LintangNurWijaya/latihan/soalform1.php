<?php
class penggajian
{
    public $nama, $no_id, $gp, $jabatan, $status_k, $status_kk;
    public $tj, $tt, $tm;

    public function __construct($a, $b, $c, $d, $e, $f)
    {
        $this->nama = $a;
        $this->no_id = $b;
        $this->gp = $c;
        $this->jabatan = $d;
        $this->status_k = $e;
        $this->status_kk = $f;
    }

    public function tunjanganJabatan()
    {
        $jabatan = $this->jabatan;

        if ($jabatan == "Manager") {
            $this->tj = $this->gp * 0.2;
        } elseif ($jabatan == "SuperVisor") {
            $this->tj = $this->gp * 0.15;
        } elseif ($jabatan == "Staff") {
            $this->tj = $this->gp * .15;
        } else {
            $this->tj = 0;
        }
        return $this->tj;
    }
    public function tunjanganTransport()
    {
        $status = $this->status_k;
        $this->tt = 0;
        if ($status == "Tetap") {
            $this->tt = 500000;
        } else {
            $this->tt = 0;
        }
        return $this->tt;
    }

    public function tunjanganMenikah()
    {
        $status = $this->status_kk;
        $this->tm = 0;
        if ($status == "Menikah") {
            $this->tm = 300000;
        } else {
            $this->tm = 0;
        }
        return $this->tm;
    }

    public function gajikotor()
    {
        $gajikotor = $this->gp + $this->tunjanganJabatan() + $this->tunjanganTransport() + $this->tunjanganMenikah();
        return $gajikotor;
    }

    public function pajak()
    {
        $pajak = $this->gajikotor() * 0.5;
        return $pajak;
    }

    public function gajibersih()
    {
        $gajibersih = $this->gajikotor() - $this->pajak();
        return $gajibersih;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penggajian</title>
</head>
<body>
<form action="" method="post">
    <label for="">Nama Karyawan</label>
    <input type="text" name="nama" placeholder="nama lengkap"> <br>

    <label for="">NO ID Karyawan</label>
    <input type="number" name="no_id" placeholder="NO ID KARYAWAN Lengkap"> <br>

    <label for="">Gaji Karyawan</label>
    <input type="number" name="gp" placeholder="Gaji Poko"> <br>

    <label for="">Status Karyawan</label>
    <input type="radio" name="status" value="Tetap">Tetap
    <input type="radio" name="status" value="Kontrak">Kontrak

    <label for="">jabatan</label>
    <select name="jabatan" id="">
        <option value="Manager">Manager</option>
        <option value="SuperVisor">SuperVisor</option>
        <option value="Staff">Staff</option>
        <option value="Karyawan">Karyawan</option>
    </select> <br>
    <label for="">Status Menikah</label>
    <select name="status_kk" id="">
        <option value="Menikah">Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
    </select> <br>
    <button type="submit">Simpan</button>
</form>    

<?php
if
($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['nama'];
    $b = $_POST['no_id'];
    $c = $_POST['gp'];
    $d = $_POST['jabatan'];
    $e = $_POST['status'];
    $f = $_POST['status_kk'];

    $gaji = new penggajian($a, $b, $c, $d, $e,$f);
}
?>
<table border="1">
    <th>Nama</th>
    <th>NO ID</th>
    <th>Status Karyawan</th>
    <th>Gaji Pokok</th>
    <th>Jabatan</th>
    <th>Status Menikah</th>
    <tr>
        <td><?php echo $gaji->nama ?></td>
        <td><?php echo $gaji->no_id ?></td>
        <td><?php echo $gaji->status_k ?></td>
        <td><?php echo number_format($gaji->gp, 0, ',', '.'); $gaji->no_id ?></td>
        <td><?php echo $gaji->jabatan?></td>
        <td><?php echo $gaji->status_kk ?></td>
    </tr>
    <tr>
        <th>Tunjangan Jabatan</th>
        <td colspan="5">
            Rp. <?php echo number_format($gaji->tunjanganJabatan(), 0, ',', '.');?>
        </td>
    </tr>
    <tr>
        <th>tunjanganTransport</th>
        <td colspan="5">
            Rp. <?php echo number_format($gaji->tunjanganTransport(), 0, ',', '.');?>
        </td>
    </tr>

    <tr>
        <th>tunjanganMenikah</th>
        <td colspan="5">
            Rp. <?php echo number_format($gaji->tunjanganMenikah(), 0, ',', '.');?>
        </td>
    </tr>

    <tr>
        <th>Gaji Kotor</th>
        <td colspan="5">
            Rp. <?php echo number_format($gaji->gajikotor(), 0, ',', '.');?>
        </td>
    </tr>
    <tr>
        <th>Pajak</th>
        <td colspan="5">
            Rp. <?php echo number_format($gaji->pajak(), 0, ',', '.');?>
        </td>
    </tr>

    <tr>
        <th>Gaji Bersih</th>
        <td colspan="5">
            Rp. <?php echo number_format($gaji->gajibersih(), 0, ',', '.');?>
        </td>
    </tr>
</table>
</body>
</html>