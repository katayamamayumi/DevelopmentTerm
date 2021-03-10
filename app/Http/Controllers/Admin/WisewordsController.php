<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WisewordsController extends Controller
{

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
        $all_request = $request->all();
        \Log::debug(__LINE__ . ' ' . __FILE__ . ' ' . print_r($all_request, true));
        //dd(__LINE__ . ' ' . __FILE__);
        $event = new Event();
        $event->start = $all_request['start'];
        $event->title = $all_request['title'];
        $event->color = $all_request['color'];


        $event->save();
        return $event;
    }
    public function getEvents(Request $request)
    {
        $all_request = $request->all();
        \Log::debug(__LINE__ . ' ' . __FILE__ . ' ' . print_r($all_request, true));
        $event = new Event;

        $events = $event->all();

        return response()->json($events);
    }
}
