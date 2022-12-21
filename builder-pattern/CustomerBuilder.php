<?php 

require_once __DIR__ . '/Customer.php';

class CustomerBuilder {

    /**
     *  Properties nya samakan dengan class yang representasi data Customer,
     *  Disini kita wajib memberikan default value
     *  Misal disini memberi string kosong dan boolean false
     */
    private string $id = '';
    private string $email = '';
    private string $password = '';
    private string $nik = '';
    private bool $is_registered = false;

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the value of nik
     *
     * @return  self
     */ 
    public function setNik($nik)
    {
        $this->nik = $nik;

        return $this;
    }

    /**
     * Set the value of is_registered
     *
     * @return  self
     */ 
    public function setIs_registered($is_registered)
    {
        $this->is_registered = $is_registered;

        return $this;
    }

    public function build(): Customer
    {
        return new Customer(
            $this->id,
            $this->email,
            $this->password,
            $this->nik,
            $this->is_registered
        );
    }
}