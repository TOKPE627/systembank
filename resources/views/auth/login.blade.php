<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="{{ mix('css/main.css') }}" rel="stylesheet" />
    <link href="resources/css/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/458678413d.js" crossorigin="anonymous"></script>

    <title>BANK SYSTEM</title>
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
        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

    </style>
</head>
<body class="bg-blue-700">
<div class="flex items-center h-screen w-auto justify-center bg-teal-lighter">
    <div class="w-auto bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
        <div class="box-header">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block text-red-600">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="flex flex-shrink-0 justify-center">
            <img src="{{asset('img/brand/bank.png')}}" alt="" class="h-20 w-auto justify-center ml-ç4">
        </div>
        <h1 class="block w-full text-center text-grey-darkest mb-6 mt-4">Happy to see you !!</h1>
        <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="{{url('login')}}" method="post">
            @csrf
            <div class="flex flex-col mb-4 md:w-full justify-center">
                <label class="mb-2 font-bold text-lg text-grey-darkest" for="email">E-mail</label>
                <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" required>
            </div>
            <div class="flex flex-col mb-6 md:w-full">
                <label class="mb-2 font-bold text-lg text-grey-darkest" for="password">Password</label>
                <input class="border py-2 px-3 text-grey-darkest" type="password"  name="password" required>
            </div>
            <button class="btn btn-blue mx-auto" type="submit">Login</button>
        </form>

        <a class="link link-grey" href="{{url('forgot_password')}}">Forgot password?</a>
        <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-blue-500
            hover:text-indigo-500 font-bold py-2 px-4 rounded-full">
            <a class="link link-grey" href="{{url('registration')}}">No account yet?</a>
        </button>
    </div>
</div>


</body>
</html>

