@extends('layout')

@section('title')
Add New Task
@endsection

@section('content')
<form action="{{route('task.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="taskname" class="form-label">Task Name :</label>
        <input type="text" class="form-control" name="taskname">
    </div>
    <div class="mb-3">
        <input type="submit" value="Save" class="btn btn-success">
    </div>
</form>
@endsection