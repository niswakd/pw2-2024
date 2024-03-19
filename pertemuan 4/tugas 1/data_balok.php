<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		require_once 'class_balok.php';

        //object
        $balok1 = new Balok(29, 16, 7);
        $balok2 = new Balok(3, 10, 4);
        $balok3 = new Balok(25, 9, 1);
        $balok4 = new Balok(14, 4, 2);

        //luas
        echo '<br> Luas balok 1 adalah ' . $balok1->getLuas() . 'cm';
        echo '<br> Luas balok 2 adalah ' . $balok2->getLuas() . 'cm';
        echo '<br> Luas balok 3 adalah ' . $balok3->getLuas() . 'cm';
        echo '<br> Luas balok 4 adalah ' . $balok4->getLuas() . 'cm';

        //keliling
        echo '<br><br>';
        echo '<br> Keliling balok 1 adalah ' . $balok1->getKeliling() . 'cm';
        echo '<br> Keliling balok 2 adalah ' . $balok2->getKeliling() . 'cm';
        echo '<br> Keliling balok 3 adalah ' . $balok3->getKeliling() . 'cm';
        echo '<br> Keliling balok 4 adalah ' . $balok4->getKeliling() . 'cm';

        //volume
        echo '<br><br>';
        echo '<br> Volume balok 1 adalah ' . $balok1->getVolume() . 'cm';
        echo '<br> Volume balok 2 adalah ' . $balok2->getVolume() . 'cm';
        echo '<br> Volume balok 3 adalah ' . $balok3->getVolume() . 'cm';
        echo '<br> Volume balok 4 adalah ' . $balok4->getVolume() . 'cm';
?>