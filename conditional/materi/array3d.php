<?php
$nilai = [
    ["nama" => "Andi", "mapel" => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85]],
    ["nama" => "Budi","mapel" => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 85]],
    ["nama" => "Citra","mapel" => ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87]],
];
foreach  ($nilai as $data)  {
    echo "Nilai" . $data["nama"] ."<br>";
    foreach ($data ["mapel"] as $pelajaran => $nilai) {
        echo "- $pelajaran: $nilai <br>";      
    }
    echo "<br>";
}
?>