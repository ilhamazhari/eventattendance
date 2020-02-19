<?php

namespace App\Imports;

use App\EventAttendee;
use Maatwebsite\Excel\Concerns\ToModel;

class AttendeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EventAttendee([
          'id_attendee' => $row[0],
          'fullname' => $row[1],
          'team' => $row[2],
          'arrival_bus' => $row[3],
          'return_bus' => $row[4],
        ]);
    }
}
