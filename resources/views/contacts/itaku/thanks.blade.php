@include('header')
<div class="bg-cyan-100 bg-opacity-50 mx-[calc(50%_-_50vw)]">
    <div class="container max-w-5xl px-8 py-20 text-center">
        <h1 class="font-bold text-2xl mb-10">委託イベントへの応募が完了しました</h1>
        <p class="text-lg">ご応募いただきありがとうございました。</p>
        <p class="text-lg">後ほど主催者よりご連絡させていただきます。</p>
        <a href="{{ route('top') }}" class="border border-black bg-gray-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg flex justify-center items-center mt-10">TOPへ戻る</a>
    </div>
</div>
@include('footer')
