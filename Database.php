<?php
namespace wild;

use \PDO;

class Database
{
    /**
     * @var string
     */
    private $db_name;
    /**
     * @var string
     */
    private $db_user;
    /**
     * @var string
     */
    private $db_pass;
    /**
     * @var string
     */
    private $db_host;
    /**
     * @var
     */
    private $pdo;

    public function __construct($db_name, $db_user = 'wilder', $db_pass = 'jesaiscequejefais', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPdo()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=checkpoint-1-26/09/2017;host=localhost', 'wilder', 'jesaiscequejefais', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $this->pdo = $pdo;
        }
        return $this->pdo = $pdo;
    }

    public function query($statement)
    {
        $res = $this->getPdo()->query($statement);
        $datas = $res->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
}