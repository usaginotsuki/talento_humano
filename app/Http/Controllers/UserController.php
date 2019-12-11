<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        dd($users);
        $title = 'Listado de usuarios';
        return view('users.index', compact('title', 'users'));
    }


}