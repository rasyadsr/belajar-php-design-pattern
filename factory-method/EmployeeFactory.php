<?php 

require_once __DIR__ . '/Employee.php';

/**
 *  Beri nama Factory dibelakang nama class nya
 * */

class EmployeeFactory {

    /**
     *  Buat factory method yang mereturn class yang merepresentasikan data Employee
     *  Disini tentu saja class nya adalah class Eployee
     *  Pembuatan nama method nya di awali dengan kata create
     *  Dan method nya bersifat static
     */

    public static function createManager(string $name): Employe
    {
        return new Employe($name, 'Manager', '1000');
    }

    public static function createStaff(string $name): Employe
    {
        return new Employe($name, 'Staff', '500');
    }

}