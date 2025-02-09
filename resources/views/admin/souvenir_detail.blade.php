
@extends('admin/sidebar_admin')
@section('title', 'Detail Souvenir')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full relative">
        <div class="z-30 fixed top-0 left-[20%] right-0 grid grid-cols-[88%_12%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>DETAIL PEMESANAN SOUVENIR</h1>
            </div>
            <div class="font-medium">
                <a href="/admin/orders/souvenir" class="text-brown-enzo flex flex-col justify-center items-center group">Kembali
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                </a>
            </div>

        </div>
        <div class="">
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
                                <td class="px-4 py-2">{{$souvenir->user_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                <td class="px-4 py-2">{{$souvenir->phone_number}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Deadline</td>
                                <td class="px-4 py-2">{{ $souvenir->deadline_date ? \Carbon\Carbon::parse($souvenir->deadline_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jumlah</td>
                                <td class="px-4 py-2">{{$souvenir->quantity}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                <td class="px-4 py-2">{{$souvenir->address}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Mempelai</td>
                                <td class="px-4 py-2">{{$souvenir->bridegroom_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                <td class="px-4 py-2">{{ $souvenir->event_date ? \Carbon\Carbon::parse($souvenir->event_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jenis Souvenir</td>
                                <td class="px-4 py-2">{{$souvenir->product_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Kemas</td>
                                <td class="px-4 py-2">{{$souvenir->pack}}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </section>

            <section id="detail" class="detail mb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DETAIL</div>
                <div class="flex justify-center items-center mt-[3.25rem] mb-5 px-4">
                    <div class="data w-[90%] gap-5 flex justify-center items-center capitalize">
                        <table class="table-auto rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500 w-[80%] h-[350px]">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="">DESAIN EMBOSS / LABEL NAMA / SABLON</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-2 py-2">
                                        @if (!is_null($souvenir->desain_emboss_path))
                                            @if ($souvenir->design_status == 'DECL')
                                            <img src="{{ asset('storage/' . $souvenir->desain_emboss_path) }}" alt="Desain Emboss" class="object-cover w-full h-full border-8 border-red-600">
                                            @elseif($souvenir->design_status == 'ACC')
                                            <img src="{{ asset('storage/' . $souvenir->desain_emboss_path) }}" alt="Desain Emboss" class="object-cover w-full h-full border-8 border-green-600">
                                            @else
                                            <img src="{{ asset('storage/' . $souvenir->desain_emboss_path) }}" alt="Desain Emboss" class="object-cover w-full h-full">
                                            @endif
                                        @else
                                            <p class="text-center">Belum Terdapat Desain</p>
                                        @endif
                                </tr>

                            </tbody>
                        </table>
                        <table class="table-auto rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500 w-[80%] h-[350px]">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="">DESAIN THANKSCARD</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-2 py-2">
                                        @if (!is_null($souvenir->desain_thankscard_path))
                                            @if ($souvenir->design_status == 'DECL')
                                            <img src="{{ asset('storage/' . $souvenir->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full border-8 border-red-600">
                                            @elseif($souvenir->design_status == 'ACC')
                                            <img src="{{ asset('storage/' . $souvenir->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full border-8 border-green-600">
                                            @else
                                            <img src="{{ asset('storage/' . $souvenir->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover w-full h-full">
                                            @endif
                                        @else
                                            <p class="text-center">Belum Terdapat Desain</p>
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">SPESIFIKASI</th>
                            </tr>
                        </thead>
                        <tbody class="">
                        <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Mempelai</td>
                                <td class="px-4 py-2">{{$souvenir->bridegroom_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                <td class="px-4 py-2">{{ $souvenir->event_date ? \Carbon\Carbon::parse($souvenir->event_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jenis Souvenir</td>
                                <td class="px-4 py-2">{{$souvenir->product_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Kemas</td>
                                <td class="px-4 py-2">{{$souvenir->pack}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Warna Motif</td>
                                <td class="px-4 py-2">{{$souvenir->color_motif}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Motif Cadangan</td>
                                <td class="px-4 py-2">{{$souvenir->motif_backup}}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </section>


            <section id="info_tambahan" class="info_tambahan pb-16">
                <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">INFORMASI TAMBAHAN</div>
                <div class="data mt-[3.25rem] mb-5 px-4 gap-5 flex justify-center capitalize">
                    <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                        <thead>
                            <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                <th class="" colspan="2">INFORMASI TAMBAHAN</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Progres</td>
                                <td class="px-4 py-2">{{$souvenir->progress}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                <td class="px-4 py-2">{{$souvenir->payment_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 1</td>
                                <td class="px-4 py-2">{{ $souvenir->dp1_date ? \Carbon\Carbon::parse($souvenir->dp1_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                <td class="px-4 py-2">{{ $souvenir->dp2_date ? \Carbon\Carbon::parse($souvenir->dp2_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                <td class="px-4 py-2">{{ $souvenir->paid_off_date ? \Carbon\Carbon::parse($souvenir->paid_off_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Fix Desain</td>
                                <td class="px-4 py-2"></td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                <td class="px-4 py-2">{{$souvenir->price_per_pcs}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Printilan</td>
                                <td class="px-4 py-2">{{$souvenir->printout}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                <td class="px-4 py-2">{{$souvenir->expedition}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">ACC Client</td>
                                <td class="px-4 py-2">{{$souvenir->design_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                <td class="px-4 py-2">{{$souvenir->note_design}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Admin</td>
                                <td class="px-4 py-2">{{$souvenir->note_cs}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <div class="edit_button px-6 mt-10 grid justify-items-end">
                    <a href="{{route('admin.souvenir.edit', ['id' => $souvenir->id])}}"
                        class="relative bg-green-main/80 text-brown-enzo font-semibold w-[6rem] h-[3rem] flex justify-center items-center rounded-lg overflow-hidden group">
                        <!-- Layer latar belakang -->
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-x-full group-hover:translate-x-0 transition-duration duration-500"></span>
                        <!-- Teks -->
                        <span class="relative z-10">EDIT</span>
                    </a>
                </div>
                
            </section>

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
                            @foreach($purchase as $p)
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 text-center">
                                <td scope="row" class="px-6 py-4 text-gray-900 sticky left-0 bg-green-shadow/0 backdrop-blur-xl">
                                    {{ $p->date ? \Carbon\Carbon::parse($p->date)->format('d/m/Y') : '-' }}
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
                                    {{$p->motif}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->quantity_per_motif}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->termin ? \Carbon\Carbon::parse($p->termin)->format('d/m/Y') : '-' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{$p->purchase_amount}}
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
                        
                        <span class="absolute inset-0 bg-green-main transition-transform -translate-y-full group-hover:translate-y-0 transition-duration duration-500"></span>
                        
                        <span class="relative z-10">TAMBAH DATA</span>
                    </a>
                </div>
            </section> -->
        </div>
    </div>
</div>
@endsection
<!-- </body>
</html> -->
