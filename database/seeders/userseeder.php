<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kevin Pedraza',
            'email' => 'kdpedrazaj@gmail.com',
            'password' => Hash::make('msTg95BHgJNLpiE'),
            'current_team_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        team::create([
            'user_id' => '1',
            'name' => "Kevin's Team",
            'personal_team' => '1',
            'personal_team' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
