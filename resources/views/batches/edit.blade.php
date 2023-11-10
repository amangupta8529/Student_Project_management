@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
    <form action="{{ url('batches/' . $batches->id) }}" method="POST">
      @csrf
      @method("PATCH")
      <input type="hidden" name="id" value="{{ $batches->id }}">
      <div class="form-group">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="course_id">Course</label><br>
        <input type="text" name="course_id" id="course_id" value="{{ $batches->course_id }}" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="start_date">Start Date</label><br>
        <input type="text" name="start_date" id="start_date" value="{{ $batches->start_date }}" class="form-control"><br>
      </div>
      <button type="submit" class="btn btn-success">Update</button><br>
    </form>
  </div>
</div>
@endsection
