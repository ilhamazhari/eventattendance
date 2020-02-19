<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventAttendee as Attendee;

class FrontController extends Controller
{
    public function attendee()
    {
      $attendee = Attendee::all();

      return view('eventattendee', ['attendee' => $attendee]);
    }
}
