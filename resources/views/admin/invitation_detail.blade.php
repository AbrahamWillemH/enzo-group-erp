
@extends('admin/sidebar_admin')
@section('title', 'Detail Undangan')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full">
        <header class="z-30 fixed top-0 right-0 h-[68px] w-[80%] grid grid-cols-[76%_24%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>DETAIL PEMESANAN UNDANGAN</h1>
            </div>
            <div class="grid grid-cols-2 font-medium">
                <a href="#" class="text-brown-enzo flex flex-col justify-center items-center group">Kembali
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="#purchase" class="text-brown-enzo flex flex-col justify-center items-center group">Purchase Order
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
            </div>

        </header>
        <main class="">
            <section id="data_pemesan" class="data_pemesan mb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA PEMESAN</div>
                <div class="data mt-[7.25rem] mb-5 px-3 gap-0 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">CUSTOMER</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Pemesan</td>
                                <td class="px-4 py-2">{{$invitation->user_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                <td class="px-4 py-2">{{$invitation->phone_number}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Username Instagram</td>
                                <td class="px-4 py-2 lowercase">{{$invitation->instagram}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                <td class="px-4 py-2">{{$invitation->address}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jumlah</td>
                                <td class="px-4 py-2">{{$invitation->quantity}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tipe Produk</td>
                                <td class="px-4 py-2">{{$invitation->type}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Deadline</td>
                                <td class="px-4 py-2">{{$invitation->deadline_date}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Finishing</td>
                                <td class="px-4 py-2">{{$invitation->finishing}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section>

            <section id="data_mempelai" class="data_mempelai mb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA MEMPELAI</div>
                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">PRIA</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Lengkap</td>
                                <td class="px-4 py-2">{{$invitation->groom_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Panggilan</td>
                                <td class="px-4 py-2">{{$invitation->groom_nickname}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Ayah</td>
                                <td class="px-4 py-2">{{$invitation->groom_father}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Ibu</td>
                                <td class="px-4 py-2">{{$invitation->groom_mother}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Alamat Orang Tua</td>
                                <td class="px-4 py-2">{{$invitation->groom_parents_address}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">WANITA</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Lengkap</td>
                                <td class="px-4 py-2">{{$invitation->bride_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Panggilan</td>
                                <td class="px-4 py-2">{{$invitation->bride_nickname}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Ayah</td>
                                <td class="px-4 py-2">{{$invitation->bride_father}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Ibu</td>
                                <td class="px-4 py-2">{{$invitation->bride_mother}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Alamat Orang Tua</td>
                                <td class="px-4 py-2">{{$invitation->bride_parents_address}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section>

            <section id="data_acara" class="data_acara mb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA ACARA</div>
                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg  hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">AKAD / PEMBERKATAN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                <td class="px-4 py-2">{{$invitation->akad_pemberkatan_date}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Waktu Acara</td>
                                <td class="px-4 py-2">{{$invitation->akad_pemberkatan_time}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Lokasi Acara</td>
                                <td class="px-4 py-2">{{$invitation->akad_pemberkatan_location}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">RESEPSI</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                <td class="px-4 py-2">{{$invitation->reception_date}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Waktu Acara</td>
                                <td class="px-4 py-2">{{$invitation->reception_time}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Lokasi Acara</td>
                                <td class="px-4 py-2">{{$invitation->reception_location}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section>

            <section id="info_tambahan" class="info_tambahan mb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DETAIL</div>
                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="">DESAIN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-2 py-2">
                                    <img src="{{ asset('storage/' . $invitation->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">INFORMASI TAMBAHAN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Progres</td>
                                <td class="px-4 py-2">{{$invitation->progress}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                <td class="px-4 py-2">{{$invitation->payment_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 1</td>
                                <td class="px-4 py-2">{{$invitation->dp1_date}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                <td class="px-4 py-2">{{$invitation->dp2_date}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                <td class="px-4 py-2">{{$invitation->paid_off_date}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                <td class="px-4 py-2">{{$invitation->price_per_pcs}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Printilan</td>
                                <td class="px-4 py-2">{{$invitation->printout}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                <td class="px-4 py-2">{{$invitation->expedition}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">ACC Client</td>
                                <td class="px-4 py-2">{{$invitation->design_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                <td class="px-4 py-2">{{$invitation->note_design}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Admin</td>
                                <td class="px-4 py-2">{{$invitation->note_cs}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section>

            <section id="purchase" class="purchase pb-16">
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
                            @php
                                use Carbon\Carbon;
                            @endphp
                            @foreach($purchase as $p)
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center">
                                <td scope="row" class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
                                    {{ Carbon::parse($p->date)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4 sticky left-[120px] bg-green-shadow/0 backdrop-blur-xl">
                                    {{$p->invoice}}
                                </td>
                                <td class="px-6 py-4 sticky left-[232px] bg-green-shadow/0 backdrop-blur-xl">
                                    {{$p->order_code}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->supplier}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->product}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->size_type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->quantity_per_type}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Carbon::parse($p->termin)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->total}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->unit}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->total}}
                                </td>
                                <td class="px-6 py-4">
                                    {{-- {{$p->total_price}} --}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->pic}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->note}}
                                </td>
                                @if($p->status == 'High Priority')
                                <td class="px-6 py-4 bg-red-600">
                                    {{$p->status}}
                                </td>
                                @elseif ($p->status == 'Medium Priority')
                                <td class="px-6 py-4 bg-red-400">
                                    {{$p->status}}
                                </td>
                                @else
                                <td class="px-6 py-4 bg-red-200">
                                    {{$p->status}}
                                </td>
                                @endif
                                <td class="px-6 py-4">
                                    @if ($p->bought == 1)
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded pointer-events-none" checked>
                                    </div>
                                    @else
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded pointer-events-none">
                                    </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($p->paid == 1)
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded pointer-events-none" checked>
                                    </div>
                                    @else
                                    <div>
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded pointer-events-none">
                                    </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 flex flex-col gap-4">
                                    <button type="submit" class="bg-brown-enzo rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white"">
                                        Edit
                                    </button>
                                    <button type="submit" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white"">
                                        Delete
                                    </button>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="add_data mt-10 grid justify-items-center">
                    <a href="#"
                        class="relative bg-green-main/80 text-brown-enzo font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">
                        <!-- Layer latar belakang -->
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-y-full group-hover:translate-y-0 transition-duration duration-500"></span>
                        <!-- Teks -->
                        <span class="relative z-10">TAMBAH DATA</span>
                    </a>
                </div>

                <div class="edit_button px-6 mt-10 grid justify-items-end">
                    <a href="{{route('admin.invitation.edit', ['id' => $invitation->id])}}"
                        class="relative bg-green-main/80 text-brown-enzo font-semibold w-[6rem] h-[3rem] flex justify-center items-center rounded-lg overflow-hidden group">
                        <!-- Layer latar belakang -->
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-x-full group-hover:translate-x-0 transition-duration duration-500"></span>
                        <!-- Teks -->
                        <span class="relative z-10">EDIT</span>
                    </a>
                </div>
            </section>
        </main>
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
