@extends('admin/sidebar_admin')
@section('title', 'Data Pesanan')
@section('konten')
<div class="ml-[20%] bg-green-light">
    <!-- Header -->
    <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center justify-between px-4 z-40">
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold text-brown-enzo" style="letter-spacing: 1px">Tabel Kapasitas Produksi</h1>
        </div>
    </header>

    <!-- Tabel -->
    <main class="pt-20 h-screen">
        <div class="flex flex-col items-center relative overflow-x-auto max-h-[500px] 2xl:max-h-[650px]">
            <table class="w-[95%] rounded-t-lg z-10 text-sm">
                <thead class="border border-green-main bg-green-main text-brown-enzo z-20">
                    <tr>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">No</th>    
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Nama Produk</th>
                        <th class="w-[200px] h-[80px] sticky top-0 bg-green-main">Jenis</th>
                        <th class="w-[200px] h-[80px] sticky top-0 bg-green-main">Jahit</th>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Kemas Plastik</th>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Kemas Box</th>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Kemas Mika</th>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Kemas Besek</th>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Kemas Krongso</th>
                        <th class="w-[350px] h-[80px] sticky top-0 bg-green-main">Delete</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 text-center">
                                    1
                                </td>
                                <td class="border border-green-main px-2">
                                    Pouch Canvas x Miniso
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    Jahit
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    1200
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    1500
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    500
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    500
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    <button type="button" name="deleteSPK" class="bg-red-500 text-white h-full rounded-sm px-2 border border-green-main">X</button>
                                </td>
                            </tr>
                </tbody>
            </table>
        </div>

        <div class="flex flex-col items-center">
            <div class="h-[35px] mt-8 flex gap-5">
                <button id="addDataButton" type="button" class="bg-green-main border-2 border-transparent hover:bg-transparent hover:border-green-main hover:text-green-main rounded-md w-[150px] h-full transition transform duration-300 text-white font-medium text-lg">Tambah</button>
                <button type="submit" class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg">Simpan</button>
            </div>
        </div>

    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const addButton = document.getElementById('addDataButton');
        const tableBody = document.getElementById('table-body');

        // Fungsi untuk menambahkan baris baru
        addButton.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah reload halaman

            // Buat elemen <tr> baru
            const newRow = document.createElement('tr');
            newRow.className = "h-[35px]";

            // Isi row baru
            newRow.innerHTML = `
                <td class="border border-green-main px-2">
                    <input type="text" name="" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="No" value="">
                </td>
                <td class="border border-green-main px-2">
                    <input type="text" name="" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Nama Produk" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="text" name="" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Jenis" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" name="" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <button type="button" name="deleteSPK" class="bg-red-500 text-white h-full rounded-sm px-2 border border-green-main">X</button>
                </td>
            `;

            // Tambahkan baris ke dalam tbody
            tableBody.appendChild(newRow);
        });

        // Event delegation untuk tombol "X"
        tableBody.addEventListener("click", (event) => {
            if (event.target.matches('button[name="deleteSPK"]')) {
                event.preventDefault(); // Mencegah aksi default
                const row = event.target.closest("tr"); // Temukan baris <tr> terdekat
                if (row) row.remove(); // Hapus baris
            }
        });
    });
</script>
@endsection