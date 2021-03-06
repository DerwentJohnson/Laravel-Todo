@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">

        @if (session('status'))
            {{ session('status') }}
        @endif
        <form action="{{ route('login')}}" method="post">
            @csrf
        
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email Address" class="bg-gray-100 border-2 w-full h-2 p-4 rounded-lg">

                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter a Password" class="bg-gray-100 border-2 w-full h-2 p-4 rounded-lg">   
                
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection