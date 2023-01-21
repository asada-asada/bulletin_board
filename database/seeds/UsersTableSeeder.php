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
                'over_name'=>'',
                'under_name'=>'',
                'over_name_kana'=>'',
                'under_name_kana'=>'',
                'mail_address'=>'',
                'sex'=>'',
                'birth_day'=>'',
                'role'=>'',
                'password'=>'',
                'created_at'=>'',
                'updated_at'=>'',
                'deleted_at'=>'',
                'created_at'=>now(),
            ],

            ]);

    }
}