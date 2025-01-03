<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesanan</title>
    @vite('resources/css/app.css')
</head>
<body class="font-mont">
    <aside class="z-40 w-1/5 fixed top-0 left-0">
        <div class="bg-green-main min-h-screen">
            <ul class="space-y-5 py-10">
                <li>
                <div>
                    <span class="ms-3 text-2xl font-medium text-cream px-10">ADMIN</span>
                </div>
                </li>
                <li>
                <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                    <span>Beranda</span>
                </a>
                </li>
                <li>
                <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl bg-cream text-green-main ">
                    <span>Data Pesanan</span>
                </a>
                </li>
                <li>
                <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                    <span>Inventory</span>
                </a>
                </li>
                <li>
                <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                    <span>Reminder</span>
                </a>
                </li>
                <li>
                <a href="" class="flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                    <span>Kalender</span>
                </a>
                </li>
            </ul>
        </div>
    </aside>
    
    <!-- Main Container -->
    <div class="ml-[20%]">
    
        <div class="bg-cream h-screen grid grid-rows-[12%_88%] relative">
            <div class="z-10 fixed top-0 left-[20%] right-0 bg-brown-light grid grid-cols-[56%_44%] px-4 py-5 ">
                <div class="flex text-left text-xl font-bold items-center bg-white">
                    <h1>DATA PESANAN</h1>
                </div> 
                <div class="grid grid-cols-4 gap-1">
                    <a href="#order" class="bg-green-main flex justify-center items-center rounded-lg">Order</a>
                    <a href="#proses" class="bg-green-main flex justify-center items-center rounded-lg">Proses</a>
                    <a href="" class="bg-green-main flex justify-center items-center rounded-lg">Finishing</a>
                    <a href="" class="bg-green-main flex justify-center items-center rounded-lg">Ready</a>
                </div>
            </div>

            <div class="grid-rows-4 mt-[7.3%]">
                <section id="order" class="order grid grid-rows-[10%_90%] bg-slate-300">
                    <div class="sticky top-[11%] bg-blue-300 h-10 border-b-2 border-b-red-500">Order</div>
                    <div class="data mt-[10%] mb-10">
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Next</div>
                        </div>
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Next</div>
                        </div>
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Next</div>
                        </div>
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Next</div>
                        </div>
                    </div>
                    
                </section>
                <section id="proses" class="proses grid grid-rows-[10%_90%] bg-slate-300">
                    <div class="sticky top-[11%] bg-blue-300 h-10">Proses</div>
                    <div class="data mt-10">
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Previous</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Next</div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Previous</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Next</div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Previous</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Next</div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Previous</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Next</div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Previous</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Next</div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-2 py-2 h-20">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Nama</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tipe Produk</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Tanggal Pesan</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Tanggal Detail</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Detail</div>
                            <div class="bg-green-main rounded-lg flex items-center justify-center">Previous</div>
                            <div class="bg-blue-300 rounded-lg flex items-center justify-center">Next</div>
                        </div>
            
                    </div>
                </section>
            </div>

            
            
            
        </div>

        

    </div>
</body>
</html>
