<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'B.Sc in CSE', 'code' => 'C'],
            ['name' => 'B.Sc in EEE', 'code' => 'PN'],
            ['name' => 'B.Sc in ME', 'code' => 'N'],
            ['name' => 'B.Sc in TE', 'code' => 'P'],
            ['name' => 'B.Sc in CE', 'code' => 'J'],
            ['name' => 'B.A in English', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
