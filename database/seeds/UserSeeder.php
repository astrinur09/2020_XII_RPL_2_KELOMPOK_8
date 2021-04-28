<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'role_id' => '1',
            'usr_email' => 'admin@example.com',
            'usr_password' => Hash::make('admin123123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');

        $siswa = User::create([
            'usr_name' => 'Aul',
            'role_id' => '2',
            'usr_email' => 'aul@gmail.com',
            'usr_password' => Hash::make('aul221'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Bima',
            'role_id' => '2',
            'usr_email' => 'bima@gmail.com',
            'usr_password' => Hash::make('bima123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Astri',
            'role_id' => '2',
            'usr_email' => 'astri@gmail.com',
            'usr_password' => Hash::make('acil456'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Putri',
            'role_id' => '2',
            'usr_email' => 'putri@gmail.com',
            'usr_password' => Hash::make('pupu11'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Roby',
            'role_id' => '2',
            'usr_email' => 'roby@example.com',
            'usr_password' => Hash::make('obi3333'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Jaya',
            'role_id' => '2',
            'usr_email' => 'jaya@example.com',
            'usr_password' => Hash::make('jaya1111'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Nabila',
            'role_id' => '2',
            'usr_email' => 'nabila@example.com',
            'usr_password' => Hash::make('nabila444'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);
        $siswa = User::create([
            'usr_name' => 'Rahma',
            'role_id' => '2',
            'usr_email' => 'rahma@example.com',
            'usr_password' => Hash::make('rahma0303'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);


        $siswa->assignRole('student');

       
    }
}
