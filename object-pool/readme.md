## Object Pool

- Pattern ini jarang di implementasikan secara manual, biasanya menggunakan library tambahan
- Object pool adalah tempat dimana kita akan memasukan beberapa object dengan data yang sama
  lalu kita set maximum dan minimal nya berapa
- Sebelumnya ada singleton pattern dan di contohkannya kepada `Database class`, namun berarti jika seperti itu, hanya ada satu object koneksi dalam satu aplikasi, masalahnya jika ada request lain, dan object connection sedang di pakai kita harus menunggu objecy connection tersebut selesai di pakai, alangkah baiknya kita buat sebuah wadah untuk simpan koneksi yang kta tentukan ukurannya

`DatabasePool.php`

```php
<?php

class DatabasePool {
    private static array $pool = [];

    public function __construct() {
        /**
         * Misal disini kita tentukan ukuranya 100 koneksi
         * */
        for($i = 0; $i < 100; $i++) {
            $connection = new PDO('mysql:host=localhost;dbname=example', 'root', '');
            self::$pool[] = $connection;
        }
    }

    public static function getConnection(){
        if(empty(self::$pool)) {
            throw new Exception('Koneksi habis!');
        } else {
            /**
             * Ambil satu isi array yang berisi koneksi POD
            */
            array_splice(self::$pool, 0, 1);
            return self::$pool;
        }
    }

    /**
     * function ini untuk mengembalikan koneksi yang telah selesai di gunakan
    */
    public static function close(POD $connection) {
        self::$pool[] = $connection;
    }

    /**
     * function ini akan di panggil untuk inisialisasi object
     * */
    public static function getInstance(): DatabasePool {
        return new self();
    }
}
```

`OrderRepositoru.php`

```php
<?php

class OrderRepository {
    ...
    public function save() {
        /**
         * Ambil dan gunakan koneksi
         * */
        $connection = DatabasePool::getInstance()->getConnection();
        $statement =  $connection->prepare("INSERT INTO table(column1, column2, column3) VALUES(?, ?, ?)")
        $statement->execute([$param1, $param2, $param3]);
        /**
         * Kembalikan kembali, koneksi yang telah di gunakan
        */
        DatabasePool::close($connection);
    }
}
```
