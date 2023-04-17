<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Arikun',
            'email' => 'arikun@gmail.com',
            'no_hp' => '085155361211',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'no_hp' => '087828811545',
            'password' => bcrypt('secret'),
            'role' => 'seller'
        ]);
    }
}
