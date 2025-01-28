@extends('user/sidebar_user')
@section('title', 'Pesanan Saya')
@section('konten')
<div class="ml-[20%] min-h-screen h-auto bg-green-light">
    <div class="grid grid-rows-[110px_auto] relative">
        <!-- header navbar -->
        <div class="z-30 sticky top-0 right-0">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo bg-green-shadow px-4 py-5">
                <h1>PESANAN SAYA NEW</h1>
            </div>
            <div class="bg-green-light px-4 py-5">
                <div class="bg-green-main/20 rounded-sm overflow-hidden">
                    <div class="grid grid-cols-6 text-center text-green-main font-medium">
                        <button type="button" id="btn-pending" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Pending
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-pending"></div>
                        </button>
                        <button type="button" id="btn-fix" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Diterima
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-fix"></div>
                        </button>
                        <button type="button" id="btn-order" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Pemesanan Bahan
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-order"></div>
                        </button>
                        <button type="button" id="btn-proses" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Proses Produksi
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-proses"></div>
                        </button>
                        <button type="button" id="btn-finish" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Finishing
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-finish"></div>
                        </button>
                        <button type="button" id="btn-ready" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Ready
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-ready"></div>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- konten utama -->
        @foreach ($orders as $order )
        @if ($order->progress =='Pending')
        <!-- pending -->
        <div class="" id="page-pending">
            <div class="px-4 py-6 h-full mt-[3rem] flex flex-col gap-2">
                <div class="bg-green-main/20 grid grid-rows-[40px_300px_40px] rounded-md overflow-hidden hover:bg-green-main/30">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ $order->type }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                        <h1 class="text-xs">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="px-3 py-3 overflow-hidden">
                            @if ($order->type == 'souvenir')
                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'invitation')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'packaging')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain packaging" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @endif
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Alamat</p>
                                <p class="text-md capitalize font-medium">{{ $order->address }}</p>
                            </div>
                            @if ($order->type =='souvenir')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Acara</p>
                                <p class="text-md capitalize font-medium">{{ $order->event_date }}</p>
                            </div>
                            @elseif($order->type =='invitation')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Akad</p>
                                <p class="text-md capitalize font-medium">{{ $order->akad_pemberkatan_date}}</p>
                            </div>
                            @else

                            @endif
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Harga per pcs</p>
                                <p class="text-md capitalize font-medium">{{ $order->price_per_pcs }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Jumlah</p>
                                <p class="text-md capitalize font-medium">{{ $order->quantity }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Bayar</p>
                                <p class="text-md capitalize font-medium">{{ $order->payment_status }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Desain</p>
                                <p class="text-md capitalize font-medium">{{ $order->design_status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        @elseif ($order->progress =='Fix')
        <!-- fix -->
        <div class="hidden" id="page-fix">
            <div class="px-4 py-6 h-full mt-[3rem] flex flex-col gap-2">
                <div class="bg-green-main/20 grid grid-rows-[40px_300px_40px] rounded-md overflow-hidden hover:bg-green-main/30">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ $order->type }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                        <h1 class="text-xs">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="px-3 py-3 overflow-hidden">
                            @if ($order->type == 'souvenir')
                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'invitation')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'packaging')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain packaging" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @endif
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Alamat</p>
                                <p class="text-md capitalize font-medium">{{ $order->address }}</p>
                            </div>
                            @if ($order->type =='souvenir')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Acara</p>
                                <p class="text-md capitalize font-medium">{{ $order->event_date }}</p>
                            </div>
                            @elseif($order->type =='invitation')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Akad</p>
                                <p class="text-md capitalize font-medium">{{ $order->akad_pemberkatan_date}}</p>
                            </div>
                            @else

                            @endif
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Harga per pcs</p>
                                <p class="text-md capitalize font-medium">{{ $order->price_per_pcs }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Jumlah</p>
                                <p class="text-md capitalize font-medium">{{ $order->quantity }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Bayar</p>
                                <p class="text-md capitalize font-medium">{{ $order->payment_status }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Desain</p>
                                <p class="text-md capitalize font-medium">{{ $order->design_status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        @elseif ($order->progress =='Pemesanan Bahan')
        <!-- order -->
        <div class="hidden" id="page-order">
            <div class="px-4 py-6 h-full mt-[3rem] flex flex-col gap-2">
                <div class="bg-green-main/20 grid grid-rows-[40px_300px_40px] rounded-md overflow-hidden hover:bg-green-main/30">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ $order->type }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                        <h1 class="text-xs">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="px-3 py-3 overflow-hidden">
                            @if ($order->type == 'souvenir')
                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'invitation')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'packaging')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain packaging" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @endif
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Alamat</p>
                                <p class="text-md capitalize font-medium">{{ $order->address }}</p>
                            </div>
                            @if ($order->type =='souvenir')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Acara</p>
                                <p class="text-md capitalize font-medium">{{ $order->event_date }}</p>
                            </div>
                            @elseif($order->type =='invitation')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Akad</p>
                                <p class="text-md capitalize font-medium">{{ $order->akad_pemberkatan_date}}</p>
                            </div>
                            @else

                            @endif
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Harga per pcs</p>
                                <p class="text-md capitalize font-medium">{{ $order->price_per_pcs }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Jumlah</p>
                                <p class="text-md capitalize font-medium">{{ $order->quantity }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Bayar</p>
                                <p class="text-md capitalize font-medium">{{ $order->payment_status }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Desain</p>
                                <p class="text-md capitalize font-medium">{{ $order->design_status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        @elseif ($order->progress == 'Proses Produksi')
        <!-- proses -->
        <div class="hidden" id="page-proses">
            <div class="px-4 py-6 h-full mt-[3rem] flex flex-col gap-2">
                <div class="bg-green-main/20 grid grid-rows-[40px_300px_40px] rounded-md overflow-hidden hover:bg-green-main/30">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ $order->type }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                        <h1 class="text-xs">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="px-3 py-3 overflow-hidden">
                            @if ($order->type == 'souvenir')
                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'invitation')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'packaging')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain packaging" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @endif
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Alamat</p>
                                <p class="text-md capitalize font-medium">{{ $order->address }}</p>
                            </div>
                            @if ($order->type =='souvenir')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Acara</p>
                                <p class="text-md capitalize font-medium">{{ $order->event_date }}</p>
                            </div>
                            @elseif($order->type =='invitation')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Akad</p>
                                <p class="text-md capitalize font-medium">{{ $order->akad_pemberkatan_date}}</p>
                            </div>
                            @else

                            @endif
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Harga per pcs</p>
                                <p class="text-md capitalize font-medium">{{ $order->price_per_pcs }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Jumlah</p>
                                <p class="text-md capitalize font-medium">{{ $order->quantity }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Bayar</p>
                                <p class="text-md capitalize font-medium">{{ $order->payment_status }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Desain</p>
                                <p class="text-md capitalize font-medium">{{ $order->design_status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        @elseif ($order->progress == 'Finishing')
        <!-- finish -->
        <div class="hidden" id="page-finish">
            <div class="px-4 py-6 h-full mt-[3rem] flex flex-col gap-2">
                <div class="bg-green-main/20 grid grid-rows-[40px_300px_40px] rounded-md overflow-hidden hover:bg-green-main/30">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ $order->type }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                        <h1 class="text-xs">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="px-3 py-3 overflow-hidden">
                            @if ($order->type == 'souvenir')
                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'invitation')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'packaging')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain packaging" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @endif
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Alamat</p>
                                <p class="text-md capitalize font-medium">{{ $order->address }}</p>
                            </div>
                            @if ($order->type =='souvenir')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Acara</p>
                                <p class="text-md capitalize font-medium">{{ $order->event_date }}</p>
                            </div>
                            @elseif($order->type =='invitation')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Akad</p>
                                <p class="text-md capitalize font-medium">{{ $order->akad_pemberkatan_date}}</p>
                            </div>
                            @else

                            @endif
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Harga per pcs</p>
                                <p class="text-md capitalize font-medium">{{ $order->price_per_pcs }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Jumlah</p>
                                <p class="text-md capitalize font-medium">{{ $order->quantity }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Bayar</p>
                                <p class="text-md capitalize font-medium">{{ $order->payment_status }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Desain</p>
                                <p class="text-md capitalize font-medium">{{ $order->design_status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        @elseif ($order->progress == 'Selesai')
        <!-- ready -->
        <div class="hidden" id="page-ready">
            <div class="px-4 py-6 h-full mt-[3rem] flex flex-col gap-2">
                <div class="bg-green-main/20 grid grid-rows-[40px_300px_40px] rounded-md overflow-hidden hover:bg-green-main/30">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">{{ $order->type }}</h1>
                        <h1 class="text-xs">{{ $order->user_name }}</h1>
                        <h1 class="text-xs">{{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('j F Y ') : '' }}</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="px-3 py-3 overflow-hidden">
                            @if ($order->type == 'souvenir')
                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'invitation')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @elseif ($order->type == 'packaging')
                            <img src="{{ asset('storage/' . $order->desain_path) }}" alt="Desain packaging" class="object-cover w-full h-full rounded-md bg-gray-200">
                            @endif
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Alamat</p>
                                <p class="text-md capitalize font-medium">{{ $order->address }}</p>
                            </div>
                            @if ($order->type =='souvenir')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Acara</p>
                                <p class="text-md capitalize font-medium">{{ $order->event_date }}</p>
                            </div>
                            @elseif($order->type =='invitation')
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Tanggal Akad</p>
                                <p class="text-md capitalize font-medium">{{ $order->akad_pemberkatan_date}}</p>
                            </div>
                            @else

                            @endif
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Harga per pcs</p>
                                <p class="text-md capitalize font-medium">{{ $order->price_per_pcs }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Jumlah</p>
                                <p class="text-md capitalize font-medium">{{ $order->quantity }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Bayar</p>
                                <p class="text-md capitalize font-medium">{{ $order->payment_status }}</p>
                            </div>
                            <div class="flex flex-col px-1 py-2">
                                <p class="text-sm mb-1">Status Desain</p>
                                <p class="text-md capitalize font-medium">{{ $order->design_status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

<script>
    const pages = [
        { buttonId: 'btn-pending', pageId: 'page-pending', styleId: 'style-pending' },
        { buttonId: 'btn-fix', pageId: 'page-fix', styleId: 'style-fix' },
        { buttonId: 'btn-order', pageId: 'page-order', styleId: 'style-order' },
        { buttonId: 'btn-proses', pageId: 'page-proses', styleId: 'style-proses' },
        { buttonId: 'btn-finish', pageId: 'page-finish', styleId: 'style-finish' },
        { buttonId: 'btn-ready', pageId: 'page-ready', styleId: 'style-ready' },
    ];

    // Fungsi untuk mengatur halaman aktif
    function setActivePage(activeButtonId) {
        pages.forEach(({ buttonId, pageId, styleId }) => {
            const page = document.getElementById(pageId);
            const style = document.getElementById(styleId);

        if (buttonId === activeButtonId) {
            page.classList.remove('hidden'); // Tampilkan halaman aktif
            style.classList.remove('w-0'); // Aktifkan garis navigasi
            style.classList.add('w-[70%]');
        } else {
            page.classList.add('hidden'); // Sembunyikan halaman lain
            style.classList.remove('w-[70%]'); // Nonaktifkan garis navigasi
            style.classList.add('w-0');
        }
    });
    }

    // Tambahkan event listener untuk semua tombol
    pages.forEach(({ buttonId }) => {
        const button = document.getElementById(buttonId);
        button.addEventListener('click', () => setActivePage(buttonId));
    });
</script>
@endsection
