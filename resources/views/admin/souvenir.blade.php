    @extends('admin/sidebar_admin')
    @section('title', 'Data Pesanan')
    @section('konten')
    <!-- Main Container -->
    <div class="ml-[20%]">

        <div class="bg-green-light h-full grid grid-rows-[12%_88%] relative">
            <div class="z-30 fixed top-0 left-[20%] right-0 ht grid grid-cols-[28%_72%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DATA SOUVENIR</h1>
                </div>
                <div class="grid grid-cols-8 gap-1 font-medium">
                    <a href="#pending" class="text-brown-enzo flex flex-col justify-center items-center group">Pending
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#fix" class="text-brown-enzo flex flex-col justify-center items-center group">Fix
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
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
                    <!-- Dropdown Menu -->
                    <div class="flex flex-col justify-center items-center group relative">
                        <!-- Dropdown Button -->
                        <button class="text-brown-enzo flex flex-col justify-center items-center mr-5 w-[100px]">Sort by
                            <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
                        </button>

                        <!-- Dropdown Content -->
                        <div class="absolute opacity-0 group-hover:opacity-100 bg-green-light shadow-lg mt-2 rounded-md z-10 top-full w-50 transition-opacity duration-500 delay-25">
                            <a href="{{route('admin.souvenir.view', ['sort' => 'alphabetical'])}}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Alphabetical</a>
                            <a href="{{route('admin.souvenir.view', ['sort' => 'order'])}}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Tanggal Order</a>
                            <a href="{{route('admin.souvenir.view', ['sort' => 'deadline'])}}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-cream rounded-md">Tanggal Deadline</a>
                        </div>
                    </div>
                    <div class="search flex items-center justify-center font-medium text-xs">
                        <input type="search" placeholder="Cari Customer" class="rounded-md w-full h-full px-1 bg-gray-50 border border-gray-300 text-gray-900 text-xs focus:ring-brown-enzo focus:border-brown-enzo block ">
                    </div>
                </div>
            </div>

            <div class="">
                <section id="pending" class="pending mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">PENDING</div>
                    <div class="data mt-[11%] mb-5 px-3 gap-0">
                        <table class="table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner z-20">
                            <thead class="sticky top-0 bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Kemas</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Tanggal Acara</th>
                                    <th class="text-center">Desain</th>
                                    <th class="text-center">Status Bayar</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($souvenir as $o)
                                @if ($o->progress == 'Pending')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{$o->design_status}}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.update_payment_status') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="order_id" value="{{ $o->id }}">
                                            <select name="payment_status" class="bg-green-light border border-gray-300 rounded-md px-2 py-1" onchange="this.form.submit()">
                                                <option value="Pending" {{ old('payment_status', $o->payment_status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="DP 1" {{ old('payment_status', $o->payment_status) == 'DP 1' ? 'selected' : '' }}>DP 1</option>
                                                <option value="DP 2" {{ old('payment_status', $o->payment_status) == 'DP 2' ? 'selected' : '' }}>DP 2</option>
                                                <option value="Lunas" {{ old('payment_status', $o->payment_status) == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                            </select>
                                        </form>
                                        </td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
                                            <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                Detail
                                            </button>
                                        </form>

                                        @if (($o->payment_status == 'DP 2' || $o->payment_status == 'Lunas') && ($o->design_status == 'ACC'))
                                        <form action="{{ route('orders.updateProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-accept rounded-lg px-[3rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
                                                Next
                                            </button>
                                        </form>
                                        @else
                                        <form action="{{ route('orders.updateProgress', ['id' => $o->id]) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="bg-slate-600 rounded-lg px-[3rem] py-2 inline-block text-white cursor-not-allowed" disabled>
                                                Next
                                            </button>
                                        </form>
                                    @endif
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="fix" class="fix mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">FIX</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner z-20">
                            <thead class="sticky top-0 bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Kemas</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Tanggal Acara</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($souvenir as $o)
                                @if ($o->progress == 'Fix')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                    <td><input type="date" name="deadline_date_input" id="deadline_{{$o->id}}" class="w-full rounded-sm" placeholder="2025-01-19"></td>

                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
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
                                            <input type="hidden" name="deadline_date" id="hidden_deadline_{{$o->id}}">
                                            <button type="submit" id="submitButton_{{$o->id}}" class="bg-slate-600 rounded-lg px-[3rem] py-2 transition duration-300 inline-block text-white cursor-not-allowed" disabled onclick="copyDeadline({{$o->id}});">
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

                <section id="order" class="order mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">ORDER</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner z-20">
                            <thead class="sticky top-0 bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Kemas</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Tanggal Acara</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($souvenir as $o)
                                @if ($o->progress == 'Pemesanan Bahan')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
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
                                            <button type="submit" class="bg-accept rounded-lg px-[2rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
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

                <section id="proses" class="proses mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">PROSES</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner ">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Kemas</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Tanggal Acara</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($souvenir as $o)
                                @if ($o->progress == 'Proses Produksi')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
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
                                            <button type="submit" class="bg-accept rounded-lg px-[2rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
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

                <section id="finishing" class="finishing mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">FINISHING</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner ">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Kemas</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Tanggal Acara</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($souvenir as $o)
                                @if ($o->progress == 'Finishing')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
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
                                            <button type="submit" class="bg-accept rounded-lg px-[2rem] py-2 hover:scale-110 transition duration-300 inline-block text-white" onclick="return confirmNextProgress();">
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

                <section id="ready" class="ready mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-20">READY</div>
                    <div class="data mt-11 mb-5 px-3 gap-0">
                        <table class="sticky top-[17.5%] table-auto w-full border rounded-t-lg overflow-hidden capitalize shadow-inner ">
                            <thead class="bg-green-main/30 backdrop-blur-lg">
                                <tr class="h-20">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tipe Produk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Kemas</th>
                                    <th class="text-center">Tanggal Pesan</th>
                                    <th class="text-center">Tanggal Acara</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-green-main/10">
                                @foreach($souvenir as $o)
                                @if ($o->progress == 'Selesai')
                                <tr class="h-20 border-t-[1.5px] border-black/30 hover:bg-green-main/15">
                                    <td class="px-3 py-3 text-center">{{$o->id}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->user_name}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->type}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                    <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                    <td class="px-3 py-3 text-center">
                                        <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
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

<script>
    function confirmPreviousProgress() {
        return confirm('Are you sure you want to go back to the previous progress?');
    }
    function confirmNextProgress() {
        return confirm('Are you sure you want to go to the next progress?');
    }
    document.querySelectorAll('input[type="date"][id^="deadline_"]').forEach((textInput) => {
        const id = textInput.id.split('_')[1]; // Ambil ID unik
        const submitButton = document.getElementById(`submitButton_${id}`);

        // Event listener untuk setiap elemen input
        textInput.addEventListener('input', () => {
            if (textInput.value.trim() !== '') {
                // Aktifkan tombol jika ada teks
                submitButton.disabled = false;
                submitButton.classList.remove('bg-slate-600', 'cursor-not-allowed');
                submitButton.classList.add('bg-accept', 'hover:bg-accept', 'hover:scale-110', 'cursor-pointer');
            } else {
                // Nonaktifkan tombol jika kosong
                submitButton.disabled = true;
                submitButton.classList.remove('bg-accept', 'hover:bg-accept', 'hover:scale-110', 'cursor-pointer');
                submitButton.classList.add('bg-slate-600', 'cursor-not-allowed');
            }
        });
    });

    // Fungsi untuk menyalin deadline
    function copyDeadline(id) {
        if (confirmNextProgress()){
            const deadlineInput = document.getElementById(`deadline_${id}`);
            const hiddenInput = document.getElementById(`hidden_deadline_${id}`);
            if (deadlineInput && hiddenInput) {
                hiddenInput.value = deadlineInput.value;
            }
        } else {
            return false;
        }
    }
</script>
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}'
        });
    </script>
@endif
@endsection
<!-- </html> -->
