<?php

class Person {
    
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class Business {

    protected $staff;

    public function __construct(Staff $staff) {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff {
    
    protected $members = [];

    public function __construct($members = []) {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$taufan = new Person("Taufan Prasetyo");

$staff = new Staff([$taufan]);

$perusahaan = new Business($staff);

$perusahaan->hire(new Person('Evita Karlina'));

var_dump($perusahaan->getStaffMembers());