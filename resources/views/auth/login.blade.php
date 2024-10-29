<x-layout>
    <x-slot:title>Login</x-slot:title>
    <h1>Log in to your account</h1>

    @if($errors->any())
    <div>The information entered contains errors, please try again.</div>
    @endif

    <form action="{{ route('auth.authenticate') }}"
        method="post">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                
                <div class="sm:col-span-4 py-1.5">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" class="block w-96 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                        @error('email') border-red-500 ring-red-500 @enderror
                        "
                            @error('email') aria-invalid="true" aria-errormessage="error-email" @enderror
                            value="{{ old('email')}}">
                    </div>
                    @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="sm:col-span-4 py-1.5">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" class="block w-96 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                        @error('password') border-red-500 ring-red-500 @enderror
                        "
                            @error('password') aria-invalid="true" aria-errormessage="error-password" @enderror>
                    </div>
                    @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

        </div>

        <button type="submit" class="w-[130px] inline-flex justify-center items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
            Log in
        </button>

    </form>

</x-layout>