@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
            <form method="POST" action="/register">
                @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-omly">Name:</label>
                        <input type="text" name="name" id="name"placeholder="Enter Name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">

                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="username" class="sr-omly">Username:</label>
                        <input type="text" name="username" id="username"placeholder="Enter Username"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('username') border-red-500 @enderror" value="{{old('username')}}">

                        @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="sr-omly">Email:</label>
                        <input type="email" name="email" id="email"placeholder="Enter Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email') border-red-500 @enderror" value="{{old('email')}}">

                        @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="sr-omly">Password:</label>
                        <input type="password" name="password" id="password"placeholder="Enter Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror" value="">

                        @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-omly">Re-type Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"placeholder="Re-type Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password_confirmation') border-red-500 @enderror" value="">

                        @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-400 text white px-4 py-3 rounded font-medium w-full" style="cursor: pointer"> Register</button>
                    </div>    
            </form>
        </div>
    </div>
@endsection