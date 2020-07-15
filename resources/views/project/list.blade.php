@extends('layouts.app')

@section('content')
    <div class="flex justify-end my-4 mx-4">
        <add-model-button
            modal-id="test"
        ></add-model-button>
    </div>

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
