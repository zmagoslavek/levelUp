<!DOCTYPE html>
<html>
    <head>
        <!--BOOTSTRAP-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body class="bg-gradient-to-bl from-gradient-dark-blue to-gradient-light-blue w-full min-h-screen bg-no-repeat">
        <!-- NAVBAR --> 
        <nav class="sticky top-0 z-50 p-6 bg-white flex justify-between mb-8 border-b-4 border-gray-200">
            
            <ul class="flex items-center">
                
                <li>
                    <a href="" class="p-6">Home</a>
                </li>
                
                <li>
                    <a href="" class="p-6">Dashboard</a>
                </li>
                
                <li>
                    <a href="" class="p-6">Posts</a>
                </li>

            </ul>

            <ul class="flex items-center">
                
                <li>
                    <a href="" class="p-6">Username</a>
                </li>
                
                <li>
                    <a href="" class="p-6">Login</a>
                </li>
                
                <li>
                    <a href="" class="p-6">Register</a>
                </li>

                <li>
                    <a href="" class="p-6">Logout</a>
                </li>

            </ul>
        
        </nav>
        
        @yield('content')

    </body>

</html>
