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
                    <a href="{{route('orders.view')}}" style="letter-spacing: 3px" class="font-sans flex items-center py-3 px-4 w-4/5 rounded-r-2xl bg-cream text-green-main">
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
                        <input type="search" placeholder="Cari Customer" class="rounded-md w-full h-full px-1 bg-gray-50 border border-gray-300 text-gray-900 text-xs focus:ring-brown-enzo focus:border-brown-enzo block ">
                    </div>

                </div>
            </div>

            <div class="">
                <section id="order" class="order mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">ORDER</div>
                    <div class="data mt-[11%] mb-5 px-3 gap-0">
                        <table class="table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner z-20">
                            <thead class="sticky top-0 bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($orders as $o)
                                @if ($o->progress == 'Pemesanan Bahan')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->created_at->toDateString()}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->deadline_date}}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('orders.detail', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                Detail
                                            </button>
                                        </form>

                                        <form action="{{ route('orders.updateProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
                                                Next
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="proses" class="order mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">PROSES</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner ">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($orders as $o)
                                @if ($o->progress == 'Proses Produksi')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->created_at->toDateString()}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->deadline_date}}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('orders.detail', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                Detail
                                            </button>
                                        </form>

                                        <form action="{{ route('orders.previousProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmPreviousProgress();">
                                                Previous
                                            </button>
                                        </form>
                                        <form action="{{ route('orders.updateProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
                                                Next
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </section>
                <section id="finishing" class="order mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">FINISHING</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner ">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($orders as $o)
                                @if ($o->progress == 'Finishing')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->created_at->toDateString()}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->deadline_date}}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('orders.detail', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                Detail
                                            </button>
                                        </form>
                                        <form action="{{ route('orders.previousProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-decline rounded-lg px-[0.3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmPreviousProgress();">
                                                Previous
                                            </button>
                                        </form>
                                        <form action="{{ route('orders.updateProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
                                                Next
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </section>
                <section id="ready" class="order mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">READY</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner ">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($orders as $o)
                                @if ($o->progress == 'Selesai')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->created_at->toDateString()}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->deadline_date}}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('orders.detail', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                Detail
                                            </button>
                                        </form>

                                        <form action="{{ route('orders.previousProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-decline rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmPreviousProgress();">
                                                Previous
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<script>
    function confirmPreviousProgress() {
        return confirm('Are you sure you want to go back to the previous progress?');
    }
    function confirmNextProgress() {
        return confirm('Are you sure you want to go to the next progress?');
    }
</script>
</html>
