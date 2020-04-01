<?php
namespace app;

use \mysqli;

class Db
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    public $mySQLI;

    public function __construct()
    {
        $this->mySQLI = new mysqli('localhost', 'root', '', 'blog_poo');
    }

    /*
    public function __construct($db_name ='blog_poo', $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getMYSQLI()
    {
        if ($this->mySQLI === null)
        {
            $mysqli = new mysqli('localhost','root','','blog_poo');
            $this->mySQLI = $mysqli;
        }
        return $this->mySQLI;
    }

    public function query()
    {
        return $this->getMYSQLI();
    }
    */
}