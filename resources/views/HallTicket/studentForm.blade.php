<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>StudentInfo</title>
</head>
<body>
    @if($errors->any())

@foreach($errors->all() as $error)

<p class="w-auto font-serif font-bold bg-green-100 rounded border p-1 m-2">{{$error}}</p>
@endforeach

    @endif
    <div class="w-screen h-screen flex justify-center items-center ">
        <form action="{{route('form.store')}}" method="post" class="w-auto h-auto flex-col justify-evenly items-center border rounded shadow-2xl p-4">
            <div class=" w-96 h-full flex-col justify-evenly items-center">
                <label class="font-serif font-bold m-2" for="name">Enter Your Name</label>
                <input class="w-96 h-10 p-1 font-serif border rounded" type="text" name="name" id="name"  placeholder="Enter your name">
            </div>
            <div class="w-96 h-full flex-col justify-evenly items-center ">
                <label class="font-serif font-bold m-2" for="email">Enter your email address</label>
                <input class="w-96 h-10 p-1 font-serif border rounded" type="text" id="email" name="email" placeholder="Enter your email address">
            </div>
            <div class=" w-96 h-full flex-col justify-evenly items-center">
                <label class="font-serif font-bold m-2" for="e_no">Enter Your Enrollment_number</label>
                <input class="w-96 h-10 p-1 font-serif border rounded" type="text" name="Enrollment_number" id="e_no"  placeholder="Enter your EnrolmentNumber">
            </div>
            <div class="w-96 h-full flex-col justify-evenly items-center ">
                <label class="font-serif font-bold m-2" for="p_code">Enter your programme code</label>
                <input class="w-96 h-10 p-1 font-serif border rounded" type="text" id="programme_code" name="Programme_code" placeholder="Enter your programme code">
            </div>
            <div class="w-96 h-full flex-col justify-evenly items-center ">
                <label class="font-serif font-bold m-2" for="course_code">Enter your course code</label>
                <input class="w-96 h-10 p-1 font-serif border rounded" type="text" id="c_code" name="course_code" placeholder="Enter your course code">
            </div>

           <div>
               <input class="p-2 bg-gray text-white font-serif border rounded m-2" type="submit" value="Submit">
           </div>
        @csrf
        </form>
    </div>
</body>
</html>