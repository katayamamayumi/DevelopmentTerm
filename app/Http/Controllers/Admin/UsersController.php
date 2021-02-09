<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Users;

class UsersController extends Controller
{
    public function edit(Request $request)
    {
        /*2021.02.05考えてみた

        //Users Modelからデータを取得する
        $users = Users::find($request->id);
        if (empty($users)) {
            abort(404);
        }
        */
        return view('admin.users.edit');
    }

    public function update(Request $request)
    {
        /*
        //Users Modelからデータを取得する
        $users = Users::find($request->id);
        //該当するデータを上書きして保存する
        $users->fill($users_form)->save();
        */
        return redirect('admin/users');
    }
}
