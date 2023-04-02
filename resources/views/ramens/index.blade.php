<x-app-layout>
    <a href="{{ route('ramens.create') }}">{{ __('Post') }}</a>
    <ul>
        @foreach ($ramens as $ramen)
            <li>
                <img src="{{ $ramen->getFirstMediaUrl('media') }}" alt="{{ __('Ramen Image') }}">
                <p>{{ $ramen->restaurant }}</p>
            </li>
        @endforeach
    </ul>
</x-app-layout>