## Abstract Factory

- Digunakan ketika kita ingin membuat sebuah object yang di dalamnya harus terdapara kesesuaian class
- misal disini kalau level nya easy maka arena nya pun harus easy
- cara pembuatan abstract factory adalah kita membuat satu interface untuk setiap factory nya lalu membuat beberapa implementasi nya

---

### Berikut contoh **Tanpa menggunakan abstract factory :**

`Game.php`

```php
/**
 * Misal, class Game ini merupakan main class ( class utama )  dari aplikasi kita
 * */
class Game {

    /**
     * Disini Level dan Arena merupakan sebuah interface
     *
     * Dibuat interface karena nanti pada nyatanyam kek=tika memulai game nya
     * kita bisa memilih tingkatan kesulitan baik level, maupun arena
     *
     * Tapi harapan kedepannya kalau memasukan LevelEasy maka arena nya harus ArenaEasy
     * kalau LevelMediym maka ArenaMedium
     * */

    private Level $level;
    private Arena $arena;

    public function __construct(Level $level, Arena $arena) {
        $this->level = $level;
        $this->arena = $arena;
    }

    public function start() {
        $this->level->start();
        $this->arena->start();
    }
}
```

`Level.php`

```php
interface Level {
    public fuction start();
}
```

`LevelEasy.php`

```php
class LevelEasy implements Level {
    public function start() {
        echo 'level easy';
    }
}
```

`LevelMediun.php`

```php
class LevelMediun implements Level {
    public function start() {
        echo 'level medium';
    }
}
```

`LevelHard.php`

```php
class LevelHard implements Level {
    public function start() {
        echo 'level hard';
    }
}
```

`Arena.php`

```php
interface Arena {
    public function start();
}
```

`ArenaEasy.php`

```php
class ArenaEasy implements Arena {
    public function start() {
        echo 'arena easy';
    }
}
```

`ArenaMedium.php`

```php
class ArenaMedium implements Arena {
    public function start() {
        echo 'arena medium';
    }
}
```

`ArenaHard.php`

```php
class ArenaHard implements Arena {
    public function start() {
        echo 'arena hard';
    }
}
```

Kalau kode nya seperti di atas, maka pemanggilan nya seperti ini :

`App.php`

```php

$gameEasy = new Game(new LevelEasy(), new ArenaEasy())
$gameEasy->start();

$gameMedium = new Game(new LevelEasy(), new ArenaEasy())
$gameMedium->start();
```

---

Berikut contoh **Menggunakan abstract factory :**

`Level.php`

```php
interface Level {
    public fuction start();
}
```

`LevelEasy.php`

```php
class LevelEasy implements Level {
    public function start() {
        echo 'level easy';
    }
}
```

`LevelMediun.php`

```php
class LevelMediun implements Level {
    public function start() {
        echo 'level medium';
    }
}
```

`LevelHard.php`

```php
class LevelHard implements Level {
    public function start() {
        echo 'level hard';
    }
}
```

`Arena.php`

```php
interface Arena {
    public function start();
}
```

`ArenaEasy.php`

```php
class ArenaEasy implements Arena {
    public function start() {
        echo 'arena easy';
    }
}
```

`ArenaMedium.php`

```php
class ArenaMedium implements Arena {
    public function start() {
        echo 'arena medium';
    }
}
```

`ArenaHard.php`

```php
class ArenaHard implements Arena {
    public function start() {
        echo 'arena hard';
    }
}
```

`GameFactory.php`

```php
interface GameFactory {
    /**
     *  return value nya adalah interface Level dan Arena
     *  */
    public function createLevel(): Level;
    public function createArena(): Arena;
}
```

`GameFactoryEasy.php`

```php
class GameFactoryEasy implements GameFactory {
    public function createLevel(): Level {
        return new LevelEasy();
    }
    public function createArena(): Arena {
        return new ArenaEasy();
    }
}
```

`GameFactoryMedium.php`

```php
class GameFactoryMedium implements GameFactory {
    public function createLevel(): Level {
        return new LevelMedium();
    }
    public function createArena(): Arena {
        return new ArenaMedium();
    }
}
```

`GameFactoryHard.php`

```php
class GameFactoryHard implements GameFactory {
    public function createLevel(): Level {
        return new LevelHard();
    }
    public function createArena(): Arena {
        return new ArenaHard();
    }
}
```

`Game.php`

```php
class Game {
    private Level $level;
    private Arena $arena;

    public function __construct(GameFactory $gameFactory) {
        $this->level = $gameFactory->createLevel();
        $this->arena = $gameFactory->createArena();
    }

    public function start() {
        $this->level->start();
        $this->arena->start();
    }
}
```

Kita sudah implementasi abstarct factory dan pemanggilan code nya seperti ini :

`App.php`

```php
$gameEasy = new Game(new GameFactoryEasy())
$gameEasy->start();
```

- Keuntungannya adalah andai saja kita menambah class baru misal `Enemy` kita cukup tambahkan di `GameFactory` method `createEnemy` lalu buat implementasi nya, jangan lupa tambahkan property enemy di class `Game` nya
