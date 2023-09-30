@include('header')
<div>
    <h1 class="font-bold text-xl my-10 text-center"><span class="border-b-4 inline border-pink-300">{{ $event->title }}</span>  を編集</h1>
    <form action="{{ route('event.update', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="image" class="text-lg mb-2">【イメージ画像】</label>
            <input type="file" name="image" id="image" class="mb-2">
            <ul class="text-red-500">
                @error('image')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="title" class="text-lg mb-2">【タイトル】</label>
            <textarea name="title" id="title" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('title') ?? $event->title }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('title')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="date" class="text-lg mb-2">【開催日】</label>
            <textarea name="date" id="date" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('date') ?? $event->date }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('date')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="time" class="text-lg mb-2">【開催時間】</label>
            <textarea name="time" id="time" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('time') ?? $event->time }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('time')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="place" class="text-lg mb-2">【開催場所】</label>
            <textarea name="place" id="place" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('place') ?? $event->place }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('place')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="other" class="text-lg mb-2">【備考】</label>
            <textarea name="other" id="other" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('other') ?? $event->other }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('other')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex justify-center items-center my-10">
            <input type="submit" value="完了" class="border bg-orange-300 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg">
        </div>
    </form>
</div>
@include('footer')
