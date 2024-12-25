@extends('layout.main')

@section('content')
    <div class="w-full pt-12 px-4">
        <div class=" mx-auto text-center mb-16">
            <h1 class="text-2xl font-bold mb-2">Minuman Dingin</h1>
            <p class="text-sm font-medium">Berikut minman-minuman yang menyegarkan</p>
        </div>
    </div>
    <div class="w-full px-8 mt-12">
        <div class="flex flex-wrap justify-between items-center ">
            @foreach ($drinks as $drink)
                <div
                    class="card hover:transform hover:scale-105 shadow-lg mt-5 transition duration-300 bg-slate-100 rounded-md pb-8">
                    <img src="./assets/img/{{ $drink->image }}" class="rounded-t-md" width="300px" alt="" />
                    <div class="flex justify-between items-center p-4  mb-5">
                        <h2 class="text-base text-rose-700">{{ $drink->name }}</h2>
                        <p class="text-black"><span
                                class=" line-through text-sm text-rose-500">{{ $drink->price }}/</span>Rp
                            {{ $drink->discount }}
                        </p>
                    </div>
                    <div class="flex pr-6 justify-between items-center">
                        <button>
                            <a href="https://wa.me/6285719805629?text=Saya ingin membeli {{ $drink->name }}"
                                class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                Now</a>
                        </button>
                        <a href="{{ route('addproduct', $drink->id) }}">
                            <div class="w-10 h-10 flex justify-center items-center rounded-full bg-[#e8f6ea] border"
                                style="border: 1px solid #cce7d0"><i class="fa fa-shopping-cart text-rose-700"></i></div>
                        </a>
                    </div>

                </div>
            @endforeach

            {{-- <div
                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                <img src="./assets/img/flag.jpg" class="rounded-t-md" width="300px" alt="" />
                <div class="flex justify-between items-center p-4  mb-5">
                    <h2 class="text-base text-rose-700">Frisian Flag 6 Kotak </h2>
                    <p class="text-black"><span class=" line-through text-sm text-rose-500">20.000</span> / 18.400</p>
                </div>
                <button><a href="https://wa.me/6285719805629?text=Saya20%Ingin20%Membeli%Sepatu20%........"
                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                        Now</a></button>

            </div>
            <div
                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                <img src="./assets/img/tebs.jpg" class="rounded-t-md" width="300px" alt="" />
                <div class="flex justify-between items-center p-4  mb-5">
                    <h2 class="text-base text-rose-700">Tebs Sparking</h2>
                    <p class="text-black ml-5"><span class=" line-through text-sm text-rose-500">5.200</span>/
                        4.800</p>
                </div>
                <button><a href="https://wa.me/6285719805629?text=Saya20%Ingin20%Membeli%Sepatu20%........"
                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                        Now</a></button>

            </div>
            <div
                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                <img src="./assets/img/sari.jpg" class="rounded-t-md" width="300px" alt="" />
                <div class="flex justify-between items-center p-4  mb-5">
                    <h2 class="text-base text-rose-700">Alang Sari</h2>
                    <p class="text-black"><span class=" line-through text-sm text-rose-500">9.000 </span>/ 8.800</p>
                </div>
                <button><a href="https://wa.me/6285719805629?text=Saya20%Ingin20%Membeli%Sepatu20%........"
                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                        Now</a></button>

            </div> --}}
        </div>
    @endsection

    @yield('scripts')
