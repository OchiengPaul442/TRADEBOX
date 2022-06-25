<style>
    .container {
        display: inline-block;
        cursor: pointer;
    }

    .bar1,
    .bar2,
    .bar3 {
        width: 28px;
        height: 3px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
    }

    /* Rotate first bar */
    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    /* Fade out the second bar */
    .change .bar2 {
        opacity: 0;
    }

    /* Rotate last bar */
    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-6px, -8px);
    }
</style>
<header>
    <div class="flex justify-between w-full border-b-2 border-gray-300 p-3">
        <div>
            <p><span class="text-slate-400">Call Us </span>(234) 722333788</p>
        </div>
        <div class="flex space-x-2">
            <a href="#" data-tooltip-target="tooltip-bottom-1" data-tooltip-placement="bottom"><img style="width: 17px;"
                    src="{{ asset('img/svg/twitter-svgrepo-com.svg') }}" alt="twitter"></a>
            <div id="tooltip-bottom-1" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Twitter
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-2" data-tooltip-placement="bottom"><img style="width: 17px;" src="{{ asset('img/svg/instagram-svgrepo-com.svg') }}"
                    alt="instagram"></a>
            <div id="tooltip-bottom-2" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Instagram
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-3" data-tooltip-placement="bottom"><img style="width: 17px;" src="{{ asset('img/svg/linkedin-logo-svgrepo-com.svg') }}"
                    alt="linkedin"></a>
            <div id="tooltip-bottom-3" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Linkedin
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-4" data-tooltip-placement="bottom"><img style="width: 17px;" src="{{ asset('img/svg/youtube-svgrepo-com.svg') }}"
                    alt="youtube"></a>
            <div id="tooltip-bottom-4" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Youtube
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-bottom-5" data-tooltip-placement="bottom"><img style="width: 17px;" src="{{ asset('img/svg/facebook-svgrepo-com.svg') }}"
                    alt="facebook"></a>
            <div id="tooltip-bottom-5" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Facebook
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
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
            <div class="flex items-center md:order-2">
                <div class="flex space-x-4">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                </div>
                {{-- mobile view btn --}}
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden"
                    aria-controls="mobile-menu-2" aria-expanded="false" id="ham_menu_btn">
                    <div class="container ml-1 text-sm text-gray-500 rounded-lg md:hidden" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>

            </div>
            {{-- list items --}}
            <div class="hidden duration-500 fade-in justify-between items-center w-full md:flex md:w-auto md:order-1"
                id="mobile-menu-2">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium align-middle">
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="gallery_body">
    {{-- gallery sec --}}
    <div class="gallery-container wd-3 ht-2">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?nature" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
    <div class="gallery-container wd-3 ht-3">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?girls" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
    <div class="gallery-container  ht-2">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?house" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
    <div class="gallery-container wd-2">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?cars" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
    <div class="gallery-container ht-1 wd-4">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?people" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
    <div class="gallery-container ">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?nature" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
    <div class="gallery-container ht-2">
        <div class="gallery-item">
            <div class="image">
                <img src="https://source.unsplash.com/1600x900/?cars" alt="nature">
            </div>
            <div class="text">nature</div>
        </div>
    </div>
</div>


{{-- js --}}
<script>
    $(document).ready(function() {
        $("#ham_menu_btn").click(function() {
            $("#mobile-menu-2").show(300);
        });
    });
</script>
<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
