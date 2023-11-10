@extends('layout')
@section('content')
<style>
    .card {
        width: 700px;
        margin: 0 auto;
        margin-top: 20px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f7f7f7;
        border-radius: 5px;
    }

    .card-header {
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">

      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Course Name</label></br>
        {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br> --}}
        <select name="course_id" id="course_id" class="form-control">
            @foreach($courses as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>

        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
