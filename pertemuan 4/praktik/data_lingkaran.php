<?php

    require_once 'class_lingkaran.php';

    echo 'Nilai PHI = ' . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(8);
    $lingkar2 = new Lingkaran(27);

    echo '<br><br>';
    echo '<br> Luas lingkaran 1 adalah ' . $lingkar1->getLuas() . 'cm';
    echo '<br> Luas lingkaran 2 adalah ' . $lingkar2->getLuas() . 'cm';

    //keliling
    $lingkar3 = new Lingkaran(6);
    $lingkar4 = new Lingkaran(18);

    echo '<br><br>';
    echo '<br> Keliling lingkaran 3 adalah ' . $lingkar3->getKel() . 'cm'; 
    echo '<br> Keliling lingkaran 3 adalah ' . $lingkar4->getKel() . 'cm';

?>