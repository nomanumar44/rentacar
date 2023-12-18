<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link href="/assets/css/select2.min.css" rel="stylesheet" />


</head>



<body class="">

    <div id="app">
      <router-view />
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
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
