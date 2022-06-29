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
