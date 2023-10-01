<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            最近の投稿
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <ul class="flex flex-wrap">
                @foreach ($ramens as $ramen)
                    <div class="flex w-1/3 flex-wrap">
                        <li class="p-1 md:p-2">
                            <img src="{{ $ramen->getFirstMediaUrl('media') }}" alt="{{ __('Ramen Image') }}" class="block h-full w-full rounded-lg object-cover object-center">
                            <p>{{ $ramen->restaurant }}</p>
                            @if ($ramen->user()->is(auth()->user()))
                                <form action="{{ route('ramens.destroy', $ramen) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button>{{ __('Delete') }}</button>
                                </form>
                            @endif
                        </li>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>