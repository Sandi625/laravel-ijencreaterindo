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
                'email'=>'dhani123@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('ijen123')
            ],
            [
                'name'=>'Mas Keuangan',
                'email'=>'richard123@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('ijen123')
            ],
            [
                'name'=>'Mas Marketing',
                'email'=>'eksal123@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('ijen123')
            ],
            [
                'name'=>'Mas Admin',
                'email'=>'putri123@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('ijen123')
            ],

        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
