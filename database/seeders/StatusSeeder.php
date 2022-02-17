<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    
    public function run()
    {
        Status::create([
            'name'=>'Received and distributed',
            'slug'=>Str::slug('Received and distributed'),
            'name_ar'=>'تم الإستلام وجاري التوزيع',
            'slug_ar'=>'تم_الإستلام_وجاري_التوزيع',
        ]);

        Status::create([
            'name'=>'Received and prepration in progress',
            'slug'=>Str::slug('Received and prepration in progress'),
            'name_ar'=>'تم الإستلام وجاري التجهيز',
            'slug_ar'=>'تم_الإستلام_وجاري_التجهيز',
        ]);

        Status::create([
            'name'=>'Delivered',
            'slug'=>Str::slug('Delivered'),
            'name_ar'=>'تم التوصيل',
            'slug_ar'=>'تم_التوصيل',
        ]);

        Status::create([
            'name'=>'Not Received',
            'slug'=>Str::slug('NOT Received'),
            'name_ar'=>'لم يتم الإستلام',
            'slug_ar'=>'لم_يتم_الإستلام',
        ]);
    }
}
