<?php
require  __DIR__ .'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();  

abstract Class Database {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('pgsql:host='.$_ENV['host'].';dbname='.$_ENV['dbname'], $_ENV['banco'], $_ENV['password'] );
        }
        return self::$instance;
    }
}