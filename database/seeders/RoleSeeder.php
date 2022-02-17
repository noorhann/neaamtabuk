<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        Role::create ([
            'name'=>'Donor',
            'slug'=>Str::slug('Donor'),
            'name_ar'=>'متبرع ',
            'slug_ar'=>'متبرع ',
        ]);

        Role::create ([
            'name'=>'Delegate',
            'slug'=>Str::slug('Delegate'),
            'name_ar'=>'المندوب',
            'slug_ar'=>'المندوب',
        ]);

        Role::create ([
            'name'=>'Recipent',
            'slug'=>Str::slug('recipent'),
            'name_ar'=>'المستفيد',
            'slug_ar'=>'المستفيد',
        ]);

        Role::create ([
            'name'=>'Admin',
            'slug'=>Str::slug('Admin'),
            'name_ar'=>'مشرف',
            'slug_ar'=>'مشرف',
        ]);
    }
}
