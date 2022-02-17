<?php

namespace Database\Seeders;

use App\Models\DonationType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DonationTypeSeeder extends Seeder
{
    
    public function run()
    {
        DonationType::create ([
            'name'=>'Daily donation',
            'slug'=>Str::slug('Daily donation'),
            'name_ar'=>'تبرع يومي',
            'slug_ar'=>'تبرع_يومي',
        ]);

        
        DonationType::create ([
            'name'=>'Donation according to availability',
            'slug'=>Str::slug('Donation according to availability'),
            'name_ar'=>'تبرع حسب الإتاحة',
            'slug_ar'=>'تبرع_حسب_الإتاحة',
        ]);
    }
}
