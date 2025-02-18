
@extends('user/sidebar_user')
@section('title', 'Detail Souvenir')
@section('konten')
<div class="ml-[20%]">

    <div class="bg-green-light h-full relative">
        <div class="z-30 fixed top-0 left-[20%] right-0 grid grid-cols-[88%_12%] px-4 py-5 bg-green-shadow">
            <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                <h1>DETAIL PEMESANAN SOUVENIR</h1>
            </div>
            <div class="font-medium">
                <a href="/user/orders" class="text-brown-enzo flex flex-col justify-center items-center group">Kembali
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
                                <td class="px-4 py-2">{{$order->user_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                <td class="px-4 py-2">{{$order->phone_number}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jumlah</td>
                                <td class="px-4 py-2">{{$order->quantity}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                <td class="px-4 py-2">{{$order->address}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Nama Mempelai</td>
                                <td class="px-4 py-2">{{$order->bridegroom_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                <td class="px-4 py-2">{{ $order->event_date ? \Carbon\Carbon::parse($order->event_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jenis Souvenir</td>
                                <td class="px-4 py-2">{{$order->product_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Kemas</td>
                                <td class="px-4 py-2">{{$order->pack}}</td>
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
                                        @if(!is_null($order->desain_emboss_path))
                                            <img src="{{ asset('storage/' . $order->desain_emboss_path) }}" alt="Desain Emboss" class="object-cover max-w-full max-h-full">
                                        @else
                                            <p class="text-center">Belum Terdapat Desain</p>
                                        @endif
                                    </td>
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
                                        @if(!is_null($order->desain_thankscard_path))
                                            <img src="{{ asset('storage/' . $order->desain_thankscard_path) }}" alt="Desain Thankscard" class="object-cover max-w-full max-h-full">
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
                                <td class="px-4 py-2">{{$order->bridegroom_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                <td class="px-4 py-2">{{ $order->event_date ? \Carbon\Carbon::parse($order->event_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Jenis Souvenir</td>
                                <td class="px-4 py-2">{{$order->product_name}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Kemas</td>
                                <td class="px-4 py-2">{{$order->pack}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Warna Motif</td>
                                <td class="px-4 py-2">{{$order->color_motif}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Motif Cadangan</td>
                                <td class="px-4 py-2">{{$order->motif_backup}}</td>
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
                                @if ($order->progress == 'Selesai Beneran')
                                    <td class="px-4 py-2">Done</td>
                                @elseif ($order->progress =='Selesai')
                                    <td class="px-4 py-2">Ready</td>
                                @else
                                    <td class="px-4 py-2">{{ $order->progress }}</td>
                                @endif
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                <td class="px-4 py-2">{{$order->payment_status}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 1</td>
                                <td class="px-4 py-2">{{ $order->dp1_date ? \Carbon\Carbon::parse($order->dp1_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                <td class="px-4 py-2">{{ $order->dp2_date ? \Carbon\Carbon::parse($order->dp2_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                <td class="px-4 py-2">{{ $order->paid_off_date ? \Carbon\Carbon::parse($order->paid_off_date)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                <td class="px-4 py-2">{{$order->price_per_pcs}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Percetakan</td>
                                <td class="px-4 py-2">{{$order->printout}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                <td class="px-4 py-2">{{$order->expedition}}</td>
                            </tr>
                            <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">ACC Client</td>
                                <td class="px-4 py-2">{{$order->acc_client}}</td>
                            </tr>
                            <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                <td class="px-4 py-2">{{$order->note_design}}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
<!-- </body>
</html> -->
