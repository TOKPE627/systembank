<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="{{ mix('css/main.css') }}" rel="stylesheet" />
    <link href="resources/css/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/458678413d.js" crossorigin="anonymous"></script>

    <title>BANK MANAGEMENT SYSTEM</title>
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

  </style>
</head>
<body class="bg-blue-700">

     @include('welcome.header')
  
    <div class="container mt-5 py-10">

        <!--CARD COLUMNS-->
        <div class="container mt-5">           
            <!--New Flex-->
            <div class="md:flex">
                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                  <div class="lg:flex lg:items-center">
                      <div class="lg:flex-shrink-0">
                         <img
                            class="rounded-lg lg:w-64"
                            src="{{asset('img/brand/deposit.PNG')}}"
                            alt=""
                         />
                      </div>
                      <div class="mt-4 lg:mt-0 lg:ml-6">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >

                           Operation of Deposit
                          </div>
                          <div class="ml-4">
                             <ul class="">
                                Operation of Deposit allows you to deposit amount on  your </br>

                          </div>
                      </div>
                  </div>
                </div>
            </div>

            <div class="md:flex">
                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                  <div class="lg:flex lg:items-center">
                      <div class="lg:flex-shrink-0">
                         <img
                            class="rounded-lg lg:w-64"
                            src="{{asset('img/brand/withdraw.PNG')}}"
                            alt=""
                         />
                      </div>
                      <div class="mt-4 lg:mt-0 lg:ml-6">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >

                           Operation of Withdraw
                          </div>
                          <div class="ml-4">
                             <ul class="">
                                Operation of Withdraw allows you to withdraw amount on your account.

                          </div>
                      </div>
                  </div>
                </div>
            </div>
           <!--New Flex-->

            <div class="md:flex">
                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                  <div class="lg:flex lg:items-center">
                      <div class="lg:flex-shrink-0">
                         <img
                            class="rounded-lg lg:w-64"
                            src="{{asset('img/brand/transfert.PNG')}}"
                            alt=""
                         />
                      </div>
                      <div class="mt-4 lg:mt-0 lg:ml-4">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >
                              Transfert amount
                          </div>
                          <p class="mt-2 ml-4">
                             You can transfert from your account to another account.
                             
                       </div>
                  </div>
                </div>
            </div>
       </div>
    </div>
        <div class="flex w-full">
            @include('welcome.footer')
        </div>
</body>
</html>
