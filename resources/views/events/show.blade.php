@include('header')
<div class="border shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] my-24 mx-14">
    <figure>
        <img src="{{ $event->image }}" alt="{{ $event->title }}" class="w-full">
    </figure>
    <div class="text-center py-5">
        <a href="#" class="font-bold text-lg border-b-4 inline border-pink-300 hover:opacity-80">
            {{ $event->title }}
        </a>
        <div class="flex items-center text-lg mb-3 px-5 mt-8">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">開催日</div>
            <p class="ml-3 w-3/4">{{ $event->date }}</p>
        </div>
        <div class="flex items-center text-lg mb-3 px-5">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">時間</div>
            <p class="ml-3 w-3/4">{{ $event->time }}</p>
        </div>
        <div class="flex items-center text-lg mb-3 px-5">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">場所</div>
            <p class="ml-3 w-3/4">{{ $event->place }}</p>
        </div>
        <div class="flex items-center text-lg mb-3 px-5">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">備考</div>
            <p class="ml-3 w-3/4">{{ $event->other }}</p>
        </div>
    </div>
</div>
@include('footer')
