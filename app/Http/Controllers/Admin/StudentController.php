<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Models\User;
use App\Repositories\Interfaces\StudentInterface;
use App\Services\Interfaces\StudentServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(public StudentServiceInterface $service)
    {
    }
    public function index()
    {
        $students = $this->service->all();
        // dd($students);
        return view('dashboard.users.index', compact('students'));
    }

    public function StudentBan(User $user)
    {

         $this->service->StudentBan($user);
        if ($user->role =='student') {
            return redirect()->back()->with([
                'message' => 'student unbanned successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'student banned successfully!',
                'operationSuccessful' => $this->operationSuccessful = true,
            ]);
        }

    }
}
