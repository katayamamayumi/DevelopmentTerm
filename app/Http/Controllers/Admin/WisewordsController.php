<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WisewordsController extends Controller
{
    public function add(Request $request)
    {
        return view('admin.wisewords.create');
    }

    public function create(Request $request)
    {
        return redirect('admin/wisewords/create');
    }
    public function edit(Request $request)
    {
        return view('admin.wisewords.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/wisewords');
    }
    public function postEvent(Request $request)
    {
        $event = new Event();
        $event->start = $request->start;
        $event->title = $request->title;
        $event->color = $request->color;


        $event->save();
        return $event;
    }
}
