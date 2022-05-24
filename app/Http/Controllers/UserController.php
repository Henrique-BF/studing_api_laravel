<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::all();
    }

    public function store(Request $request)
    {
        return User::create($request->input());
    }

    public function show(User $user)
    {
        return $user->load('account');
    }

    public function update(Request $request, User $user)
    {
        return $user->update($request->input());
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }
}
