<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Undangan</title>
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
    </aside>
    
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
                    <div class="data mt-[11%] mb-5 px-3 gap-0 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-accept hover:shadow-lg transition duration-500">
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Pemesan</td>
                                    <td class="px-4 py-2">Yanto Subekjo</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                    <td class="px-4 py-2">081234567890</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300 lowercase">
                                    <td class="w-[35%] px-4 py-2">Nama Instagram</td>
                                    <td class="px-4 py-2">@yantogantenk</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                    <td class="px-4 py-2">Kampung Kecil RT 00/ RW 01, Kelurahan, Kecamatan, Solo, Surakarta Hadiningrat, Jawa Tengah, Indonesia Raya</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Jumlah</td>
                                    <td class="px-4 py-2">500</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tipe Produk</td>
                                    <td class="px-4 py-2">Undangan Pernikahan</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Deadline</td>
                                    <td class="px-4 py-2">Secepatnya</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Finishing</td>
                                    <td class="px-4 py-2">Biasa</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </section>

                <section id="data_pria" class="data_pria mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA MEMPELAI PRIA</div>
                    <div class="data mt-[4.5%] mb-5 px-3 gap-0 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-accept hover:shadow-lg transition duration-500">
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Lengkap</td>
                                    <td class="px-4 py-2">Fulan bin Fulan</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Panggilan</td>
                                    <td class="px-4 py-2">Fulan</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ayah</td>
                                    <td class="px-4 py-2">Bapaknya Fulan</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ibu</td>
                                    <td class="px-4 py-2">Ibunya Fulan</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Orang Tua</td>
                                    <td class="px-4 py-2">Kampung Kecil RT 00/ RW 01, Kelurahan, Kecamatan, Solo, Surakarta Hadiningrat, Jawa Tengah, Indonesia Raya</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </section>

                <section id="data_wanita" class="data_wanita mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA MEMPELAI WANITA</div>
                    <div class="data mt-[4.5%] mb-5 px-3 gap-0 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-accept hover:shadow-lg transition duration-500">
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Lengkap</td>
                                    <td class="px-4 py-2">Fulanah bin Fulan</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Panggilan</td>
                                    <td class="px-4 py-2">Fulanah</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ayah</td>
                                    <td class="px-4 py-2">Bapaknya Fulanah</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ibu</td>
                                    <td class="px-4 py-2">Ibunya Fulanah</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Orang Tua</td>
                                    <td class="px-4 py-2">Kampung Gede RT 00/ RW 01, Kelurahan, Kecamatan, Solo, Surakarta Hadiningrat, Jawa Tengah, Indonesia Raya</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </section>

                <section id="data_akad" class="data_akad mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA AKAD / PEMBERKATAN</div>
                    <div class="data mt-[4.5%] mb-5 px-3 gap-0 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-accept hover:shadow-lg transition duration-500">
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                    <td class="px-4 py-2">29-02-2025</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Waktu Acara</td>
                                    <td class="px-4 py-2">10.00-11.00</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Lokasi Acara</td>
                                    <td class="px-4 py-2">Graha Saba Buana Gedunge Pak Jokowi</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </section>

                <section id="data_resepsi" class="data_resepsi mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">DATA RESEPSI</div>
                    <div class="data mt-[4.5%] mb-5 px-3 gap-0 flex justify-center capitalize">
                        <table class="table-auto w-[80%] rounded-lg overflow-hidden tracking-wider shadow-lg hover:shadow-accept hover:shadow-lg transition duration-500">
                            <tbody class="">
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal Acara</td>
                                    <td class="px-4 py-2">29-02-2025</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Waktu Acara</td>
                                    <td class="px-4 py-2">10.00-11.00</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Lokasi Acara</td>
                                    <td class="px-4 py-2">Graha Saba Buana Gedunge Pak Jokowi</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </section>
            </div>

            
        </div>
    </div>
</body>
</html>