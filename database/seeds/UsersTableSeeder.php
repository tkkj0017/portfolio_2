<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user_seeds = [
            [
                'user_name' => 'tkkj0017',
                'email' => 'tttvvvaken@gmail.com',
                'password' => Hash::make('TKtk1724'),
                'address' => '東京都大田区矢口3',
                'tel' => '08032151499',
            ],
            [
                'user_name' => 'takeya',
                'email' => 'tttvvvaken2@gmail.com',
                'password' => Hash::make('TKtk1724'),
                'address' => '東京都大田区矢口3',
                'tel' => '08032151490',
            ],
            [
                'user_name' => 'takeya_kojima',
                'email' => 'tttvvvaken3@gmail.com',
                'password' => Hash::make('TKtk1724'),
                'address' => '東京都大田区矢口4',
                'tel' => '08032151491',
            ],
            [
                'user_name' => 'kojima_takeya',
                'email' => 'tttvvvaken3@gmail.com',
                'password' => Hash::make('TKtk1724'),
                'address' => '東京都大田区矢口5',
                'tel' => '08032151492',
            ],
        ];
        foreach($user_seeds as $user){
           DB::table('users')->insert($user); 
        }
    }
}
