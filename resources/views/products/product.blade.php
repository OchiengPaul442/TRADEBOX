@extends('index')

@section('content')
    <div class="container mx-auto">
        <div class="space-x-4 space-y-6 lg:flex">
            {{-- side category section --}}
            @include('components.sidebars.product_category_sec.sidebarcategory')
            {{-- section main con --}}
            <div class="space-y-6">
                {{-- filter sections --}}
                {{-- sort section --}}
                <form action="#" class="space-y-6">
                    <div class="flex justify-between border-b-2 border-gray-100">
                        <div class="flex space-x-2 items-center">
                            <svg clip-rule="evenodd" id="reveal_category_box" fill-rule="evenodd"
                                class="cursor-pointer w-10 p-2 bg-gray-100 rounded-md border border-gray-200"
                                stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m2 17.75c0-.414.336-.75.75-.75h18.5c.414 0 .75.336.75.75s-.336.75-.75.75h-18.5c-.414 0-.75-.336-.75-.75zm5.526-8.828s.501.505 2.254 2.259c.147.147.22.339.22.53 0 .192-.073.384-.22.531-1.752 1.753-2.254 2.258-2.254 2.258-.145.145-.335.217-.526.217-.192-.001-.384-.074-.53-.221-.293-.293-.295-.766-.004-1.057l.977-.978h-4.693c-.414 0-.75-.336-.75-.75 0-.413.336-.75.75-.75h4.693l-.978-.978c-.289-.289-.287-.762.006-1.055.147-.146.339-.22.53-.221s.38.071.525.215zm3.474 4.828c0-.414.336-.75.75-.75h9.5c.414 0 .75.336.75.75s-.336.75-.75.75h-9.5c-.414 0-.75-.336-.75-.75zm0-4c0-.414.336-.75.75-.75h9.5c.414 0 .75.336.75.75s-.336.75-.75.75h-9.5c-.414 0-.75-.336-.75-.75zm-9-4c0-.414.336-.75.75-.75h18.5c.414 0 .75.336.75.75s-.336.75-.75.75h-18.5c-.414 0-.75-.336-.75-.75z" />
                            </svg>
                            <div>70 items found</div>
                        </div>
                        <div class="flex space-x-2 items-baseline">
                            <label for="sort">Sort By:</label>
                            <div>
                                <select id="sort"
                                    class="border-none text-orange-500 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full">
                                    <option selected="">Popular</option>
                                    <option value="US">Trending</option>
                                    <option value="CA">Most Liked</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="lg:grid lg:grid-cols-4 lg:gap-10 items-baseline relative space-y-2">
                        {{-- filter 1 --}}
                        <div class="w-full">
                            <select id="brand"
                                class="bg-gray-50 border border-gray-300 text-orange-500 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block p-2 w-full">
                                <option selected="">Brand</option>
                                <option value="">United States</option>
                                <option value="">Canada</option>
                                <option value="">France</option>
                                <option value="">Germany</option>
                            </select>
                        </div>
                        {{-- filter 2 --}}
                        <div class="w-full">
                            <select id="color"
                                class="bg-gray-50 border border-gray-300 text-orange-500 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block p-2 w-full">
                                <option selected="">Color</option>
                                <option value="">United States</option>
                                <option value="">Canada</option>
                                <option value="">France</option>
                                <option value="">Germany</option>
                            </select>
                        </div>
                        {{-- filter 3 --}}
                        <div class="w-full">
                            <select id="size"
                                class="bg-gray-50 border border-gray-300 text-orange-500 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block p-2 w-full">
                                <option selected="">Size</option>
                                <option value="">United States</option>
                                <option value="">Canada</option>
                                <option value="">France</option>
                                <option value="">Germany</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <button type="button"
                                class="duration-500 py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-orange-700 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 w-full">Filter
                                Products</button>
                        </div>
                    </div>
                </form>
                {{-- product section --}}
                <div class="grid justify-items-center xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 w-full">
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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

                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
                    <div class="rounded-lg shadow-md bg-white max-w-xs w-full hover:-translate-y-5 duration-500">
                        <a href="{{ route('Details_on_product') }}">
                            <div>
                                <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?computers"
                                    alt="computer" />
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
            {{-- end of product card --}}
        </div>
    </div>
    <div style="width: 100%;height:200px;"></div>
@endsection
