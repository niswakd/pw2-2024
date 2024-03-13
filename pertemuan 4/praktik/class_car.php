<?php

    class Car {
        //akses modified atau hak akses : public, private, protected
        //property
        public $brand;
        public $color;
        //property public bisa diakses dimana mana

        //method
        function getBrand(){
            return $this->brand;
        }

        function getColor(){
            return $this->color;
        }
    }

    //ini untuk memanggil diluar class

    //object
    $tesla = new Car();
    $supra = new Car();

    //set value atau setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';

    $tesla->color = 'Merah';
    $supra->color = 'Kuning';

    //echo
    echo $tesla->getBrand();
    echo '<br>';
    echo $tesla->getColor();
    echo '<br><br>';
    echo $supra->getBrand();
    echo '<br>';
    echo $supra->getColor();

?>