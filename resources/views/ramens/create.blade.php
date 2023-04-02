<x-app-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ramens.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="media">アップロードする写真を選択してください</label>
            <input type="file" id="media" name="media" accept="image/*"/>
        </div>
        <div>
            <label for="restaurant">店名</label>
            <input type="text" name="restaurant" id="restaurant" value="{{ old('restaurant') }}">
        </div>
        <div>
            <label for="branch">支店名 (任意)</label>
            <input type="text" name="branch" id="branch" value="{{ old('branch') }}">
        </div>
        <div>
            <button>投稿</button>
        </div>
    </form>
</x-app-layout>