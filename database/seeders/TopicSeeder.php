<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'storage/pottery.png',
                'title' => 'やきものフェア',
                'subtitle' => 'ハンドメイド品販売＆ワークショップ 毎日6店舗出店',
                'date' => '来年7月予定',
            ],
            [
                'image' => 'storage/handmade1.png',
                'title' => 'ワクワクドキドキハンドメイドフェア',
                'subtitle' => 'in 夢メッセ会議棟',
                'date' => '来年7月予定',
            ],
        ];

        DB::table('topics')->insert($data);
    }
}
