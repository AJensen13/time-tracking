@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap">
        @foreach($projects as $project)

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-black border border-grey-darkest rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-white">{{ $project->name }}</h5>
                            <h3 class="text-3xl text-grey-dark">{{ $project->tasks()->count() }} Active Tasks</h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>

        @endforeach
    </div>
@endsection
