    @extends('layout.main')


    @section('content')
        <section class="relative h-1/2 bg-[url('./assets/img/bag.jpg')]  bg-cover bg-center bg-no-repeat">
            <div class="bg-black opacity-60 h-full"></div>
            <div class="absolute inset-0 flex justify-center items-center">
                <div class="max-w-lg mx-auto">
                    <h1 class="text-3xl font-bold text-rose-600  lg:text-4xl">Welcome To Our Market</h1>
                    <p class="text-lg font-medium text-white">Temukan kebutuhan anda!, dengan harga murah dan terbaik!</p>
                    <button
                        class="px-5 py-2 mt-3 text-sm font-medium leading-5 text-center text-white capitalize bg-rose-700 rounded-lg transition duration-300 hover:bg-rose-600 lg:mx-0 lg:w-auto focus:outline-none">
                        <a href="/about">Tentang Kami</a>
                    </button>

                </div>
            </div>


            <div id="carouselExampleControls" class="relative px-6 mt-5" data-twe-carousel-init data-twe-ride="carousel">
                <!--Carousel items-->
                <div class="relative mx-auto w-[85%] overflow-hidden after:clear-both after:block after:content-['']">
                    <!--First item-->
                    <div class="relative float-left  -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-twe-carousel-item data-twe-carousel-active>
                        <div class="flex w-full bg-200 justify-between items-center px-6">
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/cat.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Cat Choize </h2>
                                    <p class="text-black"> 23.900</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/molto.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Molto </h2>
                                    <p class="text-black"> 16.900</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/fresh.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Fresh Care</h2>
                                    <p class="text-black ml-5">
                                        16.500</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/jalapeno.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Mie Jalapeno</h2>
                                    <p class="text-black"> 3.400</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/ori.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Kuaci Original</h2>
                                    <p class="text-black"> 12.900</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                        </div>
                    </div>
                    <!--Second item-->
                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-twe-carousel-item>
                        <div class="flex w-full bg-200 justify-between items-center px-6">
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/pucuk.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Teh Pucuk</h2>
                                    <p class="text-black"> 3.900</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/flag.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Frisian Flag </h2>
                                    <p class="text-black"> 18.400</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/tebs.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Tebs Sparking</h2>
                                    <p class="text-black ml-5">
                                        4.800</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/sari.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Alang Sari</h2>
                                    <p class="text-black"> 8.800</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/air.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Air Mineral</h2>
                                    <p class="text-black"> 5.800</p>
                                </div>
                                <button><a href="https://wa.me/6285719805629"
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                        </div>
                    </div>
                    <!--Third item-->
                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-twe-carousel-item>
                        <div class="flex w-full bg-200 justify-between items-center px-6">

                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/kuaci.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Kuaci Rebo</h2>
                                    <p class="text-black"> 10.000</p>
                                </div>
                                <button><a href=""
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/soes.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Paroti Roti </h2>
                                    <p class="text-black ml-5"> 8.500</p>
                                </div>
                                <button><a href=""
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/twis.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Alfa Twiscorn</h2>
                                    <p class="text-black"> 5.700
                                    </p>
                                </div>
                                <button><a href=""
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/sgm.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">SGM 3+</h2>
                                    <p class="text-black"> 41.800
                                    </p>
                                </div>
                                <button><a href=""
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                            <div
                                class="card hover:transform hover:scale-105 shadow-lg  transition duration-300 bg-slate-100 rounded-md pb-8">
                                <img src="./assets/img/tisu.jpg" class="rounded-t-md" width="150px" alt="" />
                                <div class="flex justify-between items-center p-4  mb-5">
                                    <h2 class="text-sm text-rose-700">Tisu Wajah</h2>
                                    <p class="text-black"> 25.900
                                    </p>
                                </div>
                                <button><a href=""
                                        class="hover:bg-rose-600 transition duration-300 text-white ml-4 px-4 py-2 rounded-sm bg-rose-700">Buy
                                        Now</a></button>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Carousel controls - prev item-->
                <button
                    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] bg- hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button" data-twe-target="#carouselExampleControls" data-twe-slide="prev">
                    <span class="inline-block rounded-full  bg-black h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6 mt-1 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                </button>
                <!--Carousel controls - next item-->
                <button
                    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button" data-twe-target="#carouselExampleControls" data-twe-slide="next">
                    <span class="inline-block rounded-full  bg-black  h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6 mt-1 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                </button>
            </div>



        </section>
    @endsection
