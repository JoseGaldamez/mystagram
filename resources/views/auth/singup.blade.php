@extends('layout.app')
@section('title')
    Sing Up
@endsection

@section('content')

    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12 p-5">
            <p>
                <img src="{{asset('imgs/desing/registrar.jpg')}}" alt="Register a new account image">
            </p>
        </div>
        <div class="md:w-4/12 bg-white rounded-lg p-6 shadow-xl">
            <form action="{{ route('singup') }}" method="POST" novalidate>
                @csrf
                <div>
                    <label id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Name
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        type="text" 
                        name="name"
                        placeholder="Your name" 
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                        value= '{{old('name')}}' />
                        @error('name')
                            <p class="text-red-700 my-2 text-sm">* {{$message}}</p>
                        @enderror

                </div>
                <div>
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username"
                        placeholder="Username on Mystagram" 
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value='{{old('username')}}' />
                        @error('username')
                            <p class="text-red-700 my-2 text-sm">* {{$message}}</p>
                        @enderror
                </div>
                <div>
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        placeholder="Your email" 
                        class="border p-3 w-full rounded-lg"
                        @error('name') border-red-500 @enderror
                        value='{{old('email')}}' />
                        @error('email')
                            <p class="text-red-700 my-2 text-sm">* {{$message}}</p>
                        @enderror
                </div>
                <div>
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        placeholder="Choose a password" 
                        class="border p-3 w-full rounded-lg"
                        @error('name') border-red-500 @enderror />
                        @error('password')
                            <p class="text-red-700 my-2 text-sm">* {{$message}}</p>
                        @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Confirm password
                    </label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation"
                        placeholder="Confirm your password" 
                        class="border p-3 w-full rounded-lg"
                        @error('name') border-red-500 @enderror />
                        @error('password_confirmation')
                            <p class="text-red-700 my-2 text-sm">* {{$message}}</p>
                        @enderror
                </div>
                <input 
                    type="submit" 
                    value="Create account" 
                    class="bg-sky-600 mt-5 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg ">
            </form>
        </div>
    </div>

@endsection