<?php
$nama1 = "Fadhilah";
$nama2 = "Aditya";
$nama3 = "Ahmad";
$i = 1 ;
while ($i<= 100)
{
    if ($i % 5 === 0 and $i % 3 === 0) {
        echo $nama1." ".$nama2." ".$nama3."<br>";
    }
    elseif ($i % 3 === 0) {
            echo $nama1."<br>";
        }
        elseif ($i % 5 === 0) {
            echo $nama2."<br>";
        }
        elseif (!$i % 5 === 0 or !$i % 3 === 0) {
        echo $i."<br>";
        }
    $i++;
}
?>