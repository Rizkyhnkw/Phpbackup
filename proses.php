<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

if ($operator == 'plus') {
    $hasil = $angka1 + $angka2;
} else if ($operator == 'min') {
    $hasil = $angka1 - $angka2;
} else if ($operator == 'times') {
    $hasil = $angka1 * $angka2;
} else if ($operator == 'divide') {
    $hasil = $angka1 / $angka2;
} else if ($operator == 'modulus') {
    $hasil = $angka1 % $angka2;
}
echo "<br> the result of $angka1 $operator $angka2 is $hasil";
