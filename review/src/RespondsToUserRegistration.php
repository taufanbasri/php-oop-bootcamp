<?php

namespace Nada;

interface RespondsToUserRegistration
{
    
    public function userRegisteredSuccessfully();
    
    public function userRegisteredFailed();
}