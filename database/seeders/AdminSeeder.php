<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'firstname' => 'Kyle',
            'lastname' => 'Mabaso',
            'email' => 'kyle@insytive.co.za',
            'email_verified_at' => now(),
            'password' => bcrypt('kH3nsy0914!'),
            'remember_token' => Str::random(10)
        ]);

        $user->assignRole('admin');
        $permissions = Permission::pluck('id','id')->all();
        $user->syncPermissions($permissions);
        $user->assignRole([$user->id]);
    }
}
