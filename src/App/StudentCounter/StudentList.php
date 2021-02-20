<?php


namespace App\StudentCounter;


use DesignPattern\Iterator\Aggregate;
use DesignPattern\Iterator\Iterator;
use Exception;

class StudentList implements Aggregate
{
    private array $studentList;

    /**
     * @return Iterator
     */
    public function iterator(): Iterator
    {
        return new StudentIterator($this);
    }

    /**
     * @param Student $student
     * @return void
     */
    public function addStudent(Student $student): void
    {
        $this->studentList[] = $student;
    }

    /**
     * @param int $index
     * @return Student
     * @throws Exception
     */
    public function getStudentAt(int $index): Student
    {
        if (!array_key_exists($index, $this->studentList)) {
            throw new Exception("index is not exists. key: ${index}");
        }

        return $this->studentList[$index];
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->studentList);
    }
}
