@extends('layouts.main')

@section('title', 'QR Scanner')

@section('style')
@endsection

@section('content')
<div class="container-fluid">
  <div id="app">
    <qrscanner></qrscanner>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript"></script>
@endsection