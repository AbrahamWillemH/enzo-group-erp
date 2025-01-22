    @extends('admin/sidebar_admin')
    @section('title', 'Detail Undangan')
    @section('konten')
    <div class="ml-[20%]">

        <div class="bg-green-light h-full grid grid-rows-[12%_88%] relative">
            <div class="z-30 fixed top-0 left-[20%] right-0 grid grid-cols-[89%_11%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DETAIL PEMESANAN UNDANGAN</h1>
                </div>
                <div class="font-medium">
                    <a href="#" class="text-brown-enzo flex flex-col justify-center items-center group">Kembali
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                </div>

            </div>
            <div class="">
                <section id="data_pemesan" class="data_pemesan mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA PEMESAN</div>
                    <div class="data mt-[12%] mb-5 px-3 gap-0 flex justify-center capitalize">
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
                    <div class="data mt-[5.5%] mb-5 px-4 gap-5 flex justify-center capitalize">
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
                    <div class="data mt-[5.5%] mb-5 px-4 gap-5 flex justify-center capitalize">
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

                <section id="info_tambahan" class="info_tambahan mb-16">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DETAIL</div>
                    <div class="data mt-[5.5%] mb-5 px-4 gap-5 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="">DESAIN</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-2 py-2">
                                        <img src="{{ asset('img/undanganA.jpeg') }}" alt="" class="object-cover w-full h-full">
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
                                    <td class="px-4 py-2">{{$invitation->status}}</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                    <td class="px-4 py-2">{{$invitation->payment_status}}</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal DP</td>
                                    <td class="px-4 py-2">{{$invitation->dp2_date}}</td>
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
                                    @if($invitation->acc_client == 1)
                                        <td class="px-4 py-2">ACC</td>
                                    @else
                                        <td class="px-4 py-2">DECL</td>
                                    @endif
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="edit_button px-4 mt-10 grid justify-items-end">
                        <a href="#"
                            class="relative bg-green-main/80 text-brown-enzo font-semibold w-[6rem] h-[3rem] flex justify-center items-center rounded-lg overflow-hidden group">
                            <!-- Layer latar belakang -->
                            <span class="absolute inset-0 bg-green-main transition-transform -translate-x-full group-hover:translate-x-0 transition-duration duration-500"></span>
                            <!-- Teks -->
                            <span class="relative z-10">EDIT</span>
                        </a>
                    </div>

                </section>


            </div>


        </div>
    </div>
    @endsection
<!-- </body>
</html> -->
