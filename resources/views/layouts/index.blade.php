<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- tailwind css --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- grid css --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="">
        {{-- header --}}
        <div>
            @include('components.header.main_header.navbar')
        </div>
        {{-- main body --}}
        <div class="content-section">
            @yield('content')
        </div>
        {{-- footer --}}
        <div>
            @include('components.footers.main_footer.main_footer')
        </div>
    </div>

    {{-- js links --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/index.min.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
