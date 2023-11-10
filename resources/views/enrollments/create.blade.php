@extends('layout')
@section('content')
<style>
    .card {
        width: 700px;
        margin: 0 auto;
        /* margin-top: 10px; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f7f7f7;
        border-radius: 5px;
    }

    .card-header {
        font-size: 20px;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
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

    .btn-cancel {
        background-color: #f00;
    }
</style>

<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">

      <form action="{{ url('enrollments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>

        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control"></br>

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
