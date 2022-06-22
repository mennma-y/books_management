<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
        
        DB::table('books')->insert([
            'title' => '走れメロス',
            'url' => 'https://www.aozora.gr.jp/cards/000035/files/1567_14913.html',
            
        ]);
        DB::table('books')->insert([
            'title' => '羅生門',
            'url' => 'https://www.aozora.gr.jp/cards/000879/files/127_15260.html',
            
        ]);
        DB::table('books')->insert([
            'title' => '注文の多い料理店',
            'url' => 'https://www.aozora.gr.jp/cards/000081/files/43754_17659.html',
            
        ]);
        DB::table('books')->insert([
            'title' => 'スイミー',
            'url' => 'https://pictbook.info/ehon-list/isbn-9784769020011/',
            
        ]);
        DB::table('books')->insert([
            'title' => 'バッテリー',
            'url' => 'https://www.kadokawa.co.jp/product/200306000166/',
            
        ]);

    }
}
