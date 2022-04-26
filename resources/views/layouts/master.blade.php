<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <div class="">
            <x-layout.navbar-pc/>
        </div>

        <div class="overflow-hidden">
            @yield('content')
        </div>

        <div class="">
            <x-layout.footer/>
        </div>


    </body>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>


        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "0px 0px";
            document.getElementById("navbar").style.backgroundColor = 'rgba(0, 1, 0, 0.95)';
            document.getElementById("logo").style.fontSize = "15px";
            document.getElementById("imgLogo").style.width = "160px";
            document.getElementById("hamburger").style.width = "50px";
            document.getElementById("hamburger").style.height = "50px";
          } else {
            document.getElementById("navbar").style.padding = "15px 0px";
            document.getElementById("navbar").style.backgroundColor = 'rgba(23,23,23, 0.95)';
            document.getElementById("logo").style.fontSize = "24px";
            document.getElementById("imgLogo").style.width = "220px";
            document.getElementById("hamburger").style.width = "64px";
            document.getElementById("hamburger").style.height = "64px";
          }
        }

    // smooth move
        function introduction() {
        document.getElementById("introduction").scrollIntoView();
        }

        function services() {
        document.getElementById("services").scrollIntoView();
        }

        function gallery() {
        document.getElementById("gallery").scrollIntoView();
        }

        function contacts() {
        document.getElementById("contacts").scrollIntoView();
        }

    // Get the modal
        var opacity = document.getElementById("Opacity");

        var btn = document.getElementById("modalBtn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            opacity.style.display = "flex";
        }

        span.onclick = function() {
            opacity.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == opacity) {
            opacity.style.display = "none";
            }
        }



        // function hamburgerToggle() {
        //         var x = document.getElementById("hamburgerLinks");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }

        //     function champToggle() {
        //         var x = document.getElementById("champLinks");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }

        //     function otherToggle() {
        //         var x = document.getElementById("otherLinks");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }

        //     function vipToggle() {
        //         var x = document.getElementById("vipLinks");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }

        //     function userToggle() {
        //         var x = document.getElementById("userLinks");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }


        //     function mobileToggle() {
        //         var x = document.getElementById("mobileToggles");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //             x.style.backgroundColor = "lightblue";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }


        //     function colorToggle() {
        //         var x = document.getElementById("colorToggles");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }


        //     function houseToggle() {
        //         var x = document.getElementById("houseToggles");
        //         if (x.style.display === "block") {
        //             x.style.display = "none";
        //         } else {
        //             x.style.display = "block";
        //         }
        //     }


        </script>

</html>
