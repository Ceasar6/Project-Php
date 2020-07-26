<?php


namespace Study\Model;


class Grades
{
    protected $id;
    protected $grade_name;
    protected $status;
    public function __construct($grade_name, $status)
    {
        $this->grade_name = $grade_name;
        $this->status = $status;
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
    public function getGradeName()
    {
        return $this->grade_name;
    }

    /**
     * @param mixed $grade_name
     */
    public function setGradeName($grade_name)
    {
        $this->grade_name = $grade_name;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}