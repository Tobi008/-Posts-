@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
          @if (session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
            @endif
            <form method="POST" action="/login">
                @csrf
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
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember"> Remember me</label>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-400 text white px-4 py-3 rounded font-medium w-full" style="cursor: pointer"> Login</button>
                    </div>    
            </form>
        </div>
    </div>
@endsection