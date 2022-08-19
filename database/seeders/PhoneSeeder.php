<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = [
            [
                'specs_id' => '1',
                'brand' => 'Vivo',
                'price' => 'P12,345',
            ],
            [
                'specs_id' => '2',
                'brand' => 'Oppo',
                'price' => 'P10,234',
            ],
        ];

        foreach($phones as $phone) {
            Phone::create($phone);
        }
    }
}
