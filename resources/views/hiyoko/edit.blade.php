@include('header')
<div>
    <h1 class="font-bold text-xl my-10 text-center"><span class="border-b-4 inline border-pink-300">ひよこ塾の開催日</span>  を編集</h1>
    <form action="{{ route('hiyoko.update') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="date" class="text-lg mb-2">【開催日】</label>
            <textarea name="date" id="date" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('date') ?? $hiyoko->date }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('date')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex justify-center items-center my-10">
            <a href="{{ route('hiyoko') }}" class="border bg-blue-300 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg mr-3">戻る</a>
            <input type="submit" value="完了" class="border bg-orange-300 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg">
        </div>
    </form>
</div>
@include('footer')
