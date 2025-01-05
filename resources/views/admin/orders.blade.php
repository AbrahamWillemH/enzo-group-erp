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
            <div class="z-30 fixed top-0 left-[20%] right-0 ht grid grid-cols-[45%_55%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DATA PESANAN</h1>
                </div> 
                <div class="grid grid-cols-5 gap-1 font-medium">
                    <a href="#order" class="text-brown-enzo flex flex-col justify-center items-center group">Order
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#proses" class="text-brown-enzo flex flex-col justify-center items-center group">Proses
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#finishing" class="text-brown-enzo flex flex-col justify-center items-center group">Finishing
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#ready" class="text-brown-enzo flex flex-col justify-center items-center group">Ready
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <div class="search flex items-center justify-center font-medium text-xs">
                        <input type="search" placeholder="Cari Customer" class="rounded-md w-full h-full px-1 bg-gray-50 border border-gray-300 text-gray-900 text-xs focus:ring-blue-500 focus:border-blue-500 block ">
                    </div>

                </div>
            </div>

            <div class="grid-rows-4">
                <section id="order" class="order grid grid-rows-[30px_1fr]">
                    <div class="sticky top-[11%] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">ORDER</div>
                    
                    <div class="data mt-[11%] mb-5 px-3 grid gap-0 grid-rows-[10%_90%%]">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center" style="width: 20%;">Nama</th>
                                    <th class="text-center" style="width: 18%;">Tipe Produk</th>
                                    <th class="text-center" style="width: 15%;">Tanggal Pesan</th>
                                    <th class="text-center" style="width: 15%;">Deadline</th>
                                    <th class="text-center" style="width: 10%;">Detail</th>
                                    <th class="text-center" style="width: 20%;">Progres</th>
                                </tr>
                            </thead>
                        </table>
            
                        <table class="table-auto w-full border rounded-b-lg overflow-hidden mb-5 capitalize shadow-inner">
                            <tbody class="bg-green-main/10">
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center" style="width: 20%;">John Doe</td>
                                    <td class="px-3 py-3 text-center" style="width: 18%;">Produk A</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-01</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-10</td>
                                    <td class="px-3 py-3 text-center" style="width: 10%;">
                                        <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block">Detail</a>
                                    </td>
                                    <td class="px-3 py-3 text-center" style="width: 20%;">
                                        <a href="#" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block">Next</a>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    
                </section>

                <section id="proses" class="proses grid grid-rows-[30px_1fr]">
                    <div class="sticky top-[11%] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">PROSES</div>
                    
                    <div class="data mt-[10%] mb-5 px-3 grid gap-0 grid-rows-[10%_90%%]">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center" style="width: 20%;">Nama</th>
                                    <th class="text-center" style="width: 18%;">Tipe Produk</th>
                                    <th class="text-center" style="width: 15%;">Tanggal Pesan</th>
                                    <th class="text-center" style="width: 15%;">Deadline</th>
                                    <th class="text-center" style="width: 10%;">Detail</th>
                                    <th class="text-center col-span-2" style="width: 20%;">Progres</th>
                                </tr>
                            </thead>
                        </table>
            
                        <table class="table-auto w-full border rounded-b-lg overflow-hidden mb-5 capitalize shadow-inner">
                            <tbody class="bg-green-main/10">
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center" style="width: 20%;">John Doe</td>
                                    <td class="px-3 py-3 text-center" style="width: 18%;">Produk A</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-01</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-10</td>
                                    <td class="px-3 py-3 text-center" style="width: 9%;">
                                        <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block">Detail</a>
                                    </td>
                                    <td class="px-3 py-3 text-center" style="width: 8%;">
                                        <a href="#" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block">Previous</a>
                                    </td>
                                    <td class="px-3 py-3 text-center" style="width: 8%;">
                                        <a href="#" class="bg-accept rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300 inline-block">Next</a>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    
                </section>

                <section id="finishing" class="finishing grid grid-rows-[30px_1fr]">
                    <div class="sticky top-[11%] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">FINISHING</div>
                    
                    <div class="data mt-[10%] mb-5 px-3 grid gap-0 grid-rows-[10%_90%%]">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center" style="width: 20%;">Nama</th>
                                    <th class="text-center" style="width: 18%;">Tipe Produk</th>
                                    <th class="text-center" style="width: 15%;">Tanggal Pesan</th>
                                    <th class="text-center" style="width: 15%;">Deadline</th>
                                    <th class="text-center" style="width: 10%;">Detail</th>
                                    <th class="text-center col-span-2" style="width: 20%;">Progres</th>
                                </tr>
                            </thead>
                        </table>
            
                        <table class="table-auto w-full border rounded-b-lg overflow-hidden mb-5 capitalize shadow-inner">
                            <tbody class="bg-green-main/10">
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center" style="width: 20%;">John Doe</td>
                                    <td class="px-3 py-3 text-center" style="width: 18%;">Produk A</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-01</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-10</td>
                                    <td class="px-3 py-3 text-center" style="width: 9%;">
                                        <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block">Detail</a>
                                    </td>
                                    <td class="px-3 py-3 text-center" style="width: 8%;">
                                        <a href="#" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block">Previous</a>
                                    </td>
                                    <td class="px-3 py-3 text-center" style="width: 8%;">
                                        <a href="#" class="bg-accept rounded-lg px-[0.5rem] py-2 hover:scale-110 transition duration-300 inline-block">Next</a>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    
                </section>

                <section id="ready" class="ready grid grid-rows-[30px_1fr]">
                    <div class="sticky top-[11%] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">READY</div>
                    
                    <div class="data mt-[11%] mb-5 px-3 grid gap-0 grid-rows-[10%_90%%]">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center" style="width: 20%;">Nama</th>
                                    <th class="text-center" style="width: 18%;">Tipe Produk</th>
                                    <th class="text-center" style="width: 15%;">Tanggal Pesan</th>
                                    <th class="text-center" style="width: 15%;">Deadline</th>
                                    <th class="text-center" style="width: 10%;">Detail</th>
                                    <th class="text-center" style="width: 20%;">Progres</th>
                                </tr>
                            </thead>
                        </table>
            
                        <table class="table-auto w-full border rounded-b-lg overflow-hidden mb-5 capitalize shadow-inner">
                            <tbody class="bg-green-main/10">
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center" style="width: 20%;">John Doe</td>
                                    <td class="px-3 py-3 text-center" style="width: 18%;">Produk A</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-01</td>
                                    <td class="px-3 py-3 text-center" style="width: 15%;">2025-01-10</td>
                                    <td class="px-3 py-3 text-center" style="width: 10%;">
                                        <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block">Detail</a>
                                    </td>
                                    <td class="px-3 py-3 text-center" style="width: 20%;">
                                        <a href="#" class="bg-decline rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block">Previous</a>
                                    </td>
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
