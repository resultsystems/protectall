<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user           = new User();
        $user->username = 'admin';
        $user->email    = 'admin@admin';
        $user->password = bcrypt('teste1');
        $user->save();
        // $this->call(UserTableSeeder::class);
    }
}
