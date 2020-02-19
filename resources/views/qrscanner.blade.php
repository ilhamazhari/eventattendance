@extends('layouts.main')

@section('title', 'QR Scanner')

@section('style')
<style type="text/css">
  body {
    background: url('images/bg.jpg') top center repeat-x fixed;
    text-align: center;
  }
  img {
    display: block;
    width: 80px;
    height: 80px;
    margin-right: auto;
    margin-left: auto;
  }
</style>
@endsection

@section('content')
<div class="container-fluid">
  <img src="images/logo.png">
  <div id="app">
    <qrscanner></qrscanner>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript"></script>
@endsection