@extends('layouts.app')


@section('content')
    <div class="flex justify-around">
        <div class="w-5/12 p-3 rounded-sm bg-gray-400 ">
            <h2 class="w-full pb-3 text-2xl text-center">Login</h2>
    		<form class="w-4/5 m-auto flex flex-col" method="POST" action="{{ route('login') }}">
    			@csrf
                <input id="login-email" class="rounded-sm px-4 my-1 h-10" name="email"
                type="email" autocomplete="email" placeholder="Email" autofocus required>

                <input id="login-password" class="rounded-sm px-4 my-1 h-10" name="password" type="password" autocomplete="current-password" placeholder="Password" required>

                <div class="my-1">
                    <input class="rounded-sm mr-3" type="checkbox">
                    <span>Remember Me</span>
                </div>

                <button class="rounded-md h-10 mt-4 text-white bg-blue-600" type="submit">Login</button>
    		</form>
        </div>

        <div class="w-5/12 p-3 rounded-sm bg-gray-400">
            <h2 class="w-full pb-3 text-2xl text-center">Register</h2>
            <form class="w-4/5 m-auto flex flex-col" method="POST" action="{{ route('register') }}">
    			@csrf
                <input id="register-name" class="rounded-sm px-4 my-1 h-10" type="text" placeholder="Name" name="name" autocomplete="name" autofocus required>

                <input id="register-email" class="rounded-sm px-4 my-1 h-10" type="email" name="email" placeholder="Email" autocomplete="email" required>

                <input id="register-password" class="rounded-sm px-4 my-1 h-10" type="password" name="password" placeholder="Password" autocomplete="new-password" required>

                <input id="register-password-confirm" class="rounded-sm px-4 my-1 h-10" type="password" name="password_confirmation" placeholder="Confirm Password" required>

                <button class="rounded-md h-10 mt-3 text-white bg-blue-600" type="submit">Register</button>
    		</form>
        </div>
    </div>
@endsection
