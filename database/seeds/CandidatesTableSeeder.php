<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('candidates')->delete();

        $candidates = array(
            ['id' => 1, 'candidate_name' => '', 'symbol' => '',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'candidate_name' => '', 'symbol' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'candidate_name' => '', 'symbol' => '',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'candidate_name' => '', 'symbol' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'candidate_name' => '', 'symbol' => '',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'candidate_name' => '', 'symbol' => '','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'candidate_name' => '', 'symbol' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('candidates')->insert($candidates);
    }

}