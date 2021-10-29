<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function upload(){
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
            dd($filepath);

            $this->readCsv($filepath,$filename);
        }
    }

    public function readCsv($csvpath,$csvname){

    }
}
