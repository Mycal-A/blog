<x-layout>

    <section class="px-6 py-8">      
        <main class="max-w-lg mx-auto at-10 bg-gray-300 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="md-6">
                    <label for="name" class="block md-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{old('name')}}" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message}} </p>
                    @enderror
                </div> 
                <div class="md-6">
                    <label for="username" class="block md-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" value="{{old('username')}}" required>
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message}} </p>
                    @enderror
                </div>     
                 
                <div class="md-6">
                    <label for="email" class="block md-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" value="{{old('email')}}" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message}} </p>
                    @enderror
                </div>                  
                <div class="md-6">
                    <label for="password" class="block md-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message}} </p>
                    @enderror
                </div> 
                <div class="md-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit</button>
                </div>   
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{$error}}</li>
                        @endforeach 
                    </ul>                
                @endif
                        
            </form>
        </main>

    </section>
</x-layout>