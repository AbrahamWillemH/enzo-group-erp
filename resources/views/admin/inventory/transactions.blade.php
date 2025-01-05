<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Transactions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        form div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Inventory Transactions</h1>
    <form action="{{ route('inventory.transactions.store') }}" method="POST">
        @csrf
        <div>
            <label for="inventory_id">Pilih Barang:</label>
            <select name="inventory_id" id="inventory_id">
                @foreach($inventories as $inventory)
                    <option value="{{ $inventory->id }}">{{ $inventory->nama_bahan }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tanggal_transaksi">Tanggal Transaksi:</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi">
        </div>
        <div>
            <label for="tipe_transaksi">Tipe Transaksi:</label>
            <select name="tipe_transaksi" id="tipe_transaksi">
                <option value="Pembelian">Pembelian</option>
                <option value="Pemakaian">Pemakaian</option>
            </select>
        </div>
        <div>
            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="number" name="jumlah_barang" id="jumlah_barang">
        </div>
        <button type="submit">Tambah Transaksi</button>
    </form>

    <h2>Daftar Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Tanggal</th>
                <th>Jenis Transaksi</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->inventory->nama_bahan }}</td>
                    <td>{{ $transaction->tanggal_transaksi }}</td>
                    <td>{{ $transaction->tipe_transaksi }}</td>
                    <td>{{ $transaction->jumlah_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
