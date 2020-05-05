<?php

use App\User;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'fassi932@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Faisal Malik',
                'email' => 'fassi932@gmail.com',
                'role' => 'admin',
                'password' => Hash::make(11221122)
            ]);
        }

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  'public/img/logo-dark.png',
            'about' =>  'Lorem Saab Nay KAl LAkka jkjd lokka lokka Lorem Saab Nay KAl LAkka jkjd lokka lokka Lorem Saab Nay KAl LAkka jkjd lokka lokka',
            'facebook'  =>  'facebook.com',
            'youtube'   =>  'youtube.com'
        ]);
    }
}
