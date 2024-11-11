<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite('resources/css/app.css')
    </head>
<body class="font-mont">
    <div class="container flex flex-col items-center min-h-screen justify-center">
        <h2>Buat Pesanan Baru</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.orders.store') }}" method="POST" class="flex flex-col gap-5 items-center">
            @csrf

            <div class="">
                <input type="text" id="product_name" name="product_name"  value="{{ old('product_name') }}" required placeholder="Nama Produk" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1">
                @error('product_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="">
                <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required placeholder="Jumlah" class="outline-none border border-[#e0e0e0] bg-[#f0f0f0] w-72 rounded-xl px-2 py-0.5 sm:py-0.5 md:py-0.5 lg:py-1">
                @error('quantity')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="deadline_date">Tanggal barang diinginkan</label>
                <input type="date" id="deadline_date" name="deadline_date" value="{{ old('deadline_date') }}" required class="border" class="">
                @error('deadline_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="bg-brown-main text-white px-5 py-1 rounded-lg hover:bg-[#fff] hover:text-brown-main border hover:border-brown-main">Buat Pesanan</button>
        </form>
    </div>
</body>
</html>
