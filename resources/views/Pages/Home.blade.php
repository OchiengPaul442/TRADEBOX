@extends('layouts.index')

@section('content')
    {{-- title --}}
    <div class="text-center">
        <h1 class="text-4xl py-4">Trade Categories</h1>
        <div class="flex justify-start w-full">
            <div class="w-80 h-1 bg-gray-500 right-0 my-10"></div>
        </div>
    </div>
    <div class="mx-auto">
        <div class="row">
            <div class="gallery_body" id="desktop_view">
                {{-- item 1 --}}
                <div class="gallery-container item-1 wd-3 ht-4 overflow-hidden">
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
                <div class="gallery-container overflow-hidden item-2 wd-3 ht-2">
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
                <div class="gallery-container overflow-hidden item-3  wd-3 ht-4">
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
                <div class="gallery-container overflow-hidden item-4 wd-3 ht-4">
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
                <div class="gallery-container overflow-hidden item-5 ht-2 wd-3">
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
                <div class="gallery-container overflow-hidden item-6 ht-3 wd-3">
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
                <div class="gallery-container ht-1 wd-3 relative">
                    <div class="">
                        {{-- share goods button with gray surrounding when centered --}}
                        <div style="margin:3px;" class="bg-white p-4  left-0 top-0">
                            <p class="text-3xl">Share Goods</p>
                        </div>
                        {{-- centered button --}}
                        <div class="flex justify-start text-2xl bg-slate-700 font-bold text-white p-4">
                            <a href="#">
                                <button
                                    class="hover:scale-105 duration-500 inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition  ease-in-out">Share
                                    Goods</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- design lines --}}
    <div class="flex justify-end w-full">
        <div class="w-80 h-1 bg-gray-500 right-0 my-10"></div>
    </div>
    {{-- Mobile view --}}
@endsection
