<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Event Management System | @yield('title')</title>
  <meta name="title" content="Event Attendee">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="{{mix('css/app.css')}}">
  @yield('style')

</head>
<body>
  @yield('content')

  <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
  @yield('script')
</body>
</html>