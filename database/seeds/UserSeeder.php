<?php

use App\User;
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
        $user = new User();
        $user->name = 'Auriga Aristo';
        $user->email = 'auriga@udemy.com';
        $user->password = '$2y$10$BOTUCqhpmME6MlSUHpSDn.OTY/X5X73IhzP3/OKWAeVWlaTPzPmoO';
        $user->save();
    }
}
