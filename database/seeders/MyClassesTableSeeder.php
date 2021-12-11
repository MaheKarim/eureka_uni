<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'B.Sc in CSE (Spring Semester)', 'class_type_id' => $ct[2]],
            ['name' => 'B.Sc in CSE (Fall Semester)', 'class_type_id' => $ct[2]],
            ['name' => 'B.Sc in CSE (Summer Semester)', 'class_type_id' => $ct[2]],
            ['name' => 'B.Sc in Pharmacy (Spring Semester)', 'class_type_id' => $ct[3]],
            ['name' => 'B.Sc in Pharmacy (Fall Semester)', 'class_type_id' => $ct[3]],
            ['name' => 'M.Sc in CSE (Summer Semester)', 'class_type_id' => $ct[4]],
            ['name' => 'M.Sc in CSE (Fall Semester)', 'class_type_id' => $ct[4]],
            ['name' => 'M.Sc in Textile (Fall Semester)', 'class_type_id' => $ct[5]],
            ['name' => 'B.A in English', 'class_type_id' => $ct[5]],
            ['name' => 'B.B.A.', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
