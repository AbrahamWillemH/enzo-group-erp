@extends('user/sidebar_user')
@section('title', 'Pesanan Saya')
@section('konten')
<div class="ml-[20%] h-screen">
    <div class="grid grid-rows-[12%_88%] relative">
        <!-- header navbar -->
        <div class="z-30 fixed top-0 right-0 w-[80%] grid grid-cols-[40%_60%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>PESANAN SAYA</h1>
            </div>
            <div class="grid grid-cols-4 gap-1 font-medium">
                <a href="#rekap" class="text-brown-enzo flex flex-col justify-center items-center group">Rekap
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="#barang_masuk" class="text-brown-enzo flex flex-col justify-center items-center group">Barang Masuk
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="#barang_keluar" class="text-brown-enzo flex flex-col justify-center items-center group">Barang Keluar
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="#pesan" class="text-brown-enzo flex flex-col justify-center items-center group">Pesan
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                
            </div>
        </div>
        
        <!-- konten utama -->
        <div class="bg-blue-100 mt-[4.25rem] h-screen">
            <div class="grid grid-cols-2 bg-green-light place-items-center py-5">
                <div class="w-[85%] overflow-hidden">
                    <div class="p-2 w-[12rem] text-center bg-green-main rounded-t-lg text-white font-medium">
                        <h2>Invitation</h2>
                    </div>
                    <div class="bg-green-main/40 rounded-b-lg rounded-tr-lg h-[400px] grid grid-rows-[58%_20%_15%_7%] overflow-hidden">
                        <div class="grid grid-cols-2 gap-2 p-2">
                            <div class="bg-slate-400 rounded-lg overflow-hidden"><img src="{{ asset('img/undanganA.jpeg') }}" alt="" class="object-cover w-full h-full"></div>
                            <div class="bg-white/40 backdrop-blur-md rounded-lg grid grid-rows-8">
                                <span class="pl-3 flex items-center text-xs">Nama</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">Atas Nama Fulan</span>
                                <span class="pl-3 flex items-center text-xs">Status Bayar</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">Belum Bayar</span>
                                <span class="pl-3 flex items-center text-xs">Progres</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">Fix</span>
                                <span class="pl-3 flex items-center text-xs">Estimasi</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">-</span>
                            </div>
                        </div>

                        <!-- progres -->
                        <div class="grid grid-cols-6">
                            <!-- 1 step -->
                            <div class="grid grid-rows-[70%_30%] place-items-center">
                                <div class="border-white border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                    <div class="bg-white w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>

                                    </div>
                                </div>
                                <p class="text-xs">Pending</p>
                            </div>

                            <div class="grid grid-rows-[70%_30%] place-items-center bg-green-main/20 rounded-lg">
                                <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                    <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-xs">Fix</p>
                            </div>

                            <div class="grid grid-rows-[70%_30%] place-items-center">
                                <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                    <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-xs">Order</p>
                            </div>

                            <div class="grid grid-rows-[70%_30%] place-items-center">
                                <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                    <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-xs">Proses</p>
                            </div>

                            <div class="grid grid-rows-[70%_30%] place-items-center">
                                <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                    <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-xs">Finishing</p>
                            </div>

                            <div class="grid grid-rows-[70%_30%] place-items-center">
                                <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                    <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-xs">Ready</p>
                            </div>
                        </div>

                        <!-- button -->
                        <div class="grid grid-cols-2 gap-1 p-1 place-items-center">
                            <button type="button" class="button-progres bg-green-main/80 rounded-lg px-2 py-1 w-[120px] text-sm text-white hover:border-2 hover:border-green-main/80 hover:bg-green-main/0 hover:text-green-main/80 transition duration-300 border-white/0 font-medium">Lihat Progres</button>
                            <button type="button" class="bg-green-main/80 rounded-lg px-2 py-1 w-[120px] text-sm text-white hover:border-2 hover:border-green-main/80 hover:bg-green-main/0 hover:text-green-main/80 transition duration-300 border-white/0 font-medium">Detail</button>
                        </div>

                        <!-- Main modal -->
                        <div id="timeline-modal" class="hidden">
                            <div tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-screen bg-black/50">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white/60 backdrop-blur-lg rounded-lg shadow-sm">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-900">
                                                <h3 class="text-lg font-semibold text-gray-900">
                                                    Progres Pesanan
                                                </h3>
                                                <button type="button" class="button-progres text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                <ol class="relative border-s border-gray-200 ms-3.5 mb-4 md:mb-5">
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        </span>
                                                        <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900">Ready <span class="bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3">Latest</span></h3>
                                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-700">25 Februari 2025</time>
                                                    </li>
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-4 ring-gray-100">
                                                            <svg class="h-[15px] w-auto text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Finishing</h3>
                                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-600">20 Februari 2025</time>
                                                    </li>
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-4 ring-gray-100">
                                                            <svg class="h-[15px] w-auto text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Proses</h3>
                                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-600">10 Februari 2025</time>
                                                    </li>
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-4 ring-gray-100">
                                                            <svg class="h-[15px] w-auto text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Order</h3>
                                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-600">28 Januari 2025</time>
                                                    </li>
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-4 ring-gray-100">
                                                            <svg class="h-[15px] w-auto text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Fix</h3>
                                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-600">10 Januari 2025</time>
                                                    </li>
                                                    <li class="ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-4 ring-gray-100">
                                                            <svg class="h-[15px] w-auto text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Pending</h3>
                                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-600">1 Januari 2025</time>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!-- update -->
                        <div class="bg-green-main grid place-items-center text-sm text-white">
                            Diperbarui pada 17-12-2025
                        </div>

                    </div>
                </div>
                <div class="w-[80%] bg-green-100 rounded-lg">h</div>
            </div>
        </div>
    </div>
</div>

<script>
    const buttonProgres = document.querySelectorAll('.button-progres');
    const menuProgres = document.getElementById('timeline-modal');

    let isClosedProgres = false;

    buttonProgres.forEach((button) => {
        button.addEventListener('click', () => {
            // Toggle dropdown visibility
            menuProgres.classList.toggle('hidden');
        });
    });

</script>
@endsection