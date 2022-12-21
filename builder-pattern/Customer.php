<?php 

class Customer {

    private string $id;
    private string $email;
    private string $password;
    private string $nik;
    private bool $is_registered;

    /**
     *  Misal untuk kedepannya, kita akan menambah beberapa property
     *  Maka kita harus tambahkan sebagai property dan tambhakn juga di constructor nya
     */

    public function __construct(string $id, string $email, string $password, string $nik, bool $is_registered)
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