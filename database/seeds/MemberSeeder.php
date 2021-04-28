<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Member::create([
                'mbr_id' => '1',
                'mbr_student_id' => '9',
                'mbr_reason' => 'Ingin menjadi panutan  sekolah',
                'mbr_division' => 'anggota',
                'mbr_is_active' => '1',
                ]);
    }
}
