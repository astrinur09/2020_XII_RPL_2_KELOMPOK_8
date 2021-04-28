<?php

use Illuminate\Database\Seeder;
use App\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create([
           'cdt_chairman_id' 	  => '1',
           'cdt_vice_chairman_id' => '2',
           'cdt_visi' => 'menuju sekolah yang ramah lingkungan',
           'cdt_misi' => 'menjadikan siswa siswi yang kreatif',
           'cdt_is_active' => '1',
      ]);
        Candidate::create([
           'cdt_chairman_id' 	  => '3',
           'cdt_vice_chairman_id' => '4',
           'cdt_visi' => 'membangun bangunan',
           'cdt_misi' => 'menjadi alien',
           'cdt_is_active' => '1',
      ]);

    }
}
