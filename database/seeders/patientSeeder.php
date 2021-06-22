<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        patient::create([
            'Pat_id'=>'P1',
            'Pat_name'=>'Karis',
            'Pat_MobileNo'=>'0718756435',
            'Pat_Email'=>'karis@gmail.com',
            'Pat_password'=>Hash::make('pass123'),
            'Pat_address'=>'Jaffna',
            'Pat_DateOfBirth'=>'1995-05-23',
            'Pat_Gender'=>'Male',
            'Pat_Nic' =>'956545230v',
            

         ]);

         patient::create([
            'Pat_id'=>'P2',
            'Pat_name'=>'Thurai',
            'Pat_MobileNo'=>'0754509321',
            'Pat_Email'=>'thurai@gmail.com',
            'Pat_password'=>Hash::make('pass456'),
            'Pat_address'=>'Colombo',
            'Pat_DateOfBirth'=>'1990-02-12',
            'Pat_Gender'=>'Female',
            'Pat_Nic' =>'986545230v',
            

         ]);

         patient::create([
            'Pat_id'=>'P3',
            'Pat_name'=>'Rakan',
            'Pat_MobileNo'=>'0764534321',
            'Pat_Email'=>'rakan@gmail.com',
            'Pat_password'=>Hash::make('pass345'),
            'Pat_address'=>'Jaffna',
            'Pat_DateOfBirth'=>'1989-03-03',
            'Pat_Gender'=>'Male',
            'Pat_Nic' =>'896545230v',
            

         ]);
         patient::create([
            'Pat_id'=>'P4',
            'Pat_name'=>'Janu',
            'Pat_MobileNo'=>'0774535321',
            'Pat_Email'=>'janu@gmail.com',
            'Pat_password'=>Hash::make('pass678'),
            'Pat_address'=>'Kokuvil',
            'Pat_DateOfBirth'=>'1990-09-20',
            'Pat_Gender'=>'Female',
            'Pat_Nic' =>'905654530v',
            

         ]);

         patient::create([
            'Pat_id'=>'P5',
            'Pat_name'=>'Dinu',
            'Pat_MobileNo'=>'0750434321',
            'Pat_Email'=>'dinu@gmail.com',
            'Pat_password'=>Hash::make('pass876'),
            'Pat_address'=>'Vavuniya',
            'Pat_DateOfBirth'=>'1980-08-03',
            'Pat_Gender'=>'Female',
            'Pat_Nic' =>'806055230v',
            

         ]);

         patient::create([
            'Pat_id'=>'P6',
            'Pat_name'=>'Kanesh',
            'Pat_MobileNo'=>'0759934321',
            'Pat_Email'=>'kanesh@gmail.com',
            'Pat_password'=>Hash::make('pass980'),
            'Pat_address'=>'Colombo',
            'Pat_DateOfBirth'=>'1984-04-29',
            'Pat_Gender'=>'Male',
            'Pat_Nic' =>'840654230v',
            

         ]);

         patient::create([
            'Pat_id'=>'P7',
            'Pat_name'=>'Siva',
            'Pat_MobileNo'=>'0710405341',
            'Pat_Email'=>'siva@gmail.com',
            'Pat_password'=>Hash::make('pass908'),
            'Pat_address'=>'Kokuvil',
            'Pat_DateOfBirth'=>'1890-05-20',
            'Pat_Gender'=>'Male',
            'Pat_Nic' =>'890525452v',
            

         ]);

         patient::create([
            'Pat_id'=>'P8',
            'Pat_name'=>'Nilo',
            'Pat_MobileNo'=>'0750405341',
            'Pat_Email'=>'nilo@gmail.com',
            'Pat_password'=>Hash::make('pass565'),
            'Pat_address'=>'Jaffna',
            'Pat_DateOfBirth'=>'1990-04-23',
            'Pat_Gender'=>'Male',
            'Pat_Nic' =>'900504452v',
            

         ]);
         patient::create([
            'Pat_id'=>'P9',
            'Pat_name'=>'Siya',
            'Pat_MobileNo'=>'0760904041',
            'Pat_Email'=>'siya@gmail.com',
            'Pat_password'=>Hash::make('pass777'),
            'Pat_address'=>'Vavuniya',
            'Pat_DateOfBirth'=>'1999-05-31',
            'Pat_Gender'=>'Female',
            'Pat_Nic' =>'990525452v',
            

         ]);
         patient::create([
            'Pat_id'=>'P10',
            'Pat_name'=>'Kobi',
            'Pat_MobileNo'=>'0750409841',
            'Pat_Email'=>'kobi@gmail.com',
            'Pat_password'=>Hash::make('pass444'),
            'Pat_address'=>'Kokuvil',
            'Pat_DateOfBirth'=>'1985-09-06',
            'Pat_Gender'=>'Female',
            'Pat_Nic' =>'850525452v',
            

         ]);

    }
}
