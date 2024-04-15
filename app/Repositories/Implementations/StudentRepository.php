<?php

namespace App\Repositories\Implementations;

use App\Models\Student;
use App\Models\User;
use App\Repositories\Interfaces\StudentInterface;
use Illuminate\Support\Facades\Auth;

class StudentRepository implements StudentInterface
{
    public function all()
    {
        return $users = User::where('role', 'student')
            ->orWhereNull('role')
            ->get();

    }
    public function StudentBan(User $user)
    {
        // dd($user->id);
        if ($user->role == 'student') {
            $user->role = null;
            $student = $user->update();
            return $student;

        } else {
            $student = $user->update([
                'role' => 'student',
            ]);
            return $student;
        }
    }

    
}