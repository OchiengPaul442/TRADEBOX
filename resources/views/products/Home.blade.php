@extends('layouts.index')

@section('content')
    <div class="gallery_body">
        {{-- gallery sec --}}
        <div class="gallery-container item-1 wd-3 ht-4">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{asset('img/chair.jpg')}}" alt="nature">
                </div>
                <div class="text">
                    <div class="text-5xl font-bold text-white">Furniture</div>
                    <a href="#" class="z-30 text-3xl text-white"><ion-icon name="arrow-forward-outline" class=" mt-3 arrow_icon"></ion-icon>Trade Now</a>
                </div>
            </div>
        </div>
        <div class="gallery-container item-2 wd-3 ht-2">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{asset('img/cooker.png')}}" alt="nature">
                </div>
                <div class="text">
                    <div class="text-5xl font-bold text-white">Kitchen</div>
                    <a href="#" class="z-30 text-3xl text-white"><ion-icon name="arrow-forward-outline" class=" mt-3 arrow_icon"></ion-icon>Trade Now</a>
                </div>
            </div>
        </div>
        <div class="gallery-container item-3  wd-3 ht-4">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{asset('img/computers.png')}}" alt="nature">
                </div>
                <div class="text">
                    <div class="text-5xl font-bold text-white">Computers</div>
                    <a href="#" class="z-30 text-3xl text-white"><ion-icon name="arrow-forward-outline" class=" mt-3 arrow_icon"></ion-icon>Trade Now</a>
                </div>
            </div>
        </div>
        <div class="gallery-container item-4 wd-3 ht-4">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{asset('img/shoe.png')}}" alt="nature">
                </div>
                <div class="text">
                    <div class="text-5xl flex font-bold text-white">Foot Wear</div>
                    <a href="#" class="z-30 text-3xl text-white"><ion-icon name="arrow-forward-outline" class=" mt-3 arrow_icon"></ion-icon>Trade Now</a>
                </div>
            </div>
        </div>
        <div class="gallery-container item-5 ht-2 wd-3">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{asset('img/tv.png')}}" alt="nature">
                </div>
                <div class="text">
                    <div class="text-5xl font-bold text-white">Televisions</div>
                    <a href="#" class="z-30 text-3xl text-white"><ion-icon name="arrow-forward-outline" class=" mt-3 arrow_icon"></ion-icon>Trade Now</a>
                </div>
            </div>
        </div>
        <div class="gallery-container item-6 ht-3 wd-3">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{asset('img/salon.png')}}" alt="nature">
                </div>
                <div class="text">
                    <div class="text-5xl font-bold text-white">Salon Equipment</div>
                    <a href="#" class="z-30 text-3xl text-white"><ion-icon name="arrow-forward-outline" class=" mt-3 arrow_icon"></ion-icon>Trade Now</a>
                </div>
            </div>
        </div>

        {{-- <div class="gallery-container ht-2">
            <div class="gallery-item">
                <div class="image">
                    <img src="https://source.unsplash.com/1600x900/?cars" alt="nature">
                </div>
                <div class="text">nature</div>
            </div>
        </div> --}}
    </div>
@endsection
