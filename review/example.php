<?php

use Nada\AuthController;
use Nada\RegisterUser;

$registration = new RegisterUser;
$authController = new AuthController($registration);

$authController->register();