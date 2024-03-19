<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $bil1;
        private $bil2;

        public function __construct($satu, $dua)
        {
            $this->bil1 = $satu;
            $this->bil2 = $dua;
        }

        // Method lainnya
        public function tambah()
        {
            return $this->bil1 + $this->bil2;
        }

        public function kurang()
        {
            return $this->bil1 - $this->bil2;
        }

        public function kali()
        {
            return $this->bil1 * $this->bil2;
        }

        public function bagi()
        {
            return $this->bil1 / $this->bil2;
        }
    }

    // Buat object dan tampilkan masing-masing method
    $calculatest = new Calculator(10, 5);

    //echo
    echo 'hasil dari operasi pertambahan : ' . $calculatest->tambah();
    echo '<br>';
    echo 'hasil dari operasi pengurangan : ' . $calculatest->kurang();
    echo '<br>';
    echo 'hasil dari operasi perkalian : ' . $calculatest->kali();
    echo '<br>';
    echo 'hasil dari operasi pembagian : ' . $calculatest->bagi();

?>