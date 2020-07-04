<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-black-alt font-sans leading-normal tracking-normal flex flex-col min-h-screen">
        <nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow">

            @if(Auth::check())
                <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

                    <div class="w-1/2 pl-2 md:pl-0">
                        <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold"  href="#">
                            {{ env('APP_NAME') }}
                        </a>
                    </div>

                    <div class="w-1/2 pr-0">
                        <div class="flex relative inline-block float-right">

                        <div class="relative text-sm text-gray-100">
                            <button id="userButton" class="flex items-center focus:outline-none mr-3">
                                <span class="hidden md:inline-block text-gray-100">Hi, {{ auth()->user()->name }}</span>
                                <svg class="pl-2 h-2 fill-current text-gray-100" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129"><g><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/></g></svg>
                            </button>
                            <div id="userMenu" class="bg-gray-900 rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                                <ul class="list-reset">
                                    <li><a href="#" class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">My account</a></li>
                                    <li><a href="#" class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Notifications</a></li>
                                    <li><hr class="border-t mx-2 border-gray-400"></li>
                                    <li>
                                        <a href="{{ route('logout') }}" class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" class="hidden" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>


                            <div class="block lg:hidden pr-4">
                            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
                                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                            </button>
                        </div>
                        </div>

                    </div>


                    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-900 z-20" id="nav-content">
                        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                            <li class="mr-6 my-2 md:my-0">
                                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-blue-400 no-underline hover:text-gray-100 border-b-2 border-blue-400 hover:border-blue-400">
                                    <i class="fas fa-home fa-fw mr-3 text-blue-400"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                                </a>
                            </li>
                            <li class="mr-6 my-2 md:my-0">
                                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                                    <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Tasks</span>
                                </a>
                            </li>
                            <li class="mr-6 my-2 md:my-0">
                                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-purple-400">
                                    <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Messages</span>
                                </a>
                            </li>
                            <li class="mr-6 my-2 md:my-0">
                                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-green-400">
                                    <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Analytics</span>
                                </a>
                            </li>
                            <li class="mr-6 my-2 md:my-0">
                                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-red-400">
                                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Payments</span>
                                </a>
                            </li>
                        </ul>

                        <div class="relative pull-right pl-4 pr-4 md:pr-0">

                        </div>

                    </div>

                </div>
            @else
                <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3">

                    <div class="w-full pl-2 md:pl-0">
                        <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold"  href="#">
                            {{ env('APP_NAME') }}
                        </a>
                    </div>

                </div>
            @endif

        </nav>

        <div class="container w-full mx-auto pt-20 flex-grow">
            <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
                @yield('content')
            </div>
        </div>

        <footer class="bg-gray-900 border-t border-gray-400 shadow">
            <div class="container max-w-md mx-auto flex py-8">

            </div>
        </footer>
    </body>
</html>
