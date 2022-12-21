<?php 

require_once __DIR__ . '/Cat.php';
require_once __DIR__ . '/Dog.php';
// require_once __DIR__ . '/Tiger.php';
require_once __DIR__ . '/TigerBaru.php';

class AnimalFactory {

    public static function create(string $type): Animal
    {
        if ($type == 'cat') {
            return new Cat();
        } else if($type == 'dog') {
            return new Dog();
        } else if($type == 'tiger') {
            /**
             * Yang asalnya seperti ini
             * return new Tiger();
             * kita ganti dengan menjadi memanggil class TigerBaru
             */
           return new TigerBaru();
        } 
    }

}