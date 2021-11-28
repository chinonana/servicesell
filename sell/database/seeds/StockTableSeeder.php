<?php

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();
        
        DB::table('stocks')->insert([
           'name' => '人材商材',
           'detail' => '施工管理の経験者が豊富です！',
           'fee' => 10000,
           'imgpath' => 'people.jpg',
       ]);
       
       DB::table('stocks')->insert([
           'name' => '広告商材',
           'detail' => 'googleマイアカウントを活用してみませんか？',
           'fee' => 45000,
           'imgpath' => 'people.jpg',
       ]);
       
       DB::table('stocks')->insert([
           'name' => 'クラウドサービス',
           'detail' => '実績多数！',
           'fee' => 13000,
           'imgpath' => 'people.jpg',
       ]);
       
       DB::table('stocks')->insert([
           'name' => 'ウェブサイトサービス',
           'detail' => '検索キーワード入れ放題！',
           'fee' => 5000,
           'imgpath' => 'people.jpg',
       ]);
       
       DB::table('stocks')->insert([
           'name' => 'オフィス用ウォーターサーバー販売',
           'detail' => 'オフィスに富士の天然水を',
           'fee' => 5000,
           'imgpath' => 'people.jpg',
       ]);
       
       DB::table('stocks')->insert([
           'name' => '人材商材',
           'detail' => '土木関係の経験者が豊富です！',
           'fee' => 5000,
           'imgpath' => 'people.jpg',
       ]);
       
       DB::table('stocks')->insert([
           'name' => '人材商材',
           'detail' => '30代が豊富です！',
           'fee' => 15000,
           'imgpath' => 'people.jpg',
       ]);
    }
}
