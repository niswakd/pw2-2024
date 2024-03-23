<?php

    require_once 'class_kasus.php';

    // class child 1 Poco F5
    $hp1 = new PocoF5('Poco F5', 'White, 8 GB + 256 GB', 'Rp 4.999.000');

    echo 'Info Pilihan 1: <br>';
    $hp1->getInfoPocoF5();
    echo '<br>';

    // class child 2 Redmi Note 13 Pro 5G
    $hp2 = new RedmiNote13Pro('Redmi Note 13 Pro 5G', 'Purple, 8 GB + 256 GB', 'Rp 4.399.000');

    echo 'Info Pilihan 2: <br>';
    $hp2->getInfoRedmiNote13Pro();
    echo '<br>';

    // class child 3 Poco X6 Pro 5G
    $hp3 = new PocoX6Pro('Poco X6 Pro 5G', 'Yellow, 8 GB + 256 GB', 'Unit tidak tersedia');

    echo 'Info pilihan 3: <br>';
    $hp3->getInfoPocoX6Pro();
?>