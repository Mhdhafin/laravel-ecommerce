@extends('layout.main')

@section('content')
    <div class="pt-12 h-screen pb-12">
        <div class=" mx-auto text-center mb-16">
            <h2 class="text-xl mb-2 font-semibold text-rose-700">About us</h2>
        </div>
        <div class="flex flex-wrap justify-center px-8">
            <div class="w-full px-4 mx-auto sm:w-1/2 sm:mb-5">
                <img src="./assets/img/mart.jpg" width="600px" alt="">
            </div>
            <div class="w-full px-4 mx-auto sm:w-1/2">

                <p class="text-base font-medium ">Kami, Aulfamart, pasar baru yang tumbuh, menyediakan kebutuhan harian.
                    Dedikasi kami membawa kemajuan, layanan unggul, dan inovasi tiada henti. Bersama, kami menapaki
                    perjalanan, membangun kepercayaan, dan kesetiaan. Kami memelopori pasar lokal, mengubah paradigma
                    belanja, dan mewujudkan impian. Dengan semangat berani, kami mengejar eksistensi, membawa nilai-nilai
                    baru. Di setiap langkah, kami mengukir sejarah, mewarnai kisah sukses, dan menuju kejayaan abadi.</p>
            </div>
        </div>

        <section class="pt-12 pb-8">
            <div class="p-8">
                <div class="flex felx-col items-center justify-center">
                    <span class="rounded-full bg-rose-600 px-4 py-3 text-white uppercase text-sm">
                        Services
                    </span>
                </div>
                <h1 class="text-4xl font-semibold text-rose-700 text-center mt-6">
                    Layanan kami untuk customer
                </h1>
                <p class="text-center mt-6 text-lg font-light text-gray-500">
                    Kami melayani layanan yang mempermudah customer dalam berbelanja di Website e-commerce kami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 md:px-10 px-0">
                <div class="p-8">
                    <div
                        class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                        </svg>
                    </div>
                    <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
                        Varian Produk yang Lengkap
                    </h2>
                    <p class="font-light text-sm text-gray-500 mb-3">
                        Toko market biasanya Toko
                        market biasanya memiliki berbagai macam produk dari berbagai merek, sehingga konsumen dapat
                        menemukan
                        hampir semua yang mereka butuhkan di satu tempat.
                    </p>

                </div>

                <div class="p-8">
                    <div
                        class="bg-green-100 rounded-full w-16 h-16 flex justify-center items-center text-green-500 shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                            <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                            <polyline points="12 8 7 3 3 7 8 12"></polyline>
                            <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                            <polyline points="16 12 21 17 17 21 12 16"></polyline>
                            <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                        </svg>
                    </div>
                    <h2 class="uppercase mt-6 text-green-500 font-medium mb-3">
                        Lokasi yang Strategis
                    </h2>
                    <p class="font-light text-sm text-gray-500 mb-3">
                        Toko market sering kali berada di lokasi yang mudah dijangkau dan strategis, seperti di pusat kota,
                        dekat area perumahan, atau di pusat perbelanjaan.
                    </p>

                </div>
                <div class="p-8">
                    <div class="bg-red-100 rounded-full w-16 h-16 flex justify-center items-center text-red-500 shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h2 class="uppercase mt-6 text-red-500 font-medium mb-3">
                        Fasilitas Tambahan
                    </h2>
                    <p class="font-light text-sm text-gray-500 mb-3">
                        Banyak toko yang menyediakan fasilitas tambahan seperti tempat parkir yang luas, area bermain anak,
                        atau
                        tempat makan.
                    </p>

                </div>
            </div>
        </section>


        {{-- <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
            style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
        </div>
        <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
            style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
        </div> --}}

    </div>
@endsection
