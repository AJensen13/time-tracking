@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap">
        @foreach($projects as $project)

            <project-tab
                name="{{ $project->name }}"
                count="{{ $project->tasks()->count() }}"
                redirect="{{ route('projects.show', ['project' => $project]) }}"
            ></project-tab>

        @endforeach
    </div>
@endsection
