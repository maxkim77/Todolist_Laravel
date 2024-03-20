
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Porto - Tailwind Template</title>
        <style>
    .small-logo {
        width: 6.25%; /* 1/16 */
        height: auto; /* 자동으로 높이를 조정하여 원래 비율을 유지합니다. */
    }
</style>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body class="bg-gray-100">
        <div class="navbar">

                <div>

                </div>
        </div>
        <section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">
            <nav class="flex items-center justify-between mb-40">
            <img src="{{ asset('build/image/logo.png') }}" alt="Navbar Logo" class="small-logo">
    <div class="flex items-center space-x-4">
        @auth
            <a class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500" href="{{ url('/dashboard') }}">Profile</a>
            <a class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500" href="{{ route('login') }}">Log in</a>
            @if (Route::has('register'))
                <a class="px-7 py-3 md:px-9 md:py-4 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500" href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
</nav>

@if (Auth::check())
    <div class="text-center">
        <a href="{{ url('/todos') }}" class="px-7 py-3 md:px-9 md:py-4 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500">Start it</a>
    </div>
@endif






            </div>

        </section>




        <section class="py-10 md:py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-gray-50 px-8 py-10 rounded-md mx-4">
        <h6 class="font-semibold text-gray-500 text-md">Organization</h6>
        <p class="font-normal text-gray-500 text-md mb-4">A to-do list helps in organizing tasks effectively, ensuring nothing gets overlooked or forgotten.</p>
    </div>

    <div class="bg-gray-50 px-8 py-10 rounded-md mx-4">
        <h6 class="font-semibold text-gray-500 text-md">Productivity</h6>
        <p class="font-normal text-gray-500 text-md mb-4">It boosts productivity by providing a clear outline of tasks to be completed, helping prioritize important activities.</p>
    </div>

    <div class="bg-gray-50 px-8 py-10 rounded-md mx-4">
        <h6 class="font-semibold text-gray-500 text-md">Focus</h6>
        <p class="font-normal text-gray-500 text-md mb-4">With a to-do list, individuals can maintain focus on specific tasks without being distracted by less important activities.</p>
    </div>

    <div class="bg-gray-50 px-8 py-10 rounded-md mx-4">
        <h6 class="font-semibold text-gray-500 text-md">Time Management</h6>
        <p class="font-normal text-gray-500 text-md mb-4">It aids in managing time efficiently by allocating appropriate time slots for each task, preventing procrastination, and ensuring deadlines are met.</p>
    </div>

    <div class="bg-gray-50 px-8 py-10 rounded-md mx-4">
        <h6 class="font-semibold text-gray-500 text-md">Reduced Stress</h6>
        <p class="font-normal text-gray-500 text-md mb-4">By breaking down tasks into manageable chunks, a to-do list can reduce stress and overwhelm, promoting a sense of accomplishment as items are checked off.</p>
    </div>

    <div class="bg-gray-50 px-8 py-10 rounded-md mx-4">
        <h6 class="font-semibold text-gray-500 text-md">Goal Setting and Tracking</h6>
        <p class="font-normal text-gray-500 text-md mb-4">To-do lists facilitate goal setting and tracking progress towards achieving those goals, providing motivation and direction in both personal and professional endeavors.</p>
    </div>
</div>



        </section>

        <footer class="py-10 md:py-16 mb-20 md:mb-40 lg::mb-52">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="text-center">


                    <div class="flex items-center justify-center space-x-8">
                        <a href="#" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                            <i data-feather="twitter" class="text-gray-500 hover:text-gray-800 transition ease-in-out duration-500"></i>
                        </a>
    
                        <a href="#" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                            <i data-feather="dribbble" class="text-gray-500 hover:text-gray-700 transition ease-in-out duration-500"></i>
                        </a>
    
                        <a href="#" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                            <i data-feather="facebook" class="text-gray-500 hover:text-gray-700 transition ease-in-out duration-500"></i>
                        </a>
    
                        <a href="#" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                            <i data-feather="codepen" class="text-gray-500 hover:text-gray-700 transition ease-in-out duration-500"></i>
                        </a>
    
                        <a href="#" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                            <i data-feather="at-sign" class="text-gray-500 hover:text-gray-700 transition ease-in-out duration-500"></i>
                        </a>
    
                        <a href="#" class="w-16 h-16 flex items-center justify-center rounded-full hover:bg-gray-200 transition ease-in-out duration-500">
                            <i data-feather="instagram" class="text-gray-500 hover:text-gray-700 transition ease-in-out duration-500"></i>
                        </a>
                    </div>
                </div>

            </div>

        </footer>


        <script>
            feather.replace()
        </script>

    </body>
</html>