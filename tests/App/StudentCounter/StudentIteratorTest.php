<?php


use App\StudentCounter\Student;
use App\StudentCounter\StudentList;
use Test\TestCase;

class StudentIteratorTest extends TestCase
{

    /**
     * @test
     */
    public function 中身があればhasNextはtrueを返す()
    {
        $studentList = $this->createStudentList(1);
        $studentIterator = $studentList->iterator();

        $this->assertTrue($studentIterator->hasNext());

        $studentIterator->next();
        $this->assertFalse($studentIterator->hasNext());
    }

    private function createStudentList(int $size): StudentList
    {
        $studentList = new StudentList();
        for ($i = 0; $i < $size; $i++) {
            $faker = Faker\Factory::create('ja_JP');
            $studentList->addStudent(new Student($faker->name));
        }
        return $studentList;
    }

    /**
     * @test
     */
    public function イテレータのindexは一つずつ増える()
    {
        $studentList = $this->createStudentList(3);
        $iterator = $studentList->iterator();

        $this->assertEquals(0, $iterator->index());

        $iterator->next();
        $this->assertEquals(1, $iterator->index());

        $iterator->next();
        $this->assertEquals(2, $iterator->index());
    }

    /**
     * @test
     */
    public function 次がなければ例外()
    {
        $this->expectException(Exception::class);

        $studentList = $this->createStudentList(0);
        $iterator = $studentList->iterator();

        $iterator->next();
    }

    /**
     * @test
     */
    public function nextしきったら終わり()
    {
        $this->expectException(Exception::class);

        $studentList = $this->createStudentList(5);
        $iterator = $studentList->iterator();

        while ($iterator->hasNext()) {
            $iterator->next();
        }

        $iterator->next();
    }
}
