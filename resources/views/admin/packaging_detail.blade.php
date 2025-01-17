<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Packaging</title>
    @vite('resources/css/app.css')
</head>
<body class="font-mont">
    <aside class="z-40 w-1/5 fixed top-0 left-0">
        <div class="bg-green-main min-h-screen">
            <ul class="space-y-5 py-10">
                <li>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-cream rounded-full flex items-center justify-center ml-4">
                        <span class="text-green-main font-medium">A</span>
                        </div>
                        <span style="letter-spacing: 3px" class="font-sans ms-3 text-2xl font-medium text-cream px-1">ADMIN</span>
                    </div>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl bg-cream text-green-main">
                        <span>Data Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                        <span>Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                        <span>Reminder</span>
                    </a>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                        <span>Calendar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside> -->
    @extends('admin/sidebar_admin')
    @section('title', 'Detail Packaging')
    @section('konten')
    <div class="ml-[20%]">

        <div class="bg-green-light h-full grid grid-rows-[12%_88%] relative">
            <div class="z-30 fixed top-0 left-[20%] right-0 grid grid-cols-[89%_11%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DETAIL PEMESANAN PACKAGING</h1>
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
                                    <td class="px-4 py-2">Yanto Subekjo</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                    <td class="px-4 py-2">081234567890</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Deadline</td>
                                    <td class="px-4 py-2">Secepatnya</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Jumlah</td>
                                    <td class="px-4 py-2">500</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                    <td class="px-4 py-2">Kampung Kecil RT 00/ RW 01, Kelurahan, Kecamatan, Solo, Surakarta Hadiningrat, Jawa Tengah, Indonesia Raya</td>
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
                                        <img src="{{ asset('img/packagingD.jpeg') }}" alt="" class="object-cover max-w-full max-h-full">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="" colspan="2">SPESIFIKASI</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Model</td>
                                    <td class="px-4 py-2">Softbox</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tipe</td>
                                    <td class="px-4 py-2">SB Diecut</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Finishing</td>
                                    <td class="px-4 py-2">Foil</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Ukuran</td>
                                    <td class="px-4 py-2">20cm x 30cm x 10cm</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Note Desain</td>
                                    <td class="px-4 py-2 normal-case">Ini catatannya ya, diatasnya dikasih ini, sampingnya kek gini, bawahnya ditulisi ini</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </section>


                <section id="info_tambahan" class="info_tambahan mb-16">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">INFORMASI TAMBAHAN</div>
                    <div class="data mt-[5.5%] mb-5 px-4 gap-5 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-green-dark hover:shadow-lg transition duration-500">
                            <thead>
                                <tr class="h-[60px] bg-green-main/80 text-brown-enzo">
                                    <th class="" colspan="2">INFORMASI TAMBAHAN</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Status Progres</td>
                                    <td class="px-4 py-2">Proses Produksi</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                    <td class="px-4 py-2">DP 2</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal DP</td>
                                    <td class="px-4 py-2">20 Januari 2025</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                    <td class="px-4 py-2">Rp 7000</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Printilan</td>
                                    <td class="px-4 py-2">Printilan</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                    <td class="px-4 py-2">JNT Ekspres</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">ACC Client</td>
                                    <td class="px-4 py-2">ACC</td>
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