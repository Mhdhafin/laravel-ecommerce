<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecomerce | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-white">

        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <section class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="" src="./assets/img/mart.jpg"
                    class="absolute inset-0 h-full w-full object-cover opacity-80" />

                <div class="hidden lg:relative lg:block lg:p-12">


                    <h2 class="mt-6 text-2xl font-bold text-rose-700 sm:text-3xl md:text-4xl">
                        Welcome to our Ecomerce
                    </h2>

                    <p class="mt-4 leading-relaxed text-white/90">
                        Silahkan Login terelebih dahulu, untuk dapat melihat sepatu lebih banyak dan memesanya!
                    </p>
                </div>
            </section>

            <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">

                {{-- @if (Session::has('success'))
          <div class="relative block w-full p-4 mb-4 text-base leading-5 text-white bg-green-500 rounded-lg opacity-100 font-regular">
            {{ Session::get('success') }}
            </div>
          @endif --}}


                <form action="{{ route('login') }}" method="POST" class="mt-8 ">
                    <h2 class="text-4xl  block font-bold mb-8">Login</h2>
                    @if (Session::has('error'))
                        <div
                            class="relative block w-full p-4 mb-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    @csrf
                    <div class="block w-full mb-8">
                        <div class="col-span-6 sm:col-span-3 mb-2">
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                            <input type="text" name="username" id="username"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required />
                            @error('username')
                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required />
                            @error('password')
                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                        <button
                            class="inline-block shrink-0 rounded-md border border-rose-600 bg-rose-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-rose-700 focus:outline-none focus:ring active:text-blue-500">
                            Login
                        </button>

                        <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                            Don't have account?
                            <a href="/register" class="text-gray-700 underline">Register</a>.
                        </p>
                    </div>
                </form>
        </div>
        </main>
        </div>
    </section>

</body>

</html>
