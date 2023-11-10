@extends('layout')
@section('content')
<style>
    .card {
        background-color: #f7f7f7;
        border: 1px solid #dcdcdc;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        border-radius: 10px 10px 0 0;
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }

    .card-title {
        font-size: 24px;
        color: #333;
    }

    .card-text {
        color: #555;
    }

    .card-text p {
        margin: 10px 0;
    }
</style>
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        <p class="card-text">Course : {{ $batches->course->name }}</p>
        <p class="card-text">Start Date : {{ $batches->start_date }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
