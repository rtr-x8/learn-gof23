<?php


namespace App\StudentCounter;


use DesignPattern\Iterator\Iterator;
use Exception;

class StudentIterator implements Iterator
{
    private StudentList $studentList;
    private int $index = 0;

    /**
     * StudentIterator constructor.
     * @param StudentList $studentList
     */
    public function __construct(StudentList $studentList)
    {
        $this->studentList = $studentList;
    }

    /**
     * @return bool
     */
    public function hasNext(): bool
    {
        return $this->studentList->count() > $this->index;
    }

    /**
     * @return Student
     * @throws Exception
     */
    public function next(): Student
    {
        $student = $this->studentList->getStudentAt($this->index);
        $this->index++;
        return $student;
    }
}
