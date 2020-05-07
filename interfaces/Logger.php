<?php

interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to a file: '.$message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to a database: '.$message);
    }
}


// ...

class UserController
{
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'Taufan Prasetyo';

        $this->logger->execute($user);
    }
}

$controller = new UserController(new LogToDatabase);
// $controller = new UserController(new LogToFile);

$controller->show();