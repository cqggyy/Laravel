<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;


class UsersController extends Controller
{
    //
    public function create()
    {
    	return view('users.create');
    }

    //show单个用户的信息
    public function show(User $user)
    {
    	return view('users.show', compact('user'));
    }
}
