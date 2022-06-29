@extends('index')

@section('content')
{{-- title --}}
<div class="container mx-auto mb-4">
    <h1 class="text-4xl font-bold text-orange-700 p-2">Add Product</h1>
</div>
<!-- Breadcrumb -->
<nav class="flex mb-6 py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700"
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

    <li aria-current="page">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-orange-500 md:ml-2">Add product</span>
        </div>
    </li>
</ol>
</nav>
{{-- add form --}}
<div class="mb-12 mx-auto container">
    <form class="grid lg:grid-cols-5 gap-10 p-5">
    <div class="w-full lg:col-span-2 space-y-6">

    <div class="">
        <label for="productname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Name</label>
        <input type="text" id="productname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
    </div>
    <div class="grid gap-6  lg:grid-cols-3">
        <div class="w-full lg:col-span-2">
            <label for="Category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
            <input type="text" id="Category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
        </div>
        <div class="lg:col-span-1">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected="">Choose a Gender</option>
              <option value="US">Male</option>
              <option value="CA">Female</option>
              <option value="CA">For all</option>
              <option value="FR">Others</option>
            </select>
        </div>

    </div>
    <div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Product Duration</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected="">Choose a Duration</option>
          <option value="US">New</option>
          <option value="CA">Old</option>
          <option value="CA">Used</option>
          <option value="FR">Others</option>
        </select>
    </div>
    <div class="">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Brand</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected="">Choose a Brand</option>
          <option value="US">Dell</option>
          <option value="CA">Apple</option>
          <option value="FR">Samsung</option>
          <option value="DE">Nokia</option>
        </select>
    </div>
    <div class="">
        <label for="Location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pickup Location</label>
        <input type="text" id="Location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
    </div>
    <div>
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your description..."></textarea>
    </div>

</div>
    {{-- drag and drops --}}
    <div class="w-full lg:col-span-3 space-y-6 relative">
        <div class="grid xl:grid-cols-2 gap-4">
            {{-- scetion 1 --}}
            <div class="items-center w-full">
                    <div class="flex justify-center col-span-1 items-center w-full">
                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                <svg class="mb-3 w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-semibold text-orange-500">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, or JPG (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden">
                        </label>
                    </div>
                    <div class="w-full h-auto">
                        <p class="p-4">
                            You need to add at least 4 images. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in a certain dimension.
                        </p>
                    </div>
            </div>
            {{-- section 2 --}}
            <div class="w-full">
                <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-3 w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-semibold text-orange-500">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, or JPG (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden">
                    </label>
                </div>
                <div class="flex justify-center items-center w-full mt-4">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-3 w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-semibold text-orange-500">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, or JPG (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden">
                    </label>
                </div>
            </div>
        </div>
        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Color</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected="">Choose a Brand</option>
              <option value="US">Orange</option>
              <option value="CA">Green</option>
              <option value="FR">Black</option>
              <option value="DE">Yellow</option>
              <option value="DE">red</option>
              <option value="DE">Blue</option>
              <option value="DE">Pink</option>
            </select>
        </div>
        <div class="lg:grid-cols-3">
            <button type="button" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 duration-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Add Product</button>
            <button type="button" class="text-orange bg-white border-2 border-orange-500 hover:text-white duration-500 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Save Product</button>

        </div>
    </div>
</form>
</div>
<div style="height: 100px;width:100%;"></div>
@endsection
