@foreach ($themeGroups as $groupName => $group)
    <div class="container my-10">
        <h1 class="font-bold text-3xl text-center mb-10 uppercase">
            {{ $groupName }} themes
        </h1>

        <div class="flex flex-wrap space-x-4 w-fit justify-items-center">
            @foreach ($group as $theme)
            <div class="max-w-lg">
                <a href="{{ route($theme->group . '.any-page', ['theme' => "{$theme->alias}"]) }}" target="_blank">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                        <img class="rounded-t-lg h-52 w-full" src="data:image/jpg;base64,{{ $theme->preview ?? $theme->preview_default }}"
                            alt="{{ $theme->theme }}">

                        <div class="p-5">
                            <a href="{{ route($theme->group . '.any-page', ['theme' => "{$theme->alias}"]) }}" target="_blank">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
                                    {{ $theme->name }} v{{ $theme->version }} {{ !$theme->status ? '(passive)' : '' }}
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
        </div>
    </div>
@endforeach
