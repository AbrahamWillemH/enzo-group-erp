    @extends('admin/sidebar_admin')
    @section('title', 'Data Pesanan')
    @section('konten')
    <!-- Main Container -->
    <div class="ml-[20%]">

        <div class="bg-green-light h-full grid grid-rows-[12%_88%] relative">
            <div class="z-40 fixed top-0 left-[20%] right-0 ht grid grid-cols-[28%_72%] px-4 py-5 bg-green-shadow">
                <div class="flex text-left text-xl font-bold items-center text-brown-enzo">
                    <h1>DATA SOUVENIR</h1>
                </div>
                <div class="grid grid-cols-7 gap-1 font-medium">
                    <a href="#pending" id="nav-pending" class="text-brown-enzo flex flex-col justify-center items-center group">Pending
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#fix" id="nav-fix" class="text-brown-enzo flex flex-col justify-center items-center group">Fix
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#order" id="nav-order" class="text-brown-enzo flex flex-col justify-center items-center group">Order
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#proses" id="nav-proses" class="text-brown-enzo flex flex-col justify-center items-center group">Proses
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <a href="#ready" id="nav-ready" class="text-brown-enzo flex flex-col justify-center items-center group">Ready
                        <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-[90%] transition-all duration-500"></div>
                    </a>
                    <!-- Dropdown Menu -->
                    <div class="flex flex-col justify-center items-center group relative">
                        <!-- Dropdown Button -->
                        <button id="dropdown-sort" class="text-brown-enzo flex flex-col justify-center items-center mr-5 w-[100px]">Sort by
                            <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
                        </button>

                        <!-- Dropdown Content -->
                        <div id="menu-sort" class="hidden absolute bg-green-light shadow-lg mt-2 rounded-md z-10 top-full w-50 duration-500 delay-25">
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
                <!-- Menunggu Pembayaran dan Desain -->
                <section id="pending" class="pending mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-30">Menunggu Pembayaran dan Desain</div>
                    <div class="px-3 w-[1010px] 2xl:w-[1200px] mx-auto">
                        <div class="data mt-[6.75rem] mb-5 gap-0 relative overflow-x-auto rounded-lg max-h-[480px]">
                            <table class="w-[1650px] 2xl:w-[1750px] border capitalize shadow-inner z-10">
                                <thead class="sticky top-0 bg-green-main text-brown-enzo z-20">
                                    <tr class="h-20">
                                        <th class="text-center sticky left-0 w-[150px] bg-green-main">ID</th>
                                        <th class="text-center sticky left-[149px] bg-green-main">Nama</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tipe Produk</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Kemas</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Tanggal Acara</th>
                                        <th class="text-center">Deadline Desain</th>
                                        <th class="text-center">Desain</th>
                                        <th class="text-center">Status Bayar</th>
                                        <th class="text-center w-[300px]">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-main/10">
                                    @foreach($souvenir as $o)
                                    @if ($o->progress == 'Pending')
                                    <tr class="h-20 hover:bg-green-main/15">
                                        <td class="px-3 py-3 text-center flex flex-row bg-green-main/0 backdrop-blur-xl sticky left-0 h-20 items-center justify-center">
                                            @if (($o->payment_status =='DP 1' || $o->payment_status == 'Pending') && $o->design_status == 'ACC')
                                                <div class="w-3 h-3 bg-red-500 rounded-full text-center m-auto"></div>
                                            @endif
                                            <div class="text-center">
                                                {{ $o->id }}
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-center backdrop-blur-xl sticky left-[149px] hover:cursor-pointer
                                            {{ stripos($o->user_name, 'shopee') !== false ? 'bg-brown-enzo text-white' : 'bg-green-main/0' }}"
                                            onclick="showModal('user_name', '{{ $o->user_name }}')">
                                            {{ Str::limit($o->user_name, 25) }}
                                        </td>
                                        <td class="px-3 py-3 text-center hover:cursor-pointer" onclick="showModal('address', '{{ $o->address }}')">
                                            {{ Str::limit($o->address, 15) }}
                                        </td>

                                        <td class="px-3 py-3 text-center">{{$o->product_name}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                        <td>
                                            <form action="{{route('orders.deadline.change', ['id' => $o->id, 'order' => $o->type])}}" method="POST">
                                                @csrf
                                                <input type="date" name="deadline_date_input" id="deadline_{{$o->id}}" class="w-full rounded-sm bg-green-light" placeholder="2025-01-19" value="{{$o->deadline_date}}" onchange="this.form.submit()">
                                                <input type="hidden" name="deadline_date" id="hidden_deadline_{{$o->id}}">
                                            </form>
                                        </td>
                                        <td class="px-3 py-3 text-center">{{$o->design_status}}</td>
                                        <td class="px-3 py-3 text-center">
                                            <form action="{{ route('admin.souvenir.update_payment_subprocess') }}" method="POST">
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
                                            <form action="{{ route('admin.order.delete', ['id' => $o->id]) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                                @csrf
                                                @method('POST')
                                                <button onclick="return confirmDeletion();" type="submit" class="bg-red-500 rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Delete
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
                    </div>
                </section>

                <!-- Menentukan Deadline -->
                <section id="fix" class="fix mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-30">Menentukan Deadline</div>
                    <div class="px-3 w-[1010px] 2xl:w-[1200px] mx-auto">
                        <div class="data mt-11 mb-5 gap-0 relative overflow-x-auto rounded-lg max-h-[480px]" id="page-fix">
                            <table class="w-[1400px] 2xl:w-[1500px] border capitalize shadow-inner z-10">
                                <thead class="sticky top-0 bg-green-main text-brown-enzo z-20">
                                    <tr class="h-20">
                                        <th class="text-center sticky left-0 w-[150px] bg-green-main">ID</th>
                                        <th class="text-center sticky left-[149px] bg-green-main">Nama</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tipe Produk</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Kemas</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Tanggal Acara</th>
                                        <th class="text-center">Deadline</th>
                                        <th class="text-center w-[420px]">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-main/10">
                                    @foreach($souvenir as $o)
                                    @if ($o->progress == 'Fix')
                                    <tr class="h-20 hover:bg-green-main/15">
                                        <td class="px-3 py-3 text-center bg-green-main/0 backdrop-blur-xl sticky left-0">{{$o->id}}</td>
                                        <td class="px-3 py-3 text-center backdrop-blur-xl sticky left-[149px] hover:cursor-pointer
                                            {{ stripos($o->user_name, 'shopee') !== false ? 'bg-brown-enzo text-white' : 'bg-green-main/0' }}"
                                            onclick="showModal('user_name', '{{ $o->user_name }}')">
                                            {{ Str::limit($o->user_name, 25) }}
                                        </td>
                                        <td class="px-3 py-3 text-center hover:cursor-pointer" onclick="showModal('address', '{{ $o->address }}')">
                                            {{ Str::limit($o->address, 15) }}
                                        </td>
                                        <td class="px-3 py-3 text-center">{{$o->product_name}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                        <td>
                                            <form action="{{route('orders.deadline.change', ['id' => $o->id, 'order' => $o->type])}}" method="POST">
                                                @csrf
                                                <input type="date" name="deadline_date_input" id="deadline_{{$o->id}}" class="w-full rounded-sm bg-green-light" placeholder="2025-01-19" value="{{$o->deadline_date}}" onchange="this.form.submit()">
                                                <input type="hidden" name="deadline_date" id="hidden_deadline_{{$o->id}}">
                                            </form>
                                        </td>
                                        <td class="px-3 py-3 text-center">
                                            <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
                                                <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Detail
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.order.delete', ['id' => $o->id]) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                                @csrf
                                                @method('POST')
                                                <button onclick="return confirmDeletion();" type="submit" class="bg-red-500 rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Delete
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
                                                <input type="hidden" name="deadline_date" id="hidden_deadline_{{$o->id}}" value="{{$o->deadline_date}}">
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
                    </div>
                </section>

                <!-- Pemesanan Bahan -->
                <section id="order" class="order mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-30">Pemesanan Bahan</div>
                    <div class="px-3 w-[1010px] 2xl:w-[1200px] mx-auto">
                        <div class="data mt-11 mb-5 gap-0 relative overflow-x-auto rounded-lg max-h-[480px]" id="page-order">
                            <table class="w-[1400px] 2xl:w-[1500px] border capitalize shadow-inner z-10">
                                <thead class="sticky top-0 bg-green-main text-brown-enzo z-20">
                                    <tr class="h-20">
                                        <th class="text-center sticky left-0 w-[150px] bg-green-main">ID</th>
                                        <th class="text-center sticky left-[149px] bg-green-main">Nama</th>
                                        <th class="text-center">Tipe Produk</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Kemas</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Tanggal Acara</th>
                                        <th class="text-center">Deadline</th>
                                        <th class="text-center">Note</th>
                                        <th class="text-center w-[420px]">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-main/10">
                                    @foreach($souvenir as $o)
                                    @if ($o->progress == 'Pemesanan Bahan')
                                    <tr class="h-20 hover:bg-green-main/15">
                                        <td class="px-3 py-3 text-center bg-green-main/0 backdrop-blur-xl sticky left-0">{{$o->id}}</td>
                                        <td class="px-3 py-3 text-center backdrop-blur-xl sticky left-[149px] hover:cursor-pointer
                                            {{ stripos($o->user_name, 'shopee') !== false ? 'bg-brown-enzo text-white' : 'bg-green-main/0' }}" >
                                            {{ $o->user_name }}
                                        </td>
                                        <td class="px-3 py-3 text-center">{{$o->product_name}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center hover:cursor-pointer" onclick="showModal('note_design', '{{ $o->note_design }}')">
                                            {{ Str::limit($o->note_design, 15) }}
                                        </td>
                                        <td class="px-3 py-3 text-center">
                                            <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
                                                <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Detail
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.order.delete', ['id' => $o->id]) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                                @csrf
                                                @method('POST')
                                                <button onclick="return confirmDeletion();" type="submit" class="bg-red-500 rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Delete
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
                    </div>
                </section>

                <!-- Proses Produksi -->
                <section id="proses" class="proses mb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-30">Proses Produksi</div>
                    <div class="px-3 w-[1010px] 2xl:w-[1200px] mx-auto">
                        <div class="data mt-11 mb-5 gap-0 relative overflow-x-auto rounded-lg max-h-[480px]" id="page-proses">
                            <table class="w-[1600px] 2xl:w-[1650px] border capitalize shadow-inner z-10">
                                <thead class="sticky top-0 bg-green-main text-brown-enzo z-20">
                                    <tr class="h-20">
                                        <th class="text-center sticky left-0 w-[150px] bg-green-main">ID</th>
                                        <th class="text-center sticky left-[149px] bg-green-main">Nama</th>
                                        <th class="text-center">Tipe Produk</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Kemas</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Tanggal Acara</th>
                                        <th class="text-center">Deadline</th>
                                        <th class="text-center w-[200px]">Detail Proses</th>
                                        <th class="text-center w-[420px]">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-main/10">
                                    @foreach($souvenir as $o)
                                    @if ($o->progress == 'Proses Produksi')
                                    <tr class="h-20 hover:bg-green-main/15">
                                        <td class="px-3 py-3 text-center bg-green-main/0 backdrop-blur-xl sticky left-0">{{$o->id}}</td>
                                        <td class="px-3 py-3 text-center backdrop-blur-xl sticky left-[149px] hover:cursor-pointer
                                            {{ stripos($o->user_name, 'shopee') !== false ? 'bg-brown-enzo text-white' : 'bg-green-main/0' }}" >
                                            {{ $o->user_name }}
                                        </td>
                                        <td class="px-3 py-3 text-center">{{$o->product_name}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">
                                            <form action="{{ route('admin.souvenir.update_payment_subprocess') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $o->id }}">
                                                <select name="subprocess" class="bg-green-light border border-gray-300 rounded-md px-2 py-1" onchange="this.form.submit()">
                                                    <option value="Antri Potong Kain" {{ old('subprocess', $o->subprocess) == 'Antri Potong Kain' ? 'selected' : '' }}>Antri Potong Kain</option>
                                                    <option value="Potong Kain" {{ old('subprocess', $o->subprocess) == 'Potong Kain' ? 'selected' : '' }}>Potong Kain</option>
                                                    <option value="Emboss/Label" {{ old('subprocess', $o->subprocess) == 'Emboss/Label' ? 'selected' : '' }}>Emboss/Label</option>
                                                    <option value="Sablon/Decal" {{ old('subprocess', $o->subprocess) == 'Sablon/Decal' ? 'selected' : '' }}>Sablon/Decal</option>
                                                    <option value="Antri Jahit" {{ old('subprocess', $o->subprocess) == 'Antri Jahit' ? 'selected' : '' }}>Antri Jahit</option>
                                                    <option value="Jahit" {{ old('subprocess', $o->subprocess) == 'Jahit' ? 'selected' : '' }}>Jahit</option>
                                                    <option value="Antri Kemas" {{ old('subprocess', $o->subprocess) == 'Antri Kemas' ? 'selected' : '' }}>Antri Kemas</option>
                                                    <option value="Kemas" {{ old('subprocess', $o->subprocess) == 'Kemas' ? 'selected' : '' }}>Kemas</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td class="px-3 py-3 text-center">
                                            <form action="{{ route('admin.souvenir.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
                                                <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Detail
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.order.delete', ['id' => $o->id]) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                                @csrf
                                                @method('POST')
                                                <button onclick="return confirmDeletion();" type="submit" class="bg-red-500 rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Delete
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
                    </div>
                </section>

                <!-- Menunggu Ambil/Kirim-->
                <section id="ready" class="ready pb-20">
                    <div class="sticky top-[67px] bg-cream/50 backdrop-blur-md h-10 font-semibold flex justify-center items-center shadow-md tracking-wider z-30">Menunggu Ambil / Kirim</div>
                    <div class="px-3 w-[1010px] 2xl:w-[1200px] mx-auto">
                        <div class="data mt-11 mb-5 gap-0 relative overflow-x-auto rounded-lg max-h-[480px]" id="page-ready">
                            <table class="w-[1300px] 2xl:w-[1400px] border capitalize shadow-inner z-10">
                                <thead class="sticky top-0 bg-green-main text-brown-enzo z-20">
                                    <tr class="h-20">
                                        <th class="text-center sticky left-0 w-[150px] bg-green-main">ID</th>
                                        <th class="text-center sticky left-[149px] bg-green-main">Nama</th>
                                        <th class="text-center">Tipe Produk</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Kemas</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Tanggal Acara</th>
                                        <th class="text-center">Deadline</th>
                                        <th class="text-center w-[420px]">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-main/10">
                                    @foreach($souvenir as $o)
                                    @if ($o->progress == 'Selesai')
                                    <tr class="h-20 hover:bg-green-main/15">
                                        <td class="px-3 py-3 text-center bg-green-main/0 backdrop-blur-xl sticky left-0">{{$o->id}}</td>
                                        <td class="px-3 py-3 text-center backdrop-blur-xl sticky left-[149px] hover:cursor-pointer
                                            {{ stripos($o->user_name, 'shopee') !== false ? 'bg-brown-enzo text-white' : 'bg-green-main/0' }}" >
                                            {{ $o->user_name }}
                                        </td>
                                        <td class="px-3 py-3 text-center">{{$o->product_name}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->quantity}}</td>
                                        <td class="px-3 py-3 text-center">{{$o->pack}}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->event_date)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">{{ \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') }}</td>
                                        <td class="px-3 py-3 text-center">
                                            <form action="{{ route('admin.packaging.detail', ['id' => $o->id]) }}" method="GET" class="inline-block">
                                                <button type="submit" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Detail
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.order.delete', ['id' => $o->id]) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline-block">
                                                @csrf
                                                @method('POST')
                                                <button onclick="return confirmDeletion();" type="submit" class="bg-red-500 rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">
                                                    Delete
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
                                                    Done
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

            <div id="infoModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                <div class="bg-white p-6 rounded-lg max-w-sm w-full">
                    <h2 class="text-xl font-semibold mb-4" id="modalTitle"></h2>
                    <p id="modalContent" class="text-gray-700"></p>
                    <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">Close</button>
                </div>
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
    function confirmDeletion() {
        return confirm('Are you sure to delete this order?');
    }
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('input[name="deadline_date_input"]').forEach((textInput) => {
            const id = textInput.id.split('_')[1]; // Ambil ID unik dari input
            const submitButton = document.getElementById(`submitButton_${id}`);

            if (!submitButton) return; // Jika tidak ada tombol, hentikan eksekusi

            // Fungsi untuk mengecek apakah input memiliki value atau tidak
            const checkDeadlineInput = () => {
                if (textInput.value.trim() !== "") {
                    // Aktifkan tombol jika ada nilai
                    submitButton.disabled = false;
                    submitButton.classList.remove("bg-slate-600", "cursor-not-allowed");
                    submitButton.classList.add("bg-accept", "hover:bg-accept", "hover:scale-110", "cursor-pointer");
                } else {
                    // Nonaktifkan tombol jika kosong
                    submitButton.disabled = true;
                    submitButton.classList.remove("bg-accept", "hover:bg-accept", "hover:scale-110", "cursor-pointer");
                    submitButton.classList.add("bg-slate-600", "cursor-not-allowed");
                }
            };

            // Cek saat halaman dimuat
            checkDeadlineInput();

            // Event listener saat input diubah
            textInput.addEventListener("change", checkDeadlineInput);
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

    // Menambah margin ketika navigasi diklik
    const sections = [
        { nav: 'nav-pending', page: null },
        { nav: 'nav-fix', page: 'page-fix' },
        { nav: 'nav-order', page: 'page-order' },
        { nav: 'nav-proses', page: 'page-proses' },
        { nav: 'nav-ready', page: 'page-ready' }
    ];

    function updateMargin(activePage) {
        sections.forEach(({ page }) => {
            if (page) {
                document.getElementById(page).classList.toggle('mt-[6.75rem]', page === activePage);
                document.getElementById(page).classList.toggle('mt-11', page !== activePage);
            }
        });
    }

    sections.forEach(({ nav, page }) => {
        const navElement = document.getElementById(nav);
        if (navElement) {
            navElement.addEventListener('click', () => updateMargin(page));
        }
    });

    //dropdown sort
    const buttonSort = document.getElementById('dropdown-sort');
    const menuSort = document.getElementById('menu-sort');

    buttonSort.addEventListener('click', () => {
        // Toggle dropdown visibility
        menuSort.classList.toggle('hidden');
    });

    // Menutup dropdown ketika klik di luar
    window.addEventListener('click', (event) => {
        if (!buttonSort.contains(event.target) && !menuSort.contains(event.target)) {
        menuSort.classList.add('hidden');
        }
    });

    function showModal(type, content) {
        const modal = document.getElementById('infoModal');
        const title = document.getElementById('modalTitle');
        const modalContent = document.getElementById('modalContent');

        // Set modal content based on type (user_name or address)
        if (type === 'user_name') {
            title.innerText = 'Nama Lengkap';
        } else if (type === 'address') {
            title.innerText = 'Alamat Lengkap';
        } else if (type === 'note_design') {
            title.innerText = 'Catatan';
        }

        modalContent.innerText = content;

        // Show the modal
        modal.classList.remove('hidden');
    }

    function closeModal() {
        // Hide the modal
        document.getElementById('infoModal').classList.add('hidden');
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
