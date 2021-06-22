<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AppointController;
use App\Http\Controllers\admin;
use App\Http\Controllers\TimeTableController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MedicineStockController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BillConroller;


Route::get('/', function () {
  $c=DB::table('periods')->get();
    return view('blade-scafolding.home')->with('c',$c);
});
/*Route::post('/ajax',[FrontendController::class,'ajax']);*/

Route::get('/login',[FrontendController::class,'loginpage'])->name('login');
/*Forget Password*/
Route::get('/forget',function(){
      return view('blade-scafolding.forget_password');
    });

/*CHAT*/
Route::get('patchat/{c}/', 'FrontendController@patchat')->name('patchat');
  
Route::get('/regi',[FrontendController::class,'Registrationpage']);
Route::get('/regi_Book', function () {
	$p=DB::table('patients')->get();
    $np1=count($p)+1;
    $id="Pat".$np1;
    return view('blade-scafolding.registreAfterBook')->with('id',$id)->with('msg',"")->with('messege',"");
});
Route::get('/channel',[FrontendController::class,'channelDetails']);
/*patient login then booking*/
Route::get('/book/{id}/{patid}', 'Pat@book')->name('book');
/*Home page booking*/
Route::get('booking/{c}/', 'FrontendController@booking')->name('booking');
/*book delete*/
Route::get('bkdlt/{c}/', 'Pat@bookdlt')->name('bkdlt');

Route::get('patpage/{c}/', 'FrontendController@afterLoginPatientPage')->name('patpage');
Route::get('docpage/{c}/', 'FrontendController@afterLoginDoctoPage')->name('docpage');


Route::get('patRecord/{c}/', 'FrontendController@patientRecordPage')->name('patRecord');

Route::post('/log','login@log');
Route::get('addPrscptn/{c}/', 'FrontendController@addPrescriptionPage')->name('addPrscptn');
Route::post('/savepres', 'doccontroller@prescript');
Route::post('/register', 'Pat@register');
/*home registration line37*/
Route::post('/hmreg', 'Pat@hmreg');
Route::post('/appointment',[AppointController::class,'store']);
Route::post('/docsearch', 'Pat@docsearch');
/*doc image & pat image line */
Route::post('/docimage', 'doccontroller@docimg');
Route::post('/patimage', 'Pat@patimg');
 





  /**********************DOCTOR PAGE******************************/
Route::get('/docpage',[FrontendController::class,'afterLoginDoctoPage']);

/************************ End Doctor Page************************/








  /*********************** RECEPTIONIST PAGE*************************************/
Route::get('/recPage',[FrontendController::class,'receptPage'])->name('recPage');

Route::get('/pharmPage',[FrontendController::class,'pharmasistPage'])->name('pharmPage');

//Route::get('/pharmPage',[FrontendController::class,'pharmasistPage']);

Route::get('/appDet', function () {
  return view('blade-scafolding.receptionist.appointmentDetail');
});


Route::get('/text', 'AppointController@text');
Route::get('/ttable', function () {
  return view('blade-scafolding.receptionist.timeTable');
});

Route::get('/repchat', 'ChatController@repchat')->name('repchat');
/*chat*/
Route::post('/recreply','ChatController@recreply');
Route::post('/recsend','ChatController@recsend'); 
Route::post('/rappointment','AppointController@rstore'); 

  /*Timetable Receptionist*/

  Route::get('/timetab',[TimeTableController::class,'display']);

  
 
  Route::get('/searchtab',[TimeTableController::class,'searchtab']);

 /***********************************End receptionist Page*************************************/






/*************************************  PHARMACIST PAGE*********************************************/
//Route::get('/pharmPage',[FrontendController::class,'pharmasistPage']);
/************************************** End Pharmacy Page*******************************************/







/*forgot password*/

Route::post('/forgetpsw','login@forgotpass');

/*chat*/
Route::post('/patreply','Pat@reply');
Route::post('/patsend','Pat@send');


Route::get('/timeT',function(){
    	return view('blade-scafolding.table');
    });








/*********************************ADMIN*****************************************/
Route::get('/admin', 'FrontendController@admin')->name('admin');
Route::get('/adm_regi',[admin::class,'regi_page']);
Route::get('/pharegi',function(){
      return view('blade-scafolding.admin.pham_register');
    });
Route::get('/ttable_admin',[FrontendController::class,'timetable']);
Route::post('/others_reg','admin@register');
Route::get('/updatedate',[FrontendController::class,'updatedate']);
Route::post('/addtt','admin@addtt');

Route::resource('medicine_stocks', 'MedicineStockController');
  
Route::get('/contact',[EmailController::class,'index']);
Route::post('/send',[EmailController::class,'send']);
Route::post('/store',[BillConroller::class,'store']);


