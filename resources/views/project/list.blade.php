@extends('layouts.app')

@section('content')
    <div class="flex justify-end my-4 mx-4">
        <add-model-button
            modal-id="test"
        ></add-model-button>
    </div>

    <div class="flex justify-center">
        <div id="test" class="w-1/2 absolute top-1/4 bg-black border border-green-400 rounded shadow px-2 py-4">
            <h3 class="text-white pl-4 text-2xl">Create Project</h3>

            <hr class="border-b-1 border-grey-dark mt-2 mb-8 mx-4">

            <form id="createModel" class="w-full flex flex-col items-center">
                <input class="pl-4 py-2 mb-4 rounded-sm md:w-1/2" type="text" name="name" placeholder="Project Name" required>

                <form-submit-button
                    form-id="createModel"
                    submit="{{ route('projects.store') }}"
                ></form-submit-button>
            </form>
        </div>
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
