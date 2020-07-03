@extends('layouts.app')


@section('content')
    <div class="flex justify-around">
        <div class="w-5/12 p-3 rounded-sm bg-gray-400 ">
            <h2 class="w-full pb-3 text-2xl text-center">Login</h2>
    		<form class="w-4/5 m-auto flex flex-col" method="POST" action="{{ route('login') }}">
    			@csrf
                <input
                id="login-email"
                class="rounded-sm my-1"
                name="email"
                type="email"
                autocomplete="email"
                placeholder="email"
                autofocus
                required>

                <input
                id="password"
                class="rounded-sm my-1"
                name="password"
                type="password"
                autocomplete="current-password"
                placeholder="password"
                required>

    			<input class="rounded-sm my-1" type="checkbox">
    		</form>
        </div>

        <div class="w-5/12 p-3 rounded-sm bg-gray-400">
            <h2 class="w-full pb-3 text-2xl text-center">Register</h2>
            <form class="w-4/5 m-auto flex flex-col" method="POST" action="{{ route('register') }}">
    			@csrf
    			<input class="rounded-sm my-1" type="text">
    			<input class="rounded-sm my-1" type="text">
    			<input class="rounded-sm my-1" type="text">
    			<input class="rounded-sm my-1" type="text">
    		</form>
        </div>
    </div>
@endsection
