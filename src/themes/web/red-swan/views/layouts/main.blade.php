<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Main layout header --}}
    @include('theme::layouts.main.header')
</head>

<body class="body-wrapper gradient">
    {{-- Header Nav --}}
    @include('theme::layouts.common.header-nav')

    <main>
        @yield('content')
    </main>

    {{-- Main layout footer --}}
    @include('theme::layouts.main.footer')
</body>

</html>
