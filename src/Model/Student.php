<?php


namespace Study\Model;


class Student
{
    protected $id;
    protected $student_name;
    protected $age;
    protected $gender;
    protected $address;
    protected $email;
    protected $image;
    protected $grade_id;

    public function __construct($student_name, $age, $gender, $address, $email, $image , $grade_id)
    {
        $this->student_name = $student_name;
        $this->age =$age;
        $this->gender = $gender;
        $this->address = $address;
        $this->email =$email;
        $this->image = $image;
        $this->grade_id = $grade_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->student_name;
    }

    /**
     * @param mixed $student_name
     */
    public function setStudentName($student_name)
    {
        $this->student_name = $student_name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getGradeId()
    {
        return $this->grade_id;
    }

    /**
     * @param mixed $grade_id
     */
    public function setGradeId($grade_id)
    {
        $this->grade_id = $grade_id;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }


}