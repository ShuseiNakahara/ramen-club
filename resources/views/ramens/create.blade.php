<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">投稿</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">最近食べたラーメンの写真を投稿しよう</p>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('ramens.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-6">
                            <label for="media" class="block text-sm font-medium leading-6 text-gray-900">写真</label>
                            <input type="file" id="media" name="media" accept="image/*" class="mt-2 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"/>
                        </div>
                        <div class="mt-6 sm:col-span-4">
                            <label for="restaurant" class="block text-sm font-medium leading-6 text-gray-900">店名</label>
                            <div class="mt-2">
                                <input type="text" name="restaurant" id="restaurant" value="{{ old('restaurant') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="mt-6 sm:col-span-4">
                            <label for="branch" class="block text-sm font-medium leading-6 text-gray-900">支店名 (任意)</label>
                            <div class="mt-2">
                                <input type="text" name="branch" id="branch" value="{{ old('branch') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="mt-6">
                            <x-primary-button>投稿</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>