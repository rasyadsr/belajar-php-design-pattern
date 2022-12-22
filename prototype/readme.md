## Protoype

- digunakan ketika kita ingin membuat beberapa object, yang ada beberapa value nya sama seperti object yang pertama dibuat

`Store.php`

```php
<?php

class Store {
    private string $name;
    private string $country;

    public function __construct(string $name, string $country) {
        $this->name = $name;
        $this->country = $country;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}
```

- Prototype pattern adalah pattern yang dimana kita bisa membuat object menjadi prototype ( cetakan / data dasarnya) yang dimana ketika membuat object baru kita mengambil dari prototype yang sudah di tentukan

`Store.php`

```php
<?php

class Store {
    ...
    /**
     * Buat method clone di class yang tadi yang return object ini sendiri
     * */
    public function clone(): Store {
        /**
         *   Ini contoh manual, tidak di sarankan jika class nya memiliki banyak propery
         *   return new Store(
         *      $this->name.
         *      $this->country
         *   );
        **/

        /**
         * Kalau di PHP pakai seperti ini
         * Menggunakan keyword clone
         * */
        return clone $this;
    }
}
```

`App.php`

```php
<?php

$store1 = new Store('Toko X', 'Indonesia');

/**
 * Misal disini, kota dari store2 adalah indonesia juga
 * kita bisa clone dari strore1, dan tinggal mengubah name nya saja7
 * */
$store2 = $store->clone();
$store2->setName('Toko Y');
```
