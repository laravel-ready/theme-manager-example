{{-- Prevent missing asset and manifest errors on dev tools (manifest etc) --}}
@if(config('app.debug'))
    <link rel="icon" type="image/png" href="@asset('images/favicon/development.png', false)">
@else
    <link rel="icon" type="image/png" sizes="32x32" href="@asset('images/favicon/32x32.ico')">
    <link rel="icon" type="image/png" sizes="24x24" href="@asset('images/favicon/24x24.ico')">
    <link rel="icon" type="image/png" sizes="16x16" href="@asset('images/favicon/16x16.ico')">

    <link rel="manifest" href="@asset('images/favicon/site.webmanifest')">
@endif
