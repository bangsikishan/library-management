@extends('layout')

@section('content')
    <div>
        <h1 class="text-center text-2xl font-bold my-10">Login</h1>
        <form action="#" method="POST" class="flex flex-col items-center md:w-1/2 mx-auto">
            <div class="md:w-1/2 my-4">
                <label for="username"><b>Username</b></label>
                <input 
                    type="text" 
                    name="username" 
                    placeholder="Username" 
                    class="block border border-gray-400 rounded-sm py-2 px-4 w-full text-sm md:text-base" 
                    required
                >
                @error('username')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="md:w-1/2 my-4">
                <label for="password"><b>Password</b></label>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password" 
                    class="block border border-gray-400 rounded-sm py-2 px-4 w-full text-sm md:text-base" 
                    required
                >
                @error('password')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="font-semibold text-white py-3 px-4 rounded-sm bg-[#2F4858] w-fit">Login</button>
        </form>
    </div>
@endsection