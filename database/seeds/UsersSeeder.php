<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Groups
        if(!$user = User::find(1)) {
            $user = new User;
            $user->id = 1;
            $user->name = 'User';
            $user->email = 'test@test.com';
            $user->save();
        } else {
            //$user->save();
        }
    }
}
