<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Anh";
        $user->username = "test";
        $user->password = Hash::make('password');
        $user->email = "test@gmail.com";
        $user->company = "Marshall";
        $user->department = "CS";
        $user->phone = "123-456-7890";
        $user->address = "123 Huntington, WV, 25703";
        $user->jobtitle = "Student";
        $user->isactive = true;
        $user->save();
    }
}