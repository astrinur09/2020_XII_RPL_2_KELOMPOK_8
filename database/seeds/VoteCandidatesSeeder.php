<?php

use Illuminate\Database\Seeder;
use App\VoteOfCandidates;

class VoteCandidatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         VoteOfCandidates::create([
        	'voc_students_id' => '5',
        	'voc_candidates_id' => '1'
        	]);
        VoteOfCandidates::create([
        	'voc_students_id' => '6',
        	'voc_candidates_id' => '2'
        	]);
        VoteOfCandidates::create([
        	'voc_students_id' => '7',
        	'voc_candidates_id' => '2'
        	]);
        VoteOfCandidates::create([
        	'voc_students_id' => '8',
        	'voc_candidates_id' => '1'
        	]);
    }
}
