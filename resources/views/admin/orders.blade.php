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
    
        <div class="bg-green-light h-full grid grid-rows-[12%_88%] relative">
            <div class="z-10 fixed top-0 left-[20%] right-0 ht grid grid-cols-[56%_44%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DATA PESANAN</h1>
                </div> 
                <div class="grid grid-cols-4 gap-1 font-medium">
                    <a href="#order" class="text-brown-enzo flex flex-col justify-center items-center group">Order
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#proses" class="text-brown-enzo flex flex-col justify-center items-center group">Proses
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="" class="text-brown-enzo flex flex-col justify-center items-center group">Finishing
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="" class="text-brown-enzo flex flex-col justify-center items-center group">Ready
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                </div>
            </div>

            <div class="grid-rows-4 mt-[7.3%]">
                <section id="order" class="order grid grid-rows-[10%_90%]">
                    <div class="sticky top-[11%] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider">ORDER</div>
                    <div class="data mt-[10%] mb-10 px-2">
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center "><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_20%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>
                    </div>
                    
                </section>

                <section id="proses" class="proses grid grid-rows-[10%_90%]">
                    <div class="sticky top-[11%] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider">PROSES</div>
                    <div class="data mt-10 mb-10 px-2">
                        
                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mt-5 mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-decline rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300">Previous</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[1rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-decline rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300">Previous</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[1rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-decline rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300">Previous</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[1rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-decline rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300">Previous</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[1rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>

                        <div class="grid grid-cols-[20%_18%_15%_15%_10%_10%_10%] gap-1 px-3 py-3 h-20 bg-green-main/20 rounded-lg shadow-inner mb-5">
                            <!-- nama, tipe produk, tgl pesan, tgl dl, detail, next, previous -->
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Nama</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tipe Produk</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Tanggal Pesan</div>
                            <div class="flex items-center justify-center border-r-[1.5px] border-r-black">Deadline</div>
                            <div class="flex items-center justify-center"><a href="" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300">Detail</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-decline rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300">Previous</a></div>
                            <div class="flex items-center justify-center"><a href="" class="bg-accept rounded-lg px-[1rem] py-2 hover:scale-110 transition duration-300">Next</a></div>
                        </div>

            
                    </div>
                </section>
            </div>

            
            
            
        </div>

        

    </div>
</body>
</html>
