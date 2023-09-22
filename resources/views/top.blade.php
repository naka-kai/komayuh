@include('header')
<!-- Blogs -->
<section class="py-10">
    <p class="flex flex-col items-center font-bold text-2xl">
        <small class="text-sm md:text-lg">ブログ</small>
        <span class="font-bold md:text-4xl">Blog</span>
    </p>
    <div class="flex flex-col md:flex-row md:justify-between md:items-end">
        <div class="flex flex-col md:w-1/3">
            <img src="{{ asset('storage/balloon.png') }}" alt="七ヶ浜ハンドメイド市ブログもこちら" class="w-1/3 md:w-3/4 ml-auto">
            <a href="#" class="block hover:opacity-80">
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
            <a href="#" class="hover:opacity-80">
                <div class="bg-cyan-200 bg-opacity-50 rounded-lg w-3/4 md:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold md:text-lg">
                        仙台空港<br class="hidden md:block lg:hidden">ハンドメイド市<br>
                        Blog
                    </p>
                </div>
            </a>
        </div>
        <div class="flex flex-col md:w-1/3 md:ml-10 mt-16">
            <a href="#" class="hover:opacity-80">
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
@include('topics.index')
<!-- Event -->
@include('events.index')
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
            <div class="p-8 text-center border-orange-400 border-3 shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] bg-flag-img bg-flag-position bg-contain bg-no-repeat">
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
