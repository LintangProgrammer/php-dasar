<?php

echo "Contoh 1 <br>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "<br> Contoh 2 <br>";
for ($x = 0; $x <= 10; $x++) {
  if ($x == 5) break;
  echo "The number is: $x <br>";
}

echo "<br> Contoh 3 <br>";
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}

echo "<br> Contoh 4 <br>";
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>