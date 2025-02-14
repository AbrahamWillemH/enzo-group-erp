<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@extends('admin/sidebar_admin')
@section('title', 'Detail Undangan')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full relative">
        <header class="z-30 fixed top-0 right-0 h-[68px] w-[80%] grid grid-cols-[76%_24%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>DETAIL PEMESANAN UNDANGAN</h1>
            </div>
            <div class="font-medium flex flex-row">
                <a href="#spk" class="text-brown-enzo flex flex-col justify-center items-center group w-full">SPK
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
                <a href="/admin/orders/invitation" class="text-brown-enzo flex flex-col justify-center items-center group w-full">Kembali
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
            </div>

        </header>
        <main class="bg-green-light">
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
                                <td class="px-4 py-2">{{ $invitation->deadline_date ? \Carbon\Carbon::parse($invitation->deadline_date)->format('d/m/Y') : '-' }}</td>
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
                                <td class="px-4 py-2">{{ $invitation->akad_pemberkatan_date ? \Carbon\Carbon::parse($invitation->akad_pemberkatan_date)->format('d/m/Y') : '-' }}</td>
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
                                <td class="px-4 py-2">{{ $invitation->reception_date ? \Carbon\Carbon::parse($invitation->reception_date)->format('d/m/Y') : '-' }}</td>
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

            <section id="info_tambahan" class="info_tambahan mb-16">
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
                                    @if (!is_null($invitation->desain_path))
                                        @if ($invitation->design_status == 'DECL')
                                        <img src="{{ asset('storage/app/public/' . $invitation->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full border-8 border-red-600">
                                        @elseif($invitation->design_status == 'ACC')
                                        <img src="{{ asset('storage/app/public/' . $invitation->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full border-8 border-green-600">
                                        @else
                                        <img src="{{ asset('storage/app/public/' . $invitation->desain_path) }}" alt="Desain Undangan" class="object-cover w-full h-full">
                                        @endif
                                    @else
                                        <p class="text-center">Belum Terdapat Desain</p>
                                    @endif
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
                                <td class="px-4 py-2">{{ $invitation->dp1_date ? \Carbon\Carbon::parse($invitation->dp1_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                <td class="px-4 py-2">{{ $invitation->dp2_date ? \Carbon\Carbon::parse($invitation->dp2_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                <td class="px-4 py-2">{{ $invitation->paid_off_date ? \Carbon\Carbon::parse($invitation->paid_off_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Fix Desain</td>
                                <td class="px-4 py-2"></td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                <td class="px-4 py-2">{{$invitation->price_per_pcs}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Printilan</td>
                                <td class="px-4 py-2">{{$invitation->printout}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                <td class="px-4 py-2">{{$invitation->expedition}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">ACC Client</td>
                                <td class="px-4 py-2">{{$invitation->design_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                <td class="px-4 py-2">{{$invitation->note_design}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Admin</td>
                                <td class="px-4 py-2">{{$invitation->note_cs}}</td>
                            </tr>
                        </tbody>

                    </table>
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

            <section id="spk" class="info_tambahan pb-20">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    SPK
                </div>
                <div class="flex flex-col items-center mt-[3.25rem]">
                    <table class="w-[95%] rounded-t-lg overflow-hidden">
                        <thead class="border border-green-main h-[50px] bg-green-main/80 text-brown-enzo">
                            <tr>
                                <th colspan="5">SPK PRODUKSI UNDANGAN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="h-[35px]">
                                <td class="border border-green-main w-[100px] px-2 font-semibold">Nama</td>
                                <td class="border border-green-main w-[210px] px-2">Bejo</td>
                                <td class="border border-green-main w-[140px] px-2 font-semibold">Tgl Order</td>
                                <td class="border border-green-main w-[140px] px-2">25-2-2025</td>
                                <td class="border border-green-main p-2 w-[450px]" rowspan="6"><img src="{{ asset('img/undanganA.jpeg') }}" alt="" class="w-full h-full object-cover rounded-md"></td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Jenis</td>
                                <td class="border border-green-main px-2">Undangan</td>
                                <td class="border border-green-main px-2 font-semibold">Tgl DP2</td>
                                <td class="border border-green-main px-2">25-2-2025</td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Uk Jadi</td>
                                <td class="border border-green-main px-2">10x20</td>
                                <td class="border border-green-main px-2 font-semibold">Tgl Fix Desain</td>
                                <td class="border border-green-main px-2">25-2-2025</td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Jumlah</td>
                                <td class="border border-green-main px-2">100</td>
                                <td class="border border-green-main px-2 font-semibold">Deadline</td>
                                <td class="border border-green-main px-2">25-2-2025</td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Alamat</td>
                                <td class="border border-green-main px-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, consectetur.</td>
                                <td class="border border-green-main px-2 font-semibold">Percetakan</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Percetakan">
                                </td>
                            </tr>
                            <tr class="h-[60px]">
                                <td class="border border-green-main h-[60px] px-2 font-semibold">Request</td>
                                <td class="border border-green-main px-2 py-1" colspan="3">
                                    <textarea name="" id="" class="w-full h-[60px] rounded-sm px-2 border border-green-main" placeholder="Request"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-[95%] mt-8 rounded-t-lg overflow-hidden">
                        <thead class="border border-green-main h-[50px] bg-green-main/80 text-brown-enzo">
                            <tr>
                                <th colspan="4">Rincian Request</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 w-[150px] font-semibold">Foil</td>
                                <td class="border border-green-main px-2 w-[200px]">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Foil">
                                </td>
                                <td class="border border-green-main px-2 w-[150px] font-semibold">Tussel</td>
                                <td class="border border-green-main px-2 w-[200px]">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Tussel">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Kertas Foil</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Kertas Foil">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Pita</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Pita"> 
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Laminasi</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Laminasi">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Tali Rami</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Tali Rami">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Kartu</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Kartu">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Waxseal</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Waxseal">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Label Nama</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Label Nama">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Kalkir</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Kalkir">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Plastik</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Plastik">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Kain Goni</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Kain Goni">
                                </td>
                            </tr>
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2 font-semibold">Gulungan</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Gulungan">
                                </td>
                                <td class="border border-green-main px-2 font-semibold">Ornamen</td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Ornamen">
                                </td>
                            </tr>
                            <tr class="h-[40px] bg-green-main/80 text-brown-enzo">
                                <td class="border border-green-main font-bold text-sm text-center" colspan="4">NOTE TAMBAHAN</td>
                            </tr>
                            <tr class="h-[40px]">
                                <td class="border border-green-main p-2" colspan="4">
                                    <textarea name="" id="" class="w-full h-[50px] rounded-sm px-2 border border-green-main" placeholder="Note Tambahan"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-[95%] mt-8 rounded-t-lg overflow-hidden">
                        <thead class="border border-green-main h-[80px] bg-green-main/80 text-brown-enzo">
                            <tr>
                                <th colspan="5" class="border-b border-brown-enzo">Rincian Bahan</th>
                            </tr>
                            <tr>
                                <th class="w-[350px] h-[40px]">Nama Bahan</th>
                                <th class="w-[130px] h-[40px]">Kebutuhan</th>
                                <th class="w-[130px] h-[40px]">Stok</th>
                                <th class="w-[130px] h-[40px]">Jumlah Beli</th>
                                <th class="w-[350px] h-[40px]">Supplier</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <tr class="h-[35px]">
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Nama Bahan">
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    <input type="number" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    <input type="number" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                                </td>
                                <td class="border border-green-main px-2 text-center">
                                    <input type="number" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                                </td>
                                <td class="border border-green-main px-2">
                                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Supplier">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="h-[35px] mt-8 flex gap-5">
                        <button type="button" class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg">Cetak</button>
                        <button id="addDataButton" type="button" class="bg-green-main border-2 border-transparent hover:bg-transparent hover:border-green-main hover:text-green-main rounded-md w-[150px] h-full transition transform duration-300 text-white font-medium text-lg">Tambah Data</button>
                        <button type="button" class="bg-brown-enzo border-2 border-transparent hover:bg-transparent hover:border-brown-enzo hover:text-brown-enzo rounded-md w-[120px] h-full transition transform duration-300 text-white font-medium text-lg">Simpan</button>
                    </div>

                    
                </div>
            </section>

            <!-- <section id="purchase" class="purchase pb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">
                    PURCHASE ORDER
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[3.25rem] mb-5">
                    {{-- <form action="{{route('admin.invitation.purchase.store', ['id' => $invitation->id])}}" method="POST"> --}}
                    @csrf
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
                                    Ukuran/Jenis
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jml/Jenis
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
                            @foreach($purchase as $p)
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center">
                                <td scope="row" class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
                                    {{ $p->date }}
                                </td>
                                <td class="px-6 py-4 sticky left-[120px] bg-green-shadow/0 backdrop-blur-xl">
                                    {{$p->invoice}}
                                </td>
                                <td data-column='order_code' class="px-6 py-4 sticky left-[232px] bg-green-shadow/0 backdrop-blur-xl">
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
                                    {{ $p->termin ? \Carbon\Carbon::parse($p->termin)->format('d/m/Y') : '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->total}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->unit}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->price_per_pcs}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->total_price}}
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
                                    <button id="editPurchase_{{$invitation->id}}" class="bg-brown-enzo rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white"">
                                        Edit
                                    </button>
                                    {{-- <form action="{{route('admin.invitation.purchase.delete', ['id' => $invitation->id])}}"> --}}
                                        <button class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="add_data mt-10 grid justify-items-center">
                    <button id="addDataButton"
                        class="relative bg-green-main/80 text-brown-enzo font-medium w-[9rem] h-[2rem] flex justify-center items-center rounded-lg overflow-hidden group">

                        <span class="absolute inset-0 bg-green-main transition-transform -translate-y-full group-hover:translate-y-0 transition-duration duration-500"></span>

                        <span class="relative z-10">TAMBAH DATA</span>
                    </button>
                </div>
            </section> -->
        </main>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Tangkap elemen tombol dan tbody
        const addButton = document.getElementById('addDataButton');
        const tableBody = document.getElementById('table-body');

        // Fungsi untuk menambahkan baris baru
        addButton.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah reload halaman

            // Buat elemen <tr> baru di dalam tbody
            const newRow = document.createElement('tr');
            newRow.className = "h-[35px]";

            // Tambahkan elemen <td> untuk form input
            newRow.innerHTML = `
                <td class="border border-green-main px-2">
                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Nama Bahan">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                </td>
                <td class="border border-green-main px-2 text-center">
                    <input type="number" class="w-[60px] h-full rounded-sm border border-green-main text-center" value="0">
                </td>
                <td class="border border-green-main px-2">
                    <input type="text" class="w-full h-full rounded-sm px-2 border border-green-main" placeholder="Supplier">
                </td>
            </form>
            </tr>
            `;

            // Tambahkan baris ke dalam tbody
            tableBody.appendChild(newRow);
        });
    });

    // EDIT PURCHASE
    {{--document.querySelectorAll('[id^="editPurchase_"]').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            console.log("Button clicked");
            const id = button.id.split('_')[1];
            console.log("Row ID:", id);
            const row = button.closest('tr');
            if (row) {
                if (button.textContent.trim() === 'Edit') {
                    console.log("Switching to edit mode");
                    row.querySelectorAll('td:not(:last-child)').forEach(cell => {
                        if (!cell.querySelector('input')) {
                            const value = cell.textContent.trim();
                            const input = document.createElement('input');
                            input.type = 'text';
                            input.value = value;
                            input.classList.add('border', 'p-2', 'rounded');
                            cell.textContent = '';
                            cell.appendChild(input);
                        }
                    });
                    button.textContent = 'Save';
                    button.classList.add('bg-green-500');
                } else {
                    console.log("Saving data...");
                    const formData = new FormData();
                    row.querySelectorAll('td:not(:last-child)').forEach(cell => {
                        const input = cell.querySelector('input');
                        if (input) {
                            const columnName = cell.dataset.column;
                            formData.append(columnName, input.value);
                        }
                    });

                    fetch("{{route('admin.invitation.purchase.store', ['id' => $invitation->id])}}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: formData,
                    })
                    .then(response => {
                        console.log("Response received:", response);
                        return response.json();
                    })
                    .then(data => {
                        console.log("Data received:", data);
                        if (data.success) {
                            alert('Data berhasil disimpan.');
                            row.querySelectorAll('td:not(:last-child)').forEach(cell => {
                                const input = cell.querySelector('input');
                                if (input) {
                                    cell.textContent = input.value;
                                }
                            });
                            button.textContent = 'Edit';
                            button.classList.remove('bg-green-500');
                        } else {
                            alert('Gagal menyimpan data.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan.');
                    });
                }
            }
        });
    });--}}



</script>
@endsection
<!-- </body>
</html> -->
