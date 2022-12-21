## Factory Method

- Digunakan jika ada sebuah standar dalam pembuatan object nya dari pada membuat manual ,lebih baik menggunakan factory method

### Kasus Pertama : ( Employee )

- Maksud manual disini kasus nya dari pada membuat `class Manager` dan `class Staff`
- Misal disini membuat employee yang memiliki 2 category `Manager` dan `Staff` yang dimana title nya sama semua dan salary nya sama semua, yang membedakan hanyalah nama employee nya saja

### Kasus Kedua : ( Animal )

- Disini contoh nya kita memiliki 1 interface `Animal` dan 3 class yaitu `Cat`, `Dog`, `Tiger` yang tiap class nya `implements Animal`
- Dan kita akan membuat object nya seperti ini

```php title="App.php"

$cat = new Cat();
$dog = new Dog();
$tiger = new Tiger();

```

- Misal kita membuat perubahan banyak pada `class Tiger` sehingga kita perlu membuat `class TigerBaru` otomatis saat pembuatan object nya yang kita lakukan adalah `new TigerBaru` bagaimana jika yang memanggil `new Tiger` itu lebih dari satu, ada baiknya kita implementasi factory method

```php title="App.php"
...
$tiger = new Tiger(); // ini di ganti misal, menjadi
$tiger = new TigerBaru();

```
