<?php
$nilai = [
    "Andi" => ["Matematika" => 60, ],
    "Budi" => ["Matematika" => 85, ],
    "Citra" => ["Matematika" => 74, ],
];

foreach ($nilai as $nama => $mapel) {
    echo "Nilai $nama:<br>";
    foreach ($mapel as $pelajaran => $angka) {
        echo "- $pelajaran: $angka <br>";
    }
    if ($angka >= 75) {
        echo "Selamat $nama , Anda lulus!<br>";
    } else {
        echo "Maaf $nama , Anda tidak lulus.<br>";
    }
    echo "<br>";
    echo "<br>";
}
?>