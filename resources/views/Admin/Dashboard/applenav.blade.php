<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title class="font-bold font-serif text-xl bg-green-300">AppleNav</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>
    <div class="h-screen w-screen bg-gray-200  flex justify-center items-center">
     
        <div class="nav-container ">
            <ul class="h-20 w-96 flex justify-evenly items-center rounded bg-white">
                <li class="h-16 w-16 ">
                    <a href=""  class="flex flex-col  justify-center items-center" >
                    <span  class="icon"><i class="fas fa-home p-3 "></i></span>
                    <span class="text absolute">Home</span>
                   </a>
                   
                </li>
                <li class="h-16 w-16 ">
                   <a href=""  class="flex flex-col  justify-center items-center">
                    <span  class="icon"><i class="fas fa-user p-3    "></i></span>
                    <span class="text absolute">User</span>
                </a>
               
                </li>
                <li class="h-16 w-16 ">
                    <a href=""  class="flex flex-col  justify-center items-center">
                    <span  class="icon"><i class="fas fa-comment p-3    "></i></span>
                    <span class="text absolute">Chat</span>
                </a>
               
                </li>
                <li class="h-16 w-16 ">
                    <a href=""  class="flex flex-col  justify-center items-center">
                    <span  class="icon"><i class="fas fa-camera p-3  "></i></span>
                    <span class="text absolute">Camera</span>
                    </a>
                    
                </li>
                <li class="h-16 w-16 ">
                    <a href=""  class="flex flex-col  justify-center items-center">
                    <span  class="icon"><i class="fas fa-cog p-3  "   ></i></span>
                    <span class="text absolute">Setting</span>
                    </a>
                   
                </li>
               
            </ul>
        </div>


    </div>
</body>
</html>