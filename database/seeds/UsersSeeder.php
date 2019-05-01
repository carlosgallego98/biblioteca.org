<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnico = User::create([
            'name' => "Jean Carlos",
            'surname' => "Gallego Mosquera",
            'phonenumber' => "3115275483",
            'email' => "jean.gallego@biblioteca.org.com",
            'password' => Hash::make("tecnico"),
            'di' => 1111817255
        ]);
        $tecnico->assignRole('tecnico');

    }
}