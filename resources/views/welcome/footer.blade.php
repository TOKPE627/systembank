<!--Footer-->
<div class="w-full bg-blue-900">
    <div class="flex flex-wrap text-center border-b text-white">

        <!-- ABOUT COLUMN -->

        <div class="w-full md:w-1/3 p-5 border-r border-blue-800  text-left">
            <div class="my-6 text-xl font-semibold">Useful links</div>
          
            <div class="flex mb-4">
                <div class="w-2/4">
                    <ul>
                    <div class="my-6 text-xl font-semibold"></div>

                        <li ><a class="mt-8 text-gray-400" href="{{url('/')}}">Home</a></li>
                        <div class="my-6 text-xl font-semibold"></div>

                        <li><a class="mt-8 text-gray-400" href="{{url('about_us')}}">About us</a></li>
                        <div class="my-6 text-xl font-semibold"></div>

                        <li><a class="mt-8 text-gray-400" href="{{url('services')}}">Services</a></li>
                        <div class="my-6 text-xl font-semibold"></div>

                        <li ><a class="mt-8 text-gray-400" href="{{url('privacy')}}">Privacy</a></li>
                        <div class="my-6 text-xl font-semibold"></div>

                        <li ><a class="mt-8 text-gray-400" href="{{url('showLogin')}}">Login</a></li>
                    </ul>
                </div>
         
            </div>
        </div>

        <!-- CONTACTS COLUMN -->

        <div class="w-full md:w-1/3 p-5 border-r border-blue-800  text-left">
            <div class="my-6 text-xl font-semibold">Contact Us</div>

            <p>
                <i class="fa fa-phone mr-2 mt-2" aria-hidden="true"></i> + 221 77 804 26 81<br>
                <i class="fab fa-whatsapp mr-2 mt-10"></i> + 221 77 804 26 81 <br>
                <i class="fas fa-envelope-square mr-3 mt-12"></i>tokpekossi7@gmail.com
            </p>
            <div class="my-6 mt-19 text-xl font-semibold">Our agency</div>
            <p class="mt-8 mb-20 text-gray-400">
                <a href="">
                    <i class="fas fa-map-marker-alt">  Dakar, SENEGAL </i>
                </a>

            </p>

            <div class="my-6 mt-16 text-xl font-semibold">Follow Us</div>

            <div class="flex items-baseline justify-center mb-2">
                <a href="#" class="ml-4">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="ml-4">
                    <i class="fab fa-twitter-square"></i>
                </a>

                <a href="#" class="ml-4">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

        <!-- FORM COLUMN -->

        <div class="w-full md:w-1/3 p-5 text-left">
            <div class="mt-6 text-xl font-semibold">Write Us</div>
            <form class="w-4/5 mx-auto mt-2 px-6 pt-6 pb-4 rounded" action="{{route('contactus.store','test')}}" method="post">
                    {{method_field('post')}}
                    {{csrf_field()}}
                <div class="flex items-center mb-4">
                    <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Name" name="name" required>
                </div>
                <div class="flex items-center mb-4">
                    <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="email" placeholder="E-mail" name="email" required>
                </div>
                <div class="mb-1">
                    <textarea class="w-full h-24 px-2 pt-2 border-b-2 border-blue-800 bg-blue-900 text-white" placeholder="Message" name="message" required></textarea>
                </div>

                <div class="flex justify-between items-center">
                    <button type="reset" class="btn btn-default">Erase</button>
                    <button class="w-full py-2 px-4 rounded bg-orange-600 hover:bg-orange-700 text-white font-bold" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="max-w-2xl mx-auto flex items-center px-4 lg:px-0 justify-center">
        <p class="mt-6 text-gray-300">
            &copy; 2021 BANK MANAGEMENT SYSTEM. All rights reserved.
        </p>
    </div>
    <div class="max-w-5xl mx-auto flex items-center px-4 lg:px-0 justify-center">
        <p class="my-6 text-blue-600">
            <a href="https://www.linkedin.com/in/voltaire-kossi-tokpe-283375115/">
                Realized by TOKPE Kossi Voltaire
            </a>
        </p>
    </div>
</div>
