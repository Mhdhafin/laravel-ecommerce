@extends('layout.main')


@section('content')
    <div class="w-full px-4 pt-12 pb-16">
        <div class="mb-16 text-center">
            <h1 class="text-2xl font-bold mb-2">Shop</h1>
            <p class="text-sm font-medium">Berisi produk lainya dari toko kami!</p>
        </div>
        <div class="flex flex-wrap justify-between px-8 mt-5 items-center">
            @foreach ($others as $other)
                <div
                    class="card hover:transform hover:scale-105 shadow-lg mt-5 transition duration-300 bg-slate-100 rounded-md pb-8">
                    <img src="./assets/img/{{ $other->image }}" class="rounded-t-md" width="300px" alt="" />
                    <div class="flex justify-between items-center p-4  mb-5">
                        <h2 class="text-base text-rose-700">{{ $other->name }}</h2>
                        <p class="text-black"><span
                                class=" line-through text-sm text-rose-500">{{ $other->price }}/</span>Rp
                            {{ $other->discount }}
                        </p>
                    </div>
                    <div class="flex pr-6 justify-between items-center">
                        <button>
                            <a href="https://wa.me/6285719805629?text=Saya ingin membeli {{ $other->name }}"
                                class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                Now</a>
                        </button>
                        <a href="{{ route('addproductother', $other->id) }}">
                            <div class="w-10 h-10 flex justify-center items-center rounded-full bg-[#e8f6ea] border"
                                style="border: 1px solid #cce7d0"><i class="fa fa-shopping-cart text-rose-700"></i></div>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    @endsection
