@extends('layouts.web')
@section('content')
    <h3>Tasks</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Task</th>
            <th scope="col" class="col-2">Created On</th>
            <th scope="col" class="col-2">Due Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td class="col-2">{{ $task->created_at }}</td>
            <td class="col-2">{{ $task->dueDate }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>@endsection
