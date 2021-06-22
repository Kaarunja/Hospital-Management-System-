<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prescription;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class prescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prescription::create([
            'Pres_No' =>'PR001',
            'Pat_id' =>'P1',
            'Diagnosis' =>'Diabctes',
            'Dosage' =>'500mg',
            'Med_Name'=>'Metformin',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR002',
            'Pat_id' =>'P2',
            'Diagnosis' =>'Anti Convulsants',
            'Dosage' =>'0.5mg',
            'Med_Name'=>'Clonatepum',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR003',
            'Pat_id' =>'P3',
            'Diagnosis' =>'Anti Convulsants',
            'Dosage' =>'300mg',
            'Med_Name'=>'Gabapentic-Neuroutin',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR004',
            'Pat_id' =>'P4',
            'Diagnosis' =>'Anti Convulsants',
            'Dosage' =>'5mg',
            'Med_Name'=>'Diatepam',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR005',
            'Pat_id' =>'P5',
            'Diagnosis' =>'Antidepressants',
            'Dosage' =>'5mg',
            'Med_Name'=>'Flucxetine',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR006',
            'Pat_id' =>'P6',
            'Diagnosis' =>'Antihistamines',
            'Dosage' =>'4mg',
            'Med_Name'=>'Chlorpheniramine',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR007',
            'Pat_id' =>'P7',
            'Diagnosis' =>'Antihistamines',
            'Dosage' =>'4mg',
            'Med_Name'=>'Chlorpheniramine',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR008',
            'Pat_id' =>'P8',
            'Diagnosis' =>'Antianxiety',
            'Dosage' =>'10mg',
            'Med_Name'=>'Chlordiazepoxide',
          
          ]);
          Prescription::create([
            'Pres_No' =>'PR009',
            'Pat_id' =>'P9',
            'Diagnosis' =>'Antihistamines',
            'Dosage' =>'4mg',
            'Med_Name'=>'Chlorpheniramine',
          
          ]);
    }
}
