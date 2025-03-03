@extends('admin/sidebar_admin')
@section('title', 'Inventory')
@section('konten')
<div class="ml-[20%]">
    <div class="bg-green-light h-full grid grid-rows-[12%_88%] relative">
        <!-- header navbar -->
        <div class="z-30 fixed top-0 right-0 w-[80%] grid grid-cols-[40%_60%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>INVENTORY SOUVENIR</h1>
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
        <div>
            <!-- rekap sementara -->
            <section id="rekap" class="rekap mb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    REKAP
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[7.25rem] mb-5 max-h-[400px]">
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
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="overflow-y-auto">
                            @foreach ($rekapStok as $rekap)
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">{{ $rekap->kode_barang }}</td>
                                <td class="px-6 py-4">{{ $rekap->nama_barang }}</td>
                                <td class="px-6 py-4">{{ $rekap->stok_awal }}</td>
                                <td class="px-6 py-4">{{ $rekap->barang_masuk }}</td>
                                <td class="px-6 py-4">{{ $rekap->barang_keluar }}</td>
                                <td class="px-6 py-4">{{ $rekap->stok_akhir }}</td>
                                <td class="px-6 py-4">{{ $rekap->harga }}</td>
                                <td class="px-6 py-4">{{ $rekap->total_harga }}</td>
                                <td class="px-4 py-4"><button type="button" class="edit-rekap text-blue-600 font-medium hover:underline">Edit</button></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- tambah data -->
                <div id="" class="mt-10 grid justify-items-center py-1 bg-gradient-to-b from-green-main via-black to-green-main">
                    <button type="button" class="relative border border-white/0 hover:border-green-300 hover:shadow-green-500 hover:shadow-md transition transform color duration-300 text-white font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group" id="dropdown-button-rekap">
                        TAMBAH DATA
                    </button>
                    <div class="hidden bg-white/40 backdrop-blur-md px-4 py-4 rounded-xl my-2" id="dropdown-menu-rekap">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Kode Barang</label>
                                <input type="date" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="kode_barang" class="text-white">Nama Barang</label>
                                <input type="text" id="kode_barang" name="kode_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="nama_barang" class="text-white">Stok Awal</label>
                                <input type="nama_barang" id="nama_barang" name="nama_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="barang_masuk" class="text-white">Barang Masuk</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Barang Keluar</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Stok Akhir</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap3 mt-2">
                            <div class="flex items-center flex-col">
                                <label for="harga" class="text-white">Harga</label>
                                <input type="harga" id="harga" name="harga" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl w-[22.5rem] px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Total Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-[22.5rem] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div> 
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="bg-blue-600 w-[7rem] rounded-md text-white hover:scale-105 transition-all duration-300">
                                DONE
                            </button>
                        </div>
                    </div>

                </div>
            </section>

            <!-- barang masuk -->
            <section id="barang_masuk" class="barang_masuk mb-16">
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
                            @foreach ($barangMasuk as $masuk )
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">{{ $masuk->tanggal }}</td>
                                <td class="px-6 py-4">{{ $masuk->kode_barang }}</td>
                                <td class="px-6 py-4">{{ $masuk->nama_barang }}</td>
                                <td class="px-6 py-4">{{ $masuk->jumlah_barang }}</td>
                                <td class="px-6 py-4">{{ $masuk->harga }}</td>
                                <td class="px-6 py-4">{{ $masuk->total_harga }}</td>
                                <td class="px-6 py-4">{{ $masuk->catatan }}</td>
                                <td class="px-4 py-4"><button type="button" class="edit-masuk text-blue-600 font-medium hover:underline">Edit</button></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- tambah data -->
                <div id="" class="mt-10 grid justify-items-center py-1 bg-gradient-to-b from-green-main via-black to-green-main">
                    <button type="button" class="relative border border-white/0 hover:border-green-300 hover:shadow-green-500 hover:shadow-md transition transform color duration-300 text-white font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group" id="dropdown-button-masuk">
                        TAMBAH DATA
                    </button>
                    <div class="hidden bg-white/40 backdrop-blur-md px-4 py-4 rounded-xl my-2" id="dropdown-menu-masuk">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Tanggal</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="kode_barang" class="text-white">Kode Barang</label>
                                <input type="kode_barang" id="kode_barang" name="kode_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="nama_barang" class="text-white">Nama Barang</label>
                                <input type="nama_barang" id="nama_barang" name="nama_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="barang_masuk" class="text-white">Jumlah Barang Masuk</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Total Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                        </div>
                        <div class="flex items-center flex-col mt-2">
                            <label for="tanggal" class="text-white">Catatan</label>
                            <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-[45rem] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="bg-blue-600 w-[7rem] rounded-md text-white hover:scale-105 transition-all duration-300">
                                DONE
                            </button>
                        </div>
                    </div>

                </div>

            </section>

            <!-- barang keluar -->
            <section id="barang_keluar" class="barang_keluar mb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    BARANG KELUAR
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[3.25rem] mb-5 max-h-[400px]">
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-brown-enzo uppercase">
                            <tr>
                            <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Tanggal</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Kode Barang</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Nama Barang</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Jumlah Barang Keluar</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Harga</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Total Harga</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Nama Cust</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Jumlah Order</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="overflow-y-auto">
                            @foreach ($barangKeluar as $keluar)
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">{{ $keluar->tanggal }}</td>
                                <td class="px-6 py-4">{{ $keluar->kode_barang }}</td>
                                <td class="px-6 py-4">{{ $keluar->nama_barang }}</td>
                                <td class="px-6 py-4">{{ $keluar->jumlah_barang }}</td>
                                <td class="px-6 py-4">{{ $keluar->harga }}</td>
                                <td class="px-6 py-4">{{ $keluar->total_harga }}</td>
                                <td class="px-6 py-4">{{ $keluar->nama_cust }}</td>
                                <td class="px-6 py-4">{{ $keluar->jumlah_order }}</td>
                                <td class="px-4 py-4"><button type="button" class="edit-keluar text-blue-600 font-medium hover:underline">Edit</button></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- tambah data -->
                <div id="" class="mt-10 grid justify-items-center py-1 bg-gradient-to-b from-green-main via-black to-green-main">
                    <button type="button" class="relative border border-white/0 hover:border-green-300 hover:shadow-green-500 hover:shadow-md transition transform color duration-300 text-white font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group" id="dropdown-button-keluar">
                        TAMBAH DATA
                    </button>
                    <div class="hidden bg-white/40 backdrop-blur-md px-4 py-4 rounded-xl my-2" id="dropdown-menu-keluar">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Tanggal</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="kode_barang" class="text-white">Kode Barang</label>
                                <input type="kode_barang" id="kode_barang" name="kode_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="nama_barang" class="text-white">Nama Barang</label>
                                <input type="nama_barang" id="nama_barang" name="nama_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="barang_masuk" class="text-white">Jumlah Barang Keluar</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Total Harga</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap3 mt-2">
                            <div class="flex items-center flex-col">
                                <label for="harga" class="text-white">Nama Customer</label>
                                <input type="harga" id="harga" name="harga" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl w-[22.5rem] px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Jumlah Order</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-[22.5rem] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div> 
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="bg-blue-600 w-[7rem] rounded-md text-white hover:scale-105 transition-all duration-300">
                                DONE
                            </button>
                        </div>
                    </div>

                </div>

            </section>

            <!-- pesan -->
            <section id="pesan" class="pesan pb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    PESAN
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[3.25rem] mb-5 max-h-[400px]">
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-brown-enzo uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Nama</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Kode</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Jenis</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Jumlah Kebutuhan</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Stok</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Jumlah Beli (meter)</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Harga</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main">Total</th>
                                <th scope="col" class="px-6 py-3 sticky top-0 bg-green-main" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="overflow-y-auto">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">Endang</td>
                                <td class="px-6 py-4">B-040</td>
                                <td class="px-6 py-4">Bulu Kucing (20x30)</td>
                                <td class="px-6 py-4">5</td>
                                <td class="px-6 py-4">42</td>
                                <td class="px-6 py-4">-37</td>
                                <td class="px-6 py-4">0</td>
                                <td class="px-6 py-4">0</td>
                                <td class="px-4 py-4"><button type="button" class="edit-pesan text-blue-600 font-medium hover:underline">Edit</button></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">Rani</td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4">Prada 14</td>
                                <td class="px-6 py-4">5.5</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">3.5</td>
                                <td class="px-6 py-4">28.000</td>
                                <td class="px-6 py-4">98.000</td>
                                <td class="px-4 py-4"><button type="button" class="edit-pesan text-blue-600 font-medium hover:underline">Edit</button></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center border-t-[1.5px] border-black/30">
                                <td scope="row" class="px-6 py-4">Rani</td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4">Prada 14</td>
                                <td class="px-6 py-4">5.5</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">3.5</td>
                                <td class="px-6 py-4">28.000</td>
                                <td class="px-6 py-4">98.000</td>
                                <td class="px-4 py-4"><button type="button" class="edit-pesan text-blue-600 font-medium hover:underline">Edit</button></td>
                                <td class="px-4 py-4"><a href="" class="text-red-600 font-medium hover:underline">Delete</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- tambah data -->
                <div id="" class="mt-10 grid justify-items-center py-1 bg-gradient-to-b from-green-main via-black to-green-main">
                    <button type="button" class="relative border border-white/0 hover:border-green-300 hover:shadow-green-500 hover:shadow-md transition transform color duration-300 text-white font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group" id="dropdown-button-pesan">
                        TAMBAH DATA
                    </button>
                    <div class="hidden bg-white/40 backdrop-blur-md px-4 py-4 rounded-xl my-2" id="dropdown-menu-pesan">
                        <div class="grid grid-cols-3 gap-2">
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Nama</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="kode_barang" class="text-white">Kode</label>
                                <input type="kode_barang" id="kode_barang" name="kode_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="nama_barang" class="text-white">Jenis</label>
                                <input type="nama_barang" id="nama_barang" name="nama_barang" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="barang_masuk" class="text-white">Jumlah Kebutuhan</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Stok</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Jumlah Beli (meter)</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-60 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap3 mt-2">
                            <div class="flex items-center flex-col">
                                <label for="harga" class="text-white">Harga</label>
                                <input type="harga" id="harga" name="harga" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] rounded-xl w-[22.5rem] px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div>
                            <div class="flex items-center flex-col">
                                <label for="tanggal" class="text-white">Total</label>
                                <input type="tanggal" id="tanggal" name="tanggal" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-[22.5rem] rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-0.5">
                            </div> 
                        </div>
                        
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="bg-blue-600 w-[7rem] rounded-md text-white hover:scale-105 transition-all duration-300">
                                DONE
                            </button>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sections = ['rekap', 'masuk', 'keluar', 'pesan'];

    sections.forEach(section => {
        const addButton = document.getElementById(`dropdown-button-${section}`);
        const menu = document.getElementById(`dropdown-menu-${section}`);
        const editButtons = document.querySelectorAll(`.edit-${section}`);

        addButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            
            if (menu.classList.contains('hidden')) {
                // Reset input saat dropdown ditutup
                menu.querySelectorAll('input').forEach(input => input.value = '');
                addButton.textContent = 'TAMBAH DATA';
            } else {
                addButton.textContent = 'CLOSE';
            }
        });

        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                const row = button.closest('tr');
                const cells = row.querySelectorAll('td');
                const inputs = menu.querySelectorAll('input');

                inputs.forEach((input, index) => {
                    input.value = cells[index].textContent;
                });

                menu.classList.remove('hidden');
                addButton.textContent = 'CLOSE';
            });
        });
    });
});
</script>
@endsection