<?php 
namespace App\Services\Interfaces;
use App\Models\User;

interface StudentServiceInterface{
    public function all();
    public function StudentBan(User $user);
}