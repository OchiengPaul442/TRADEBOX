@extends('index')

@section('content')
    {{-- breadcrumbs --}}

    <!-- Breadcrumb -->
    <nav class="flex py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{route('Home')}}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{route('Products')}}"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Computers</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-orange-500 md:ml-2">Product Name</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- component -->
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="https://www.whitmorerarebooks.com/pictures/medium/2465.jpg">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>
                    <div class="flex mb-4">
                        <span class="flex items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/600x900/?profiles"
                                    alt="">
                                <div class="space-y-1 font-medium dark:text-white">
                                    <div>Jese Leos</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2014</div>
                                </div>
                            </div>
                        </span>
                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                            <a class="text-gray-500">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </span>
                    </div>
                    <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha
                        taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                        Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra
                        jean shorts keytar banjo tattooed umami cardigan.</p>
                    <div class="flex flex-col space-y-3 mt-6 pb-5 border-b-2 border-gray-200 mb-5">
                        <div class="w-full flex flex-col justify-start">
                            <h1 class="text-xl font-bold">Owners Details</h1>
                            <p>
                                Name: <span class="text-gray-700">Jese Leos</span>
                            </p>
                            <p>
                                Location: <span class="text-gray-700">Cebu</span>
                            </p>
                            <p>
                                Country: <span class="text-gray-700">Philippines</span>
                            </p>
                        </div>
                        <div class="w-full flex justify-end">
                            <button
                                class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <button
                            class="w-full text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded">Contact
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mx-auto space-y-10">
        <div class="w-full text-center px-20">
            <h1 class="text-orange-500 text-2xl font-bold">Description</h1>
            <div class="flex justify-center">
                <div class="h-2 w-8 bg-black rounded-md my-8"></div>
            </div>
            <p class="text-xl">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint neque provident aut ullam soluta amet,
                aspernatur culpa voluptas voluptate dignissimos quis. Culpa quasi minima consequuntur impedit aspernatur
                cumque tempore doloremque?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint neque provident aut ullam soluta amet,
                aspernatur culpa voluptas voluptate dignissimos quis. Culpa quasi minima consequuntur impedit aspernatur
                cumque tempore doloremque?
            </p>
        </div>
        <div class="text-center">
            <h1 class="text-orange-500 text-2xl font-bold">Related Products</h1>
        </div>
        <div class="flex justify-center">
            <div class="h-2 w-8 bg-black rounded-md"></div>
        </div>
        {{-- product cards --}}
        <div class="row place-content-center grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-8">
            <div class="rounded-lg shadow-lg bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                <a href="#">
                    <div>
                        <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers" alt="computer" />
                    </div>
                    <div class="p-4">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/1600x900/?profiles"
                                alt="profile" />
                            <div class="space-y-1 font-medium dark:text-white">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Posted 0n: August 2014</div>
                            </div>
                        </div>
                        <h5 class="text-orange-500 text-xl font-medium mb-2">Dell computer ps5510</h5>
                        <p class="text-gray-700 text-base mb-2">
                            <ion-icon name="location-outline"></ion-icon> Location:Kampala-bombo road
                        </p>
                    </div>
                </a>
            </div>
            <div class="rounded-lg shadow-lg bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                <a href="#">
                    <div>
                        <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers" alt="computer" />
                    </div>
                    <div class="p-4">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/1600x900/?profiles"
                                alt="profile" />
                            <div class="space-y-1 font-medium dark:text-white">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Posted 0n: August 2014</div>
                            </div>
                        </div>
                        <h5 class="text-orange-500 text-xl font-medium mb-2">Dell computer ps5510</h5>
                        <p class="text-gray-700 text-base mb-2">
                            <ion-icon name="location-outline"></ion-icon> Location:Kampala-bombo road
                        </p>
                    </div>
                </a>
            </div>
            <div class="rounded-lg shadow-lg bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                <a href="#">
                    <div>
                        <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers" alt="computer" />
                    </div>
                    <div class="p-4">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/1600x900/?profiles"
                                alt="profile" />
                            <div class="space-y-1 font-medium dark:text-white">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Posted 0n: August 2014</div>
                            </div>
                        </div>
                        <h5 class="text-orange-500 text-xl font-medium mb-2">Dell computer ps5510</h5>
                        <p class="text-gray-700 text-base mb-2">
                            <ion-icon name="location-outline"></ion-icon> Location:Kampala-bombo road
                        </p>
                    </div>
                </a>
            </div>
            <div class="rounded-lg shadow-lg bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                <a href="#">
                    <div>
                        <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers" alt="computer" />
                    </div>
                    <div class="p-4">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/1600x900/?profiles"
                                alt="profile" />
                            <div class="space-y-1 font-medium dark:text-white">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Posted 0n: August 2014</div>
                            </div>
                        </div>
                        <h5 class="text-orange-500 text-xl font-medium mb-2">Dell computer ps5510</h5>
                        <p class="text-gray-700 text-base mb-2">
                            <ion-icon name="location-outline"></ion-icon> Location:Kampala-bombo road
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
