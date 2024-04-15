<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Models\User;
use App\Repositories\Interfaces\StudentInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $studentRepository;
    public function __construct(StudentInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function index()
    {
        $students = $this->studentRepository->all();
        // dd($students);
        return view('dashboard.users.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }

    public function StudentBan(User $user)
    {

         $this->studentRepository->StudentBan($user);
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
