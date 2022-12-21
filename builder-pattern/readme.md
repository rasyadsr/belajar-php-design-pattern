## Builder Pattern

- adalah pattern dimana kita memisahkan cara pembuatan object dari class object tersebut
- pembuatan class builder, nama class nya di akhiri kata `Builder` contoh `CustomerBuilder`
- ketika menggunakan konsep builder patern hal yang harus di perhatikan adalah :
  - kita berikan default value properties nya di `classBuilder`
  - `return $this` untuk setiap setter di `classBuilder` nya **Wajib**
