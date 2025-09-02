<?php
$film = [
    "judul" => ["Genre" => "Action", "Rating" => 9.0],
    "judul" => ["Genre" => "Sci-Fi", "Rating" => 7,4],
    "judul" => ["Genre" => "Romance", "Rating" => 6.7],
];

foreach ($film as $f) {
    if ($f["Rating"] >= 8) {
        echo "" . $f["judul"] . " Rating " . $f["Rating"] . "<br>";
    }
}

?>