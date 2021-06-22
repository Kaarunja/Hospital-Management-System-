<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appoinment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class appoinmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appoinment ::create([
            'App_No'=>'A001',
            'Pat_id'=>'P1',
            'Doctor_Name' => 'Mathu',
            'Doctor_ID' => 'DC002',
            'Booked_Date'=>'2020-11-18',
            'Booked_time'=>'9:00:00',
        
            ]);
        Appoinment ::create([
                'App_No'=>'A002',
                'Pat_id'=>'P2',
                'Doctor_Name' => 'John',
                'Doctor_ID' => 'DC001',
                'Booked_Date'=>'2020-12-18',
                'Booked_time'=>'10:00:00',
            
                ]);
            Appoinment ::create([
                    'App_No'=>'A003',
                    'Pat_id'=>'P3',
                    'Doctor_Name' => 'Mathu',
                    'Doctor_ID' => 'DC002',
                    'Booked_Date'=>'2020-12-19',
                    'Booked_time'=>'11:00:00',
                
                    ]);
                 Appoinment ::create([
                        'App_No'=>'A004',
                        'Pat_id'=>'P4',
                        'Doctor_Name' => 'Ravi',
                        'Doctor_ID' => 'DC003',
                        'Booked_Date'=>'2020-12-20',
                        'Booked_time'=>'12:00:00',
                    
                        ]);
                  Appoinment ::create([
                            'App_No'=>'A005',
                            'Pat_id'=>'P5',
                            'Doctor_Name' => 'Mathu',
                            'Doctor_ID' => 'DC002',
                            'Booked_Date'=>'2020-12-20',
                            'Booked_time'=>'09:00:00',
                        
                            ]);
                            Appoinment ::create([
                                'App_No'=>'A006',
                                'Pat_id'=>'P6',
                                'Doctor_Name' => 'Ravi',
                                'Doctor_ID' => 'DC003',
                                'Booked_Date'=>'2020-06-20',
                                'Booked_time'=>'10:00:00',
                            
                                ]);
                                Appoinment ::create([
                                    'App_No'=>'A007',
                                    'Pat_id'=>'P7',
                                    'Doctor_Name' => 'Thuva',
                                    'Doctor_ID' => 'DP002',
                                    'Booked_Date'=>'2020-09-20',
                                    'Booked_time'=>'12:00:00',
                                
                                    ]);
        
    }
}
