<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function upload(){

        $users=DB::table('users')->where('id','1')->toSql();

        dd($users);

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
}
