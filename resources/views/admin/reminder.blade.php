    @extends('admin/sidebar_admin')
    @section('title', 'Reminder')
    @section('konten')
    <div class="ml-[20%]">
        <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center justify-between px-4">
            <h1 class="text-xl font-bold text-brown-enzo" style="letter-spacing: 1px">REMINDER</h1>
            <div class="relative group z-20">
                <!-- Dropdown Button -->
                <button class="text-brown-enzo font-semibold flex flex-col justify-center items-center w-[120px] mr-5" style="letter-spacing: 1px">
                    Filter
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
                </button>

                <!-- Dropdown Content with Checkbox -->
                <div class="absolute opacity-0 group-hover:opacity-100 bg-green-light shadow-lg mt-2 rounded-md z-30 top-full left-[10px] w-[100px] transition-opacity duration-500 delay-25">
                    <div class="block px-4 py-2">
                        <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                            <input type="checkbox" class="mr-2 accent-green-main">
                            DP 1
                        </label>
                    </div>
                    <div class="block px-4 py-2">
                        <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                            <input type="checkbox" class="mr-2 accent-green-main">
                            DP 2
                        </label>
                    </div>
                    <div class="block px-4 py-2">
                        <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                            <input type="checkbox" class="mr-2 accent-green-main">
                            Lunas
                        </label>
                    </div>
                </div>
            </div>
        </header>
        <!-- Tabel Data Pesanan -->
        <main class="pt-20 pr-5 bg-green-light h-full">
            <div class="overflow-x-auto px-3">
                <table class="table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner">
                    <thead class="bg-green-main/30">
                        <tr>
                            <th class="text-center py-6">ID</th>
                            <th class="text-center py-6">Nama Pelanggan</th>
                            <th class="text-center py-6">Tipe Produk</th>
                            <th class="text-center py-6">Tanggal Pesan</th>
                            <th class="text-center py-6">Deadline</th>
                            <th class="text-center py-6">Status Pembayaran</th>
                            <th class="text-center py-6">Status Pengerjaan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-green-main/10">
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">1</td>
                            <td class="px-4 py-3">Alicia</td>
                            <td class="px-4 py-3">Invitation Card</td>
                            <td class="px-4 py-3 text-center">05-01-2025</td>
                            <td class="px-4 py-3 text-center">12-01-2025</td>
                            <td class="px-4 py-3 text-center">Lunas</td>
                            <td class="px-4 py-3 text-center">Selesai</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">2</td>
                            <td class="px-4 py-3">Ibra</td>
                            <td class="px-4 py-3">Souvenir</td>
                            <td class="px-4 py-3 text-center">08-01-2025</td>
                            <td class="px-4 py-3 text-center">15-01-2025</td>
                            <td class="px-4 py-3 text-center">DP 1</td>
                            <td class="px-4 py-3 text-center">Proses</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">3</td>
                            <td class="px-4 py-3">Hanun</td>
                            <td class="px-4 py-3">Invitation Card</td>
                            <td class="px-4 py-3 text-center">09-01-2025</td>
                            <td class="px-4 py-3 text-center">20-01-2025</td>
                            <td class="px-4 py-3 text-center">DP 2</td>
                            <td class="px-4 py-3 text-center">Proses</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">4</td>
                            <td class="px-4 py-3">Sasmi</td>
                            <td class="px-4 py-3">Souvenir</td>
                            <td class="px-4 py-3 text-center">10-01-2025</td>
                            <td class="px-4 py-3 text-center">18-01-2025</td>
                            <td class="px-4 py-3 text-center">DP 1</td>
                            <td class="px-4 py-3 text-center">Proses</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- rekap sementara -->
            <section id="purchase" class="purchase mb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    REKAP
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[3.25rem] mb-5 max-h-[400px]">
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-brown-enzo uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Kode Barang</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Nama Barang</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Stok Awal</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Barang Masuk</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Barang Keluar</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Stok Akhir</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Harga</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="overflow-y-auto">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">B-001</td>
                                <td class="px-6 py-4">Kanvas Putih</td>
                                <td class="px-6 py-4">4.5</td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4">4.5</td>
                                <td class="px-6 py-4">35.000</td>
                                <td class="px-6 py-4">157.500</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">KJ</td>
                                <td class="px-6 py-4">Kancing Jepret</td>
                                <td class="px-6 py-4">500</td>
                                <td class="px-6 py-4">0</td>
                                <td class="px-6 py-4">0</td>
                                <td class="px-6 py-4">500</td>
                                <td class="px-6 py-4">450</td>
                                <td class="px-6 py-4">225.000</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">H30</td>
                                <td class="px-6 py-4">Handuk 30x70</td>
                                <td class="px-6 py-4">7</td>
                                <td class="px-6 py-4">0</td>
                                <td class="px-6 py-4">0</td>
                                <td class="px-6 py-4">7</td>
                                <td class="px-6 py-4">10.000</td>
                                <td class="px-6 py-4">70.000</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">B-001</td>
                                <td class="px-6 py-4">Kanvas Putih</td>
                                <td class="px-6 py-4">4.5</td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4">4.5</td>
                                <td class="px-6 py-4">35.000</td>
                                <td class="px-6 py-4">157.500</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">B-001</td>
                                <td class="px-6 py-4">Kanvas Putih</td>
                                <td class="px-6 py-4">4.5</td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4">4.5</td>
                                <td class="px-6 py-4">35.000</td>
                                <td class="px-6 py-4">157.500</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </section>

            <!-- barang masuk -->
            <section id="purchase" class="purchase pb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    BARANG MASUK
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[3.25rem] mb-5 max-h-[400px]">
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-brown-enzo uppercase">
                            <tr>
                            <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Tanggal</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Kode Barang</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Nama Barang</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Jumlah Barang Masuk</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Harga</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Total Harga</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Catatan</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="overflow-y-auto">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">28/12/2024</td>
                                <td class="px-6 py-4">B-040</td>
                                <td class="px-6 py-4">Kanvas</td>
                                <td class="px-6 py-4">100</td>
                                <td class="px-6 py-4">2000</td>
                                <td class="px-6 py-4">200.000</td>
                                <td class="px-6 py-4">Shabrina</td>
                                <td class="px-4 py-4"><a href="" class="text-blue-600 font-medium hover:underline">Edit</a></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <!-- tambah data -->
                <div class="add_data mt-10 grid justify-items-center bg-gradient-to-br from-red-500 to-blue-400">
                    <button type="button"
                        class="relative bg-green-main/80 text-brown-enzo font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group transition-duration duration-300" id="dropdown-button3">
                        TAMBAH DATA
                    </button>
                    <div class="hidden bg-white/40 backdrop-blur-md px-4 py-4 rounded-xl my-2" id="dropdown-menu3">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="flex items-center flex-col">
                                <label for="tanggal">Tanggal</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="kode_barang" id="kode_barang" name="kode_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="nama_barang" id="nama_barang" name="nama_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="barang_masuk">Jumlah Barang Masuk</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal">Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal">Total Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                        </div>
                        <div class="flex items-center flex-col mt-2">
                            <label for="tanggal">Catatan</label>
                            <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-[45rem] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="bg-blue-600 w-[7rem] rounded-md text-white hover:scale-105 transition-all duration-300">
                                SUBMIT
                            </button>
                        </div>

                    </div>

                </div>

            </section>
        </main>
    </div>

<script>
  const button3 = document.getElementById('dropdown-button3');
  const menu3 = document.getElementById('dropdown-menu3');

  let isClosed = false;

  button3.addEventListener('click', () => {
    // Toggle dropdown visibility
    menu3.classList.toggle('hidden');

    if (!isClosed){
        button3.textContent = 'CLOSE';
        button3.classList.remove('bg-green-main/80');
        button3.classList.add('bg-red-600');
        isClosed = true;
    } else {
        button3.textContent = 'TAMBAH DATA';
        button3.classList.remove('bg-red-600');
        button3.classList.add('bg-green-main/80');
        isClosed = false;
    }
  });
</script>

    @endsection
<!-- </body>
</html> -->
