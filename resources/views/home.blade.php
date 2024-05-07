@extends('layout')

@section('title')
All Tasks Details
@endsection

@section('content')
<a href="{{ route('task.create') }}" class="btn btn-success btn-sm mb-3">Add New Task</a>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Task Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->tasks }}</td>
        <td>
            @if($task->status == 1)
                Completed
            @else
                Not Completed
            @endif
        </td>   
        <td>
            <form method="POST" action="{{ route('task.toggle-complete', ['task' => $task]) }}">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary btn-sm">
                    Mark as {{ $task->status ? 'Not Completed' : 'Completed' }}
                </button>
            </form>
            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-danger btn-sm">Delete</button>
            </form>
            {{-- <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <a class="btn btn-danger" href="{{route('task.destroy', $task->id)}}"><i class="fa fa-trash"></i></a>
            </form> --}}
        </td>
    </tr>
    @endforeach
</table>
@endsection
