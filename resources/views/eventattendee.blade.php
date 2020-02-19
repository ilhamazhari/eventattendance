@extends('layouts.main')

@section('title', 'Attendee')

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
<div class="container">
  <table class="table stripped">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID Attendee</th>
        <th>Name</th>
        <th>Team</th>
        <th>Arrival Bus</th>
        <th>Return Bus</th>
        <th>QR Code</th>
        <th>Scanned</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($attendee as $att)
      <tr>
        <td></td>
        <td>{{$att->id_attendee}}</td>
        <td>{{$att->fullname}}</td>
        <td>{{$att->team}}</td>
        <td>{{$att->arrival_bus}}</td>
        <td>{{$att->return_bus}}</td>
        <td><img src="https://api.qrserver.com/v1/create-qr-code/?data={{$att->id_attendee}}&amp;size=50x50"></td>
        <td>{{$att->attendance}}</td>
        <td><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button> <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection