<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dorms')->delete();
        $data = [
            ['name' => 'Mockbul Hossain Boys Hostel'],
            ['name' => 'Mockbul Hossain Girls Hostel'],
            ['name' => 'Tahera Khanam Girls Hostel'],
            ['name' => 'Mona Girls Hostel'],
        ];
        DB::table('dorms')->insert($data);
    }
}
