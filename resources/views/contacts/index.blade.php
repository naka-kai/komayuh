@include('header')
<section class="py-16 lg:py-36">
    <p class="flex flex-col items-center font-bold text-2xl mb-10">
        <small class="font-bold text-2xl lg:text-4xl">応募したいイベントをご確認ください</small>
    </p>
    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center">
        <div class="flex flex-col lg:w-1/3">
            <a href="{{ route('contact.teiki') }}" class="hover:opacity-80">
                <div class="bg-pink-200 bg-opacity-50 rounded-lg w-3/4 lg:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold lg:text-lg">
                        定期イベント
                    </p>
                </div>
            </a>
        </div>
        <div class="flex flex-col lg:w-1/3 lg:ml-10 mt-10 lg:mt-0">
            <a href="./akiu.blade.php" class="block hover:opacity-80">
                <div class="bg-orange-200 bg-opacity-50 rounded-lg w-3/4 lg:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold lg:text-lg">
                        秋保テント村
                    </p>
                </div>
            </a>
        </div>
        <div class="flex flex-col lg:w-1/3 lg:ml-10 mt-10 lg:mt-0">
            <a href="./itaku.blade.php" class="hover:opacity-80">
                <div class="bg-cyan-200 bg-opacity-50 rounded-lg w-3/4 lg:w-full mx-auto py-5 px-8 flex justify-center items-center shadow-[rgba(0,_0,_0,_0.3)_0px_3px_8px]">
                    <p class="text-center font-bold lg:text-lg">
                        委託イベント<br>
                        （ハンドメイド宝箱）<br>
                        （仙台空港ハンドメイド市）
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>
@include('footer')
