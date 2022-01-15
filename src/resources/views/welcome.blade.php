<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn-tailwindcss.vercel.app/"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="flex flex-col">
            <h1 class="font-bold text-4xl text-center my-20">
                Choose the Theme
            </h1>

            <div class="flex flex-wrap space-x-4">
                @foreach ($themeGroups as $group)
                    @foreach ($group as $theme)
                    <div class="max-w-lg mx-auto">
                        <a href="{{ route('my-page', ['theme' => $theme->alias, 'group' => $theme->group, 'version' => $theme->version]) }}"
                            target="_blank">
                            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                                <img class="rounded-t-lg" src="data:image/png;base64, {{ $theme->preview }}"
                                    alt="{{ $theme->alias }}">

                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
                                            {{ $theme->name }}
                                        </h5>
                                    </a>
                                    <p class="font-normal text-gray-700 mb-3">
                                        {{ $theme->description }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
