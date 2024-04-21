<?php
namespace App\Services\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\StudentInterface;
use App\Services\Interfaces\StudentServiceInterface;

class StudentService implements StudentServiceInterface
{
    public function __construct(public StudentInterface $repository)
    {

    }
    public function all()
    {
        return $this->repository->all();
    }
    public function StudentBan(User $user)
    {
        return $this->repository->StudentBan($user);
    }
}