<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme::layouts.main.header')
</head>

<body class="body-wrapper gradient">
    @include('theme::components.common.header')

    <main>
        @yield('content')
    </main>

    {{-- Main layout footer --}}
    @include('theme::layouts.main.footer')
</body>

</html>
