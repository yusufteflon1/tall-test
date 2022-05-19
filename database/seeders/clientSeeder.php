<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            DB::table('clients')->insert([

                'last_name' => 'Amano',
                'first_name' => 'Joel',
                'email' => 'Aano@aea.org.ng',
                'telephone' => '662758',
                'education' => 'BSC',
                'gender' => 'Male',
                'age_range' => '25-35',
                'disability' => 'None',
                'state_of_origin' => 'Yola',
                'address' => 'AEA Abuja',
                'house_condition' => 'Rented',
                'lga' => 'FCT',
                'identification' => 'Passport',
                'id_number' => '126R33',
                'nationality' => 'Nigerian',
                'qualification' => 'CAC,FIRS',
                'staff_id' => '23',
                'date' => '2020-01-01',
                'client_id' => '4',
                'id_issue_date' => '2020-02-02',
                'verified' => '1',
                'id_expiry' => '2025-02-02'
            ]);
        }
    }
}
