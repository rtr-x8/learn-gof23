<?php


namespace App\StudentCounter;


/**
 * 1. docker exec -it
 *
 * Class Main
 * @package App\StudentCounter
 */
class Main
{

    public static function call(): void
    {
        $studentList = new StudentList();
        $studentList->addStudent(new Student('田中 太郎'));
        $studentList->addStudent(new Student('佐藤 二郎'));
        $studentList->addStudent(new Student('佐々木 三郎'));
        $studentList->addStudent(new Student('徳永 四郎'));
        $studentList->addStudent(new Student('平 五郎'));
        $studentList->addStudent(new Student('今西 六郎'));

        $studentIterator = $studentList->iterator();
        while ($studentIterator->hasNext()) {
            $student = $studentIterator->next();
            echo $student->getName() . PHP_EOL;
        }
    }
}
