@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">mail:{{ $mail}}</p>
    </div>
    <br>
    <div class="col-lg-4 me-auto">
      <p class="lead">num:{{ $phone }}</p>
    </div>
  </div>
</div>
@endsection
