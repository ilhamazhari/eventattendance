<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EventAttendee as Attendee;
use App\Imports\AttendeeImport;
use Maatwebsite\Excel\Facades\Excel;

class AttendeeController extends Controller
{
    public function index()
    {
      $attendee = Attendee::all();

      return response()->json($attendee->toArray(), 200);
    }

    public function store(Request $request)
    {
      $attendee = new Attendee;
      $attendee->event_id = $request->event;
      $attendee->id_attendee = $request->idattendee;
      $attendee->fullname = $request->fullname;
      $attendee->team = $request->team;
      $attendee->arrival_bus = $request->arrivalbus;
      $attendee->return_bus = $request->returnbus;

      if($attendee->save()){
        return response()->json('Attendee created successfully', 200);
      }else{
        return response()->json('Failed!', 500);
      }
    }

    public function update(Request $request, $id)
    {
      $attendee = Attendee::find($id);
      $attendee->event_id = $request->event;
      $attendee->id_attendee = $request->idattendee;
      $attendee->fullname = $request->fullname;
      $attendee->team = $request->team;
      $attendee->arrival_bus = $request->arrivalbus;
      $attendee->return_bus = $request->returnbus;

      if($attendee->save()){
        return response()->json('Attendee updated successfully', 200);
      }else{
        return response()->json('Failed!', 500);
      }
    }

    public function destroy($id)
    {
      if(Attendee::destroy($id)){
        return response()->json('Attendee deleted successfully', 200);
      }else{
        return response()->json('Failed', 500);
      }
    }

    public function import(Request $request)
    {
      Excel::import(new AttendeeImport, $request->file('file'));

      return back();
    }

    public function attendance($id_attendee)
    {
      if(Attendee::where('id_attendee', $id_attendee)->where('attendance', 0)->update(['attendance', 1])){
        $attendee = Attendee::where('id_attendee', $id_attendee)->first();
        return response()->json($attendee,200);
      }else if(Attendee::where('id_attendee', $id_attendee)->where('attendance', 1)->get()->count() > 0){
        return response()->json('User sudah discan', 200);
      }else{
        return response()->json('Failed!',500);
      }
    }
}
