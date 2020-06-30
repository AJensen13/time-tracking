<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-black-alt font-sans leading-normal tracking-normal">
        <nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow">


            <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

                <div class="w-full pl-2 md:pl-0">
                    <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold"  href="#">
                        {{ env('APP_NAME') }}
                    </a>
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
        </nav>

        <div class="container w-full mx-auto pt-20">
            <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
                @yield('content')
            </div>
        </div>

        <footer class="bg-gray-900 border-t border-gray-400 shadow">
            <div class="container max-w-md mx-auto flex py-8">

                <div class="w-full mx-auto flex flex-wrap">
                    <div class="flex w-full md:w-1/2 ">
                        <div class="px-8">
                            <h3 class="font-bold font-bold text-gray-100">About</h3>
                            <p class="py-4 text-gray-600 text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                            </p>
                        </div>
                    </div>

                    <div class="flex w-full md:w-1/2">
                        <div class="px-8">
                        <h3 class="font-bold font-bold text-gray-100">Social</h3>
                            <ul class="list-reset items-center text-sm pt-3">
                              <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Add social link</a>
                              </li>
                              <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Add social link</a>
                              </li>
                                <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Add social link</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </footer>
    </body>
</html>
