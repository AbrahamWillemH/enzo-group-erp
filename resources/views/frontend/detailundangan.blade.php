    @extends('user/sidebar_user')
    @section('title', 'Detail Undangan')
    @section('konten')
    <div class="ml-[20%]">

        <div class="bg-green-light h-full">
            <header class="z-30 fixed top-0 right-0 h-[68px] w-[80%] grid grid-cols-[80%_20%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DETAIL PEMESANAN UNDANGAN</h1>
                </div>
                <div class="grid grid-cols-1 font-medium">
                    <a href="#" class="text-brown-enzo flex flex-col justify-center items-center group">Kembali
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
                                    <td class="px-4 py-2">Agus</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nomor HP</td>
                                    <td class="px-4 py-2">123456789101</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Username Instagram</td>
                                    <td class="px-4 py-2 lowercase">@agus_123</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Lengkap</td>
                                    <td class="px-4 py-2">Jl. Agus Agus 05, Kecamatan Agus, Agus Agus Agus</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Jumlah</td>
                                    <td class="px-4 py-2">205</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tipe Produk</td>
                                    <td class="px-4 py-2">Tipe</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Deadline</td>
                                    <td class="px-4 py-2">2025-12-9</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Finishing</td>
                                    <td class="px-4 py-2">Yes</td>
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
                                    <td class="px-4 py-2">Agus Agus bin Agus</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Panggilan</td>
                                    <td class="px-4 py-2">Agus</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ayah</td>
                                    <td class="px-4 py-2">Agus bin Agus Agus</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ibu</td>
                                    <td class="px-4 py-2">Ibu Agus</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Orang Tua</td>
                                    <td class="px-4 py-2">Jl Bapak Agus dan Ibu Agus</td>
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
                                    <td class="px-4 py-2">Suga Suga bin Sugi</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Panggilan</td>
                                    <td class="px-4 py-2">Suga</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ayah</td>
                                    <td class="px-4 py-2">Sugi</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Nama Ibu</td>
                                    <td class="px-4 py-2">Sigi</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Alamat Orang Tua</td>
                                    <td class="px-4 py-2">Jl. Mataram is Red, Mataram is Blue</td>
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
                                    <td class="px-4 py-2">2025-12-9</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Waktu Acara</td>
                                    <td class="px-4 py-2">00:00:00</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Lokasi Acara</td>
                                    <td class="px-4 py-2">Rumah sepupu suga</td>
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
                                    <td class="px-4 py-2">2025-12-9</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Waktu Acara</td>
                                    <td class="px-4 py-2">00:00:00</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Lokasi Acara</td>
                                    <td class="px-4 py-2">Rumah keponakan Agus</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </section>

                <section id="info_tambahan" class="info_tambahan pb-16">
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
                                    <td class="px-4 py-2">Menunggu Bapak Mandi</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Status Bayar</td>
                                    <td class="px-4 py-2">DP 2</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal DP 1</td>
                                    <td class="px-4 py-2">2025-12-9</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal DP 2</td>
                                    <td class="px-4 py-2">2025-12-10</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Tanggal Pelunasan</td>
                                    <td class="px-4 py-2">2025-12-12</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Harga /pcs</td>
                                    <td class="px-4 py-2">4900</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Percetakan</td>
                                    <td class="px-4 py-2">Ya</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Ekspedisi</td>
                                    <td class="px-4 py-2">Shopeefood</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">ACC Client</td>
                                    <td class="px-4 py-2">ACC</td>
                                </tr>
                                <tr class="bg-green-shadow/20 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Note Pelanggan</td>
                                    <td class="px-4 py-2">Catatan terkait desain atau yang lainnya</td>
                                </tr>
                                <tr class="bg-green-shadow/30 h-[60px] hover:bg-green-shadow/40 transition-all duration-300">
                                    <td class="w-[35%] px-4 py-2">Note Admin</td>
                                    <td class="px-4 py-2">Catatan dari admin terkait detail pemesanan</td>
                                </tr>
                            </tbody>

                        </table>
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
