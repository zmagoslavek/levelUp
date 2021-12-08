@extends('layout')


@section('content')


    <div class="flex justify-center">
        
        <div class="w-8/12 h-8/12 m-3 bg-white bg-opacity-75 border-t-4 p-6 border-b-8 border-gray-200 shadow-inner flex justify-center">

        <form method="post" action="{{route('register')}}">

            {{ csrf_field() }}

            <p class="text-center text-2xl font-medium  font-serif">Register</p>

            <div class="m-6 transition duration-300 ease-in-out transform hover:scale-110">
                <label for="name" class="sr-only">Name</label></h1>
                <input class="border-b-2 p-3 @error('name') border-red-500 @enderror" type="text" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}">

                @error('name')
                    
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror

            </div>

            <div class="m-6 transition duration-300 ease-in-out transform hover:scale-110">
                <label for="username" class="sr-only">Username</label>
                <input class="border-b-2 p-3 @error('username') border-red-500 @enderror" type="text" name="username" id="username" placeholder="Enter your username" value="{{old('username')}}">
                
                @error('username')

                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror

            </div> 

            <div class="m-6 transition duration-300 ease-in-out transform hover:scale-110">
                <label for="email" class="sr-only">Email</label>
                <input class="border-b-2 p-3 @error('email') border-red-500 @enderror" type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}">

                @error('email')

                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror

            </div> 

            <div class="m-6 transition duration-300 ease-in-out transform hover:scale-110">
                <label for="password" class="sr-only">Password</label>
                <input class="border-b-2 p-3 @error('password') border-red-500 @enderror" type="password" name="password" id="password" placeholder="Choose a passsword" value="{{old('password')}}">

                @error('password')

                <div class="text-red-500 mt-2 text-sm w-40">
                    {{$message}}
                </div>

                @enderror

            </div> 

            <div class="m-6 transition duration-300 ease-in-out transform hover:scale-110">
                <label for="password_confirmation" class="sr-only">Repeat your password</label>
                <input class="border-b-2 p-3 @error('password_confirmation') border-red-500 @enderror" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="{{old('password')}}">
                
                @error('password_confirmation')

                <div class="text-red-500 text-sm w-40">
                    {{$message}}
                </div>

                @enderror
            </div> 

            <div class="m-6 p-3">
                <button type="submit" class="bg-gradient-light-blue text-white px-4 py-3 rounded w-full transform transition duration-300 ease-in-out hover:scale-105">Register</button>
            </div> 
            
        </form>

        </div>

    </div>

@endsection