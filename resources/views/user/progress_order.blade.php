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
        </div>
        
        <!-- konten utama -->
        <div class="bg-blue-100 mt-[4.25rem] h-screen">
            <div class="grid grid-cols-2 bg-green-light place-items-center py-5">
                <div class="w-[85%] overflow-hidden mb-4">
                    @foreach ($orders as $order )
                    <div class="mb-4">
                    <div class="p-2 w-[12rem] text-center bg-green-main rounded-t-lg text-white font-medium">
                        <h2>{{ $order->type }}</h2>
                    </div>
                    <div class="bg-green-main/40 rounded-b-lg rounded-tr-lg h-[400px] grid grid-rows-[58%_20%_15%_7%] overflow-hidden">
                        <div class="grid grid-cols-2 gap-2 p-2">
                            <div class="bg-slate-400 rounded-lg overflow-hidden"><img src="{{ asset('img/undanganA.jpeg') }}" alt="" class="object-cover w-full h-full"></div>
                            <div class="bg-white/40 backdrop-blur-md rounded-lg grid grid-rows-8">
                                <span class="pl-3 flex items-center text-xs">Nama</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">{{ $order->user_name }}</span>
                                <span class="pl-3 flex items-center text-xs">Status Bayar</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">{{ $order->payment_status }}</span>
                                <span class="pl-3 flex items-center text-xs">Progres</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">{{ $order->progress }}</span>
                                <span class="pl-3 flex items-center text-xs">Estimasi</span>
                                <span class="border-b-black/20 border-b pl-3 flex items-center">-</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-6">

                        <!-- Pending Step -->
                        <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Pending' ? 'bg-green-main/20 rounded-lg' : '' }}"> <!--bg untuk ketika proses tsb -->
                            <div class="border-white border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                <div class="bg-white w-[30px] h-[30px] rounded-full grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                </div>
                            </div>
                            <p class="text-xs">Pending</p>
                        </div>

                        <!-- Fix Step -->
                        <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Fix' ? 'bg-green-main/20 rounded-lg' : '' }}">
                            <div class="border-{{ $order->progress == 'Pending' ? 'gray-500' : 'white' }} border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                <div class="bg-{{ $order->progress == 'Pending' ? 'gray-500' : 'white' }} w-[30px] h-[30px] rounded-full grid place-items-center">
                                    @if($order->progress == 'Pending')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                        </svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg> 
                                    @endif
                                </div>
                            </div>
                            <p class="text-xs">Fix</p>
                        </div>

                        <!-- Order Step -->
                        <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Pemesanan Bahan' ? 'bg-green-main/20 rounded-lg' : '' }}">
                            <div class="border-{{ $order->progress == 'Pending' || $order->progress == 'Fix' ? 'gray-500' : 'white' }} border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                <div class="bg-{{ $order->progress == 'Pending' || $order->progress == 'Fix' ? 'gray-500' : 'white' }} w-[30px] h-[30px] rounded-full grid place-items-center">
                                    @if($order->progress == 'Fix')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                        </svg>
                                    @elseif($order->progress == 'Pending')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    @endif
                                </div>
                            </div>
                            <p class="text-xs">Order</p>
                        </div>

                        <!-- Proses Step -->
                        <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Proses Produksi' ? 'bg-green-main/20 rounded-lg' : '' }}">
                            <div class="border-{{ $order->progress == 'Proses Produksi' || $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                <div class="bg-{{ $order->progress == 'Proses Produksi' || $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} w-[30px] h-[30px] rounded-full grid place-items-center">
                                    @if($order->progress == 'Pemesanan Bahan')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                        </svg>
                                    @elseif ($order->progress == 'Pending' || $order->progress == 'Fix')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    @endif
                                </div>
                            </div>
                            <p class="text-xs">Proses</p>
                        </div>

                        <!-- Finishing Step -->
                        <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Finishing' ? 'bg-green-main/20 rounded-lg' : '' }}">
                            <div class="border-{{ $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                <div class="bg-{{ $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} w-[30px] h-[30px] rounded-full grid place-items-center">
                                    @if($order->progress == 'Finishing' || $order->progress == 'Selesai')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    @elseif($order->progress == 'Proses Produksi')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    @endif
                                </div>
                            </div>
                            <p class="text-xs">Finishing</p>
                        </div>

                        <!-- Ready Step -->
                        <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Selesai' ? 'bg-green-main/20 rounded-lg' : '' }}">
                            <div class="border-{{ $order->progress == 'Selesai' ? 'white' : 'gray-500' }} border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                <div class="bg-{{ $order->progress == 'Selesai' ? 'white' : 'gray-500' }} w-[30px] h-[30px] rounded-full grid place-items-center">
                                    @if($order->progress == 'Selesai')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    @elseif ($order->progress == 'Finishing')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>
                                    @endif
                                </div>
                            </div>
                            <p class="text-xs">Ready</p>
                        </div>
                    </div>


                        <!-- button -->
                        <div class="grid grid-cols-2 gap-1 p-1 place-items-center">
                            <button type="button" class="button-progres bg-green-main/80 rounded-lg px-2 py-1 w-[120px] text-sm text-white hover:border-2 hover:border-green-main/80 hover:bg-green-main/0 hover:text-green-main/80 transition duration-300 border-white/0 font-medium">Lihat Progres</button>
                            <a href="{{ route('orders.detail', ['id' => $order->id, 'type' => $order->type]) }}" class="bg-green-main/80 rounded-lg px-2 py-1 w-[120px] text-sm text-white hover:border-2 hover:border-green-main/80 hover:bg-green-main/0 hover:text-green-main/80 transition duration-300 border-white/0 font-medium">Detail</a>
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
                                                    @if ($order->progress == 'Selesai')
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        </span>
                                                        <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900">Ready <span class="{{ $order->progress == 'Selesai' ? 'bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3': '' }}">{{ $order->progress == 'Selesai' ? 'Latest' : ''}}</span></h3>
                                                    </li>
                                                    @endif
                                                    @if ($order->progress == 'Finishing' || $order->progress == 'Selesai')
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Finishing<span class="{{ $order->progress == 'Finishing' ? 'bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3': '' }}">{{ $order->progress == 'Finishing' ? 'Latest' : ''}}</span></h3>
                                                    </li>
                                                    @endif
                                                    @if ($order->progress == 'Proses Produksi' || $order->progress == 'Finishing' || $order->progress =='Selesai')
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Proses<span class="{{ $order->progress == 'Proses Produksi' ? 'bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3': '' }}">{{ $order->progress == 'Proses Produksi' ? 'Latest' : ''}}</span></h3>
                                                    </li>
                                                    @endif
                                                    @if ($order->progress == 'Pending' || $order->progress == 'Fix')
                                                    @else
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Order<span class="{{ $order->progress == 'Pemesanan Bahan' ? 'bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3': '' }}">{{ $order->progress == 'Pemesanan Bahan' ? 'Latest' : ''}}</span></h3>
                                                    </li>
                                                    @endif  
                                                    @if ($order->progress == 'Pending')
                                                    @else
                                                    <li class="mb-10 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Fix<span class="{{ $order->progress == 'Fix' ? 'bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3': '' }}">{{ $order->progress == 'Fix' ? 'Latest' : ''}}</span></h3>
                                                    </li>
                                                    @endif
                                                    <li class="mb-8 ms-8">
                                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-400 rounded-full -start-3.5 ring-4 ring-green-400">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                        <h3 class="mb-1 text-lg font-semibold text-gray-600">Pending<span class="{{ $order->progress == 'Pending' ? 'bg-green-400 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-sm ms-3': '' }}">{{ $order->progress == 'Pending' ? 'Latest' : ''}}</span></h3>
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
                    @endforeach
                </div>
                
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