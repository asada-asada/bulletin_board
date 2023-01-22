<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'over_name'=>'あ',
                'under_name'=>'あ',
                'over_name_kana'=>'ア',
                'under_name_kana'=>'ア',
                'mail_address'=>'a@com',
                'sex'=>'1',
                'birth_day'=>'2000-01-01',
                'role'=>'1',
                'password'=>Hash::make('password'),
                'created_at'=>now(),
            ],
            [
                'over_name'=>'い',
                'under_name'=>'い',
                'over_name_kana'=>'イ',
                'under_name_kana'=>'イ',
                'mail_address'=>'i@com',
                'sex'=>'2',
                'birth_day'=>'2002-02-02',
                'role'=>'2',
                'password'=>Hash::make('password'),
                'created_at'=>now(),
            ],
            [
                'over_name'=>'う',
                'under_name'=>'う',
                'over_name_kana'=>'ウ',
                'under_name_kana'=>'ウ',
                'mail_address'=>'u@com',
                'sex'=>'3',
                'birth_day'=>'2003-03-03',
                'role'=>'3',
                'password'=>Hash::make('password'),
                'created_at'=>now(),
            ],
            [
                'over_name'=>'え',
                'under_name'=>'え',
                'over_name_kana'=>'エ',
                'under_name_kana'=>'エ',
                'mail_address'=>'e@com',
                'sex'=>'1',
                'birth_day'=>'2004-04-04',
                'role'=>'4',
                'password'=>Hash::make('password'),
                'created_at'=>now(),
            ],

            ]);

    }
}