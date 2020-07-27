<?php


namespace Study\Controller;

use Study\Model\DBConnect;
use Study\Model\GradeManager;
use Study\Model\StudentManager;
use Study\Model\Student;

class StudentController
{
    protected $studentManager;
    protected $gradeManager;

    public function __construct()
    {
        $this->studentManager = new StudentManager();
        $this->gradeManager = new GradeManager();
    }

    function viewStudent()
    {
         $students =  $this->studentManager->getAll();
        include_once 'src/View/tbl_students/list-student.php';
    }

    function addStudent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $grades = $this->gradeManager->getAll();
            include_once 'src/View/tbl_students/add-student.php';
        }else{
        $file = $_FILES['image-file']['tmp_name'];
        $path = "uploads/" . $_FILES['image-file']['name'];
        if (move_uploaded_file($file, $path))
            echo 'Success upload file';
        else echo 'Fail to upload file';
        $student_name = $_REQUEST['student_name'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $grade_id = $_REQUEST['grade_id'];
        $student = new Student($student_name, $age,$gender,$address,$email,$path,$grade_id);
        $this->studentManager->addStudent($student);
        header('location:index.php?page=list-student');
    }
    }
}