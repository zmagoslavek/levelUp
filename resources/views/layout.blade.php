<!DOCTYPE html>
<html>
    <head>
        <!--BOOTSTRAP-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body class="container mx-auto bg-gradient-to-tr from-gradient-red to-gradient-blue w-full min-h-screen bg-no-repeat">
        <!-- NAVBAR --> 
        <nav class="sticky top-0 z-50 p-6 bg-white flex justify-between mb-8 bg-opacity-40 rounded-b-lg">
            
            <ul class="flex items-center divide-x-2">
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125 hover:">
                    <a href="" class="p-6">Home</a>
                </li>
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125 hover:opacity-100">
                    <a href="" class="p-6">Dashboard</a>
                </li>
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125 hover:opacity-100">
                    <a href="" class="p-6">Posts</a>
                </li>

            </ul>

            <ul class="flex items-center divide-x-2">
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="" class="p-6">Username</a>
                </li>
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="" class="p-6">Login</a>
                </li>
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="{{route('register')}}" class="p-6">Register</a>
                </li>

                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="" class="p-6">Logout</a>
                </li>

            </ul>
        
        </nav>
        
        @yield('content')

    </body>

</html>
