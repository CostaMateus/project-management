<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', 'mateus@costamateus.com.br')->count() == 0) {
            $user = User::create([
                'name' => 'Mateus Costa',
                'email' => 'mateus@costamateus.com.br',
                'password' => bcrypt('Costa6151!'),
                'email_verified_at' => now()
            ]);
            $user->creation_token = null;
            $user->save();
        }
    }
}
