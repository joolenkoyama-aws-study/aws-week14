<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $condition = $request->input('name') ?? '';
        $user_query = User::query();
        if ($condition !== '' && !empty($condition)) {
            $user_query->where('name', 'like', '%' . $condition . '%');
        }
        $users = $user_query->get();
        return view('users.index', ['users' => $users]);
    }
}
