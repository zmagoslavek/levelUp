<!DOCTYPE html>
<html>
    <head>
        <!--BOOTSTRAP-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body class="bg-pink-200">
        <!-- NAVBAR -->
        <nav class="p-6 m-6 rounded-md bg-white flex justify-between">
            
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
