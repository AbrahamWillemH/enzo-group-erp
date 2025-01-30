@extends('user/sidebar_user')
@section('title', 'Pesanan Saya')
@section('konten')
<div class="ml-[20%] min-h-screen h-auto bg-green-light">
    <div class="grid grid-rows-[68px_auto] relative">
        <!-- header navbar -->
        <div class="z-30 sticky top-0 right-0 bg-accept">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo bg-green-shadow px-4 py-5">
                <h1>PESANAN SAYA NEW</h1>
            </div>
            <!-- <div class="bg-green-light px-4 py-5">
                <div class="bg-green-main/20 rounded-sm overflow-hidden">
                    <div class="grid grid-cols-6 text-center text-green-main font-medium">
                        <button type="button" id="btn-pending" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Pending (1)
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-pending"></div>
                        </button>
                        <button type="button" id="btn-fix" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Fix (1)
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-fix"></div>
                        </button>
                        <button type="button" id="btn-order" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Order (1)
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-order"></div>
                        </button>
                        <button type="button" id="btn-proses" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Proses (1)
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-proses"></div>
                        </button>
                        <button type="button" id="btn-finish" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Finishing (1)
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-finish"></div>
                        </button>
                        <button type="button" id="btn-ready" class="px-2 py-2 flex-col group flex justify-center items-center">
                            Ready (1)
                            <div class="bg-green-main h-[2px] w-0 group-hover:w-[70%] transition-all duration-500" id="style-ready"></div>
                        </button>
                    </div>
                    
                </div>
            </div> -->
        </div>
        
        <!-- konten utama -->
        
        <!-- kartu pesanan saya -->
        <div class="pb-6" id="page-pending">
            <div class="px-4 py-6 h-full mt-[1rem] flex flex-col gap-8">
                <div class="bg-green-main/20 grid grid-rows-[40px_400px_40px] rounded-md overflow-hidden hover:bg-green-main/25">
                    <div class="flex flex-row gap-8 px-3 items-center py-2 border-b-2 border-black/40">
                        <h1 class="text-xs font-bold">Invitation</h1>
                        <h1 class="text-xs">Indah Duniawi</h1>
                    </div>
                    <div class="grid grid-cols-[40%_60%] gap-2">
                        <div class="p-2 overflow-hidden grid grid-rows-[80%_20%] gap-1">
                            <img src="{{ asset('img/undanganA.jpeg') }}" alt="" class="object-cover w-full h-full rounded-md bg-gray-200">
                            <div class="grid grid-rows-2 place-items-center">
                                <p class="text-sm">Setuju dengan desain?</p>
                                <div class="grid grid-cols-2 gap-2">
                                    <button type="button" class="bg-green-400 w-[90px] h-[25px] rounded-md p-2 flex items-center justify-center font-medium text-sm border border-white/0 hover:border-green-400 hover:shadow-green-600 hover:shadow-md transition transform color duration-300 overflow-hidden group">YA</button>
                                    <button type="button" class="bg-red-400 w-[90px] h-[25px] rounded-md p-2 flex items-center justify-center font-medium text-sm border border-white/0 hover:border-red-400 hover:shadow-red-800 hover:shadow-md transition transform color duration-300 overflow-hidden group">TIDAK</button>

                                </div>
                            </div>
                        </div>
                        <div class="grid grid-rows-[75%_25%] p-1">
                            <div class="grid grid-cols-2">
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-sm mb-1">Alamat</p>
                                    <p class="text-md capitalize font-medium">Kampung Kampungan, RT 01/RW 01, Kandang Menjangan, Kartosuro, Sukoharjo, Jawa Tengah</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-sm mb-1">Tanggal Pesan</p>
                                    <p class="text-md capitalize font-medium">12 Januari 2025</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-sm mb-1">Harga per pcs</p>
                                    <p class="text-md capitalize font-medium">Rp 7.000</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-sm mb-1">Jumlah</p>
                                    <p class="text-md capitalize font-medium">500</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-sm mb-1">Status Bayar</p>
                                    <p class="text-md capitalize font-medium">Belum bayar</p>
                                </div>
                                <div class="flex flex-col px-1 py-2">
                                    <p class="text-sm mb-1">Status Desain</p>
                                    <p class="text-md capitalize font-medium">Menunggu</p>
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
                                    <p class="text-sm">Pending</p>
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
                                    <p class="text-sm">Fix</p>
                                </div>

                                <div class="grid grid-rows-[70%_30%] place-items-center">
                                    <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-sm">Order</p>
                                </div>

                                <div class="grid grid-rows-[70%_30%] place-items-center">
                                    <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-sm">Proses</p>
                                </div>

                                <div class="grid grid-rows-[70%_30%] place-items-center">
                                    <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-sm">Finishing</p>
                                </div>

                                <div class="grid grid-rows-[70%_30%] place-items-center">
                                    <div class="border-gray-500 border-2 w-[40px] h-[40px] grid rounded-full place-items-center">
                                        <div class="bg-gray-500 w-[30px] h-[30px] rounded-full grid place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-[25px] w-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-sm">Ready</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="px-3 flex justify-center items-center py-2 border-t-2 border-black/40">
                        <a href="" class="relative border border-white/0 hover:border-green-main hover:shadow-green-main hover:shadow-md transition transform color duration-300 font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- <script>
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

</script> -->
@endsection