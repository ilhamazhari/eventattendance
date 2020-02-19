<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventAttendee extends Model
{
  protected $table = 'event_attendee';

  protected $fillable = ['event_id', 'id_attendee', 'fullname', 'team', 'return_bus'];
}
