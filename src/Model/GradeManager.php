<?php


namespace Study\Model;

use Study\Model\DBConnect;
use Study\Model\Grades;
class GradeManager
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM `tbl_grade`";
        $stmt = $this->database->query($sql);
        $stmt ->execute();
        $result = $stmt->fetchAll();
    }


}