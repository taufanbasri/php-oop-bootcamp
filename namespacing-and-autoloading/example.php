<?php

use Azizah\Business;
use Azizah\Staff;
use Azizah\Users\Person;

$taufan = new Person("Taufan Prasetyo");

$staff = new Staff([$taufan]);

$perusahaan = new Business($staff);

$perusahaan->hire(new Person('Evita Karlina'));

var_dump($perusahaan->getStaffMembers());