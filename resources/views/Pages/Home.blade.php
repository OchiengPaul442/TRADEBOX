@extends('layouts.index')

@section('content')
    {{-- title --}}
    <div class="text-center">
        <h1 class="text-4xl py-4">Trade Categories</h1>
        <div class="grid lg:grid-cols-2 w-full">
            <div class="w-80 h-1 bg-gray-500 right-0 my-10"></div>
            <div class="justify-end flex relative">
                <a href="{{ route('Add_product') }}" id="addProduct">
                    <button type="button" class="text-white bg-orange-500 hover:bg-orange-600 hover:scale-105 duration-500 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Add Product</button>
                </a>
            </div>
        </div>
    </div>
    <div class="mx-auto">
        <div class="row">
            {{-- desktop view --}}
            <div class="gallery_body" id="large_view">
                {{-- item 1 --}}
                <div class="gallery-container reveal2 rev_1 item-1 wd-3 ht-4 overflow-hidden">
                    <div class="gallery-item">
                        {{-- image --}}
                        <div class="image">
                            <img src="{{ asset('img/chair.jpg') }}" alt="nature">
                        </div>
                        {{-- title --}}
                        <div style="margin:3px;" class="bg-white p-4 absolute left-0 top-0">
                            <p class="text-3xl">Furniture</p>
                        </div>
                        {{-- description --}}
                        <div class="dec flex justify-center flex-col text-2xl bg-slate-700 font-bold text-white p-2">
                            <P class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis in
                                commodi
                                quis maxime modi voluptatem atque ex obcaecati dicta sint.</P>
                            <a href="#">
                                <button
                                    class="mt-2 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trade
                                    Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- item 2 --}}
                <div class="gallery-container reveal2 rev_2 overflow-hidden item-2 wd-3 ht-2">
                    <label></label>
                    <div class="gallery-item">
                        {{-- image --}}
                        <div class="image">
                            <img src="{{ asset('img/cooker.png') }}" alt="nature">
                        </div>
                        {{-- title --}}
                        <div style="margin:3px;" class="bg-white p-4 absolute left-0 top-0">
                            <p class="text-3xl">Kitchen</p>
                        </div>
                        {{-- description --}}
                        <div class="dec flex justify-center flex-col text-2xl bg-slate-700 font-bold text-white p-2">
                            <P class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis in
                                commodi
                                quis maxime modi voluptatem atque ex obcaecati dicta sint.</P>
                            <a href="#">
                                <button
                                    class="mt-2 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trade
                                    Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- item 3 --}}
                <div class="gallery-container reveal2 rev_3 overflow-hidden item-3  wd-3 ht-4">
                    <div class="gallery-item">
                        {{-- image --}}
                        <div class="image">
                            <img src="{{ asset('img/computers.png') }}" alt="nature">
                        </div>
                        {{-- title --}}
                        <div style="margin:3px;" class="bg-white p-4 absolute left-0 top-0">
                            <p class="text-3xl">Computer</p>
                        </div>
                        {{-- description --}}
                        <div class="dec flex justify-center flex-col text-2xl bg-slate-700 font-bold text-white p-2">
                            <P class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis in
                                commodi
                                quis maxime modi voluptatem atque ex obcaecati dicta sint.</P>
                            <a href="{{route('Products')}}">
                                <button
                                    class="mt-2 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trade
                                    Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- item 4 --}}
                <div class="gallery-container reveal overflow-hidden item-4 wd-3 ht-4">
                    <div class="gallery-item">
                        {{-- image --}}
                        <div class="image">
                            <img src="{{ asset('img/shoe.png') }}" alt="nature">
                        </div>
                        {{-- title --}}
                        <div style="margin:3px;" class="bg-white p-4 absolute left-0 top-0">
                            <p class="text-3xl">Foot Wear</p>
                        </div>
                        {{-- description --}}
                        <div class="dec flex justify-center flex-col text-2xl bg-slate-700 font-bold text-white p-2">
                            <P class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis in
                                commodi
                                quis maxime modi voluptatem atque ex obcaecati dicta sint.</P>
                            <a href="#">
                                <button
                                    class="mt-2 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trade
                                    Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- item 5 --}}
                <div class="gallery-container reveal overflow-hidden item-5 ht-2 wd-3">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="{{ asset('img/tv.png') }}" alt="nature">
                        </div>
                        {{-- title --}}
                        <div style="margin:3px;" class="bg-white p-4 absolute left-0 top-0">
                            <p class="text-3xl">Television</p>
                        </div>
                        {{-- description --}}
                        <div class="dec flex justify-center flex-col text-2xl bg-slate-700 font-bold text-white p-2">
                            <P class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis in
                                commodi
                                quis maxime modi voluptatem atque ex obcaecati dicta sint.</P>
                            <a href="#">
                                <button
                                    class="mt-2 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trade
                                    Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- item 6 --}}
                <div class="gallery-container reveal overflow-hidden item-6 ht-3 wd-3">
                    <div class="gallery-item">
                        <div class="image">
                            <img src="{{ asset('img/salon.png') }}" alt="nature">
                        </div>
                        {{-- title --}}
                        <div style="margin:3px;" class="bg-white p-4 absolute left-0 top-0">
                            <p class="text-3xl">Salon Equipment</p>
                        </div>
                        {{-- description --}}
                        <div class="dec flex justify-center flex-col text-2xl bg-slate-700 font-bold text-white p-2">
                            <P class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis in
                                commodi
                                quis maxime modi voluptatem atque ex obcaecati dicta sint.</P>
                            <a href="#">
                                <button
                                    class="mt-2 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trade
                                    Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- item 7 --}}
                <div class="gallery-container reveal ht-1 wd-3 relative">
                    <div class="">
                        {{-- share goods button with gray surrounding when centered --}}
                        <div style="margin:3px;" class="bg-white p-4  left-0 top-0">
                            <p class="text-3xl">Share Goods</p>
                        </div>
                        {{-- centered button --}}
                        <div class="flex justify-start text-2xl bg-slate-700 font-bold text-white p-4">
                            <a href="#">
                                <button
                                    class="hover:scale-105 duration-500 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition  ease-in-out">Add
                                    Product</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Mobile view --}}
            <div class="place-content-center space-y-8" id="small_view">
                <div class="flex justify-center reveal2 rev_1">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('img/chair.jpg') }}" alt="chair"/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-2xl mb-2">Furniture</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">Trade Now</button>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-center reveal">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg item-2" src="{{ asset('img/cooker.png') }}" alt="cooker"/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-2xl mb-2">Kitchen</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">Trade Now</button>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-center reveal">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg item-3" src="{{ asset('img/computers.png') }}" alt="computer"/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-2xl mb-2">Computer</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">Trade Now</button>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-center reveal">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg item-4" src="{{ asset('img/shoe.png') }}" alt="computer"/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-2xl mb-2">Shoe</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">Trade Now</button>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-center reveal">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg item-5" src="{{ asset('img/tv.png') }}" alt="computer"/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-2xl mb-2">Television</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">Trade Now</button>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-center reveal">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                      <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg item-6" src="{{ asset('img/salon.png') }}" alt="computer"/>
                      </a>
                      <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-2xl mb-2">Salon Equipment</h5>
                        <p class="text-gray-700 text-base mb-4">
                          Some quick example text to build on the card title and make up the bulk of the card's
                          content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">Trade Now</button>
                      </div>
                    </div>
                  </div>
                  {{-- bottom --}}
                  <div style="height: 200px; width: 100%;"></div>
            </div>
        </div>
    </div>
    {{-- design lines --}}
    <div class="flex justify-end w-full">
        <div class="w-80 h-1 bg-gray-500 right-0 my-10"></div>
    </div>
@endsection
