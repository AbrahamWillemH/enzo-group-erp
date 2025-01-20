<!-- <!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reminder</title>
    @vite('resources/css/app.css')
</head>
<body class="font-mont"> -->
    <!-- Sidebar -->
    <!-- <aside class="w-[19.8%] fixed top-0 left-0">
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
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                        <span>Data Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl text-cream hover:bg-cream hover:text-green-main">
                        <span>Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl bg-cream text-green-main">
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
    @section('title', 'Reminder')
    @section('konten')
    <div class="ml-[20%]">
        <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center justify-between px-4">
            <h1 class="text-xl font-bold text-brown-enzo" style="letter-spacing: 1px">REMINDER</h1>
            <div class="relative group z-20">
                <!-- Dropdown Button -->
                <button class="text-brown-enzo font-semibold flex flex-col justify-center items-center w-[120px] mr-5" style="letter-spacing: 1px">
                    Filter
                    <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
                </button>
        
                <!-- Dropdown Content with Checkbox -->
                <div class="absolute opacity-0 group-hover:opacity-100 bg-green-light shadow-lg mt-2 rounded-md z-30 top-full left-[10px] w-[100px] transition-opacity duration-500 delay-25">
                    <div class="block px-4 py-2">
                        <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                            <input type="checkbox" class="mr-2 accent-green-main">
                            DP 1
                        </label>
                    </div>
                    <div class="block px-4 py-2">
                        <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                            <input type="checkbox" class="mr-2 accent-green-main">
                            DP 2
                        </label>
                    </div>
                    <div class="block px-4 py-2">
                        <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                            <input type="checkbox" class="mr-2 accent-green-main">
                            Lunas
                        </label>
                    </div>
                </div>
            </div>
        </header>
        <!-- Tabel Data Pesanan -->
        <main class="pt-20 pr-5 bg-green-light h-full">
            <div class="overflow-x-auto px-3">
                <table class="table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner">
                    <thead class="bg-green-main/30">
                        <tr>
                            <th class="text-center py-6">ID</th>
                            <th class="text-center py-6">Nama Pelanggan</th>
                            <th class="text-center py-6">Tipe Produk</th>
                            <th class="text-center py-6">Tanggal Pesan</th>
                            <th class="text-center py-6">Deadline</th>
                            <th class="text-center py-6">Status Pembayaran</th>
                            <th class="text-center py-6">Status Pengerjaan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-green-main/10">
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">1</td>
                            <td class="px-4 py-3">Alicia</td>
                            <td class="px-4 py-3">Invitation Card</td>
                            <td class="px-4 py-3 text-center">05-01-2025</td>
                            <td class="px-4 py-3 text-center">12-01-2025</td>
                            <td class="px-4 py-3 text-center">Lunas</td>
                            <td class="px-4 py-3 text-center">Selesai</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">2</td>
                            <td class="px-4 py-3">Ibra</td>
                            <td class="px-4 py-3">Souvenir</td>
                            <td class="px-4 py-3 text-center">08-01-2025</td>
                            <td class="px-4 py-3 text-center">15-01-2025</td>
                            <td class="px-4 py-3 text-center">DP 1</td>
                            <td class="px-4 py-3 text-center">Proses</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">3</td>
                            <td class="px-4 py-3">Hanun</td>
                            <td class="px-4 py-3">Invitation Card</td>
                            <td class="px-4 py-3 text-center">09-01-2025</td>
                            <td class="px-4 py-3 text-center">20-01-2025</td>
                            <td class="px-4 py-3 text-center">DP 2</td>
                            <td class="px-4 py-3 text-center">Proses</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                        <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                            <td class="px-4 py-3 text-center">4</td>
                            <td class="px-4 py-3">Sasmi</td>
                            <td class="px-4 py-3">Souvenir</td>
                            <td class="px-4 py-3 text-center">10-01-2025</td>
                            <td class="px-4 py-3 text-center">18-01-2025</td>
                            <td class="px-4 py-3 text-center">DP 1</td>
                            <td class="px-4 py-3 text-center">Proses</td>
                            <td class="px-3 py-3 text-center">
                                <a href="#" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
    @endsection
<!-- </body>
</html> -->
