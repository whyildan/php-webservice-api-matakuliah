<?php

/**
 * @author      Whyildan Wahyu Pratama <whyldan.9g@gmail.com>
 * @link        https://github.com/whyldan
 * 
 */

error_reporting(E_ALL ^ E_WARNING);
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'kampus';

    public $db;

    function __construct()
    {
        try {
            $this->db = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        } catch (Throwable $e) {
            http_response_code(500);

            $res = array(
                'status' => 500,
                'success' => false,
                'error' => $e->getMessage()
            );

            header('Content-Type: application/json; charset=utf-8');

            echo json_encode($res, JSON_PRETTY_PRINT);
            die();
        }
    }
}
