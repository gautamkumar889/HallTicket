<?php
namespace App\Http;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ShareData{

    public $sharedata;
    public function __construct(){
        
         $this->sharedata = DB::table('users')->get();
    }

    public function compose(View $view){

       
        $view->with(['viewdata'=>$this->sharedata]);
    }
}



?>