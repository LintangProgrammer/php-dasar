<?php
$stok = [
    "Indomart" => ["Indomie" => 60, ],
    "Alfamart"=> ["Kecap"=> 45, ],
    "Superindo"=> ["Minyak Goreng"=> 30, ],
];
    

foreach ($stok as $key => $item) {
    echo "Stok di $key:<br>";
    foreach ($item as $barang => $jumlah) {
        echo "- $barang: $jumlah <br>";
    }
    if ($jumlah <= 50) {
        echo "Stock hampir habis !<br>";
    } else {
        echo "Stok masih banyak!.<br>";
    }
    echo "<br>";
    echo "<br>";
}

?>