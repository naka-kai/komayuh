@include('header')
<div class="mt-12 flex justify-center items-center">
    <figure>
        <img src="{{ asset('storage/piyo.png') }}" alt="">
    </figure>
</div>
<div class="border shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mt-12 mb-24 mx-14">
    <div class="text-center py-5">
        <div class="px-3">
            <h2 class="font-bold text-xl border-b-4 inline border-pink-300 hover:opacity-80">ハンドメイドひよこ塾開講</h2>
            <p class="mt-8 mb-3 text-[16px]">
                ハンドメイドでこれから出展したい方。<br>
                出展したものの、まだ不安に感じる方。
            </p>
            <p class="text-[16px]">
                色々なノウハウを楽しく講座いたします。<br>
                2回コースとなりますが、1回でもOKです。
            </p>
        </div>
        <div class="flex flex-col items-center text-lg py-3 px-5 mt-8 border-b border-gray-300">
            <div class="flex items-start w-full">
                <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">開催日</div>
                <p class="ml-3 mt-[0.3rem] w-3/4 text-left">{{ $hiyoko->date }}</p>
            </div>
            @if (Route::has('login'))
                @auth
                    <div class="flex justify-center items-center my-5">
                        <div>
                            <a href="{{ route('hiyoko.edit') }}" class="border bg-blue-300 rounded font-bold hover:bg-opacity-80 px-5 py-2">編集</a>
                        </div>
                    </div>
                @endauth
            @endif
        </div>
        <div class="flex items-start text-lg py-3 px-5 border-b border-gray-300">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">時間</div>
            <p class="ml-3 mt-[0.3rem] w-3/4 text-left">
                一部：10:00~11:30（ランチ）<br>
                二部：11:30~14:30（ランチ&おやつ付き）
            </p>
        </div>
        <div class="flex items-start text-lg py-3 px-5 border-b border-gray-300">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">場所</div>
            <p class="ml-3 mt-[0.3rem] w-3/4 text-left">
                名取市 杜せきのした5-31-1<br>
                ATALATA内<br>
                シチノカフェ
            </p>
        </div>
        <div class="flex items-start text-lg py-3 px-5 border-b border-gray-300">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">駐車場</div>
            <p class="ml-3 mt-[0.3rem] w-3/4 text-left">駐車場無料</p>
        </div>
        <div class="flex items-start text-lg py-3 px-5 border-b border-gray-300">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">会費</div>
            <p class="ml-3 mt-[0.3rem] w-3/4 text-left">
                5,500円<br>
                ※一部もしくは二部のみの希望者<br>
                （一部、二部通しでの参加者は8,500円です）
            </p>
        </div>
        <div class="flex items-start text-lg py-3 px-5 border-b border-gray-300">
            <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">内容</div>
            <p class="ml-3 mt-[0.3rem] w-3/4 text-left">
                一部<br>
                10:00~11:30<br>
                11:30からランチしながら質問回答<br>
                （出展するまでの準備内容、値付けなど）<br>
                <br>
                二部<br>
                11:30~14:30<br>
                販売内容、接客方法、苦情、など<br>
                14時からおやつを食べながら質問回答<br>
                <br>
                たくさんの利用をお待ちしております。<br>
                詳しいことは、応募の方にご連絡メールいたします。<br>
                よろしくお願いいたします。
            </p>
        </div>
    </div>
</div>
@include('footer')
