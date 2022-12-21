<?php

class Employe {

    private string $name;
    private string $title;
    private string $salary;

    public function __construct(string $name, string $title, string $salary)
    {
        $this->name = $name;
        $this->title = $title;
        $this->salary = $salary;
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }
}