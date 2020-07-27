<?php


namespace Study\Model;


class StudentManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    function getAll()
    {
        $sql = "SELECT * FROM `tbl_students` ";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $key => $item) {
            $student = new Student($item['student_name'], $item['age'], $item['gender'], $item['address'], $item['email'],
                $item['image'], $item['grade_id']);
            $student->setId($item['id']);
            array_push($arr, $student);
        }
        return $arr;
    }

    function addStudent($student)
    {
        $sql = "INSERT INTO `tbl_students`(`student_name`, `age`, `gender`, `address`, `email`, `image`, `grade_id`) 
VALUES (:student_name, :age, :gender, :address, :email, :image, :grade_id)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':student_name', $student->getStudentName());
        $stmt->bindParam(':age', $student->getAge());
        $stmt->bindParam(':gender', $student->getGender());
        $stmt->bindParam(':address', $student->getAddress());
        $stmt->bindParam(':email', $student->getEmail());
        $stmt->bindParam(':image', $student->getImage());
        $stmt->bindParam(':grade_id', $student->getGradeId());
        $stmt->execute();
    }


}