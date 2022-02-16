@extends('theme::layouts.main')

@section('content')
    <h1>
        Add new admin template
    </h1>

    <h2>
        Current theme details:
    </h2>

    {{ dd(app('theme-manager')->getCurrentTheme('admin-who', 'admin')) }}
@endsection
