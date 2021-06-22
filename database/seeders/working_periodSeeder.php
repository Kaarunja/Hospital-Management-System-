<?php

namespace Database\Seeders;

use App\Models\Working_period;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class working_periodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Working_period ::create([
            'Period_ID'=>'PI001',
            'Doctor_ID'=>'DC001',
            'Date' => '2020-08-10',
            'No_of_Patients' => '20',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI002',
            'Doctor_ID'=>'DC002',
            'Date' => '2020-09-10',
            'No_of_Patients' => '25',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI003',
            'Doctor_ID'=>'DC003',
            'Date' => '2020-10-10',
            'No_of_Patients' => '25',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI004',
            'Doctor_ID'=>'DP001',
            'Date' => '2020-06-10',
            'No_of_Patients' => '30',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI002',
            'Doctor_ID'=>'DP002',
            'Date' => '2020-05-10',
            'No_of_Patients' => '15',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI003',
            'Doctor_ID'=>'DP002',
            'Date' => '2020-05-10',
            'No_of_Patients' => '32',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI004',
            'Doctor_ID'=>'DG001',
            'Date' => '2020-10-08',
            'No_of_Patients' => '28',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI005',
            'Doctor_ID'=>'DG002',
            'Date' => '2020-09-10',
            'No_of_Patients' => '18',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI002',
            'Doctor_ID'=>'DP003',
            'Date' => '2020-07-10',
            'No_of_Patients' => '17',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI001',
            'Doctor_ID'=>'DO003',
            'Date' => '2020-07-10',
            'No_of_Patients' => '35',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI003',
            'Doctor_ID'=>'DPS001',
            'Date' => '2020-11-03',
            'No_of_Patients' => '35',
         ]);
         Working_period ::create([
            'Period_ID'=>'PI004',
            'Doctor_ID'=>'DPS002',
            'Date' => '2020-07-24',
            'No_of_Patients' => '10',
         ]);
    }
}
