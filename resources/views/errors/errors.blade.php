@include('header')

<div class="text-lg bg-red-100 w-screen px-5 py-12">
    <div class="text-red-400">
        @yield('code')
        @yield('message')
    </div>
    <span class="font-bold block mb-3">エラーによりページが表示できません。</span>
    <a href="{{ route('top') }}" class="text-blue-500 underline">TOP</a>に戻って再度試すか、<br>
    「<span class="text-red-400">"@yield('code') | @yield('message')" のエラーが起きている</span>」というメッセージを添えてシステム管理者に<a href="{{ route('contact.mail') }}" class="text-blue-500 underline">ご連絡</a>ください。
</div>

@section('script')
<script src="{{ asset('js/errors.js') }}"></script>
@endsection

@yield('script')

@include('footer')
