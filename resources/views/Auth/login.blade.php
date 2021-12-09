@extends('layout')


@section('content')


<div class="flex justify-center">
        
    <div class="w-8/12 h-8/12 m-3 bg-white bg-opacity-75 border-t-4 p-6 border-b-8 border-gray-200 shadow-inner flex justify-center">

        <form method="post" action="{{route('login')}}">
            {{ csrf_field() }}

            <p class="text-center text-2xl font-medium  font-serif">Login</p>

            @if(session('status'))
                <div class="bg-red-500 m-3 p-4 text-center text-base rounded-lg bg-opacity-90 font-medium text-white font-serif">{{ session('status') }}</div>
            @endif

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

            <div class="ml-8 transition duration-300 ease-in-out transform hover:scale-110 hover:translate-x-3">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm">Remember me</label>
                </div>
            </div>

            <div class="m-6 mt-2 p-3">
                <button type="submit" class="bg-gradient-light-blue text-white px-4 py-3 rounded w-full transform transition duration-300 ease-in-out hover:scale-105">Login</button>
            </div> 
        
        </form>

    </div>

</div>

@endsection