<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="w-full h-auto bg-header-bg bg-cover pb-5">
            <div class="container max-w-5xl px-8">
                <div class="flex justify-between align-items-center">
                    <img src="{{ asset('storage/komayuh-image.png') }}" alt="KOMAYUH企画" class="w-2/5 max-w-xs bg-white px-3 py-1 -rotate-12 my-20">
                    <img src="{{ asset('storage/komayuh-logo.png') }}" alt="KOMAYUH企画" class="w-1/2 bg-white bg-opacity-75 p-3 rounded-tl-3xl rounded-br-3xl">
                </div>
                <h4 class="text-lg md:text-xl text-center font-medium">
                    KOMAYUH企画のホームページへお越し頂きありがとうございます。<br>
                    ​各イベントのブログを配信しております。
                </h4>
            </div>
        </div>
    </header>
    <main>
        <div class="container max-w-5xl mx-auto">
            <!-- Blogs -->
            <section class="py-10">
                <p class="flex flex-col items-center font-bold text-2xl">
                    <small class="text-sm md:text-lg">ブログ</small>
                    <span class="font-bold md:text-4xl">Blog</span>
                </p>
                <div class="flex flex-col md:flex-row md:justify-between md:items-end">
                    <div class="flex flex-col md:w-1/3">
                        <img src="{{ asset('storage/balloon.png') }}" alt="七ヶ浜ハンドメイド市ブログもこちら" class="w-1/3 md:w-3/4 ml-auto">
                        <a href="#" class="block">
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
                        <a href="#">
                            <div class="bg-cyan-200 bg-opacity-50 rounded-lg w-3/4 md:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                                <p class="text-center font-bold md:text-lg">
                                    仙台空港<br class="hidden md:block lg:hidden">ハンドメイド市<br>
                                    Blog
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-col md:w-1/3 md:ml-10 mt-16">
                        <a href="#">
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
                <div class="flex flex-col md:flex-row md:justify-between py-10 w-full">
                    <a href="#" class="mb-10 md:w-1/2">
                        <div class="border flex h-80">
                            <div class="w-2/3 bg-pottery bg-cover relative">
                                <p class="bg-white bg-opacity-70 p-2 text-lg md:text-xl font-bold">やきものフェア</p>
                                <p class="bg-white bg-opacity-90 absolute bottom-0 text-md p-2 md:text-lg">
                                    ハンドメイド品販売＆ワークショップ<br>
                                    毎日6店舗出店
                                </p>
                            </div>
                            <div class="w-1/3 flex flex-col justify-center items-center text-lg">
                                <p class="mb-3 font-bold">開催日</p>
                                <p>来年7月予定</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="mb-10 md:ml-3 md:w-1/2">
                        <div class="border flex h-80">
                            <div class="w-2/3 bg-handmade1 bg-cover relative">
                                <p class="bg-white bg-opacity-90 p-2 text-lg md:text-xl font-bold">ワクワクドキドキハンドメイドフェア</p>
                                <p class="bg-white bg-opacity-70 absolute bottom-0 text-md p-2 md:text-lg">in夢メッセ会議棟 </p>
                            </div>
                            <div class="w-1/3 flex flex-col justify-center items-center text-lg">
                                <p class="mb-3 font-bold">開催日</p>
                                <p>来年7月予定</p>
                            </div>
                        </div>
                    </a>
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
                <div class="mt-10 md:grid md:grid-cols-2 md:gap-5">
                    <div class="border shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10">
                        <figure>
                            <img src="{{ asset('storage/treasure_box.png') }}" alt="ハンドメイド宝箱フェア（委託販売）〜にゃんにゃんフェア〜" class="w-full">
                        </figure>
                        <div class="text-center py-5">
                            <h2 class="font-bold text-lg border-b-4 inline border-pink-300">
                                ハンドメイド宝箱フェア（委託販売）<br>
                                〜にゃんにゃんフェア〜
                            </h2>
                            <div class="flex items-center text-lg mb-3 ml-16 mt-3">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">開催日</div>
                                <p class="ml-3">【2月】18日〜19日</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">時間</div>
                                <p class="ml-3">（初日11時）10時30分〜17時30分</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">場所</div>
                                <p class="ml-3">ブランチ仙台in丘の商店</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">備考</div>
                                <p class="ml-3">変更になる場合があります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="border shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10">
                        <figure>
                            <img src="{{ asset('storage/treasure_box.png') }}" alt="ハンドメイド宝箱フェア（委託販売）〜にゃんにゃんフェア〜" class="w-full">
                        </figure>
                        <div class="text-center py-5">
                            <h2 class="font-bold text-lg border-b-4 inline border-pink-300">
                                ハンドメイド宝箱フェア（委託販売）<br>
                                〜にゃんにゃんフェア〜
                            </h2>
                            <div class="flex items-center text-lg mb-3 ml-16 mt-3">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">開催日</div>
                                <p class="ml-3">【2月】18日〜19日</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">時間</div>
                                <p class="ml-3">（初日11時）10時30分〜17時30分</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">場所</div>
                                <p class="ml-3">ブランチ仙台in丘の商店</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">備考</div>
                                <p class="ml-3">変更になる場合があります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="border shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10">
                        <figure>
                            <img src="{{ asset('storage/treasure_box.png') }}" alt="ハンドメイド宝箱フェア（委託販売）〜にゃんにゃんフェア〜" class="w-full">
                        </figure>
                        <div class="text-center py-5">
                            <h2 class="font-bold text-lg border-b-4 inline border-pink-300">
                                ハンドメイド宝箱フェア（委託販売）<br>
                                〜にゃんにゃんフェア〜
                            </h2>
                            <div class="flex items-center text-lg mb-3 ml-16 mt-3">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">開催日</div>
                                <p class="ml-3">【2月】18日〜19日</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">時間</div>
                                <p class="ml-3">（初日11時）10時30分〜17時30分</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">場所</div>
                                <p class="ml-3">ブランチ仙台in丘の商店</p>
                            </div>
                            <div class="flex items-center text-lg mb-3 ml-16">
                                <div class="w-20 h-10 flex justify-center items-center bg-orange-300 rounded-md font-bold">備考</div>
                                <p class="ml-3">変更になる場合があります。</p>
                            </div>
                        </div>
                    </div>
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
                    <div class="flex flex-col md:flex-row justify-between items-center w-full mb-10 md:mb-16">
                        <div class="border-orange-400 border-3 px-8 py-20 w-2/3 md:w-1/2 text-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10 md:mb-0 bg-white">
                            <p class="mb-5 text-xl font-bold">出展者募集中</p>
                            <a href="#" class="text-lg border-b border-blue-500 text-blue-500">応募方法はこちら</a>
                        </div>
                        <div class="border-orange-400 border-3 px-8 py-20 w-2/3 md:w-1/2 text-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] bg-white md:ml-10">
                            <p class="mb-5 text-xl font-bold">ハンドメイドひよこ塾</p>
                            <a href="#" class="text-lg border-b border-blue-500 text-blue-500">詳細はこちら</a>
                        </div>
                    </div>
                    <a href="#" class="w-2/3 bg-white">
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
                    <p class="flex flex-col items-center mb-3">
                        <span class="font-bold text-2xl md:text-4xl">SNS</span>
                    </p>
                    <div class="flex justify-center items-center">
                        <a href="#">
                            <img src="{{ asset('storage/x.png') }}" class="w-12 md:w-16 mr-4 md:mr-8">
                        </a>
                        <a href="#">
                            <img src="{{ asset('storage/instagram.png') }}" class="w-12 md:w-16 mr-4 md:mr-8">
                        </a>
                        <a href="#">
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
                    <a href="#" class="border-orange-400 border-3 h-48 w-2/3 md:w-1/2 shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] mb-10 md:mb-0 bg-white flex justify-center items-center">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/mail.png') }}" class="w-20">
                            <p class="mt-5 text-xl font-bold">メールでお問い合わせ</p>
                        </div>
                    </a>
                    <a href="#" class="border-orange-400 border-3 h-48 w-2/3 md:w-1/2 shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px] bg-white flex justify-center items-center md:ml-10">
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
            <footer>
                <div class="text-center bg-orange-300 bg-opacity-70 mx-[calc(50%_-_50vw)] py-10">
                    <small>Copyright © 2017 KOMAYUH企画 All Rights Reserved.</small>
                </div>
            </footer>
        </div>
    </main>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>
