{{-- header with navbar --}}
<header>
    {{-- contact section --}}
    <div class="flex justify-between w-full m p-3">
        <div class="flex justify-between">
            <div class="bg-slate-300" style="margin:2px 5px;width:2px;height: 17px;"></div>
            <p class="text-slate-700"><span class="text-slate-400">Call Us </span>(234) 722333788</p>
            <div class="bg-slate-300" style="margin:2px 7px;width:2px;height: 17px;"></div>
        </div>
        <div class="flex space-x-2">
            <div class="bg-slate-300" style="margin:1px 5px;width:2px;height: 17px;"></div>
            <a href="#" data-tooltip-target="tooltip-bottom-1" data-tooltip-placement="bottom">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <div id="tooltip-bottom-1" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Twitter
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-2" data-tooltip-placement="bottom">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <div id="tooltip-bottom-2" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Instagram
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-3" data-tooltip-placement="bottom">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <div id="tooltip-bottom-3" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Linkedin
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-4" data-tooltip-placement="bottom">
                <ion-icon name="logo-youtube"></ion-icon>
            </a>
            <div id="tooltip-bottom-4" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Youtube
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-5" data-tooltip-placement="bottom">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <div id="tooltip-bottom-5" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Facebook
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>
    <hr>
    {{-- navigation bar --}}
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 relative" id="navbar">
        <div class="flex flex-wrap justify-between items-center mx-auto p-2">
            <div>
                <a class="toggleColour py-2 text-gray-700 no-underline hover:no-underline font-bold text-xl"
                    href="#">
                    <!-- Icon -->
                    <svg class="h-6 fill-current inline text-orange-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="300.767" height="50.502"
                            transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off"
                            d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                    </svg>
                    TRADEBOX
                </a>
            </div>
            {{-- svg icons --}}
            <div class="flex items-center md:order-2">
                <div class="flex space-x-4">
                    <a href="#" id="searchBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </a>
                    <a href="#" id="Acc_btn" data-bs-toggle="modal" type="button" data-bs-target="#exampleModalCenteredScrollable">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </a>
                </div>
                {{-- mobile view btn --}}
                <button class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden">
                    <div id="open_mobile_nav" class="container ml-1 text-sm text-gray-500 rounded-lg md:hidden"
                        onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>

            </div>
            {{-- list items --}}
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul
                    class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-2sm md:font-medium align-middle text-xl">
                    <li>
                        <a href="{{ route('Home') }}"
                            class="{{ Request::is('/') ? 'activeTab' : '' }} block leading-tight link-underline link-underline-black py-2 pr-4 pl-3  text-gray-700 md:hover:text-orange-500 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('About') }}"
                            class="{{ Request::is('About') ? 'activeTab' : '' }} block leading-tight link-underline link-underline-black py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-orange-500 md:p-0 ">About</a>
                    </li>
                    <li>
                        <a href="{{ route('Contact') }}"
                            class="{{ Request::is('Contact') ? 'activeTab' : '' }} block leading-tight link-underline link-underline-black py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-orange-500 md:p-0 ">Contact</a>
                    </li>
                </ul>
            </div>
            {{-- mobile view --}}
            <div class="z-30 hidden top-16 w-4/5 right-5 absolute bg-white items-center border-2 rounded-md text-xl" id="list_view"
                >
                <ul>
                    {{-- keep list item active when clicked --}}

                    <li><a href="{{ route('Home') }}"
                            class="{{ Request::is('/') ? 'activeTab' : '' }} block py-4 border-b pr-2 pl-2 text-gray-700 border-gray-100 hover:bg-gray-100">Home</a>
                    </li>
                    <li><a href="{{ route('About') }}"
                            class="{{ Request::is('About') ? 'activeTab' : '' }} block py-4 border-b pr-2 pl-2 text-gray-700 border-gray-100 hover:bg-gray-100">About</a>
                    </li>
                    <li><a href="{{ route('Contact') }}"
                            class="{{ Request::is('Contact') ? 'activeTab' : '' }} block py-4 border-b pr-2 pl-2 text-gray-700 border-gray-100 hover:bg-gray-100">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

{{-- overlay search section --}}
<div id="overlay">
    <div id="closingBtn" class="closing_btn text-white text-5xl" style="position: absolute; top:30px; right: 30px;">
        <ion-icon name="close-outline"></ion-icon>
    </div>
    <div id="form">
        <form action="" class="w-full p-20">
            <div class="relative flex z-0 w-full mb-6 group border-b-2 border-gray-300">
                <div class="w-full">
                    <input type="email" name="floating_email" style="width: 100%"
                        class="text-white block py-2.5 px-0 text-sm bg-transparent border-0  appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                        address</label>
                </div>
                <ion-icon name="search-outline" id="btn_search" class="hover:text-orange-500 duration-500">
                </ion-icon>
            </div>
        </form>
    </div>
</div>

{{-- js --}}
<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
