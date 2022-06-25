@extends('layouts.index')

@section('content')
    <div class="px-28 space-y-20 text-md">
        {{-- banner --}}
        <div class="banner-container flex justify-between p-5  h-80 w-full items-center mt-4">
            <div class="banner-content w-full ">
                <h4 class="text-xl">About Us</h4>
                <h1 class="text-3xl font-bold">Hello world we are TradeBox</h1>
                <p class="text-2xl text-slate-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
            </div>
            <div class="w-full">
                <img src="{{ asset('img/about1.jpg') }}" class="rounded-3xl" style="width: 69%;box-shadow: 0 3px 3px rgb(0 0 0 / 50%);
            }" alt="about_img">
            </div>
        </div>
        <div class="flex justify-between items-center" >
            <div class="w-full">
                <img src="{{ asset('img/about3.png') }}"  alt="story">
            </div>
            <div class="w-full">
                <h1 class="text-md">TradeBox Story</h1>
                <label class="text-xl font-bold">The first Shopify store was our own</label>
                <p class="text-md text-slate-500">
                    Over a decade ago, we started a store to sell snowboards online. None of the ecommerce solutions at the
                    time
                    gave us the control we needed to be successful—so we built our own. Today, businesses of all sizes use
                    Shopify, whether they’re selling online, in retail stores, or on-the-go.
                </p>
            </div>
        </div>
        <div class="w-full text-center">
            <span class="text-md">Our Mission</span>
            <h1 class="text-xl font-bold">Making commerce better for everyone</h1>
            <p class="text-slate-500">We help people achieve independence by making it easier to start, run, and grow a business. We believe the
                future
                of commerce has more voices, not fewer, so we’re reducing the barriers to business ownership to make
                of commerce has more voices, not fewer, so we’re reducing the barriers to business ownership to make
                commerce
                better for everyone.</p>
        </div>
        <div class="flex justify-between items-center">
            <div class="w-full">
                <span class="text-md">Our People</span>
                <h1 class="text-xl font-bold">
                    Creating a community for impact
                </h1>
                <p class="text-slate-500">
                    Shopify has grown from 5 people in a coffee shop to over 10,000 across the globe. With millions of
                    businesses powered by Shopify, we care deeply about the work we do. We’re constant learners who thrive
                    on
                    change and seek to have an impact in everything we do.
                </p>
            </div>
            <div class="w-full">
                <img src="{{ asset('img/about4.jpg') }}" class="rounded-3xl" style="width: 80%;" alt="community">
            </div>
        </div>
        <div class="flex justify-between items-center">
            <div class="w-full">
                <span class="text-md">OUR COMMITMENT TO SUSTAINABILITY
                </span>
                <h1 class="text-xl font-bold">
                    We’re building a 100-year company
                </h1>
                <p class="text-slate-500">
                    Shopify builds for the long term, and that means investing in our planet, our communities, and our
                    people.
                    Our Sustainability Fund and Social Impact initiatives include choosing renewable energy, reducing and
                    offsetting our carbon emissions, and enabling an equitable and sustainable future by building products
                    and
                    programs to support our team and merchants.
                </p>
            </div>
            <div class="w-full">
                <img src="{{ asset('img/about2.jpg') }}" class="rounded-3xl" style="width: 80%;" alt="community">
            </div>
        </div>
        <div class="text-center flex flex-col justify-center">
            <p class="text-3xl font-bold text-slate-500">Try Shopify for free, and explore all the tools and services you <br>need to start, run, and grow your business.
            </p>
            <div class="mt-2">
                <button type="button"
                    class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm p-5 mr-2 mb-2 ">Start
                    Free Trail</button>
            </div>
        </div>
    </div>
@endsection
