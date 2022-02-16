<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}" />

<!-- Title -->
<title>@yield('title', 'Red Swan Template')</title>

<!-- Base Styles -->
<link rel="stylesheet" href="@asset('css/base.css', false)">

<!-- Page Styles -->
@yield('page-styles')
