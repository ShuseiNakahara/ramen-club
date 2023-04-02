<x-app-layout>
    <a href="{{ route('ramens.create') }}">{{ __('Post') }}</a>
    <ul>
        @foreach ($ramens as $ramen)
            <li>
                <img src="{{ $ramen->getFirstMediaUrl('media') }}" alt="{{ __('Ramen Image') }}">
                <p>{{ $ramen->restaurant }}</p>
            </li>
            @if ($ramen->user()->is(auth()->user()))
                <form action="{{ route('ramens.destroy', $ramen) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button>{{ __('Delete') }}</button>
                </form>
            @endif
        @endforeach
    </ul>
</x-app-layout>