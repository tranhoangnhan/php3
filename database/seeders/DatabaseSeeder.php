<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Hoàng Nhân',
            'email' => 'nhanthps23407@gmail.com',
            'password' => bcrypt('123456'),
            'address' => 'Hà Nội',
            'idgroup' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Hoàng Nhân Client',
            'email' => 'hoangnhantran@outlook.com',
            'password' => bcrypt('123456'),
            'address' => 'Hà Nội',
            'idgroup' => 0,
        ]);
    }
}
