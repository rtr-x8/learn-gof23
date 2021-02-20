<?php


use App\StudentCounter\Student;
use App\StudentCounter\StudentList;
use Test\TestCase;

class StudentListTest extends TestCase
{
    /**
     * @test
     * @throws Exception
     */
    public function 存在しないindexで例外()
    {
        $this->expectException(Exception::class);
        $this->expectErrorMessage('index is not exists. key: 3');

        $studentList = new StudentList();
        $studentList->getStudentAt(3);
    }

    /**
     * @test
     * @throws Exception
     */
    public function キーが正しいなら名前を取得できる()
    {
        $name1 = 'name 1';
        $name2 = 'name 2';
        $name3 = 'name 3';

        $studentList = new StudentList();
        $studentList->addStudent(new Student($name1));
        $studentList->addStudent(new Student($name2));
        $studentList->addStudent(new Student($name3));

        $this->assertEquals($studentList->getStudentAt(0)->getName(), $name1);
        $this->assertEquals($studentList->getStudentAt(1)->getName(), $name2);
        $this->assertEquals($studentList->getStudentAt(2)->getName(), $name3);
    }

    /**
     * @test
     */
    public function 個数を数えられる()
    {
        $counter = 5;
        $studentList = new StudentList();
        for ($i = 0; $i < $counter; $i++) {
            $studentList->addStudent(new Student("name {$i}"));
        }

        $this->assertEquals($counter, $studentList->count());
    }

    /**
     * @test
     * @throws Exception
     */
    public function 生徒を追加できる()
    {
        $studentList = new StudentList();
        for ($i = 0; $i < 5; $i++) {
            $studentList->addStudent(new Student("name {$i}"));
        }

        $name = "aaa bbb";
        $studentList->addStudent(new Student(($name)));
        $this->assertEquals($studentList->getStudentAt(5)->getName(), $name);
        $this->assertEquals(6, $studentList->count());
    }
}
