<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsermessageController extends Controller
{
    public function add(Request $request)
    {
        return view('admin.username.create');
    }

    public function create(Request $request)
    {
        return redirect('admin/username/create');
    }
    public function edit(Request $request)
    {
        return view('admin.usermessage.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/usermessage');
    }
}
