<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    

     public function home()
        {
           $appointments = Appointment::all();

    
            return view('appointments.index', compact('appointments'));

        }
        public function store(Request $request)
        {
            $request->validate([
            'Date'=>'required',
            'Time'=>'required',
            'NIC_No'=>'required|numeric|min:10|regex:/(.*)\V/i',
            'Appointment_No'=>'required'
            ]);
    
            $appointment = new Appointment([
                'Date' => $request->get('Date'),
                'Time' => $request->get('Time'),
                'NIC_No' => $request->get('NIC_No'),
                'Doctor_Name' => $request->get('Doctor_Name'),
                'Specialization' => $request->get( 'Specialization'),
                'Appointment_No' => $request->get('Appointment_No')
            ]);
            $appointment->save();
            return view('blade-scafolding.receptionistPage')->with('success', 'Appointment saved!')->with('msg',"Appointmen Added");
        }
    
        public function create()
        {
            return view('appointments.appoint');
        }
    
        public function edit($id)
        {
            $appointment = Appointment::find($id);
            return view('appointments.edit', compact('appointment'));
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
            'Date'=>'required',
            'Time'=>'required',
            'NIC_No'=>'required',
            'Appointment_No'=>'required'
            ]);
    
            $appointment = Appointment::find($id);
            $appointment->Date =  $request->get('Date');
            $appointment->Time = $request->get('Time');
            $appointment->NIC_No = $request->get('NIC_No');
            $appointment->Doctor_Name = $request->get('Doctor_Name');
            $appointment->Specialization = $request->get('Specialization');
            $appointment->Appointment_No = $request->get('Appointment_No');
            $appointment->save();
    
            return redirect('/in')->with('success', 'Appointment updated!');
        }
    
        public function destroy($id)
        {
            $appointment = Appointment::find($id);
            $appointment->delete();
    
            return redirect('/in')->with('success', 'Appointment deleted!');
        }
        public function text(Request $request)
        {
            $search_text = $request->input('query');
            
            $Appointments=Appointment::where('NIC_No', '=', $search_text)->get();
            return view ('blade-scafolding.receptionist.appointmentDetail',compact('Appointments'));
        }
        
        public function Doctor_show(Request $request)
        {
            $doctors=DB::table('doctors')->get();
            $p=DB::table('appointments')->get();
            $np1=count($p)+1;
            $id="App".$np1;
            return view('blade-scafolding.receptionist.receptionistPage',compact('doctors', 'id'));
        }

        public function rstore(Request $request)
        {

            $request->validate([
                'Date'=>'required',
                'Time'=>'required',
                'NIC_No'=>'required|alphaNum|min:10|regex:/^[0-9]{9}[V]$/'
               
                ]);

        
            $appointment = new Appointment([
                'Period_ID'=> "0",
                'Doctor_ID'=> "0",
                'Pat_id'=> "0",
                'Date' => $request->get('Date'),
                'Time' => $request->get('Time'),
                'NIC_No' => $request->get('NIC_No'),
                'Doctor_Name' => $request->get('Doctor_Name'),
                'Specialization' => $request->get( 'Specialization'),
               
            ]);
            $appointment->save();
            return redirect()->back()->with('success', 'Appointment saved!')->with('msg',"Appointment Added Successfully!");
        }

    
    }
    


