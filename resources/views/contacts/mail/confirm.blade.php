@include('header')
<div class="bg-orange-100 bg-opacity-50 mx-[calc(50%_-_50vw)]">
    <div class="container max-w-5xl px-8 py-20">
        <h1 class="font-bold text-2xl mb-10 text-center">お問い合わせ内容確認</h1>
        <div class="text-lg leading-8">
            <form action="{{ route('mail.thanks') }}" method="POST" enctype="multipart/form-data" id="mail_form">
                @csrf
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="name" class="text-lg mb-2">【氏名】</label>
                    <p>{{ $inputs['name'] }}</p>
                    <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                        <label for="email" class="text-lg mb-2">【連絡先メールアドレス】</label>
                        <p>{{ $inputs['email'] }}</p>
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                    </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="tel" class="text-lg mb-2">【連絡先電話番号】</label>
                    <p>{{ $inputs['tel'] }}</p>
                    <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
                </div>
                <div class="flex flex-col my-8 justify-center items-center">
                    <label for="content" class="text-lg mb-2">【お問い合わせ内容】</label>
                    <p>{!! nl2br(e($inputs['content'])) !!}</p>
                    <textarea name="content" class="hidden">{{ $inputs['content'] }}</textarea>
                </div>
                <p class="text-red-400 text-center">※ 送信には少し時間がかかります</p>
                <div class="flex flex-col justify-center items-center my-10 md:flex-row-reverse">
                    <button type="submit" name="action" value="submit" id="mail_submit" class="border border-black bg-orange-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg md:ml-8">送信</button>
                    <button type="submit" name="action" value="back" class="border border-black bg-gray-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg mt-8 md:mt-0">戻る</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
<script src="{{ asset('js/index.js') }}"></script>
@endsection

@include('footer')
