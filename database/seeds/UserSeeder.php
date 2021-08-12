<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'admin',
            'email' => 'admin@212.com',
            'mobile' => '01123211442',
            'password' => bcrypt('password'),
            'type' => '1',
        ]);
    }
}
