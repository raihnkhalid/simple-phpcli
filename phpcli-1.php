<?php
error_reporting(0);

echo "\e[33m+++++++++++++++++++++++++++++++++++++++++++++++++\n";
echo "[+] Example PHP CLI\n";
echo "[+] Created by : raihnkhalid\n";
echo "+++++++++++++++++++++++++++++++++++++++++++++++++\n";
echo "[+] Muhammad Raihan Khalid\n";
echo "+++++++++++++++++++++++++++++++++++++++++++++++++\n";
echo "\n";

echo "\e[39mBerapa umur kamu? \n";
echo "A : 14 \n";
echo "B : 15 \n";
echo "C : 16 \n";

$inpt = fopen("php://stdin", "r");
$ressInpt = trim(fgets($inpt));

if ($ressInpt === "A" or $ressInpt === "a") {
    $result = 14;
} elseif ($ressInpt === "B" or $ressInpt === "b") {
    $result = 15;
} elseif ($ressInpt === "C" or $ressInpt === "c") {
    $result = 16;
} else {
    echo "Invalid Input!\n";
}
echo "\n";

if (isset($result)) {
    echo "Umur anda : $result\n";
    echo "Siapa nama kamu? (enter below) \n";
    $inpt = fopen("php://stdin", "r");
    $ressInpt2 = trim(fgets($inpt));
    echo "\n";
}

if (isset($ressInpt2)) {
    echo "Nama : $ressInpt2\nUmur : $result \n";
}

?>
