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
                    <a href="{{route('profile')}}" class="p-6">Profile</a>
                </li>
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125 hover:opacity-100">
                    <a href="" class="p-6">Posts</a>
                </li>

            </ul>

            <ul class="flex items-center divide-x-2">
                
                @auth
                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="" class="p-6">Username</a>
                </li>

                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <form class="inline p-6" action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
                @endauth
                
                @guest
                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="{{route('login')}}" class="p-6">Login</a>  
                </li>
                
                <li class="transition duration-300 ease-in-out transform hover:scale-125">
                    <a href="{{route('register')}}" class="p-6">Register</a>
                </li>
                @endguest
                

            </ul>
        
        </nav>
        
        @yield('content')

    </body>

</html>
