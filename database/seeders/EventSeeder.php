<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
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
                'image' => 'https://kaiblo.com/komayuh/storage/treasure_box.png',
                'title' => 'ハンドメイド宝箱フェア（委託販売）〜キラキラフェア〜',
                'date' => '【9月】26〜29日',
                'time' => '（初日11時）10時30～17時30分',
                'place' => 'ブランチ仙台in丘の商店',
                'other' => '変更になる場合があります。',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/airport.png',
                'title' => 'ハンドメイド宝箱フェア（委託販売）〜ハロウィンフェア〜',
                'date' => '【10月】18～19日',
                'time' => '（初日11時）10時30～17時30分',
                'place' => 'ブランチ仙台in丘の商店',
                'other' => '変更になる場合があります。',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event1.png',
                'title' => 'ハンドメイド宝箱フェア（委託販売）〜個人販売〜',
                'date' => '【10月】4、5日',
                'time' => '（初日11時）10時30～17時30分',
                'place' => 'ブランチ仙台in丘の商店',
                'other' => '変更になる場合があります。',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event2.png',
                'title' => '秋保ハンドメイドテント村',
                'date' => '【9月】23、24日 【11月】11、12日',
                'time' => '10:00~16:00',
                'place' => '秋保ヴィレッジ「アグリエの森」',
                'other' => '今回は県外の方、コロナ対策マスク使用やアルコール消毒準備やシートなどができる方。無料駐車場あり',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event3.png',
                'title' => '秋保ハンドメイド市',
                'date' => '【9月】22、25日 【10月】16、20～23日 【11月】5、6、10、13日',
                'time' => '10:00~16:00',
                'place' => '秋保ヴィレッジ「アグリエの森」正面屋外にて',
                'other' => '無料駐車場あり',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event4.png',
                'title' => 'ワクワクドキドキ仙台空港ハンドメイド市',
                'date' => '【9月】13〜19日内 委託13～15日 【10月】6〜12日内 委託6～8日 【11月】17〜22日内 委託20～22日',
                'time' => '10:00~18:00 最終日17:30',
                'place' => '仙台空港2階イベントスペース（国際線出発ロビー近く）名取市下増田字南原無番地',
                'other' => '時間が長い為、続けの方で用事などある方は17時以降こちらでその後販売致します。​状況により30分前後変更あり。',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event5.png',
                'title' => '七ヶ浜ハンドメイド市',
                'date' => '【9月】10日 【10月】15日 【11月】23日',
                'time' => '11:00~15:30',
                'place' => '​七ヶ浜うみの駅しちのや内',
                'other' => '駐車場​あり',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event6.png',
                'title' => '荒町ハンドメイド市',
                'date' => '【10月】4日 【11月】8日',
                'time' => '11:00~15:00',
                'place' => '​荒町商店街通り 「奥江」呉服店前',
                'other' => '近隣のコインパーキングをご利用ください。',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event7.png',
                'title' => '名取ハンドメイド市',
                'date' => '【9月】21日 【10月】5日',
                'time' => '11:00~15:00',
                'place' => 'ロクファームアタラタ シチノカフェ名取店 前',
                'other' => '無料駐車場あり',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event8.png',
                'title' => '仙台東口ハンドメイド市',
                'date' => '【10月】24、25日 【11月】14、15日',
                'time' => '10:30~17:00頃',
                'place' => '仙台東口BiBv入口すぐ',
                'other' => '有料駐車場あり',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event9.png',
                'title' => 'ゆりあげハンドメイド市',
                'date' => '【10月】14日 【11月】4日',
                'time' => '10:00~16:00頃',
                'place' => 'ゆりあげ食彩館イトーチェーン',
                'other' => '無料駐車場あり',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event1.png',
                'title' => '千葉ハンドメイドフェア',
                'date' => '2024年3月1日〜15日',
                'time' => '11:00~15:00',
                'place' => '千葉駅改札口そば',
                'other' => '委託販売10店舗位',
            ],
            [
                'image' => 'https://kaiblo.com/komayuh/storage/event1.png',
                'title' => 'ひよこ塾〜ハンドメイド販売ノウハウ講座を楽しく学ぼう〜',
                'date' => '【10月】17日',
                'time' => '一部: 10:00〜11:30, 二部: 11:30〜14:30',
                'place' => '名取市​ 杜せきのした5-31-1 ATALATA内シチノカフェ',
                'other' => '会費:5,500円（ランチ、おやつ付き）※一部もしくは二部のみの希望者（一部、二部通しでの参加者は8,500円です）',
            ],
        ];

        DB::table('events')->insert($data);
    }
}
