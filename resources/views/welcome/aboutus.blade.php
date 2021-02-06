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
                            src="{{asset('img/brand/aboutus.PNG')}}"
                            alt=""
                         />
                      </div>
                      <div class="mt-4 lg:mt-0 lg:ml-6">
                          <div
                             class="uppercase tracking-wide text-sm text-indigo-600 font-bold"
                          >

                           About online Banking Management System
                          </div>
                          <div class="ml-4">
                             <ul class="">
                             Online banking, also known as internet banking or web banking, is an electronic payment system that enables customers of a bank or other financial institution to conduct a range of financial transactions through the financial institution's website. The online banking system will typically connect to or be part of the core banking system operated by a bank and is in contrast to branch banking which was the traditional way customers accessed banking services.

                           Some banks operate as a "direct bank" (or “virtual bank”), where they rely completely on internet banking.

                           Internet banking software provides personal and corporate banking services offering features such as viewing account balances, obtaining statements, checking recent transactions, transferring money between accounts, and making payments.  </ul>
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
                              Internet and customer reluctance
                          </div>
                          <p class="mt-2 ml-4">
                            When the clicks-and-bricks euphoria hit in the late 1990s, many banks began to view web-based banking as a strategic imperative.[5] In 1996 OP Financial Group, also a cooperative bank, became the second online bank in the world and the first in Europe.[6] The attraction of banks to online banking are fairly obvious: diminished transaction costs, easier integration of services, interactive marketing capabilities, and other benefits that boost customer lists and profit margins. Additionally, online banking services allow institutions to bundle more services into single packages, thereby luring customers and minimizing overhead.

                            A mergers-and-acquisitions wave swept the financial industries in the mid- and late 1990s, greatly expanding bank's customer bases. Following this, banks looked to the Web as a way of maintaining their customers and building loyalty. A number of different factors are causing bankers to shift more of their business to the virtual realm.

                            While financial institutions took steps to implement e-banking services in the mid-1990s, many consumers were hesitant to conduct monetary transactions over the internet. It took widespread adoption of electronic commerce, based on trailblazing companies such as America Online, Amazon.com and eBay, to make the idea of paying for items online widespread.

                            By 2000, 80% of U.S. banks offered e-banking. Customer use grew slowly. At Bank of America, for example, it took 10 years to acquire 2 million e-banking customers. However, a significant cultural change took place after the Y2K scare ended.

                            In 2001, Bank of America became the first bank to top 3 million online banking customers, more than 20% of its customer base.[7] In comparison, larger national institutions, such as Citigroup claimed 2.2 million online relationships globally, while J.P. Morgan Chase estimated it had more than 750,000 online banking customers. Wells Fargo had 2.5 million online banking customers, including small businesses. Online customers proved more loyal and profitable than regular customers. In October 2001, Bank of America customers executed a record 3.1 million electronic bill payments, totaling more than $1 billion. As of 2017, the bank has 34 million active digital accounts, both online and mobile.[7] In 2009, a report by Gartner Group estimated that 47% of United States adults and 30% in the United Kingdom bank online.[8]

                            The early 2000s saw the rise of the branch-less banks as internet only institutions. These internet-based banks incur lower overhead costs than their brick-and-mortar counterparts. In the United States, deposits at most direct banks are FDIC-insured and offer the same level of insurance protection as traditional banks.                             </p>
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
