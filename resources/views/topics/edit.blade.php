@include('header')
<div>
    <h1 class="font-bold text-xl my-10 text-center"><span class="border-b-4 inline border-pink-300">{{ $topic->title }}</span>  を編集</h1>
    <form action="{{ route('topic.update', ['id' => $topic->id]) }}" method="POST" enctype="multipart/form-data">
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
            <textarea name="title" id="title" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('title') ?? $topic->title }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('title')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="subtitle" class="text-lg mb-2">【サブタイトル】</label>
            <textarea name="subtitle" id="subtitle" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('subtitle') ?? $topic->subtitle }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('subtitle')
                <li>{{ $message }}</li>
                @enderror
            </ul>
        </div>
        <div class="flex flex-col my-8 justify-center items-center">
            <label for="date" class="text-lg mb-2">【開催日】</label>
            <textarea name="date" id="date" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('date') ?? $topic->date }}</textarea>
            <ul class="text-red-500 mt-3">
                @error('date')
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
