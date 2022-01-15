<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme::layouts.main.header')
</head>

<body class="relative antialiased tracking-tight text-gray-500 bg-black font-inter">
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('theme::layouts.main.footer')
</body>

</html>
