@include('header')
<div class="bg-orange-100 bg-opacity-50 mx-[calc(50%_-_50vw)]">
    <div class="container max-w-5xl px-8 py-20">
        <h1 class="font-bold text-2xl text-center mb-10">お問い合わせ</h1>
        <div id="mail_contact">
            <div class="text-lg leading-8">
                <form action="{{ route('mail.confirm') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label for="content" class="text-lg mb-2">【お問い合わせ内容】</label>
                        <textarea name="content" placeholder="回答は、主催者よりメールもしくはお電話にてご連絡いたします。" class="border border-black w-2/3 mx-auto rounded p-2">{{ old('content') }}</textarea>
                        <ul class="text-red-500">
                            @error('content')
                            <li>{{ $message }}</li>
                            @enderror
                        </ul>
                    </div>
                    <div class="flex justify-center items-center my-10">
                        <button type="submit" class="border border-black bg-orange-200 hover:bg-opacity-80 py-2 px-8 rounded font-bold text-lg">入力内容確認</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('footer')
