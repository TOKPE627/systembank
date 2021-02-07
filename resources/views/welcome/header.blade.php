<!--<header>
  <div class="md:flex">
      <img class="bg-no-repeat w-full h-auto lg:bg-center" src="{{asset('img/img2.jpg')}}" alt="meeting for assistance in Navo Agency">
  </div>
</header>
-->
<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2">
      <div class="flex-1 flex justify-between items-center">
        <a href="#">
        <img src="{{asset('img/brand/bank1.png')}}" alt="" class="h-12 w-auto" style="width:100px;">
       </a>
      </div>
       <label for="menu-toggle" class="cursor-pointer lg:hidden block">
         <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
       </label>
       <input type="checkbox" class="hidden" id="menu-toggle">
       <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
          <nav>
            <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
              <li>
                <a href="/" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                 hover:border-indigo-400 leading-tight font-bold text-blue-700">Home
                </a>
              </li>
              <li class="hover:bg-blue-800 hover:text-white">
                    <a href="{{url('about_us')}}" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white text-blue-700">About us</a>
              </li>
              <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white text-blue-700">Services</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800" style='z-index:545454'>
                      <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/2 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                          <div class="flex items-center">
                            <svg class="h-8 mb-3 mr-3 fill-current text-white"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                            </svg>
                            <h3 class="font-bold text-xl text-white text-bold mb-2">Open an account</h3>
                          </div>
                          <p class="text-gray-100 text-sm">Opening an account allows you to enter the network of banks and benefit from the interests linked to the account </p>
                          <div class="flex items-center py-3">
                            <svg class="h-6 pr-3 fill-current text-blue-300"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                            </svg>
                            <a href="{{url('registration')}}" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Register now...</a>
                          </div>
                        </ul>
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/2 border-gray-600  pb-6 pt-6 lg:pt-3">
                          <div class="flex items-center">
                            <svg class="h-8 mb-3 mr-3 fill-current text-white"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                            </svg>
                            <h3 class="font-bold text-xl text-white text-bold mb-2">Proceed an operation</h3>
                          </div>
                          <p class="text-gray-100 text-sm">Bank system allows to make Operations of Deposit, Withdraw and Transfert amount on your account.</p>
                          <div class="flex items-center py-3">
                            <svg class="h-6 pr-3 fill-current text-blue-300"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                            </svg>
                            <a href="{{url('show_more_operation')}}" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Show more...</a>
                          </div>
                        </ul>

                      </div>
                   </div>
              </li>
              <li class="hover:bg-blue-800 hover:text-white">
                    <a href="{{url('privacy')}}" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white text-blue-700">Privacy</a>
              </li>
              <li>
                <a href="{{url('/showLogin')}}" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent
                 hover:border-indigo-400 font-bold text-blue-700">Login
                </a>
              </li>
            </ul>
          </nav>
        </div>
        
   </header>
