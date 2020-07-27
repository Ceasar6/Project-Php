<?php


namespace Study\Model;

use Study\Model\DBConnect;
use Study\Model\Grade;
class GradeManager
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM `tbl_grades`";
        $stmt = $this->database->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr =[];
        foreach ($result as $key => $item){
            $grade = new Grade($item['grade_name'],$item['status']);
            $grade->setId($item['id']);
            array_push($arr, $grade);
        }
        return $arr;
    }
    function add($grade){
        $sql = "INSERT INTO `tbl_grades`(`grade_name`, `status`) VALUES (:grade_name, :status)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':grade_name', $grade->getGradename());
        $stmt->bindParam(':status', $grade->getStatus());
        $stmt->execute();
    }
    function delete($id){
        $sql = "DELETE FROM `tbl_grades` WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    function update($grade)
    {
        $sql = "UPDATE `tbl_grades` SET `grade_name`=:grade_name,`status`=:status WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $grade->getId());
        $stmt->bindParam(':grade_name', $grade->getGradeName());
        $stmt->bindParam(':status', $grade->getStatus());
        $stmt->execute();
    }
    function getGradeById($id)
    {
        $sql = "SELECT * FROM `tbl_grades` WHERE `id` = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

}