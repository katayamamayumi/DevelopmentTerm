<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function add(Request $request)
    {
        return view('admin.goal.create');
    }

    public function create(Request $request)
    {
        return redirect('admin/goal/create');
    }

    public function edit(Request $request)
    {
        return view('admin.goal.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/goal');
    }
}
