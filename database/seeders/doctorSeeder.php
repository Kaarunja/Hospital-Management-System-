<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            'Doctor_ID' => 'DC001',
            'Specialization' => 'Consultant',
            'Doctor_Name' => 'John',
            'Available_time_slot' => '5',
            'Period_ID' => 'PI002',
            'No_of_Patients' => '20',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DC002',
            'Specialization' => 'Consultant',
            'Doctor_Name' => 'Mathu',
            'Available_time_slot' => '3',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '25',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DC003',
            'Specialization' => 'Consultant',
            'Doctor_Name' => 'Ravi',
            'Available_time_slot' => '6',
            'Period_ID' => 'PI004',
            'No_of_Patients' => '30',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DP001',
            'Specialization' => 'Physician',
            'Doctor_Name' => 'Meena',
            'Available_time_slot' => '4',
            'Period_ID' => 'PI005',
            'No_of_Patients' => '25',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DP002',
            'Specialization' => 'Physician',
            'Doctor_Name' => 'Thuva',
            'Available_time_slot' => '5',
            'Period_ID' => 'PI001',
            'No_of_Patients' => '15',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DP003',
            'Specialization' => 'Physician',
            'Doctor_Name' => 'Ram',
            'Available_time_slot' => '6',
            'Period_ID' => 'PI002',
            'No_of_Patients' => '25',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DG001',
            'Specialization' => 'Gentral Surgeon',
            'Doctor_Name' => 'Jathu',
            'Available_time_slot' => '3',
            'Period_ID' => 'PI002',
            'No_of_Patients' => '30',
         ]);
       
         Doctor::create([
            'Doctor_ID' => 'DG002',
            'Specialization' => 'Gentral Surgeon',
            'Doctor_Name' => 'Akil',
            'Available_time_slot' => '5',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '28',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DG003',
            'Specialization' => 'Gentral Surgeon',
            'Doctor_Name' => 'Akil',
            'Available_time_slot' => '6',
            'Period_ID' => 'PI001',
            'No_of_Patients' => '28',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DO001',
            'Specialization' => 'Orthopaedic Surgeon',
            'Doctor_Name' => 'Mery',
            'Available_time_slot' => '3',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '20',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DO002',
            'Specialization' => 'Orthopaedic Surgeon',
            'Doctor_Name' => 'Thivi',
            'Available_time_slot' => '5',
            'Period_ID' => 'PI004',
            'No_of_Patients' => '15',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DO003',
            'Specialization' => 'Orthopaedic Surgeon',
            'Doctor_Name' => 'Kobi',
            'Available_time_slot' => '4',
            'Period_ID' => 'PI005',
            'No_of_Patients' => '30',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DPS001',
            'Specialization' => 'Psychitrist',
            'Doctor_Name' => 'Siya',
            'Available_time_slot' => '4',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '17',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DPS002',
            'Specialization' => 'Psychitrist',
            'Doctor_Name' => 'Puvi',
            'Available_time_slot' => '2',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '17',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DPS003',
            'Specialization' => 'Psychitrist',
            'Doctor_Name' => 'Jana',
            'Available_time_slot' => '4',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '17',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DPD001',
            'Specialization' => 'Paediatrician',
            'Doctor_Name' => 'Kavi',
            'Available_time_slot' => '5',
            'Period_ID' => 'PI002',
            'No_of_Patients' => '23',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DPD002',
            'Specialization' => 'Paediatrician',
            'Doctor_Name' => 'Vinu',
            'Available_time_slot' => '6',
            'Period_ID' => 'PI002',
            'No_of_Patients' => '10',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DPD003',
            'Specialization' => 'Paediatrician',
            'Doctor_Name' => 'Ranu',
            'Available_time_slot' => '3',
            'Period_ID' => 'PI002',
            'No_of_Patients' => '15',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DV001',
            'Specialization' => 'Vascular Surgeon',
            'Doctor_Name' => 'GOwri',
            'Available_time_slot' => '4',
            'Period_ID' => 'PI004',
            'No_of_Patients' => '10',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DV002',
            'Specialization' => 'Vascular Surgeon',
            'Doctor_Name' => 'Banu',
            'Available_time_slot' => '5',
            'Period_ID' => 'PI005',
            'No_of_Patients' => '10',
         ]);
         Doctor::create([
            'Doctor_ID' => 'DV003',
            'Specialization' => 'Vascular Surgeon',
            'Doctor_Name' => 'Piri',
            'Available_time_slot' => '6',
            'Period_ID' => 'PI003',
            'No_of_Patients' => '10',
         ]);
    }
}
