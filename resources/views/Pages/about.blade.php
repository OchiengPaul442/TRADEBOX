@extends('layouts.index')

<style>
    .banner-container {
        background: linear-gradient(to top, #ffae19cf 0%, #b8980b00 100%);
    }
</style>

@section('content')
    <div class="container mx-auto mb-40">
        <div class="row space-y-32">
            {{-- banner --}}
            <div class="banner-container grid lg:grid-cols-2 gap-12 p-5  h-auto w-full items-center mt-6">
                <div class="banner-content w-full space-y-2">
                    <h4 class="text-xl">About Us</h4>
                    <h1 class="text-4xl font-bold">Hello world we are TradeBox</h1>
                    <p class="text-3xl text-slate-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem.
                    </p>
                </div>
                <div class="w-full justify-center flex">
                    <img src="{{ asset('img/about1.jpg') }}" class="drop-shadow-lg rounded-3xl relative top-12"
                        style="width: 69%;
                    }" alt="about_img">
                </div>
            </div>
        {{-- design line --}}
            <div class="flex justify-center top-16 relative">
                <div class="h-2 w-1/3 bg-black rounded-md"></div>
            </div>
            {{-- about section content --}}
            <div class="grid lg:grid-cols-2 gap-10 items-center reveal">
                <div class="w-full justify-center flex ">
                    <img src="{{ asset('img/about3.png') }}" style="width: 79%" alt="story">
                </div>
                <div class="w-full p-4 about_sections">
                    <div>
                        <h1 class="text-2xl">TradeBox Story</h1>
                        <label class="text-3xl font-bold">The first Shopify store was our own</label>
                    </div>
                    <p class="text-xl text-slate-500">
                        Over a decade ago, we started a store to sell snowboards online. None of the ecommerce solutions at
                        the
                        time
                        gave us the control we needed to be successful—so we built our own. Today, businesses of all sizes
                        use
                        Shopify, whether they’re selling online, in retail stores, or on-the-go.
                    </p>
                </div>
            </div>
            <div class="w-full text-center space-y-2 p-4 reveal">
                <span class="text-2xl">Our Mission</span>
                <h1 class="text-3xl font-bold">Making commerce better for everyone</h1>
                <p class="text-slate-500 text-xl">We help people achieve independence by making it easier to start, run, and
                    grow a business. We believe the
                    future
                    of commerce has more voices, not fewer, so we’re reducing the barriers to business ownership to make
                    of commerce has more voices, not fewer, so we’re reducing the barriers to business ownership to make
                    commerce
                    better for everyone.</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-10 items-center p-4 reveal">
                <div class="about_sections">
                    <div>
                        <span class="text-2xl">Our People</span>
                        <h1 class="text-3xl font-bold">
                            Creating a community for impact
                        </h1>
                    </div>
                    <p class="text-xl text-slate-500">
                        Shopify has grown from 5 people in a coffee shop to over 10,000 across the globe. With millions of
                        businesses powered by Shopify, we care deeply about the work we do. We’re constant learners who
                        thrive
                        on
                        change and seek to have an impact in everything we do.
                    </p>
                </div>
                <div class="w-full justify-center flex">
                    <img src="{{ asset('img/about4.jpg') }}" class="rounded-3xl" style="width: 80%;" alt="people">
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-10 items-center p-4 reveal">
                <div class="about_sections">
                    <div>
                        <span class="text-2xl">OUR COMMITMENT TO SUSTAINABILITY
                        </span>
                        <h1 class="text-3xl font-bold">
                            We’re building a 100-year company
                        </h1>
                    </div>
                    <p class="text-xl text-slate-500">
                        Shopify builds for the long term, and that means investing in our planet, our communities, and our
                        people.Our Sustainability Fund and Social Impact initiatives include choosing renewable energy,
                        reducing and
                        offsetting our carbon emissions, and enabling an equitable and sustainable future by building
                        products
                        and programs to support our team and merchants.
                    </p>
                </div>
                <div class="w-full justify-center flex">
                    <img src="{{ asset('img/about2.jpg') }}" class="rounded-3xl" style="width: 80%;" alt="community">
                </div>
            </div>
            <div class="text-center flex flex-col justify-center p-4 free_sign_up_sec reveal">
                <p class="text-3xl font-bold text-slate-500 ">Try Shopify for free, and explore all the tools and services
                    you <br>need to start, run, and grow your business.
                </p>
                <div class="mt-4">
                    <button type="button"
                        class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm p-4 mr-2 mb-2 ">Start
                        Free Trail</button>
                </div>
            </div>
        </div>
    </div>
@endsection
