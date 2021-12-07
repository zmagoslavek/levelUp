@extends('layout')


@section('content')


    <div class="flex justify-center">
        
        <div class="w-5/12 h-8/12 m-3 bg-white border-t-4 p-6 border-b-8 border-gray-200 shadow-inner flex justify-center">

        <form class="" method="post" action="{{route('register')}}">

            {{ csrf_field() }}
            <p class="text-center text-2xl font-medium underline font-serif">Register</p>
            <div class="m-6">
                <label for="name" class="sr-only">Name</label></h1>
                <input class="bg-gray-100 border-2 p-3" type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="m-6">
                <label for="username" class="sr-only">Username</label>
                <input class="bg-gray-100 border-2 p-3" type="text" name="username" id="username" placeholder="Enter your username">
            </div> 
            <div class="m-6">
                <label for="email" class="sr-only">Email</label>
                <input class="bg-gray-100 border-2 p-3" type="email" name="email" id="email" placeholder="Enter your email">
            </div> 
            <div class="m-6">
                <label for="password" class="sr-only">Password</label>
                <input class="bg-gray-100 border-2 p-3" type="password" name="password" id="password" placeholder="Choose a passsword">
            </div> 
            <div class="m-6">
                <label for="password_confirmation" class="sr-only">Repeat your password</label>
                <input class="bg-gray-100 border-2 p-3" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password">
            </div> 

            <div class="m-6 p-3">
                <button type="submit" class="bg-gradient-light-blue text-white px-4 py-3 rounded w-full">Register</button>
            </div> 
        </form>

        </div>

    </div>

@endsection