<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function add(Request $request)
    {
        return view('admin.user.create');
    }

    public function create(Request $request)
    {
        return redirect('admin/user/create');
    }
    public function edit(Request $request)
    {
        return view('admin.users.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/users');
    }
}
