<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        $item_seeds = [
            [
                'item_name' => 'TKオリジナルシャツ(L)',
                'detail' => 'TKオリジナルシャツのLサイズです',
                'price' => '1500',
                'image' => 'sample.png',
                'stock' => '150',
                'ctg_id' => '1',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルシャツ(M)',
                'detail' => 'TKオリジナルシャツのMサイズです',
                'price' => '1500',
                'image' => 'sample.png',
                'stock' => '200',
                'ctg_id' => '1',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルシャツ(S)',
                'detail' => 'TKオリジナルシャツのSサイズです',
                'price' => '1500',
                'image' => 'sample.png',
                'stock' => '120',
                'ctg_id' => '1',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルパンツ(L)',
                'detail' => 'TKオリジナルパンツのLサイズです',
                'price' => '2500',
                'image' => 'sample.png',
                'stock' => '100',
                'ctg_id' => '2',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルパンツ(M)',
                'detail' => 'TKオリジナルパンツのMサイズです',
                'price' => '2500',
                'image' => 'sample.png',
                'stock' => '150',
                'ctg_id' => '2',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルパンツ(S)',
                'detail' => 'TKオリジナルパンツのSサイズです',
                'price' => '2500',
                'image' => 'sample.png',
                'stock' => '100',
                'ctg_id' => '2',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルキャップ(ブラック)',
                'detail' => 'ブラックのTKオリジナルキャップです',
                'price' => '3500',
                'image' => 'sample.png',
                'stock' => '350',
                'ctg_id' => '3',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルキャップ(ホワイト)',
                'detail' => 'ホワイトのTKオリジナルキャップです',
                'price' => '3500',
                'image' => 'sample.png',
                'stock' => '300',
                'ctg_id' => '3',
                'delete_flg' => '0',
            ],
            [
                'item_name' => 'TKオリジナルキャップ(レッド)',
                'detail' => 'レッドのTKオリジナルキャップです',
                'price' => '3500',
                'image' => 'sample.png',
                'stock' => '300',
                'ctg_id' => '3',
                'delete_flg' => '0',
            ],
        ];

        foreach($item_seeds as $item){
            DB::table('items')->insert($item);
        }

    }
}
