<?php

namespace App\Repositories\Interfaces;

use App\Models\Student;
use App\Models\User;

interface StudentInterface
{
    public function all();
    public function StudentBan(User $user);
    // public function banLogout($id);

}