<?php

namespace Database\Seeders;

use App\Models\People;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Database\Seeders\Fakerphp;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        People::factory(30)->create();

        $user = new User();
        $user->name = 'Ibrahim Khalil';
        $user->email = 'demo@user.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('123');
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
