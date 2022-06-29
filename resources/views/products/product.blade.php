@extends('index')

@section('content')
    <div class="flex justify-center">
        <h1 class="text-4xl font-bold p-10">Computers</h1>
    </div>
    <div class="container mx-auto">
        <div class="row place-content-center grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-8">
            {{-- product card --}}
            <div class="rounded-lg shadow-lg bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                <a href="{{route('Details_on_product')}}">
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
            </div> <div class="rounded-lg shadow-lg bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
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

            {{-- end of product card --}}
        </div>
    </div>
    <div style="width: 100%;height:200px;"></div>
@endsection
