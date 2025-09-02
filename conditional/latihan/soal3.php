<?php
$totalbelanja = 600000;
$disc = 0;

if ($totalbelanja >= 500000) {
    $disc = 0.2 * $totalbelanja;
} elseif ($totalbelanja >= 250000) {
    $disc = 0.1 * $totalbelanja;
} else {
    $disc = 0;
}

echo "Total: " . $totalbelanja . "<br>";
echo "Discount: " . $disc. "<br>";
echo "Total After Discount : " . ($totalbelanja - $disc) . "<br>";
?>