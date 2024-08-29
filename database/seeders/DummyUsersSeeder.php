<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mas Operator',
                'email'=>'admin123@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('ijen123')
            ],
            [
                'name'=>'Mas Keuangan',
                'email'=>'keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas Marketing',
                'email'=>'marketing@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('123456')
            ],

        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
