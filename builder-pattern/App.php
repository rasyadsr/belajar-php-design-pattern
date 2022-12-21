<?php 

require_once __DIR__ . '/CustomerBuilder.php';

/**
 * Kalau ada property yang tidak kita set, 
 * Maka akan menggunakan nilai default value yang kita berikan di class Builder nya
 */

$customerOne = (new CustomerBuilder)
            ->setEmail('example@gmail.com')
            ->setNik('7628747324')
            ->setIs_registered(true)
            ->build();

$customerTwo = (new CustomerBuilder)
            ->setNik('847328947839')
            ->setPassword('rahasia')
            ->build();

echo '<pre>'; print_r([$customerOne, $customerTwo]); echo '</pre>';