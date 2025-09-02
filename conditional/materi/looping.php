<?php
// Contoh For
echo "Contoh For Loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}   

// Contoh Foreach
echo "<br> Contoh Foreach Loop:<br>";
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

foreach ($buah as $b) {
    echo "Buah: $b <br>";
}

// Contoh Array 2 Dimensi
echo "<br> Contoh Array 2 Dimensi:<br>";
$siswa = [
    ["nama" => "Andi", "kelas" => "XI RPL"],
    ["nama" => "Budi", "kelas" => "X TKJ"],
    ["nama" => "Citra", "kelas" => "XI MM"],
];

foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . " - Kelas: " . $data["kelas"] . "<br>";
}

// Contoh Nested Foreach
echo "<br> Contoh Nested Foreach:<br>";
$nilai = [
    "Andi" => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85],
    "Budi" => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 79],
    "Citra" => ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87],
];

foreach ($nilai as $nama => $mapel) {
    echo "Nilai $nama:<br>";
    foreach ($mapel as $pelajaran => $angka) {
        echo "- $pelajaran: $angka <br>";
    }
    echo "<br>";
}

// Contoh while
echo "<br> Contoh While:<br>";
$i = 1;
while ($i <= 3) {
    echo "Nomor: $i <br>";
    $i++;
}

// Contoh Do While
echo "<br> Contoh Do While:<br>";
$i = 1;
do {
    echo "Nomor: $i <br>";
    $i++;
} while ($i <= 3);

// Contoh Nested Loop
echo "<br> Contoh Nested Loop:<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "i=$i, j=$j <br>";
    }
}

?>