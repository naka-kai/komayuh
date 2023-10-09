@include('header')
<div class="bg-cyan-100 bg-opacity-50 mx-[calc(50%_-_50vw)]">
    <div class="container max-w-5xl px-8 py-20">
        <h1 class="font-bold text-2xl text-center mb-10">委託イベントの応募方法</h1>
        <div id="guideline">
            <h2 class="text-center font-bold text-2xl mb-8 mt-5 pt-5">出展要項</h2>
            <div class="text-lg leading-8">
                <h3 class="text-xl font-bold">【​出展料について】</h3>
                <p class="my-3">ハンドメイド宝箱フェア、仙台空港ハンドメイド市、仙台東口ハンドメイド市委託をおこなっています。</p>
            </div>
            <div class="text-lg mb-8">
                <h3 class="text-xl font-bold">【出展について】</h3>
                <ul class="mt-3 list-disc list-inside leading-8">
                    <li><span class="font-bold">共同出店は不可。</span>１ブース１屋号となりますのでご注意ください。</li>
                    <li>あまったり、使わなかった材料の販売ＯＫ</li>
                    <li>テーブルあります</li>
                    <li>
                        ワークショップご希望の方は、応募時にお知らせください。<br>
                        <span class="ml-5">→ ワークショップの詳細と、写真を1枚添付してメール送信お願いします。</span>
                        <span class="ml-5">→ ワークショップの方は駐車場無料です。</span>
                    </li>
                </ul>
            </div>
            <div class="text-lg">
                <h3 class="text-xl font-bold">【区画について】</h3>
                <div class="my-3">
                    <p>
                        出店数により区画サイズが変わります。<br>
                        <span class="border-b-4 border-cyan-500">各イベントで区画が全く違いますので、一度ご見学して頂けると嬉しいです。</span>
                    </p>
                </div>
            </div>
            <div class="text-lg">
                <h3 class="text-xl font-bold">【キャンセル料について】</h3>
                <div class="my-3">
                    <p>申し込み後キャンセルは全額となります。</p>
                </div>
            </div>
        </div>
        <div id="itaku_contact">
            <h2 class="text-center font-bold text-2xl mb-8 mt-16 pt-5">お問い合わせ</h2>
            <div class="text-lg leading-8">
                <form action="{{ route('itaku.confirm') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="entry_event" class="text-lg mb-2">【応募するイベント】</label>
                        <input type="text" name="entry_event" value="委託イベント" class="border border-black w-2/3 mx-auto rounded p-2" readonly>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="name" class="text-lg mb-2">【氏名】</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="border border-black w-2/3 mx-auto rounded p-2">
                        <ul class="text-red-500">
                            @error('name')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="address" class="text-lg mb-2">【住所】</label>
                        <input type="text" name="address" value="{{ old('address') }}" class="border border-black w-2/3 mx-auto rounded p-2">
                        <ul class="text-red-500">
                            @error('address')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="email" class="text-lg mb-2">【連絡先メールアドレス】</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="border border-black w-2/3 mx-auto rounded p-2">
                        <ul class="text-red-500">
                            @error('email')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="tel" class="text-lg mb-2">【連絡先電話番号】</label>
                        <input type="text" name="tel" value="{{ old('tel') }}" placeholder="080-1234-5678" class="border border-black w-2/3 mx-auto rounded p-2">
                        <ul class="text-red-500">
                            @error('tel')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="shop_name" class="text-lg mb-2">【屋号（店名）】</label>
                        <textarea name="shop_name" placeholder="（アルファベット表記の場合は「ふりがな」も記載してください）" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('shop_name') }}</textarea>
                        <ul class="text-red-500">
                            @error('shop_name')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="genre" class="text-lg mb-2">【作品ジャンル】</label>
                        <textarea name="genre" placeholder="＜例＞アクセサリー、ベビーキッズ、布物、家具・生活雑貨など" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('genre') }}</textarea>
                        <ul class="text-red-500">
                            @error('genre')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="image" class="text-lg mb-2">【作品写真1枚】</label>
                        <input type="file" name="image" class="mx-auto p-2 text-base">
                        <ul class="text-red-500">
                            @error('image')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="work_shop" class="text-lg mb-2">【ワークショップ】</label>
                        <textarea name="work_shop" placeholder="ワークショップをする方は内容を記載してください。先着順となりますので、決まり次第メールにてお知らせします" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('work_shop') }}</textarea>
                        <ul class="text-red-500">
                            @error('work_shop')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="date" class="text-lg mb-2">【応募したい開催日】</label>
                        <textarea name="date" placeholder="毎月開催予定です。イベントスケジュールをご覧になり、ご希望の委託イベント日をご入力ください。3日間開催の場合、3日間の出店が条件となります。" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('date') }}</textarea>
                        <ul class="text-red-500">
                            @error('date')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <label for="questions" class="text-lg mb-2">【質問等】</label>
                        <textarea name="questions" placeholder="回答は、主催者よりメールもしくはお電話にてご連絡いたします。" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('questions') }}</textarea>
                        <ul class="text-red-500">
                            @error('questions')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex flex-col my-8 justify-center items-center">
                        <div class="flex justify-center items-center">
                            <input type="checkbox" name="agreement">
                            <label for="agreement" class="text-lg ml-2"><a href="#guideline" class="font-bold underline hover:opacity-80 text-blue-500">出展要項</a>に同意する</label>
                        </div>
                        <ul class="text-red-500">
                            @error('agreement')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex justify-center items-center my-10">
                        <button type="submit" class="border border-black bg-cyan-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg">入力内容確認</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('footer')
