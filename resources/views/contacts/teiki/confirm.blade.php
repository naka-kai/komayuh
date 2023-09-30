@include('header')
{{-- {{ dd($inputs) }} --}}
<div class="bg-pink-100 bg-opacity-50 mx-[calc(50%_-_50vw)]">
    <div class="container max-w-5xl px-8 py-20">
        <h1 class="font-bold text-2xl mb-10 text-center">定期イベントの応募方法</h1>
        <div class="text-lg leading-8">
            <form action="{{ route('teiki.thanks') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="entry_event" class="text-lg mb-2">【応募するイベント】</label>
                    <p>{{ $inputs['entry_event'] }}</p>
                    <input type="hidden" name="entry_event" value="{{ $inputs['entry_event'] }}">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="name" class="text-lg mb-2">【氏名】</label>
                    <p>{{ $inputs['name'] }}</p>
                    <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="address" class="text-lg mb-2">【住所】</label>
                    <p>{{ $inputs['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                        <label for="email" class="text-lg mb-2">【連絡先メールアドレス】</label>
                        <p>{{ $inputs['email'] }}</p>
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                    </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="tel" class="text-lg mb-2">【連絡先電話番号】</label>
                    <p>{{ $inputs['tel'] }}</p>
                    <input type="hidden" name="tel" value="{{ $inputs['tel'] }}" placeholder="080-1234-5678">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="shop_name" class="text-lg mb-2">【屋号（店名）】</label>
                    <p>{!! nl2br(e($inputs['shop_name'])) !!}</p>
                    <textarea name="shop_name" placeholder="（アルファベット表記の場合は「ふりがな」も記載してください）" class="hidden">{{ $inputs['shop_name'] }}</textarea>
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="genre" class="text-lg mb-2">【作品ジャンル】</label>
                    <p>{!! nl2br(e($inputs['genre'])) !!}</p>
                    <textarea name="genre" placeholder="＜例＞アクセサリー、ベビーキッズ、布物、家具・生活雑貨など" class="hidden">{{ $inputs['genre'] }}</textarea>
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="image" class="text-lg mb-2">【作品写真1枚】</label>
                    @if ($inputs['image'])
                    <p>{{ $file_name }}</p>
                    @endif
                    <input type="hidden" name="new_file_name" value="{{ $new_file_name }}">
                    <input type="hidden" name="extension" value="{{ $extension }}">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="entry_market" class="text-lg mb-2">【応募ハンドメイド市名】</label>
                    <p>{!! nl2br(e($inputs['entry_market'])) !!}</p>
                    <textarea name="entry_market" placeholder="決定イベントを記載してください。" class="hidden">{{ $inputs['entry_market'] }}</textarea>
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="visited_market" class="text-lg mb-2">【見学済みのハンドメイド市名】</label>
                    <p>{!! nl2br(e($inputs['visited_market'])) !!}</p>
                    <textarea name="visited_market" placeholder="KOMAYUH企画のハンドメイド市をご見学済みの場合は、どのイベントを見学して頂いたのかをご記入ください。" class="hidden">{{ $inputs['visited_market'] }}</textarea>
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="questions" class="text-lg mb-2">【質問等】</label>
                    <p>{!! nl2br(e($inputs['questions'])) !!}</p>
                    <textarea name="questions" placeholder="回答は、主催者よりメールもしくはお電話にてご連絡いたします。" class="hidden">{{ $inputs['questions'] }}</textarea>
                </div>
                <div class="flex flex-col justify-center items-center my-10 md:flex-row-reverse">
                    <button type="submit" name="action" value="submit" class="border border-black bg-pink-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg md:ml-8">送信</button>
                    <button type="submit" name="action" value="back" class="border border-black bg-gray-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg mt-8 md:mt-0">戻る</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('footer')