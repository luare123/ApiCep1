<?php

namespace ApiCep\DAO;

use Exception;
use \PDO;
use PDOException;

abstract class DAO extends PDO
{
    protected $conexao;

    public function __construct()
    {
        try
        {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ];

            $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname="
        }
        catch (Exception $e)
        {

        }
    }
}

