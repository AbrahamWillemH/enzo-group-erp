@extends('admin/sidebar_admin')
@section('title', 'Detail Undangan')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full">
        <div class="z-30 sticky top-0 right-0 h-[68px] w-full grid grid-cols-[88%_12%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>SPK PRODUKSI UNDANGAN</h1>
            </div>
            <div class="grid grid-cols-2 font-medium">
                <a href="#" class="text-brown-enzo flex flex-col justify-center items-center group">Kembali
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
            </div>

        </div>
        <div class="bg-blue-600 py-5 px-2 w-full h-full">
            <section class="flex flex-col items-center">
                <table class="border w-[95%] bg-red-10">
                    <thead class="border h-[50px]">
                        <tr>
                            <th colspan="5">SPK PRODUKSI UNDANGAN</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        <tr class="border h-[35px]">
                            <td class="border w-[100px]">Nama</td>
                            <td class="border w-[220px] px-2">
                                <input type="text" class="w-full rounded-sm px-2" placeholder="ambil dari db">
                            </td>
                            <td class="border w-[140px]">Tgl Order</td>
                            <td class="border w-[150px] px-1">
                                <input type="date" class="w-[150px] rounded-sm px-2">
                            </td>
                            <td class="border" rowspan="6"><img src="{{ asset('img/undanganA.jpeg') }}" alt=""></td>
                        </tr>
                        <tr class="border h-[35px]">
                            <td class="border">Jenis</td>
                            <td class="border">: Undangan</td>
                            <td class="border">Tgl DP2</td>
                            <td class="border">: 25-2-2025</td>
                        </tr>
                        <tr class="border h-[35px]">
                            <td class="border">Uk Jadi</td>
                            <td class="border">: 10x20</td>
                            <td class="border">Tgl Fix Desain</td>
                            <td class="border">: 25-2-2025</td>
                        </tr>
                        <tr class="border h-[35px]">
                            <td class="border">Jumlah</td>
                            <td class="border">: 100</td>
                            <td class="border">Deadline</td>
                            <td class="border">: 25-2-2025</td>
                        </tr>
                        <tr class="border h-[35px]">
                            <td class="border">Alamat</td>
                            <td class="border">: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, consectetur.</td>
                            <td class="border">Percetakan</td>
                            <td class="border">: Hasbona</td>
                        </tr>
                        <tr class="border h-[35px]">
                            <td class="border">Request</td>
                            <td class="border" colspan="3">: Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quisquam aliquam ipsa dicta repellendus laboriosam maxime eius! Ab, eaque blanditiis.</td>
                        </tr>
                    </tbody>
                </table>

                <table class="border w-[95%] mt-5">
                    <thead class="border">
                        <tr>
                            <th colspan="4">Rincian Request</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        <tr class="border">
                            <td class="border w-[100px]">Foil</td>
                            <td class="border w-[280px]">: lorem</td>
                            <td class="border w-[140px]">Tussel</td>
                            <td class="border w-[120px]">: lorem</td>
                        </tr>
                        <tr class="border">
                            <td class="border">Kertas Foil</td>
                            <td class="border">: Lorem, ipsum.</td>
                            <td class="border">Pita</td>
                            <td class="border">: lorem</td>
                        </tr>
                        <tr class="border">
                            <td class="border">Laminasi</td>
                            <td class="border">: Lorem, ipsum.</td>
                            <td class="border">Tali Rami</td>
                            <td class="border">: lorem</td>
                        </tr>
                        <tr class="border">
                            <td class="border">Kartu</td>
                            <td class="border">: Lorem, ipsum.</td>
                            <td class="border">Waxseal</td>
                            <td class="border">: lorem</td>
                        </tr>
                        <tr class="border">
                            <td class="border">Label Nama</td>
                            <td class="border">: Lorem ipsum</td>
                            <td class="border">Kalkir</td>
                            <td class="border">: Lorem, ipsum dolor.</td>
                        </tr>
                        <tr class="border">
                            <td class="border">Plastik</td>
                            <td class="border">: Lorem ipsum</td>
                            <td class="border">Kain Goni</td>
                            <td class="border">: Lorem, ipsum dolor.</td>
                        </tr>
                        <tr class="border">
                            <td class="border">Gulungan</td>
                            <td class="border">: Lorem ipsum</td>
                            <td class="border">Ornamen</td>
                            <td class="border">: Lorem, ipsum dolor.</td>
                        </tr>
                        <tr class="border">
                            <td class="border font-bold text-sm text-center" colspan="4">NOTE TAMBAHAN</td>
                        </tr>
                        <tr class="border">
                            <td class="border" colspan="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, doloremque!</td>
                        </tr>
                    </tbody>
                </table>

                <table class="border w-[95%] mt-5">
                    <thead class="border">
                        <tr class="border">
                            <th colspan="5">Rincian Bahan</th>
                        </tr>
                        <tr class="border">
                            <th class="border w-[350px]">Nama Bahan</th>
                            <th class="border w-[130px]">Kebutuhan</th>
                            <th class="border w-[130px]">Stok</th>
                            <th class="border w-[130px]">Jumlah Beli</th>
                            <th class="border w-[350px]">Supplier</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                        <tr class="border">
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!-- <section id="data_pemesan" class="data_pemesan">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">CUST BEJO SUBEJO</div>
                <div class="data mt-[2rem] w-full h-full mb-5 px-3 gap-0 flex justify-center capitalize">
                    <table class="table-fixed w-[95%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="5">SPK PRODUKSI UNDANGAN</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="bg-green-shadow/30 h-[50px] w-[80px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="px-3 py-1 w-[20px]">Nama</td>
                                <td class="px-3 py-1 bg-red-100">Agus</td>
                                <td class="px-3 py-1">Tgl Order</td>
                                <td class="px-3 py-1">25-03-2025</td>
                                <td class="px-3 py-1" rowspan="6"><img src="{{ asset('img/undanganA.jpeg') }}" alt="" class="w-[10px] h-[10px] object-cover"></td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[50px] w-[80px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="px-3 py-1">Jenis</td>
                                <td class="px-3 py-1">Undangan</td>
                                <td class="px-3 py-1">Tgl DP2</td>
                                <td class="px-3 py-1">25-03-2025</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[50px] w-[80px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="px-3 py-1">Uk Jadi</td>
                                <td class="px-3 py-1 lowercase">10cm x 30cm</td>
                                <td class="px-3 py-1">Tgl Fix Desain</td>
                                <td class="px-3 py-1">25-03-2025</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[50px] w-[80px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="px-3 py-1">Jumlah</td>
                                <td class="px-3 py-1">205</td>
                                <td class="px-3 py-1">Deadline</td>
                                <td class="px-3 py-1">2025-12-9</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[50px] w-[80px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="px-3 py-1">Alamat</td>
                                <td class="px-3 py-1">Jl. Agus Agus 05, Kecamatan Agus, Agus Agus Agus</td>
                                <td class="px-3 py-1">Percetakan</td>
                                <td class="px-3 py-1">Cetak</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[50px] w-[80px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="px-3 py-1">Request</td>
                                <td class="px-3 py-1" colspan="3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit nihil cupiditate fuga et quas! Esse asperiores cum in minus atque commodi pariatur vero! Ut eligendi iusto neque libero maxime. Laboriosam obcaecati porro est, nobis enim aut quos vel iusto. Cumque voluptatum itaque praesentium placeat eligendi dolorum nisi molestias dicta velit?</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section> -->

            <!-- <section id="purchase" class="purchase pb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    PURCHASE ORDER
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[3.25rem] mb-5">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-xs text-brown-enzo uppercase bg-green-main/80">
                            <tr>
                                <th scope="col" class="px-6 py-3 sticky left-0 bg-green-main">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3 sticky left-[120px] bg-green-main">
                                    No Invoice
                                </th>
                                <th scope="col" class="px-6 py-3 sticky left-[232px] bg-green-main">
                                    Kode Order
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Suplier
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Motif
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jml/Motif
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Termin
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Satuan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga/Unit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Admin (PIC)
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Catatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sudah Pesan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sudah Bayar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center">
                                <td scope="row" class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
                                    06/11/2024
                                </td>
                                <td class="px-6 py-4 sticky left-[120px] bg-green-shadow/0 backdrop-blur-xl">
                                    PS6/11/24
                                </td>
                                <td class="px-6 py-4 sticky left-[232px] bg-green-shadow/0 backdrop-blur-xl">
                                    1PS6/11/24
                                </td>
                                <td class="px-6 py-4">
                                    Amanah
                                </td>
                                <td class="px-6 py-4">
                                    78|Kertas Stiker
                                </td>
                                <td class="px-6 py-4">
                                    
                                </td>
                                <td class="px-6 py-4">
                                    20
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    20
                                </td>
                                <td class="px-6 py-4">
                                    Lembar
                                </td>
                                <td class="px-6 py-4">
                                    1.000
                                </td>
                                <td class="px-6 py-4">
                                    20.000
                                </td>
                                <td class="px-6 py-4">
                                    Vembi
                                </td>
                                <td class="px-6 py-4">
                                    Prisilia
                                </td>
                                <td class="px-6 py-4 bg-red-600">
                                    High Priority
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="submit" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white"">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center">
                                <td scope="row" class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
                                    06/11/2024
                                </td>
                                <td class="px-6 py-4 sticky left-[120px] bg-green-shadow/0 backdrop-blur-xl">
                                    PS6/11/24
                                </td>
                                <td class="px-6 py-4 sticky left-[232px] bg-green-shadow/0 backdrop-blur-xl">
                                    1PS6/11/24
                                </td>
                                <td class="px-6 py-4">
                                    Amanah
                                </td>
                                <td class="px-6 py-4">
                                    78|Kertas Stiker
                                </td>
                                <td class="px-6 py-4">
                                    
                                </td>
                                <td class="px-6 py-4">
                                    20
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    20
                                </td>
                                <td class="px-6 py-4">
                                    Lembar
                                </td>
                                <td class="px-6 py-4">
                                    1.000
                                </td>
                                <td class="px-6 py-4">
                                    20.000
                                </td>
                                <td class="px-6 py-4">
                                    Vembi
                                </td>
                                <td class="px-6 py-4">
                                    Prisilia
                                </td>
                                <td class="px-6 py-4 bg-red-400">
                                    Medium Priority
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="submit" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white"">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center">
                                <td scope="row" class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
                                    06/11/2024
                                </td>
                                <td class="px-6 py-4 sticky left-[120px] bg-green-shadow/0 backdrop-blur-xl">
                                    PS6/11/24
                                </td>
                                <td class="px-6 py-4 sticky left-[232px] bg-green-shadow/0 backdrop-blur-xl">
                                    1PS6/11/24
                                </td>
                                <td class="px-6 py-4">
                                    Ragam Souvenir
                                </td>
                                <td class="px-6 py-4">
                                    78|Kertas Stiker
                                </td>
                                <td class="px-6 py-4">
                                    
                                </td>
                                <td class="px-6 py-4">
                                    20
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    20
                                </td>
                                <td class="px-6 py-4">
                                    Lembar
                                </td>
                                <td class="px-6 py-4">
                                    1.000
                                </td>
                                <td class="px-6 py-4">
                                    20.000
                                </td>
                                <td class="px-6 py-4">
                                    Vembi
                                </td>
                                <td class="px-6 py-4">
                                    Prisilia
                                </td>
                                <td class="px-6 py-4 bg-red-200">
                                    Low Priority
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="submit" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white"">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="add_data mt-10 grid justify-items-center">
                    <a href="#"
                        class="relative bg-green-main/80 text-brown-enzo font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">
                        
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-y-full group-hover:translate-y-0 transition-duration duration-500"></span>
                        
                        <span class="relative z-10">TAMBAH DATA</span>
                    </a>
                </div>

                <div class="edit_button px-6 mt-10 grid justify-items-end">
                    <a href="#"
                        class="relative bg-green-main/80 text-brown-enzo font-semibold w-[6rem] h-[3rem] flex justify-center items-center rounded-lg overflow-hidden group">
                        
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-x-full group-hover:translate-x-0 transition-duration duration-500"></span>
                        
                        <span class="relative z-10">EDIT</span>
                    </a>
                </div>
            </section> -->



        </div>


    </div>
</div>

<script>
    // Tangkap elemen tombol dan tbody
    const addButton = document.querySelector('.add_data a'); // Sesuaikan selector jika perlu
    const tableBody = document.getElementById('table-body');

    // Tambahkan event listener pada tombol
    addButton.addEventListener('click', (e) => {
    e.preventDefault(); // Mencegah reload halaman jika tombol bertipe <a>

    // Buat elemen <tr> baru
    const newRow = document.createElement('tr');
    newRow.className = "bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center";

    // Isi <tr> dengan <td> baru
    newRow.innerHTML = `
        <td class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
            <input class="w-full" type="text"></input>
        </td>
        <td class="px-6 py-4 sticky left-[120px] bg-green-shadow/0 backdrop-blur-xl">
            <input class="w-full" type="text"></input>
        </td>
        <td class="px-6 py-4 sticky left-[232px] bg-green-shadow/0 backdrop-blur-xl">
            <input class="w-full" type="text"></input>
        </td>
        <td class="px-6 py-4">
            <input class="w-full" type="text"></input>
        </td>
        <td class="px-6 py-4">New Product</td>
        <td class="px-6 py-4"></td>
        <td class="px-6 py-4">0</td>
        <td class="px-6 py-4">0</td>
        <td class="px-6 py-4">0</td>
        <td class="px-6 py-4">Unit</td>
        <td class="px-6 py-4">0</td>
        <td class="px-6 py-4">0</td>
        <td class="px-6 py-4">New Field</td>
        <td class="px-6 py-4">New Name</td>
        <td class="px-6 py-4 bg-red-200">New Priority</td>
        <td class="px-6 py-4">
            <div>
                <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
            </div>
        </td>
        <td class="px-6 py-4">
            <div>
                <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
            </div>
        </td>
        <td class="px-6 py-4">
            <button type="submit" class="bg-blue-600 rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white">
                Done
            </button>
        </td>
    `;

    // Tambahkan baris baru ke tabel
    tableBody.appendChild(newRow);
    });

</script>
@endsection
<!-- </body>
</html> -->
