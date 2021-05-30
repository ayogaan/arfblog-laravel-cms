<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'admin',
               'email'=>'admin@arfblog.com',
               'role_id'=>'1',
               'password'=> bcrypt('arfblog'),
            ],
            [
               'name'=>'user',
               'email'=>'user@arfblog.com',
               'role_id'=>'0',
               'password'=> bcrypt('arfblog'),
            ],
        ];
        foreach($userData as $key=>$val){
            User::create($val);
        }

    }
}
