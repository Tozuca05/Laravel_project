@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">Mail:{{ $mail}}</p>
    </div>
    <br>
    <div class="col-lg-4 me-auto">
      <p class="lead">Num:{{ $phone }}</p>
    </div>
  </div>
</div>
@endsection
