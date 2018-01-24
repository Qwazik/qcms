<?php

class Connection
{
     private $link;

     public function __construct()
     {
         $this->connect();
     }


     private function connect()
     {
         $config = require_once 'config.php';

         $dsn = 'mysql:host='.$config['host'].';dbname'.$config['db_name'].';charset='.$config['charset'];

         $this->link = new PDO($dsn, $config['username'], $config['password']);

         return $this;
     }
}