<?php

namespace Database\Seeders;

use App\Models\DataDua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataDuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datadua = [
            [
                'nama'           => '1.1',
            ],
            [
                'nama'           => '1.2',
            ],
            [
                'nama'           => '1.3',
            ],
            [
                'nama'           => '1.4',
            ],
            [
                'nama'           => '2.1',
            ],
            [
                'nama'           => '2.2',
            ],
            [
                'nama'           => '2.3',
            ],
            [
                'nama'           => '2.4',
            ],
            [
                'nama'           => '3.1',
            ],
            [
                'nama'           => '3.2',
            ],
            [
                'nama'           => '3.3',
            ],
            [
                'nama'           => '3.4',
            ],
            [
                'nama'           => '4.1',
            ],
            [
                'nama'           => '4.2',
            ],
            [
                'nama'           => '4.3',
            ],
            [
                'nama'           => '4.4',
            ],
        ];

        DataDua::insert($datadua);
    }
}
