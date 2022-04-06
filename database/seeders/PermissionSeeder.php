<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create manifest',
            'edit manifest',
            'update manifest',
            'delete manifest',
            'create requisition',
            'edit requisition',
            'update requisition',
            'delete requisition',
            'create users',
            'edit users',
            'update users',
            'delete users',
            'create clients',
            'edit clients',
            'update clients',
            'delete clients',
            'create drivers',
            'edit drivers',
            'update drivers',
            'delete drivers',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
