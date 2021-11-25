<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title class="font-bold font-serif ">PRODUCT FORM</title>
</head>
<body>

    @if($errors->any())

  @foreach($errors->all() as $errors)

   <p class="p-2 bg-green-100 h-12 rounded m-4 w-full font-serif ">{{$errors}}</p>

  @endforeach


    @endif

    <div class="h-screen w-screen bg-gray-100 flex">

        <div class="left w-1/2 h-full rounded border border-black ">
         <img src="{{asset('figma/product.png')}}" alt="">
         <button id="addinput" class="p-2 bg-green-100 rounded float-right ml-2">+</button>
        </div>
        <div class="right w-1/2 h-full rounded border border-black flex justify-center items-center">
            <form class="flex flex-col justify-evenly items-center  rounded border-black shadow-xl p-8" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">

                <div class="flex flex-col">
                    <label for="" class="font-serif font-bold m-2">Enter Product Name</label>
                    <input type="text" name="name" class=" h-12 w-96 font-bold p-1 font-serif rounded border border-gray-200" placeholder="Enter Name Of Product">
                </div>
                <div class="flex flex-col">
                    <label for="" class="font-serif font-bold m-2">Enter Product Price</label>
                    <input type="text" name="price" class=" h-12 w-96 font-bold p-1 font-serif rounded border border-gray-200" placeholder="Enter Price of Product">
                </div>
                <div class="flex flex-col">
                    <label for="" class="font-serif font-bold m-2">Upload Product Image</label>
                    <input type="file" name="image" class=" h-12 w-96 font-bold p-2 font-serif rounded border border-gray-200" >
                </div>
           
                <div  class="flex h-auto flex-col justify-evenly items-center">
                    <label for="" class="font-serif font-bold m-2">Enter Varient Name(Multiple)</label>
                    <span class="varient_input" id="name-in" class="flex flex-wrap justify-center align-center h-auto w-96"><input  type="text" name="varient_name[]" class=" h-12 w-96 font-bold p-1 font-serif rounded border border-gray-200"  placeholder="Enter One Or Mutiple Varient Name"><i class="fa fa-close" id="close"></i> </span>
                </div>
                <div class="flex h-auto flex-col justify-evenly items-center">
                    <label for="" class="font-serif font-bold m-2">Enter Varient Price(a/c to Name)</label>
                    <span id="price-in" ><input type="text" name="varient_price[]" class=" h-12 w-96 font-bold p-1 font-serif rounded border border-gray-200" placeholder="Enter Varient Price Regaring to Name"><i class="fa fa-close" id="close"></i> </span>
                    
                </div>
       
             
                <div class="flex flex-col">
                    <input type="submit"  value="save" class="m-2 bg-green-400 font-bold w-40 p-3 font-serif rounded shadow-xl" >
                </div>
            @csrf
            </form>
        </div>


        

    </div>

    <script>
        $(function(){
           $('#addinput').on('click',function(){
            $cloned=$('#name-in').clone(true).appendTo('#name-in');
            $cloned=$('#price-in').clone(true).appendTo('#price-in');
           });

           $('#close').on('click',function(){
               alert('close input');

               $(this).closest('#name-in').remove();
           })
        })
    </script>
</body>
</html>