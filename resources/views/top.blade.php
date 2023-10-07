@include('header')
@if (Route::has('login'))
    @auth
        <div class="flex justify-end">
            <a class="inline-block bg-orange-300 py-2 px-4 mt-5 rounded" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endauth
@endif
<!-- Blogs -->
<section class="py-10">
    <p class="flex flex-col items-center font-bold text-2xl">
        <small class="text-sm md:text-lg">ブログ</small>
        <span class="font-bold md:text-4xl">Blog</span>
    </p>
    <div class="flex flex-col md:flex-row md:justify-between md:items-end">
        <div class="flex flex-col md:w-1/3">
            <img src="{{ asset('storage/balloon.png') }}" alt="七ヶ浜ハンドメイド市ブログもこちら" class="w-1/3 md:w-3/4 ml-auto">
            <a href="http://akiuhandmade.blog.fc2.com/" class="block hover:opacity-80">
                <div class="bg-orange-200 bg-opacity-50 rounded-lg w-3/4 md:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold md:text-lg">
                        秋保<br class="hidden md:block lg:hidden">ハンドメイド市<br>
                        Blog
                    </p>
                </div>
            </a>
        </div>
        <div class="flex flex-col md:w-1/3 md:ml-10 mt-5">
            <img src="{{ asset('storage/airplane.png') }}" class="w-1/3 md:w-2/3 ml-auto -mb-14 md:-mb-5 -rotate-45">
            <a href="http://blog.livedoor.jp/tbchandmade/" class="hover:opacity-80">
                <div class="bg-cyan-200 bg-opacity-50 rounded-lg w-3/4 md:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold md:text-lg">
                        仙台空港<br class="hidden md:block lg:hidden">ハンドメイド市<br>
                        Blog
                    </p>
                </div>
            </a>
        </div>
        <div class="flex flex-col md:w-1/3 md:ml-10 mt-16">
            <a href="https://handmadeks.hatenablog.com/" class="hover:opacity-80">
                <div class="bg-pink-200 bg-opacity-50 rounded-lg w-3/4 md:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold md:text-lg">
                        KOMAYUH<br class="hidden md:block lg:hidden">企画<br>
                        イベント情報
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Topics -->
<section class="py-10 mt-10">
    <div class="flex items-center justify-center">
        <img src="{{ asset('storage/cracker.png') }}" class="w-16">
        <p class="ml-8 flex flex-col items-center font-bold text-2xl">
            <small class="text-sm md:text-lg">トピックス</small>
            <span class="font-bold md:text-4xl">Topics</span>
        </p>
    </div>
    @if (Route::has('login'))
        @auth
            <div class="flex justify-center items-center mt-10">
                <div>
                    <a href="{{ route('topic.create') }}" class="border bg-pink-200 rounded font-bold hover:bg-opacity-80 px-10 py-3">新規登録</a>
                </div>
            </div>
        @endauth
    @endif
    <div class="flex flex-col md:flex-row md:justify-between py-10 w-full">
        @foreach ($topics as $topic)
        <div class="mb-10 md:w-1/2">
            <div class="border flex h-80">
                <div class="w-2/3 bg-cover relative" style="background-image: url('{{ asset($topic->image) }}')">
                    <p class="bg-white bg-opacity-70 p-2 text-lg md:text-xl font-bold">{!! nl2br(e($topic->title)) !!}</p>
                    <p class="bg-white bg-opacity-90 absolute bottom-0 text-md p-2 md:text-lg">
                        {!! nl2br(e($topic->subtitle)) !!}
                    </p>
                </div>
                <div class="w-1/3 flex flex-col justify-center items-center text-lg">
                    <p class="mb-3 font-bold">開催日</p>
                    <p>{!! nl2br(e($topic->date)) !!}</p>
                    @if (Route::has('login'))
                    @auth
                    <div class="flex flex-col justify-center items-center my-10">
                        <div>
                            <a href="{{ route('topic.edit', ['id' => $topic->id]) }}" class="border bg-blue-300 rounded font-bold hover:bg-opacity-80 px-5 py-2">編集</a>
                        </div>
                        <div>
                            <form action="{{ route('topic.delete', ['id' => $topic->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="削除" onclick="return confirm('本当に削除しますか？')" class="border bg-red-400 rounded font-bold hover:bg-opacity-80 px-5 py-2 mt-5">
                            </form>
                        </div>
                    </div>
                    @endauth
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Event -->
<section class="pb-10">
    <div class="flex items-center justify-center">
        <p class="mr-8 flex flex-col items-center font-bold text-2xl">
            <small class="text-sm md:text-lg">イベント</small>
            <span class="font-bold md:text-4xl">Event</span>
        </p>
        <img src="{{ asset('storage/tento.png') }}" class="w-16">
    </div>
    @if (Route::has('login'))
        @auth
            <div class="flex justify-center items-center my-10">
                <div>
                    <a href="{{ route('event.create') }}" class="border bg-pink-200 rounded font-bold hover:bg-opacity-80 px-10 py-3">新規登録</a>
                </div>
            </div>
        @endauth
    @endif
    <div class="mt-10 md:grid md:grid-cols-2 md:gap-5">
        @foreach ($events as $event)
        <div class="border shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10 flex flex-col justify-between">
            <div>
                <figure>
                    <img src="{{ $event->image }}" alt="{{ $event->title }}" class="w-full">
                </figure>
                <div class="text-center py-5">
                    <p class="font-bold text-lg px-5 leading-8 border-b-4 border-pink-300 inline-block">
                        {!! nl2br(e($event->title)) !!}
                    </p>
                    <div class="flex items-center text-lg mb-3 pb-3 px-5 mt-8 border-b border-gray-300">
                        <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">開催日</div>
                        <p class="ml-3 w-3/4">{!! nl2br(e($event->date)) !!}</p>
                    </div>
                    <div class="flex items-center text-lg mb-3 px-5 border-b pb-3 border-gray-300">
                        <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">時間</div>
                        <p class="ml-3 w-3/4">{!! nl2br(e($event->time)) !!}</p>
                    </div>
                    <div class="flex items-center text-lg mb-3 px-5 border-b pb-3 border-gray-300">
                        <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">場所</div>
                        <p class="ml-3 w-3/4">{!! nl2br(e($event->place)) !!}</p>
                    </div>
                    <div class="flex items-center text-lg mb-3 px-5 border-b pb-3 border-gray-300">
                        <div class="w-1/4 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">備考</div>
                        <p class="ml-3 w-3/4">{!! nl2br(e($event->other)) !!}</p>
                    </div>
                </div>
            </div>
            @if (Route::has('login'))
                @auth
                    <div class="flex justify-center items-center mb-10">
                        <div>
                            <a href="{{ route('event.edit', ['id' => $event->id]) }}" class="border bg-blue-300 rounded font-bold hover:bg-opacity-80 px-10 py-3">編集</a>
                        </div>
                        <div>
                            <form action="{{ route('event.delete', ['id' => $event->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="削除" onclick="return confirm('本当に削除しますか？')" class="border bg-red-400 rounded font-bold ml-8 hover:bg-opacity-80 px-10 py-3">
                            </form>
                        </div>
                    </div>
                @endauth
            @endif
        </div>
        @endforeach
    </div>
</section>

<!-- Wanted -->
<section class="py-10">
    <div class="flex flex-col items-center justify-center">
        <img src="{{ asset('storage/piyo.png') }}" class="w-24 mb-3">
        <p class="flex flex-col items-center font-bold text-2xl">
            <small class="text-sm md:text-lg">募集</small>
            <span class="font-bold md:text-4xl">Wanted</span>
        </p>
    </div>
    <div class="my-10 flex flex-col justify-center items-center">
        <div class="border-orange-400 border-3 px-8 py-20 w-2/3 text-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10 bg-white">
            <p class="mb-5 text-xl font-bold">出展者募集中</p>
            <a href="{{ route('contact.index') }}" class="text-lg border-b border-blue-500 text-blue-500 hover:opacity-80">応募方法はこちら</a>
        </div>
        <a href="#" class="w-2/3 bg-white hover:opacity-80">
            <div class="p-8 text-center border-orange-400 border-3 shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] bg-[url(https://kaiblo.com/komayuh/storage/flag1.png),url(https://kaiblo.com/komayuh/storage/flag2.png)] bg-flag-position bg-contain bg-no-repeat">
                <h4 class="font-bold text-xl mb-5">
                    ひよこ塾<br>
                    〜ハンドメイド販売ノウハウ講座を楽しく学ぼう〜
                </h4>
                <p class="text-base mb-2">ハンドメイドで<br class="md:hidden">これから出展したい方。</p>
                <p class="text-base mb-2">出品したものの<br class="md:hidden">まだ不安に感じる方。</p>
                <p class="text-base mb-2">色々なノウハウを<br class="md:hidden">楽しく講座いたします。</p>
                </p>
            </div>
        </a>
    </div>
</section>
<!-- SNS -->
<section class="py-10">
    <div class="flex flex-col items-center justify-center mb-10">
        <p class="flex flex-col items-center mb-8">
            <span class="font-bold text-2xl md:text-4xl">SNS</span>
        </p>
        <div class="flex justify-center items-center">
            <a href="#" class="hover:opacity-80">
                <img src="{{ asset('storage/x.png') }}" class="w-12 md:w-16 mr-4 md:mr-8">
            </a>
            <a href="#" class="hover:opacity-80">
                <img src="{{ asset('storage/instagram.png') }}" class="w-12 md:w-16 mr-4 md:mr-8">
            </a>
            <a href="#" class="hover:opacity-80">
                <img src="{{ asset('storage/facebook.png') }}" class="w-12 md:w-16">
            </a>
        </div>
    </div>
    <div class="bg-orange-300 bg-opacity-70 mx-[calc(50%_-_50vw)] py-10">
        <div class="container max-w-5xl px-8 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-10 md:mb-0">
                <a class="twitter-timeline" data-width="400" data-height="600" data-dnt="true" href="https://twitter.com/koma_yu4358?ref_src=twsrc%5Etfw">Tweets by koma_yu4358</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100064450582068&tabs=timeline&width=400&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Contact -->
<section class="py-10 mt-10">
    <div class="flex items-center justify-center mb-10">
        <p class="mr-8 flex flex-col items-center font-bold text-2xl">
            <small class="text-sm md:text-lg">お問い合わせ</small>
            <span class="font-bold md:text-4xl">Contact</span>
        </p>
        <img src="{{ asset('storage/contact.png') }}" class="w-16">
    </div>
    <div class="flex flex-col md:flex-row justify-center md:justify-between items-center w-full mb-10 md:mb-16">
        <a href="#" class="border-orange-400 border-3 h-48 w-2/3 md:w-1/2 shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10 md:mb-0 bg-white flex justify-center items-center hover:opacity-80">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/mail.png') }}" class="w-20">
                <p class="mt-5 text-xl font-bold">メールでお問い合わせ</p>
            </div>
        </a>
        <a href="#" class="border-orange-400 border-3 h-48 w-2/3 md:w-1/2 shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] bg-white flex justify-center items-center md:ml-10 hover:opacity-80">
            <div class="flex flex-col justify-center items-center">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('storage/tel.png') }}" class="w-16">
                    <p class="text-2xl ml-5">000-0000-0000</p>
                </div>
                <p class="mt-5 text-xl font-bold">お電話でお問い合わせ</p>
            </div>
        </a>
    </div>
</section>
@include('footer')
