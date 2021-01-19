<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>SENEGAL LOGEMENT</title>

    <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css'>
    <link href="{{URL::to('bootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="bg-blue-700">

<div class="font-sans antialiased bg-grey-lightest">

    <div class="w-full bg-grey-lightest" style="padding-top: 4rem;">

        <div class="container" style="margin-left: 78%;">
            <button class="btn btn-outline-warning" style="margin-top: 10px;text-align: right;"
            >
                <a href="/">
                    <i class="fas fa-home text-blue-100"><strong>Accueil</strong> </i>
                </a>
            </button>
        </div>
        <div class="container mx-auto py-8">

            <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
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

                <div class="py-4 px-8 text-blue-600 text-xl border-b border-grey-lighter">Enregistrement de votre agence</div>

                <form class="w-full max-w-lg" action="{{url('register')}}" method="post" enctype="multipart/form-data">
                    {{method_field('post')}}
                    {{csrf_field()}}

                    <input type="hidden" name="profile_id" value="{{$profile_customer_id}}"><br>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 ml-5">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Nom de l'agence
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                       type="text"  name="lastname" placeholder="Nom de l'agence"  required>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 ml-5">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Logo de l'entreprise
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                       name="photo" type="file" placeholder="Logo de l'agence">
                            </div>
                        </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ml-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Accounts
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state"
                                        name="district_id">
                                    @foreach($accounttypes as $t)
                                        <option value="{{$t->id}}">{{$t->title}}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 ml-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Adresse exacte
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"
                                   name="address" placeholder="Spécifier une adresse complète(Quartier-Zone-rue-angle,..)" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 ml-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Numéro de téléphone
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"
                                   type="phone" name="phone"  pattern="[0-9]{2}[0-9]{3}[0-9]{4}" required>
                            <small>Format: 774567890</small>

                        </div>
                    </div>

                    <br>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 ml-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                E-mail
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"
                                   type="email" name="email" placeholder="Adresse électronique de votre agence" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 ml-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"
                                   name="password" type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                   title="Doit contenir au minimum un nombre, une lettre majuscule, une lettre minuscule et au moins 8 charactères" required>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button class="ml-14 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Register
                        </button>

                    </div><br>
                    <p class="text-center text-gray-500">
                        &copy;2021, BANK MANAGEMENT. All rights reserved.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>











