@extends('layouts.app')

@section('content')
    <div class="px-8 mb-8">
        <h2 class="text-4xl text-white mb-2">Projects</h2>
        <hr>
    </div>

    <div class="flex justify-center">
        <div id="addProject" class="w-full h-full bg-gray-400 bg-opacity-50 hidden fixed top-0 left-0">
            <div  class="w-1/2 bg-black border border-green-400 absolute top-1/4 left-1/4 rounded shadow px-2 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-white pl-4 text-2xl">Create Project</h3>
                    <close-modal
                        modal-id="addProject"
                    ></close-modal>
                </div>

                <hr class="border-b-1 border-grey-dark mt-2 mb-8 mx-4">

                <form id="createModel" class="w-2/3 flex mx-auto flex-col items-center">
                    @csrf

                    <input class="pl-4 py-2 mb-4 rounded-sm w-full" type="text" name="name" placeholder="Project Name" required>

                    <form-submit-button
                        form-id="createModel"
                        submit-url="{{ route('projects.store') }}"
                    ></form-submit-button>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap px-8">
        @foreach($projects as $project)

            <project-tab
                name="{{ $project->name }}"
                count="{{ $project->tasks()->count() }}"
                redirect="{{ route('projects.show', ['project' => $project]) }}"
            ></project-tab>

        @endforeach
    </div>
@endsection

@section('button-bar')
    <div class="flex-none w-1/12">
        <div class="flex justify-center mt-12">
            <add-model-button
                modal-id="addProject"
            ></add-model-button>
        </div>
    </div>
@endsection
