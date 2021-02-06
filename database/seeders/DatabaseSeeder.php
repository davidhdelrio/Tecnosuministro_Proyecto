<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clients;
use App\Models\Services;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user             = new User();
        $user->name       ='David hernandez del Rio';
        $user->email      ='riodavid82@hotmail.com';
        $user->phone      ='3003041882';
        $user->active     ='true';
        $user->avatar     ='public/img/avatar.jpg';
        $user->password   ='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->save();

        

        User::factory(5)->create();
        Clients::factory(10)->create();
        Services::factory(10)->create();
        Products::factory(10)->create();
    }
}
