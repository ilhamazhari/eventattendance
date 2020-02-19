<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
      $event = Event::all();

      return response()->json($event->toArray(),200);
    }

    public function store(Request $request)
    {
      $event = new Event;
      $event->name = $request->name;
      $event->organizer = $request->organizer;

      if($event->save()){
        return response()->json('Event created successfully', 200);
      }else{
        return response()->json('Failed!', 500);
      }
    }

    public function update(Request $request, $id)
    {
      $event = Event::find($request->id);
      $event->name = $request->name;
      $event->organizer = $request->organizer;

      if($event->save()){
        return response()->json('Event updated successfully', 200);
      }else{
        return response()->json('Failed!', 500);
      }
    }

    public function destroy(Request $request, $id)
    {
      if(Event::destroy($request->id)){
        return response()->json('Deleted successfully!', 200);
      }else{
        return response()->json('Failed!', 500);
      }
    }
}
