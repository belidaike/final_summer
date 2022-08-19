<?php

namespace Database\Seeders;

use App\Models\Specs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specs = [
            [
                'phone_id' => '1',
                'processor' => 'Dnapdragon 800',
                'camera' => '50MP',
                'battery' => '7,000'
            ],
            [
                'phone_id' => '2',
                'processor' => 'Dimensity 700',
                'camera' => '48MP',
                'battery' => '4,300'
            ],
        ];

        foreach($specs as $spec) {
            Specs::create($spec);
        }
    }
}
