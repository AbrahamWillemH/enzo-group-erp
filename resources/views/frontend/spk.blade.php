@extends('admin/sidebar_admin')
@section('title', 'Data Pesanan')
@section('konten')
<div class="ml-[20%]">
    <!-- Header -->
    <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center px-4 z-40">
        <h1 class="text-xl font-bold text-brown-enzo" style="letter-spacing: 1px">SPK INVITATION</h1>
    </header>

    <!-- Tabel -->
    <main class="pt-20 bg-green-light h-screen">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[1.5rem] mb-5 max-h-[530px] lg:max-h-[690px]">
            <table class="w-full text-sm text-center capitalize z-10">
                <thead class="text-brown-enzo z-20">
                    <tr>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">ID</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Nama Pelanggan</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Tipe Produk</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Deadline</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-green-main/10 overflow-y-auto">
                    <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                        <td class="px-4 py-3 text-center flex h-16 items-center justify-center">
                            <div class="w-3 h-3 bg-red-500 rounded-full text-center"></div>
                            <div class="text-center w-full">20250202001</div>
                        </td>
                        <td class="px-4 py-3 text-center">Bejo Subejo</td>
                        <td class="px-4 py-3 text-center">Invitation</td>
                        <td class="px-4 py-3 text-center"><strong>25-01-25</strong></td>
                        <td class="px-3 py-3 text-center">
                            <button type="button" class="bg-slate-600 cursor-not-allowed rounded-lg px-2 py-2 transition duration-300 inline-block text-white">
                                Lihat SPK
                            </button>
                            <button type="button" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                Buat SPK
                            </button>
                            <button type="button" class="bg-slate-600 cursor-not-allowed rounded-lg px-2 py-2 transition duration-300 inline-block text-white">
                                Edit SPK
                            </button>
                        </td>
                    </tr>
                    <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                        <td class="px-4 py-3 text-center flex h-16 items-center justify-center">
                            <div class="text-center w-full">20250202001</div>
                        </td>
                        <td class="px-4 py-3 text-center">Bejo Tenan</td>
                        <td class="px-4 py-3 text-center">Invitation</td>
                        <td class="px-4 py-3 text-center"><strong>29-01-25</strong></td>
                        <td class="px-3 py-3 text-center">
                            <button type="button" class="bg-accept rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                Lihat SPK
                            </button>
                            <button type="button" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                Buat SPK
                            </button>
                            <button type="button" class="bg-brown-main rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                Edit SPK
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection