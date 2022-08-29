<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth

            <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline" href="@if (auth()->user()->role == 1) {{route('admin.dashboard')}} @elseif(auth()->user()->role == 2) {{route('dashboard')}} @elseif(auth()->user()->role == 3) {{route('vendor.dashboard')}}@endif " class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
        </div>
    </div> --}}

    <div class="relative bg-white">
        <div class="max-w-8xl mx-auto px-4 sm:px-6">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10"
                            src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <form action="" class="relative mx-4 w-max">
                        <input type="search"
                            class="peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-lime-300 focus:pl-16 focus:pr-4" />
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 hover:border-lime-300 hover:stroke-lime-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </form>
                    <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Sign in </a>
                    <a href="#"
                        class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                        Sign up </a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto">
            <div class="relative w-full">
                <img src="https://www.kindacode.com/wp-content/uploads/2022/06/night-sky.jpeg" width="auto" />
                <div
                    class="absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-between w-[60%]">
                    <div class="flex items-center">
                        IKMAL HENSEM
                    </div>
                    <div class="flex justify-center items-center w-[400px]">
                        <div class="w-full bg-white rounded p-6 space-y-4">
                            <div class="mb-4">
                                <p class="text-gray-600">Sign In</p>
                                <h2 class="text-xl font-bold">Join our community</h2>
                            </div>
                            <div>
                                <input
                                    class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                                    type="text" placeholder="Email">
                            </div>
                            <div>
                                <input
                                    class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                                    type="text" placeholder="Password">
                            </div>
                            <div>
                                <button
                                    class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded text-sm font-bold text-gray-50 transition duration-200">Sign
                                    In</button>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-row items-center">
                                    <input type="checkbox"
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                    <label for="comments" class="ml-2 text-sm font-normal text-gray-600">Remember
                                        me</label>
                                </div>
                                <div>
                                    <a class="text-sm text-blue-600 hover:underline" href="#">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <div class="carousel-item active relative float-left w-full">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="block w-full rounded-[15px]"
                                alt="..." />
                            <div class="carousel-caption hidden md:block absolute text-center">
                                <h5 class="text-xl">First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="block w-full rounded-[15px]"
                                alt="..." />
                            <div class="carousel-caption hidden md:block absolute text-center">
                                <h5 class="text-xl">Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg" class="block w-full rounded-[15px]"
                                alt="..." />
                            <div class="carousel-caption hidden md:block absolute text-center">
                                <h5 class="text-xl">Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                        type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                        type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="relative bg-gray-200 pt-8 pb-6 mt-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-gray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-gray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-500 text-sm font-semibold mb-2">Useful
                                Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-500 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp;
                                        Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2021</span><a
                            href="https://www.creative-tim.com/product/notus-js"
                            class="text-gray-500 hover:text-gray-800" target="_blank"> Notus JS by
                            <a href="https://www.creative-tim.com?ref=njs-profile"
                                class="text-gray-500 hover:text-gray-800">Creative Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
