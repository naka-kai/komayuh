<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komayuh</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="w-full h-auto bg-[url(https://kaiblo.com/komayuh/storage/header-bg.png)] bg-cover pb-5">
            <div class="container max-w-5xl px-8">
                <div class="flex justify-between align-items-center">
                    <a href="{{ route('top') }}" class="block w-2/5 max-w-xs bg-white px-2 pt-2 pb-10 -rotate-12 my-20">
                        <img src="{{ asset('storage/komayuh-image.png') }}" alt="KOMAYUH企画" class="w-full">
                    </a>
                    <a href="{{ route('top') }}" class="block w-1/2 bg-white bg-opacity-75 p-3 rounded-tl-3xl rounded-br-3xl">
                        <img src="{{ asset('storage/komayuh-logo.png') }}" alt="KOMAYUH企画" class="w-full">
                    </a>
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
