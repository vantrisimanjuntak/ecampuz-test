<?php

for ($i = 1; $i <= 50; $i++)
    if ($bagi = $i % 3 == 0) {
        echo "ANGKA $i Foo <br>";
    } else if ($bagi = $i % 5 == 0) {
        echo "ANGKA $i Bar <br>";
    } else {
        echo $i;
        echo "<br>";
    }
