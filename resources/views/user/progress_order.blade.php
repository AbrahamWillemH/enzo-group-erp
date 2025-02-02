@extends('user/sidebar_user')
@section('title', 'Pesanan Saya')
@section('konten')
<div class="ml-[50px] lg:ml-[20%] bg-green-light">
    <div class="grid grid-rows-[68px_auto] relative">
        <!-- header navbar -->
        <div class="z-30 sticky top-0 right-0">
            <div class="flex text-left text-base lg:text-xl font-bold items-center text-brown-enzo bg-green-shadow px-4 py-5">
                <h1>PESANAN SAYA</h1>
            </div>
        </div>

        <!-- konten utama -->
    @if ($orders->isNotEmpty())
        <!-- kartu pesanan saya -->
        @foreach ($orders as $order )
        <div class="pb-6">
            <div class="px-4 py-6 h-full mt-[1rem] flex flex-col gap-8">
                <div class="bg-green-main/20 grid grid-rows-[40px_500px_40px] lg:grid-rows-[40px_400px_40px] rounded-md overflow-hidden hover:bg-green-main/25">
                    <div class="flex flex-row gap-2 lg:gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ ucwords($order->type) }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-[40%_60%] gap-2">
                        <div class="p-2 overflow-hidden grid grid-rows-[80%_20%] gap-1 h-[250px] lg:h-auto">
                            @if ($order->type == 'souvenir')
                                @if(!is_null($order->desain_thankscard_path))
                                    <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                                @else
                                    <p class="flex justify-center items-center bg-gray-200 rounded-md">Belum Terdapat Desain</p>
                                @endif
                            @else
                                @if(!is_null($order->desain_path))
                                    <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Gambar Desain" class="object-cover w-full h-full rounded-md bg-gray-200">
                                @else
                                    <p class="flex justify-center items-center bg-gray-200 rounded-md">Belum Terdapat Desain</p>
                                @endif
                            @endif
                            <div class="grid grid-rows-2 place-items-center">
                                @if ($order->desain_path || $order->desain_thankscard_path)
                                @if ($order->design_status == 'Pending')
                                <p class="text-xs lg:text-sm">Setuju dengan desain?</p>
                                <div class="grid grid-cols-2 gap-2">
                                    <form action="{{route('user.accept.design', ['id' => $order->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-green-400 w-[70px] h-[5px] lg:w-[90px] lg:h-[25px] rounded-md p-2 flex items-center justify-center font-medium text-xs lg:text-sm border border-white/0 hover:border-green-400 hover:shadow-green-600 hover:shadow-md transition transform color duration-300 overflow-hidden group">YA</button>
                                    </form>
                                    <form action="{{route('user.decline.design', ['id' => $order->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-red-400 w-[70px] h-[5px] lg:w-[90px] lg:h-[25px] rounded-md p-2 flex items-center justify-center font-medium text-xs lg:text-sm border border-white/0 hover:border-red-400 hover:shadow-red-800 hover:shadow-md transition transform color duration-300 overflow-hidden group">TIDAK</button>
                                    </form>
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>
                        <div class="grid grid-rows-[75%_25%] p-1 h-[240px] lg:h-auto">
                            <div class="grid grid-cols-2 h-[160px] lg:h-auto">
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-xs lg:text-sm mb-1">Alamat</p>
                                    <p class="text-sm lg:text-base capitalize font-medium">{{ $order->address }}</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-xs lg:text-sm mb-1">Tanggal Pesan</p>
                                    <p class="text-sm lg:text-base capitalize font-medium">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-xs lg:text-sm mb-1">Harga per pcs</p>
                                    <p class="text-sm lg:text-base capitalize font-medium">{{ $order->price_per_pcs }}</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-xs lg:text-sm mb-1">Jumlah</p>
                                    <p class="text-sm lg:text-base capitalize font-medium">{{ $order->quantity }}</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-xs lg:text-sm mb-1">Status Bayar</p>
                                    <p class="text-sm lg:text-base capitalize font-medium">{{ $order->payment_status }}</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-xs lg:text-sm mb-1">Status Desain</p>
                                    <p class="text-sm lg:text-base capitalize font-medium">{{ $order->design_status }}</p>
                                </div>
                            </div>

                            <!-- progres -->
                            <div class="grid grid-cols-6 h-[60px] lg:h-auto">
                                <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Pending' ? 'bg-green-main/20 rounded-lg' : '' }}"> <!--bg untuk ketika proses tsb -->
                                    <div class="border-white border-2 w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-white w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] rounded-full grid place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-green-500 stroke-[3]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                </svg>
                                        </div>
                                    </div>
                                    <p class="text-[10px] lg:text-xs">Pending</p>
                                </div>

                                <!-- Fix Step -->
                                <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Fix' ? 'bg-green-main/20 rounded-lg' : '' }}">
                                    <div class="border-{{ $order->progress == 'Pending' ? 'gray-500' : 'white' }} border-2 w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-{{ $order->progress == 'Pending' ? 'gray-500' : 'white' }} w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] rounded-full grid place-items-center">
                                            @if($order->progress == 'Pending')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                                </svg>
                                            @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="text-[10px] lg:text-xs">Fix</p>
                                </div>

                                <!-- Order Step -->
                                <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Pemesanan Bahan' ? 'bg-green-main/20 rounded-lg' : '' }}">
                                    <div class="border-{{ $order->progress == 'Pending' || $order->progress == 'Fix' ? 'gray-500' : 'white' }} border-2 w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-{{ $order->progress == 'Pending' || $order->progress == 'Fix' ? 'gray-500' : 'white' }} w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] rounded-full grid place-items-center">
                                            @if($order->progress == 'Fix')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                                </svg>
                                            @elseif($order->progress == 'Pending')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                </svg>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="text-[10px] lg:text-xs">Order</p>
                                </div>

                                <!-- Proses Step -->
                                <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Proses Produksi' ? 'bg-green-main/20 rounded-lg' : '' }}">
                                    <div class="border-{{ $order->progress == 'Proses Produksi' || $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} border-2 w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-{{ $order->progress == 'Proses Produksi' || $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] rounded-full grid place-items-center">
                                            @if($order->progress == 'Pemesanan Bahan')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                                </svg>
                                            @elseif ($order->progress == 'Pending' || $order->progress == 'Fix')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                </svg>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="text-[10px] lg:text-xs">Proses</p>
                                </div>

                                <!-- Finishing Step -->
                                <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Finishing' ? 'bg-green-main/20 rounded-lg' : '' }}">
                                    <div class="border-{{ $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} border-2 w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-{{ $order->progress == 'Finishing' || $order->progress == 'Selesai' ? 'white' : 'gray-500' }} w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] rounded-full grid place-items-center">
                                            @if($order->progress == 'Finishing' || $order->progress == 'Selesai')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                </svg>
                                            @elseif($order->progress == 'Proses Produksi')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] lg:h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                </svg>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="text-[10px] lg:text-xs">Finishing</p>
                                </div>

                                <!-- Ready Step -->
                                <div class="grid grid-rows-[70%_30%] place-items-center {{ $order->progress == 'Selesai' ? 'bg-green-main/20 rounded-lg' : '' }}">
                                    <div class="border-{{ $order->progress == 'Selesai' ? 'white' : 'gray-500' }} border-2 w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-{{ $order->progress == 'Selesai' ? 'white' : 'gray-500' }} w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] rounded-full grid place-items-center">
                                            @if($order->progress == 'Selesai')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                </svg>
                                            @elseif ($order->progress == 'Finishing')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] lg:w-[30px] lg:h-[30px] text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                </svg>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="text-[10px] lg:text-xs">Ready</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="{{ route('orders.detail', ['id' => $order->id, 'type' => $order->type])}}" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 text-sm lg:text-base font-medium w-[6rem] lg:w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
    <div class="px-4 py-6 flex justify-center items-center">
        <h1 class="bg-gray-600 w-[240px] h-[40px] lg:w-[320px] lg:h-[50px] rounded-md text-green-light p-1 text-xs lg:text-base font-medium flex justify-center items-center">ANDA BELUM MEMESAN APAPUN</h1>
    </div>
    @endif
    </div>
</div>
@endsection
