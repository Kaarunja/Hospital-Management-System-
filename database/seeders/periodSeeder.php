<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Period;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class periodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create([
           
            'Day'=>'Monday',
            'Time_Period'=>'8 AM - 10 AM',
            'Doctor_ID'=>'DOC1',
            'Doctor_Name'=>'John',
            'Specialization'=>'Consultant',
            'No_of_Patients'=>25,
            'Date'=>'2021-01-02'
            
        ]);

        Period::create([
           
            'Day'=>'Tuesday',
            'Time_Period'=>'10 AM - 12 PM',
            'Doctor_ID'=>'DOC2',
            'Doctor_Name'=>'Jenny',
            'Specialization'=>'General Surgeon',
            'No_of_Patients'=>30,
            'Date'=>'2021-01-05'
            
        ]);

        Period::create([
           
            'Day'=>'Wednesday',
            'Time_Period'=>'1 PM - 3 PM',
            'Doctor_ID'=>'DOC3',
            'Doctor_Name'=>'Henry',
            'Specialization'=>'Cardiologist',
            'No_of_Patients'=>20,
            'Date'=>'2121-01-03'
            
        ]);

        Period::create([
           
            'Day'=>'Thursday',
            'Time_Period'=>'3 PM - 5 PM',
            'Doctor_ID'=>'DOC4',
            'Doctor_Name'=>'Mery',
            'Specialization'=>'Neuro Surgeon',
            'No_of_Patients'=>35,
            'Date'=>'2021-01-04'
            
        ]);

        Period::create([
           
            'Day'=>'Friday',
            'Time_Period'=>'5 PM - 7 PM',
            'Doctor_ID'=>'DOC5',
            'Doctor_Name'=>'Paul',
            'Specialization'=>'Physician',
            'No_of_Patients'=>25,
            'Date'=>'2021-01-01'
            
        ]);

        Period::create([
           
            'Day'=>'Saturday',
            'Time_Period'=>'7 PM - 9 PM',
            'Doctor_ID'=>'DOC6',
            'Doctor_Name'=>'Jenifer',
            'Specialization'=>'Consultant',
            'No_of_Patients'=>20,
            'Date'=>'2021-01-08'
            
        ]);

        Period::create([
           
            'Day'=>'Monday',
            'Time_Period'=>'8 AM - 10 AM',
            'Doctor_ID'=>'DOC7',
            'Doctor_Name'=>'Micheal',
            'Specialization'=>'Cardiologist',
            'No_of_Patients'=>30,
            'Date'=>'2021-01-06'
            
        ]);

        Period::create([
           
            'Day'=>'Thursday',
            'Time_Period'=>'1 PM - 3 PM',
            'Doctor_ID'=>'DOC8',
            'Doctor_Name'=>'Peter',
            'Specialization'=>'General Surgeon',
            'No_of_Patients'=>35,
            'Date'=>'2021-01-09'
            
        ]);

        Period::create([
           
            'Day'=>'Tuesday',
            'Time_Period'=>'5 PM - 7 PM',
            'Doctor_ID'=>'DOC9',
            'Doctor_Name'=>'George',
            'Specialization'=>'Physician',
            'No_of_Patients'=>30,
            'Date'=>'2021-01-07'
            
        ]);

        Period::create([
           
            'Day'=>'Saturday',
            'Time_Period'=>'10 AM - 12 PM',
            'Doctor_ID'=>'DOC10',
            'Doctor_Name'=>'Rachel',
            'Specialization'=>'Consultant',
            'No_of_Patients'=>20,
            'Date'=>'2021-01-10'
            
        ]);
    }
}
