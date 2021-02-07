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
                            src="{{asset('img/brand/bank1.PNG')}}"
                            alt=""
                         />
                      </div>
                      <div class="mt-4 lg:mt-0 lg:ml-6">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >

                           Privacy and Policy
                          </div>
                          <div class="ml-4">
                             <ul class="">
                             The Bank recognizes that one of its fundamental responsibilities is to ensure that the Bank protects personal information entrusted to the Bank by its customers. This is critical for the maintenance of the Bank’s reputation and for complying with its legal and regulatory obligations  to  protect  the  Banks’s  customer  information.  The  Bank  also  follows  a transparent policy to handle personal information of its customers.1.2.In  this  Policy,  personal  information  means  any  information  that  relates  to  a  natural person,  which  either  directly  or  indirectly,  in  combination  with  other  information available or likely to be available with the Bank, is capable of identifying such person.1.3.The  Policy  is  in  compliance  with  the  Information  Technology  (Reasonable  security practices and procedures and sensitive personal data or information) Rules 2011 (the “IT Rules”) contained in the Information Technology Act 2000.  Internet banking software provides personal and corporate banking services offering features such as viewing account balances, obtaining statements, checking recent transactions, transferring money between accounts, and making payments.  </ul>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
                <!--New Flex-->
                <div class="md:flex">
                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                  <div class="lg:flex lg:items-center">
                      
                      <div class="mt-4 lg:mt-0 lg:ml-6">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >

                          How We Gather Information?
                          </div>
                          <div class="ml-4">
                             <ul class="">
                             As part of providing financial products or services, we may obtain information about our customers and consumers from the following sources:
                            Information we receive from you on applications, emails, or other forms
                            Information you provide when you choose to customize the portal
                            Information about your transactions with us, our affiliates, and others
                            Information we receive from a consumer-reporting agency
                            Information that is generated electronically when you visit our website and use our Internet Banking and Portal services
                      </div>
                      </div>
                  </div>
                </div>
            </div>
           <!--New Flex-->

            <div class="md:flex">
                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                  <div class="lg:flex lg:items-center">

                      <div class="mt-4 lg:mt-0 lg:ml-4">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >
                              Applicability
                          </div>
                          <p class="mt-2 ml-4">
                          This Policy is applicable to personal information collected by the Bank directly from the customer or through the Bank’s online portals, electronic communications as also any information collected by the Bank’s server from the customer’s browser   </div>
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
