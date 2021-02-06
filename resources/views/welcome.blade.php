<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="{{ mix('css/main.css') }}" rel="stylesheet" />
    <link href="{{url('resources/css/style.css')}}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/458678413d.js" crossorigin="anonymous"></script>

    <title>SENEGAL LOGEMENT</title>
    <style>
        #menu-toggle:checked + #menu{
            display: block;
        }

        /* #Mega Menu Styles
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .mega-menu {
            display: none;
            left: 0;
            position: absolute;
            text-align: left;
            width: 100%;
        }

        .uping{
            z-index: 555 !important;
        }



        /* #hoverable Class Styles
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .hoverable {
            position: static;
        }

        .hoverable > a:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .hoverable:hover .mega-menu {
            display: block;
        }


        /* #toggle Class Styles
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .toggleable > label:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .toggle-input {
            display: none;
        }
        .toggle-input:not(checked) ~ .mega-menu {
            display: none;
        }

        .toggle-input:checked ~ .mega-menu {
            display: block;
        }

        .toggle-input:checked + label {
            color: white;
            background: #2c5282; /*@apply bg-blue-800 */
        }

        .toggle-input:checked ~ label:after {
            content: "\25B2";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        /* Slider */
        {
            margin: 0;
        }

        @keyframes slider {
            0%{
                left: 0;
            }
            20%{
                left: 0;
            }
            25%{
                left: -100%;
            }
            45%{
                left: -100%;
            }
            50%{
                left: -200%;
            }
            70%{
                left: -200%;
            }
            75%{
                left: -300%;
            }
            95%{
                left: -300%;
            }
            100%{
                left: -400%;
            }
        }

        #slider{
            overflow: hidden;
        }

        #slider figure img{
            width: 20%;
            float: left;
            height: 530px;
        }

        #slider figure{
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            animation: 20s slider infinite;
        }
    </style>
</head>
<body class="bg-blue-700">

@include('welcome.header')

<div id="slider">

    <figure>

  
        <img src="{{asset('img/brand/bank.PNG')}}">

        <img src="{{asset('img/brand/bank1.PNG')}}">

        <img src="{{asset('img/brand/bank2.PNG')}}">

        <img src="{{asset('img/brand/bank3.PNG')}}">

    </figure>
</div>



<div class="flex w-full">
    @include('welcome.footer')
</div>
</body>
</html>
