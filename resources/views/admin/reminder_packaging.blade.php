@extends('admin/sidebar_admin')
@section('title', 'Reminder')
@section('konten')
<div class="ml-[20%]">
    <!-- Header -->
    <header class="fixed top-0 right-0 w-[80%] bg-green-shadow h-[68px] flex items-center justify-between px-4 z-40">
        <h1 class="text-xl font-bold text-brown-enzo" style="letter-spacing: 1px">REMINDER | INVITATION</h1>
        <div class="relative group">
            <button class="text-brown-enzo font-semibold flex flex-col justify-center items-center w-[120px] mr-5" style="letter-spacing: 1px">
                Filter
                <div class="bg-brown-enzo h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
            </button>

            <!-- Dropdown Filter -->
            <div class="absolute bg-green-light shadow-lg rounded-md z-40 top-full left-0 w-[120px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-500">
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 accent-green-main" value="Pending" checked>
                        Pending
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 accent-green-main" value="DP 1" checked>
                        DP 1
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 accent-green-main" value="DP 2" checked>
                        DP 2
                    </label>
                </div>
                <div class="block py-2">
                    <label class="flex items-center text-base text-gray-700 hover:bg-cream hover:rounded-md cursor-pointer">
                        <input type="checkbox" class="filter-checkbox ml-4 mr-2 accent-green-main" value="Lunas" checked>
                        Lunas
                    </label>
                </div>
            </div>
        </div>
    </header>

    <!-- Tabel -->
    <main class="pt-20 bg-green-light h-screen">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[95%] mx-auto mt-[1.5rem] mb-5 max-h-[530px] lg:max-h-[690px]">
            <table class="w-full text-sm text-center capitalize z-10">
                <thead class="text-brown-enzo z-20">
                    <tr>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">ID</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Nama Pelanggan</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Tipe Produk</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Tanggal Pesan</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Deadline</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Status Pembayaran</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Status Pengerjaan</th>
                        <th scope="col" class="text-center px-4 py-6 sticky top-0 bg-green-main">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-green-main/10 overflow-y-auto">
                    @foreach ($orders as $o)
                    <tr class="h-16 border-t-[1.5px] border-black/30 hover:bg-green-main/15" data-progress="{{ $o->payment_status }}">
                        <td class="px-4 py-3 text-center">{{ $o->id }}</td>
                        <td class="px-4 py-3">{{ $o->user_name }}</td>
                        <td class="px-4 py-3">{{ $o->type }}</td>
                        <td class="px-4 py-3 text-center">{{ \Carbon\Carbon::parse($o->created_at)->format('d/m/Y') }}</td>
                        <td class="px-4 py-3 text-center"><strong>{{ $o->deadline_date ? \Carbon\Carbon::parse($o->deadline_date)->format('d/m/Y') : 'Tanggal tidak tersedia' }}</strong></td>
                        <td class="px-4 py-3 text-center">{{ $o->payment_status }}</td>
                        <td class="px-4 py-3 text-center">{{ $o->progress }}</td>
                        <td class="px-3 py-3 text-center">
                            <a href="{{ route('admin.packaging.detail', ['id' => $o->id]) }}" class="bg-brown-enzo rounded-lg px-2 py-2 hover:scale-110 transition duration-300 inline-block text-white">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>


<script>
document.addEventListener('DOMContentLoaded', () => {
const checkboxes = document.querySelectorAll('.filter-checkbox');
const rows = document.querySelectorAll('tbody tr');

checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        const activeFilters = Array.from(checkboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.value);

        rows.forEach(row => {
            const progress = row.getAttribute('data-progress');
            if (activeFilters.length === 0 || activeFilters.includes(progress)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});
});

</script>

@endsection
<!-- </body>
</html> -->
