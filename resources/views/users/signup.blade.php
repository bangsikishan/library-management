@extends('layout')

@section('content')
    <div>
        <h1 class="text-center text-2xl font-bold my-10">Signup</h1>
        <form action="{{ route('users.signup') }}" method="POST" class="flex flex-col py-8">
            @csrf
            <div class="w-3/4 md:w-1/2 my-4 mx-auto">
                <label for="name"><b>Name</b></label>
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Name" 
                    value="{{ old('name') }}" 
                    class="block border border-gray-400 rounded-sm py-2 px-4 w-full text-sm md:text-base" 
                    required
                >
                @error('name')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="w-3/4 md:w-1/2 my-4 mx-auto">
                <label for="username"><b>Username</b></label>
                <input 
                    type="text" 
                    name="username" 
                    placeholder="Username" 
                    value="{{ old('username') }}" 
                    class="block border border-gray-400 rounded-sm py-2 px-4 w-full text-sm md:text-base" 
                    required
                >
                @error('username')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="w-3/4 md:w-1/2 my-4 mx-auto">
                <label for="email"><b>Email</b></label>
                <input 
                    type="text" 
                    name="email" 
                    placeholder="Email" 
                    value="{{ old('email') }}" 
                    class="block border border-gray-400 rounded-sm py-2 px-4 w-full text-sm md:text-base" 
                    required
                >
                @error('email')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="w-3/4 md:w-1/2 my-4 mx-auto">
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
            <div class="w-3/4 md:w-1/2 my-4 mx-auto">
                <label for="password_confirmation"><b>Confirm Password</b></label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Re-enter password" 
                    class="block border border-gray-400 rounded-sm py-2 px-4 w-full text-sm md:text-base" 
                    required
                >
                @error('password_confirmation')
                    <small class="text-red-500 font-bold">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="font-semibold text-white py-3 px-4 rounded-sm bg-[#2F4858] w-fit mx-auto">Signup</button>
            <p class="text-center font-bold mt-3">Already have an account? <a class="font-normal hover:underline cursor-pointer" href="{{ route('users.loginPage') }}">Login</a></p>
        </form>
    </div>
@endsection