<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        Student::create([
                'std_usr_id' => '2',
                'nis' => '1819.10.013',
                
                'class' => 'XII RPL 2',
                'gender' => 'Perempuan',
                'status' => '0'
                ]);
     
        Student::create([
                'std_usr_id' => '3',
                'nis' => '1819.10.016',
                
                'class' => 'XII RPL 1',
                'gender' => 'Laki Laki',
                'status' => '0'
                ]);
            Student::create([
                'std_usr_id' => '4',
                'nis' => '1819.10.011',
                
                'class' => 'XII',
                'gender' => 'Perempuan',
                'status' => '0'
                ]);
            Student::create([
    			'std_usr_id' => '5',
    			'nis' => '1819.10.060',
            	
            	'class' => 'XII',
            	'gender' => 'Laki Laki',
                'status' => '0'
    			]);
            Student::create([
    			'std_usr_id' => '6',
    			'nis' => '1819.10.065',
            	
            	'class' => 'XII',
            	'gender' => 'Laki Laki',
                'status' => '0'
    			]);
            Student::create([
    			'std_usr_id' => '7',
    			'nis' => '1819.10.033',
            	
            	'class' => 'XII',
            	'gender' => 'Perempuan',
                'status' => '0'
    			]);
            Student::create([
    			'std_usr_id' => '8',
    			'nis' => '1819.10.100',
            	
            	'class' => 'XII',
            	'gender' => 'Perempuan',
                'status' => '0'
    			]);
            Student::create([
    			'std_usr_id' => '9',
    			'nis' => '1819.10.101',
            	
            	'class' => 'XII',
            	'gender' => 'Perempuan',
                'status' => '0'
    			]);


    }
}
