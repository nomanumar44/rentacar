<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/select.js"></script>
<script src="{{asset('js/app.js')}}"></script>
 <script>
     function openNav() {
         document.getElementById("mySidebar").style.width = "224px";
         document.getElementById("main").style.marginLeft = "224px";
     }

     function closeNav() {
         document.getElementById("mySidebar").style.width = "0";
         document.getElementById("main").style.marginLeft = "0";
     }

     function myFunction(e) {

    //   let  alldivs = ['myDIV1','myDIV2','myDIV3','myDIV4','myDIV5','myDIV6','myDIV7','myDIV8','myDIV9','myDIV10','myDIV11','myDIV12'];

    //         for(let i = 0; i < alldivs.length; i++){
    //         console.log(alldivs[i])

    //             if(alldivs[i] == 'myDIV'+e){

    //                 var x = document.getElementById(alldivs[i]);
    //                  x.style.display = "block";
    //      } else {
    //         var x = document.getElementById(alldivs[i]);

    //           x.style.display = "none";

    //      }
    //             }




         var x = document.getElementById("myDIV"+e);
         if (x.style.display === "block") {
             x.style.display = "none";
         } else {
             x.style.display = "block";
         }
      }


    </script>
    </body>
</html>
