<?php

namespace App\Http\Controllers;

use App\Http\Requests\studentRequest;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

//spl_autoload_register('app/Autoload/autousefile.php');


class ScheduleController extends Controller
{
    public function upload(){

        $users=DB::table('users')->where('id','1')->toSql();

       // dd($users);

        return view('HallTicket.upload');
    }
    public function uploadCsv(Request $request){
        if($request->csv){
            $filename=$request->csv->getClientOriginalName();
            $fileextension = $request->csv->getClientOriginalExtension();

            if($fileextension!='csv'){

                return redirect()->back()->with(['Error'=>'Not Valid Extensions']);

            }
            else{

                $filepath= $request->csv->move('Upload',$filename);
            }
            //dd($filepath);

            $this->readCsv($filepath);
        }
    }

    public function readCsv($csvpath){

        $header=null;
        $data=[];

        if(($handle=fopen($csvpath,'r'))!==false){

            while(($raw=fgetcsv($handle,1000,","))!==false){
                
              
                   array_push($data,$raw);
                   
               
            }

            fclose($handle);
        }

        dd($data);

    }

    public function view1(){
        return view('Hallticket.view1');
    }

    public function view2(){
        return view('Hallticket.view2');
    }

    public function view3(){
        return view('Hallticket.view3');
    }

    public function view4(){
        return view('Hallticket.view4');
    }

    public function studentForm(){
        
        return view('Hallticket.studentForm');
    }
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function studentStore(studentRequest $request){
       
        $validation=$request->validated();

        //$request=$request->except('_token');

        $newStudent=$request->toArray();

       // dd( $newStudent);
        StudentModel::create($newStudent);
 
    }
}
