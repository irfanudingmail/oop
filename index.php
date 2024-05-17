<?php
$sheep = new Animal("shaun");
echo $sheep->name; // "shaun"
echo $sheep->legs; // 4
echo $sheep->cold_blooded; // "no"

$kodok = new Frog("buduk");
echo $kodok->name; // "buduk"
echo $kodok->legs; // 4
echo $kodok->cold_blooded; // "no"
echo $kodok->jump; // "hop hop"

$sungokong = new Ape("kera sakti");
echo $sungokong->name; // "kera sakti"
echo $sungokong->legs; // 2
echo $sungokong->cold_blooded; // "no"
echo $sungokong->jump; // "Auooo"
?>