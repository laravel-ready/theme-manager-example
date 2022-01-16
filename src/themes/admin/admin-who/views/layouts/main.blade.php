<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme::layouts.main.header')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @yield('content')

            {{-- Footer --}}
            @include('theme::layouts.main.footer')
        </div>
    </div>
</body>

</html>
