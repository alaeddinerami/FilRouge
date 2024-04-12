<?php

namespace App\Repositories\Implementations;

use App\Models\Student;
use App\Repositories\Interfaces\StudentInterface;

class StudentRepository implements StudentInterface
{
    public function all()
    {
        return Student::all();
    }
    public function StudentBan()
    {

    }
}