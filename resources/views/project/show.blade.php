@extends('layouts.app')

@section('content')
    <div class="mb-5">
        <h2 class="text-6xl text-white pl-3">{{ ucfirst($project->name) }}<h2>
    </div>

    <hr>

    <h3 class="py-1 pl-3 text-white text-3xl">{{ count($project->tasks) }} Active Tasks</h3>

    <hr>

    <div class="flex flex-wrap mt-4">
        @foreach($project->tasks as $task)
            <task-tab
                name="{{ $task->name }}"
                time-worked="{{ $task->hoursWorked() }}"
                redirect="{{ route('tasks.show', ['task' => $task]) }}"
            ></task-tab>
        @endforeach
    </div>
@endsection
