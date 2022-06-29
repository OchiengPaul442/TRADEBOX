@extends('index')

@section('content')
    <div class="space-y-10 mb-40">
        <div class="text-center">
            <h1 class="text-3xl font-bold">TRADEBOX UGANDA</h1>
        </div>
        <div class="text-center space-y-3">
            <div class="w-full flex flex-col space-y-2 text-slate-500">
                <h1 class="text-slate-700">Address</h1>
                <p>
                    <ion-icon name="location-outline"></ion-icon> 4b Oyeleke str off Kudirat Abiola way Oregun Lagos
                </p>
            </div>

            <div class="w-full flex flex-col text-slate-500 space-y-2">
                <h1 class="text-slate-700">Contact</h1>
                <p>
                    <ion-icon name="call-outline"></ion-icon> Mobile: (234) 722333788
                    <br>
                    <ion-icon name="mail-outline"></ion-icon> Email:paul@gmail.com
                </p>
            </div>
        </div>
        <section class="h-full gradient-form bg-gray-200 ">
            <div class="container py-12 px-6 h-full mx-auto">
                <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                    <div class="lg:w-3/5 px-4 md:px-0">
                        <div class="md:p-12 md:mx-6">
                            <div class="text-center p-5 mb-5">
                                <a class="toggleColour py-2 text-gray-700 no-underline hover:no-underline font-bold text-xl" href="#">
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
                            <form>
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="text" name="floating_first_name" id="floating_first_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required="">
                                        <label for="floating_first_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name*</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="email" name="floating_last_name" id="floating_last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required="">
                                        <label for="floating_last_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email*</label>
                                    </div>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="floating_sub"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required="">
                                    <label for="floating_sub"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subject</label>
                                </div>
                                <div class="relative z-0 mb-6 group">
                                    <textarea type="text" id="floating_standard"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "> </textarea>
                                    <label for="floating_standard"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                        message</label>
                                </div>
                                <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div style="height: 100px; width:100%;"></div>
@endsection
