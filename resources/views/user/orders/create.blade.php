<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Buat Pesanan Baru</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.orders.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="product_name">Nama Produk</label>
                <input type="text" id="product_name" name="product_name" class="form-control" value="{{ old('product_name') }}" required>
                @error('product_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" id="quantity" name="quantity" class="form-control" value="{{ old('quantity') }}" required>
                @error('quantity')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="deadline_date">Tanggal Pernikahan</label>
                <input type="date" id="deadline_date" name="deadline_date" class="form-control" value="{{ old('deadline_date') }}" required>
                @error('deadline_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Buat Pesanan</button>
        </form>
    </div>
</body>
</html>
