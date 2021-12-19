<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Varient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{


    public function productForm(){

      return view('Product.productForm');

    }

    public function productStore(Request $request){

        $validator=Validator::make($request->all(),[
         
            'name'=>'required',
            'price'=>'required',
            'image'=>'required|image',
            'varient_name'=>'required|array',
            'varient_price'=>'required|array'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());

        }
        else{

           
    
            $varients=[];
          for ($i=0; $i <count($request->varient_name) ; $i++) { 

                $varients[$i]=['name'=>$request->varient_name[$i],'price'=>$request->varient_price[$i]];

                
            }
           //dd($varients);


            $product=new Product();

            $product->name=$request->name;

            $product->price=$request->price;

            $product->image=$request->image->store('product','public');

            $product->varients=$varients;

            $product->save();

            for ($i=0; $i <count($varients) ; $i++) { 

                $varient=new Varient();

                $varient->name=$varients[$i]['name'];
                $varient->price=$varient[$i]['price'];
                $varient->product_id=$product->id;
                $varient->save();
                
            }


           


        }

    }

    public function productDetails(){

    $product=Product::all();

    //dd($product);

        return view('Product.productDetails');

    }

}
