<?php 

/**
 *  Ceritanya class ini representasi dari data customber
 */
class CustomerProblem {
    
    private string $id;
    private string $email;
    private string $password;
    private string $nik;
    private bool $is_registered;

    /**
     *  Misal untuk kedepannya, kita akan menambah beberapa property
     *  Maka kita harus tambahkan sebagai property dan tambhakn juga di constructor nya
     */

    public function __construct(string $id, string $email, string $password, string $nik = '', $is_registered = false) // ini contoh pemberian default value menggunakan stirng kosong
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->nik = $nik;
        $this->is_registered = $is_registered;
    }

      /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of nik
     */ 
    public function getNik()
    {
        return $this->nik;
    }

    /**
     * Get the value of is_registered
     */ 
    public function getIs_registered()
    {
        return $this->is_registered;
    }
}

$customer1 = new CustomerProblem('1', 'fulanSatu@gmail.com', 'rahasia', '8374923874893');
/**
 *  Misal disini user nya ga punya `nik`
 *  Maka di constructor nya harus kita set default value nya misal $nik = ''
 *  Namun akan sangat meropetkan bila kita mempunyai banyak propery 
 *  Dan tiap Customer itu berbeda" property yang tidak ada nya,
 *  Akan sangat merepotkan jika kita harus membuat default value untuk tiap property
 *  Ini akan sangat melelahkan, solusi nya adalah menggunakan `Builder Pattern`
 */
$customer2 = new CustomerProblem('2', 'fulanDua@gmail.com', '123456');