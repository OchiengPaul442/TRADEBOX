<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- tailwind css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- index css --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>{{ $title }}</title>
</head>

<body style="margin-top: -24px">
    <div style="position: relative; min-height: 100vh ;">
        {{-- header --}};
        <div>
            @include('components.header.main_header.navbar')
        </div>
        {{-- main body --}}
        <div class="relative mb-10" style="padding-bottom: 300px;">
            @yield('content')
        </div>
        {{-- footer --}}
        {{-- <div style="position: absolute; bottom: 0;width: 100%;height: auto;margin-top:-300px;"> --}}
        <div>
            @include('components.footers.main_footer.main_footer')
        </div>
    </div>

    {{-- modals --}}
    @include('components.modals.modal')
    {{-- js links --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/index.min.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
